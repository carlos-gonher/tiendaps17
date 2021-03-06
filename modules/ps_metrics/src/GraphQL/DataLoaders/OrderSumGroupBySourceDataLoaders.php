<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders;

class OrderSumGroupBySourceDataLoaders extends DataLoadersFactory
{
    /**
     * @param array $args
     *
     * @return array
     */
    public function get($args)
    {
        $current = $this->getDatas($args[0]['InputData']['TimeDimension']['dateRange']);
        $previous = [];
        if (true === $args[0]['InputData']['compareMode']) {
            $previous = $this->getDatas($this->switchDateRange($args[0]['InputData']['TimeDimension']['dateRange']));
        }

//        return $this->mergeDatasByKey('source', $current, $previous);
        return [
            'currentPeriod' => $current,
            'previousPeriod' => $previous,
        ];
    }

    /**
     * @param array $dateRange
     *
     * @return array
     */
    private function getDatas($dateRange)
    {
        $rows = $this->dbHelper->executeS(
            'SELECT
                op.payment_method,
                COUNT(o.id_order) as nbOrder
            FROM ' . _DB_PREFIX_ . 'orders o
            INNER JOIN ' . _DB_PREFIX_ . 'order_state os ON (o.current_state = os.id_order_state)
            LEFT JOIN ' . _DB_PREFIX_ . 'order_payment op ON (o.reference = op.order_reference)
            WHERE
                o.date_add BETWEEN "' . pSQL($dateRange['startDate']) . '" AND "' . pSQL($dateRange['endDate']) . '"
                AND os.logable = 1
                ' . $this->shopHelper->addSqlRestriction(false, 'o') . '
            GROUP BY op.payment_method');

        $methods = [];
        if (!empty($rows)) {
            foreach ($rows as $row) {
                $method = [
                    'source' => $row['payment_method'],
                    'currentValue' => $row['nbOrder'],
                ];
                array_push($methods, $method);
            }
        }

        return $methods;
    }
}
