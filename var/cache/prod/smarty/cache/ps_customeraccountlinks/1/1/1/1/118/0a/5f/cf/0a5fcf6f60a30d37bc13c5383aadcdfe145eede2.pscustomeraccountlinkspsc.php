<?php
/* Smarty version 3.1.33, created on 2020-07-11 19:13:51
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f09bb0fa041e0_56938469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1594381080,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5f09bb0fa041e0_56938469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://altopromo/index.php?controller=my-account" rel="nofollow">
      Ваша учетная запись
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Ваша учетная запись</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://altopromo/index.php?controller=identity" title="Личные данные" rel="nofollow">
            Личные данные
          </a>
        </li>
            <li>
          <a href="http://altopromo/index.php?controller=history" title="Заказы" rel="nofollow">
            Заказы
          </a>
        </li>
            <li>
          <a href="http://altopromo/index.php?controller=order-slip" title="Кредитные квитанции" rel="nofollow">
            Кредитные квитанции
          </a>
        </li>
            <li>
          <a href="http://altopromo/index.php?controller=addresses" title="Адреса" rel="nofollow">
            Адреса
          </a>
        </li>
        
	</ul>
</div>
<?php }
}
