<?php
/* Smarty version 3.1.33, created on 2020-07-11 19:16:39
  from 'D:\OSPanel\domains\altopromo\admin074nfk35r\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f09bbb7ae8b02_51431818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e604f6e00e812906e12f0bcedb4155f2f81979a' => 
    array (
      0 => 'D:\\OSPanel\\domains\\altopromo\\admin074nfk35r\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1594381069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f09bbb7ae8b02_51431818 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
