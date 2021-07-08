<?php
/* Smarty version 3.1.39, created on 2021-07-07 18:14:56
  from 'C:\wamp64\www\prestashop17\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e63570c55bf3_47294976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f80110a387f3213f58e5ab9e0b585e3e67ccdcc' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop17\\themes\\classic\\templates\\page.tpl',
      1 => 1625608749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e63570c55bf3_47294976 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84746559960e63570c31bf3_61271591', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_127657008260e63570c37f00_82088578 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_191909845260e63570c34865_56005642 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127657008260e63570c37f00_82088578', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_177716918160e63570c45c38_68782514 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_7902691460e63570c482b8_01519153 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_180406367260e63570c42ef7_41800462 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177716918160e63570c45c38_68782514', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7902691460e63570c482b8_01519153', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_16868209460e63570c4e980_83241777 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_155061447760e63570c4bce8_24901173 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16868209460e63570c4e980_83241777', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_84746559960e63570c31bf3_61271591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_84746559960e63570c31bf3_61271591',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_191909845260e63570c34865_56005642',
  ),
  'page_title' => 
  array (
    0 => 'Block_127657008260e63570c37f00_82088578',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_180406367260e63570c42ef7_41800462',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_177716918160e63570c45c38_68782514',
  ),
  'page_content' => 
  array (
    0 => 'Block_7902691460e63570c482b8_01519153',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_155061447760e63570c4bce8_24901173',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16868209460e63570c4e980_83241777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191909845260e63570c34865_56005642', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180406367260e63570c42ef7_41800462', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155061447760e63570c4bce8_24901173', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
