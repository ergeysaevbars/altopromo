<?php
/* Smarty version 3.1.33, created on 2020-07-11 19:13:50
  from 'D:\OSPanel\domains\altopromo\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f09bb0e925d70_28741837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ee358b10f5e3645c97500fa4788e78f20bc9af1' => 
    array (
      0 => 'D:\\OSPanel\\domains\\altopromo\\themes\\classic\\templates\\page.tpl',
      1 => 1594381080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f09bb0e925d70_28741837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10512333895f09bb0e9228c7_14296651', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1422136195f09bb0e922fe1_32622081 extends Smarty_Internal_Block
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
class Block_2727101465f09bb0e922c00_57003890 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1422136195f09bb0e922fe1_32622081', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_3901460305f09bb0e924908_44838614 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_12656472615f09bb0e924d32_60726562 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9499089525f09bb0e924602_17052961 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3901460305f09bb0e924908_44838614', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12656472615f09bb0e924d32_60726562', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_13643567135f09bb0e925601_04644815 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_21465327965f09bb0e925343_74605670 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13643567135f09bb0e925601_04644815', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10512333895f09bb0e9228c7_14296651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10512333895f09bb0e9228c7_14296651',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2727101465f09bb0e922c00_57003890',
  ),
  'page_title' => 
  array (
    0 => 'Block_1422136195f09bb0e922fe1_32622081',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_9499089525f09bb0e924602_17052961',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_3901460305f09bb0e924908_44838614',
  ),
  'page_content' => 
  array (
    0 => 'Block_12656472615f09bb0e924d32_60726562',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_21465327965f09bb0e925343_74605670',
  ),
  'page_footer' => 
  array (
    0 => 'Block_13643567135f09bb0e925601_04644815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2727101465f09bb0e922c00_57003890', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9499089525f09bb0e924602_17052961', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21465327965f09bb0e925343_74605670', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
