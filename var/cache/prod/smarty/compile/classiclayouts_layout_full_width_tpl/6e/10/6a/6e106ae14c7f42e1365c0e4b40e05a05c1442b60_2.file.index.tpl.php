<?php
/* Smarty version 3.1.39, created on 2021-07-07 18:14:56
  from 'C:\wamp64\www\prestashop17\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e63570c17f22_81433688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e106ae14c7f42e1365c0e4b40e05a05c1442b60' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop17\\themes\\classic\\templates\\index.tpl',
      1 => 1625608749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e63570c17f22_81433688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133711791460e63570c11691_60403438', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_89401959860e63570c12526_96077510 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_162053849060e63570c14877_33796603 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_82791901860e63570c13aa4_68288475 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162053849060e63570c14877_33796603', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_133711791460e63570c11691_60403438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_133711791460e63570c11691_60403438',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_89401959860e63570c12526_96077510',
  ),
  'page_content' => 
  array (
    0 => 'Block_82791901860e63570c13aa4_68288475',
  ),
  'hook_home' => 
  array (
    0 => 'Block_162053849060e63570c14877_33796603',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89401959860e63570c12526_96077510', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82791901860e63570c13aa4_68288475', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
