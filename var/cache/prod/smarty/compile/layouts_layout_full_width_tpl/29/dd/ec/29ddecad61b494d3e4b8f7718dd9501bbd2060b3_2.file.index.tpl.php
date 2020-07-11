<?php
/* Smarty version 3.1.33, created on 2020-07-11 19:41:09
  from 'D:\OSPanel\domains\altopromo\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f09c175380015_28288471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29ddecad61b494d3e4b8f7718dd9501bbd2060b3' => 
    array (
      0 => 'D:\\OSPanel\\domains\\altopromo\\themes\\classic\\templates\\index.tpl',
      1 => 1594381079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f09c175380015_28288471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13510069345f09c17537de35_27185922', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_3753329195f09c17537e373_83162548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_18990374045f09c17537eef3_12377458 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1355605135f09c17537ea76_94464479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18990374045f09c17537eef3_12377458', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13510069345f09c17537de35_27185922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_13510069345f09c17537de35_27185922',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_3753329195f09c17537e373_83162548',
  ),
  'page_content' => 
  array (
    0 => 'Block_1355605135f09c17537ea76_94464479',
  ),
  'hook_home' => 
  array (
    0 => 'Block_18990374045f09c17537eef3_12377458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3753329195f09c17537e373_83162548', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1355605135f09c17537ea76_94464479', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
