<?php
/* Smarty version 3.1.33, created on 2020-07-11 19:41:09
  from 'D:\OSPanel\domains\altopromo\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f09c175444290_40622619',
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
function content_5f09c175444290_40622619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8584392815f09c1753e6497_25910607', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_19049522935f09c1753e6cd8_70714674 extends Smarty_Internal_Block
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
class Block_10477814495f09c1753e6869_92718976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19049522935f09c1753e6cd8_70714674', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_18617446755f09c1754428f9_09537904 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_11250853285f09c175442e22_39447696 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16532894505f09c1754424a0_05203696 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18617446755f09c1754428f9_09537904', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11250853285f09c175442e22_39447696', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_12330102565f09c175443943_00346908 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_8581219315f09c1754435e5_52804448 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12330102565f09c175443943_00346908', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_8584392815f09c1753e6497_25910607 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8584392815f09c1753e6497_25910607',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10477814495f09c1753e6869_92718976',
  ),
  'page_title' => 
  array (
    0 => 'Block_19049522935f09c1753e6cd8_70714674',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16532894505f09c1754424a0_05203696',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_18617446755f09c1754428f9_09537904',
  ),
  'page_content' => 
  array (
    0 => 'Block_11250853285f09c175442e22_39447696',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_8581219315f09c1754435e5_52804448',
  ),
  'page_footer' => 
  array (
    0 => 'Block_12330102565f09c175443943_00346908',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10477814495f09c1753e6869_92718976', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16532894505f09c1754424a0_05203696', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8581219315f09c1754435e5_52804448', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
