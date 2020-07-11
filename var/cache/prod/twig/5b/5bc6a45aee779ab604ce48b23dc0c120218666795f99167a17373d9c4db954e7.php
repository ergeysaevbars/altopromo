<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__4a1971883d10d1f0728b1c4756e5c9e53fb02fc678ddfe5258beb024a77ca386 */
class __TwigTemplate_dbad63e73a4c1643e4b88ddcd9955721defad9d57108001a04bdffd2a2c837f6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Расположение блоков • Альтопромо</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesPositions';
    var iso_user = 'ru';
    var lang_is_rtl = '0';
    var full_language_code = 'ru-ru';
    var full_cldr_language_code = 'ru-RU';
    var country_iso_code = 'KZ';
    var _PS_VERSION_ = '1.7.6.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'В вашем магазине появился новый заказ.';
    var order_number_msg = 'Номер заказа: ';
    var total_msg = 'Всего: ';
    var from_msg = 'С: ';
    var see_order_msg = 'Смотреть заказ';
    var new_customer_msg = 'Новый клиент зарегистрировался в вашем магазине.';
    var customer_name_msg = 'Имя клиента: ';
    var new_msg = 'Новая сообщение было отправлено в ваш магазин.';
    var see_msg = 'Прочитать это сообщение';
    var token = 'a2983174a3bceabbbeb4feebaf122028';
    var token_admin_orders = 'f89f3034248776267618cc2c7854dc98';
    var token_admin_customers = '46f9290fbc07cd098b0ceb8794042d87';
    var token_admin_customer_threads = 'e2bc3deebf6e529b196ada221e828344';
    var currentIndex = 'index.php?controller=AdminModulesPositions';
    var employee_token = 'efbf122087d1f51d03d24b58363e6ba5';
    var choose_language_translate = 'Выберите язык';
    var default_language = '1';
    var admin_modules_link = '/admin074nfk35r/index.php/improve/modules/catalog/recommended?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg';
    var admin_notification_get_link = '/admin074nfk35r/index.php/common/notifications?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg';
    var admin_notification_push_link = '/admin074nfk35r/index.php/common/notifications/ack?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg';
    var tab_modules_list = '';
    var update_success_msg = 'Успешно обновлено';
    var errorLogin = 'PrestaShop не может войти в систему Addons, пожалуйста, проверьте свои данные и интернет-соединение.';
    var search_product_msg = 'Искать товар';
  </script>

      <link href=\"/admin074nfk35r/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin074nfk35r/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin074nfk35r\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin074nfk35r\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"\\u0415\\u0432\\u0440\\u043e\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u043d\\u0435\\u00a0\\u0447\\u0438\\u0441\\u043b\\u043e\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/admin074nfk35r/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.6.7\"></script>
<script type=\"text/javascript\" src=\"/admin074nfk35r/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.6.7\"></script>
<script type=\"text/javascript\" src=\"/admin074nfk35r/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin074nfk35r/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin074nfk35r/index.php/common/notifications?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/altopromo\\/admin074nfk35r\\/index.php?controller=AdminGamification&token=1cc31f52c7623a6a2253e0f3740a55d9\";
            var current_id_tab = 58;
        </script>

";
        // line 100
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-ru adminmodulespositions\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminDashboard&amp;token=b102dcc12634bdc4e8ac354ccdba5993\"></a>
      <span id=\"shop_version\">1.7.6.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Быстрый доступ
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminOrders&amp;token=f89f3034248776267618cc2c7854dc98\"
                 data-item=\"Заказы\"
      >Заказы</a>
          <a class=\"dropdown-item\"
         href=\"http://altopromo/admin074nfk35r/index.php/sell/catalog/categories/new?token=6212b4df080de1e633389f2c60443ab7\"
                 data-item=\"Новая категория\"
      >Новая категория</a>
          <a class=\"dropdown-item\"
         href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=98632bd35014b444bcf6f2d1ae328fa2\"
                 data-item=\"Новый купон\"
      >Новый купон</a>
          <a class=\"dropdown-item\"
         href=\"http://altopromo/admin074nfk35r/index.php/sell/catalog/products/new?token=6212b4df080de1e633389f2c60443ab7\"
                 data-item=\"Новый товар\"
      >Новый товар</a>
          <a class=\"dropdown-item\"
         href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e6b47200a675f019e4a0359e89cb95fc\"
                 data-item=\"Оценка каталога\"
      >Оценка каталога</a>
          <a class=\"dropdown-item\"
         href=\"http://altopromo/admin074nfk35r/index.php/improve/modules/manage?token=6212b4df080de1e633389f2c60443ab7\"
                 data-item=\"Установленные модули\"
      >Установленные модули</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"170\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/modules/positions\"
        data-post-link=\"http://altopromo/admin074nfk35r/index.php?controller=AdminQuickAccesses&token=18139d56e73bf7f4946933990e084f7f\"
        data-prompt-text=\"Задайте название ярлыка:\"
        data-link=\"Расположение блоков - Список\"
      >
        <i class=\"material-icons\">add_circle</i>
        Добавить текущую страницу в Быстрый Доступ
      </a>
        <a class=\"dropdown-item\" href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminQuickAccesses&token=18139d56e73bf7f4946933990e084f7f\">
      <i class=\"material-icons\">settings</i>
      Управление быстрым доступом
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin074nfk35r/index.php?controller=AdminSearch&amp;token=8bfc11c91d55f00cc30a11cc6fea3558\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Поиск (например, артикул, имя пользователя...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Везде
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Везде\" href=\"#\" data-value=\"0\" data-placeholder=\"Что вы ищете?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Везде</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Каталог\" href=\"#\" data-value=\"1\" data-placeholder=\"Название товара, артикул, ссылка...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Каталог</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по имени\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, имя...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Клиенты по имени</a>
        <a class=\"dropdown-item\" data-item=\"Клиенты по IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Клиенты по IP-адресу</a>
        <a class=\"dropdown-item\" data-item=\"Заказы\" href=\"#\" data-value=\"3\" data-placeholder=\"№ заказа\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Заказы</a>
        <a class=\"dropdown-item\" data-item=\"По счетам\" href=\"#\" data-value=\"4\" data-placeholder=\"Номер накладной\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> По счетам</a>
        <a class=\"dropdown-item\" data-item=\"Корзины\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Корзины\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Корзины</a>
        <a class=\"dropdown-item\" data-item=\"Модули\" href=\"#\" data-value=\"7\" data-placeholder=\"Название модуля\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Модули</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">Поиск</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://altopromo/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Перейти в магазин
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Заказы<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Клиенты<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Сообщения<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Сейчас нет новых заказов :(<br>
              Давно проверяли вашу конверсию?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет новых клиентов :(<br>
              Давно отправляли e-mail о покупках?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Пока нет сообщений.<br>
              Есть время на кое-что еще!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      c <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - зарегистрировано <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/ergeysaevbars%40mail.ru.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Сергей</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin074nfk35r/index.php/configure/advanced/employees/1/edit?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\">
      <i class=\"material-icons\">settings</i>
      Ваш профиль
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Тренировка</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Маркет PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminLogin&amp;logout=1&amp;token=229e7f325fed7a699af00272a738621c\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Выход</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin074nfk35r/index.php/configure/advanced/employees/toggle-navigation?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminDashboard&amp;token=b102dcc12634bdc4e8ac354ccdba5993\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Пульт</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Продажа</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminOrders&amp;token=f89f3034248776267618cc2c7854dc98\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Заказы
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminOrders&amp;token=f89f3034248776267618cc2c7854dc98\" class=\"link\"> Заказы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin074nfk35r/index.php/sell/orders/invoices/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> По счетам
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminSlip&amp;token=9bdf5b023f0fbcd34aace2d2fa2e6c6f\" class=\"link\"> Платежные квитанции
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin074nfk35r/index.php/sell/orders/delivery-slips/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Транспортные накладные
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminCarts&amp;token=25a46fe806500e81d216d16a230fbbe1\" class=\"link\"> Корзины
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin074nfk35r/index.php/sell/catalog/products?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Каталог
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin074nfk35r/index.php/sell/catalog/products?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Товары
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/admin074nfk35r/index.php/sell/catalog/categories?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Категории
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminTracking&amp;token=c6d305f3f567acd5c6c9cb2d18e6485b\" class=\"link\"> Мониторинг
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminAttributesGroups&amp;token=886e21ae23c1f364988c6efc784ccc1e\" class=\"link\"> Атрибуты и характеристики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/admin074nfk35r/index.php/sell/catalog/brands/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Бренды и Поставщики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminAttachments&amp;token=8837e00ab2b7e9c9c3e4135d859a9a54\" class=\"link\"> Файлы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminCartRules&amp;token=98632bd35014b444bcf6f2d1ae328fa2\" class=\"link\"> Скидки
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin074nfk35r/index.php/sell/stocks/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/admin074nfk35r/index.php/sell/customers/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Клиенты
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/admin074nfk35r/index.php/sell/customers/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Клиенты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminAddresses&amp;token=f258a1c2272f0666575d873364f03e60\" class=\"link\"> Адреса
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminCustomerThreads&amp;token=e2bc3deebf6e529b196ada221e828344\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Клиентская служба
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminCustomerThreads&amp;token=e2bc3deebf6e529b196ada221e828344\" class=\"link\"> Клиентская служба
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminOrderMessage&amp;token=7e511ca49d3186d3830b09de8b36c475\" class=\"link\"> Сообщения о заказах
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminReturn&amp;token=c3ca929f7b5226264dc3f888969a6481\" class=\"link\"> Возвраты товаров
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminStats&amp;token=e6b47200a675f019e4a0359e89cb95fc\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Статистика
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Улучшения</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin074nfk35r/index.php/improve/modules/manage?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Модули
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin074nfk35r/index.php/improve/modules/manage?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/admin074nfk35r/index.php/modules/addons/modules/catalog?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Каталог модулей
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/admin074nfk35r/index.php/improve/design/themes/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Дизайн
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/admin074nfk35r/index.php/improve/design/themes/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Шаблон и логотип
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/admin074nfk35r/index.php/modules/addons/themes/catalog?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Каталог шаблонов
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/admin074nfk35r/index.php/improve/design/mail_theme/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Email Theme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/admin074nfk35r/index.php/improve/design/cms-pages/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Страницы
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin074nfk35r/index.php/improve/design/modules/positions/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Расположение блоков
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminImages&amp;token=447072d86b029f1754d8877e0fdccd01\" class=\"link\"> Настройки изображений
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/admin074nfk35r/index.php/modules/link-widget/list?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminCarriers&amp;token=b48b4271d371704a18f454a5ce4d6c26\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Доставка
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminCarriers&amp;token=b48b4271d371704a18f454a5ce4d6c26\" class=\"link\"> Перевозчики
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin074nfk35r/index.php/improve/shipping/preferences?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin074nfk35r/index.php/improve/payment/payment_methods?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Оплата
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin074nfk35r/index.php/improve/payment/payment_methods?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Способы оплаты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin074nfk35r/index.php/improve/payment/preferences?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Настройки
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin074nfk35r/index.php/improve/international/localization/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Интернационализация
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin074nfk35r/index.php/improve/international/localization/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Локализация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminZones&amp;token=4568f1dcdd2e164ec15e37c976ea4d4b\" class=\"link\"> География
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/admin074nfk35r/index.php/improve/international/taxes/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Налоги
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin074nfk35r/index.php/improve/international/translations/settings?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Переводы
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Настроить</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin074nfk35r/index.php/configure/shop/preferences/preferences?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Параметры магазина
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin074nfk35r/index.php/configure/shop/preferences/preferences?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Общее
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin074nfk35r/index.php/configure/shop/order-preferences/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Настройки заказов
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin074nfk35r/index.php/configure/shop/product-preferences/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Настройки товаров
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin074nfk35r/index.php/configure/shop/customer-preferences/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Настройки клиента
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/admin074nfk35r/index.php/configure/shop/contacts/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Контакты
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin074nfk35r/index.php/configure/shop/seo-urls/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Трафик и SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminSearchConf&amp;token=d2a287e5ec6606446dfc2ecde53533c1\" class=\"link\"> Поиск
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminGamification&amp;token=1cc31f52c7623a6a2253e0f3740a55d9\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin074nfk35r/index.php/configure/advanced/system-information/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Расширенные параметры
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin074nfk35r/index.php/configure/advanced/system-information/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Информация
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin074nfk35r/index.php/configure/advanced/performance/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Производительность
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin074nfk35r/index.php/configure/advanced/administration/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Администрирование
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin074nfk35r/index.php/configure/advanced/emails/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/admin074nfk35r/index.php/configure/advanced/import/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Импорт
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/admin074nfk35r/index.php/configure/advanced/employees/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Сотрудники
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/admin074nfk35r/index.php/configure/advanced/sql-requests/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> База данных
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin074nfk35r/index.php/configure/advanced/logs/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Журнал событий
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/admin074nfk35r/index.php/configure/advanced/webservice-keys/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" class=\"link\"> Веб службы
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Дизайн</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin074nfk35r/index.php/improve/design/modules/positions/?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\" aria-current=\"page\">Расположение блоков</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Расположение блоков          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-save\"
                  href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminModulesPositions&amp;addToHook=&amp;token=a2983174a3bceabbbeb4feebaf122028\"                  title=\"Расположить модуль\"                >
                                    Расположить модуль
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Помощь\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin074nfk35r/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fru%252Fdoc%252FAdminModulesPositions%253Fversion%253D1.7.6.7%2526country%253Dru/%D0%9F%D0%BE%D0%BC%D0%BE%D1%89%D1%8C?_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg\"
                   id=\"product_form_open_help\"
                >
                  Помощь
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Рекомендованные Модули и Сервисы',
        'Close': 'Закрыть',
      },
      recommendedModulesUrl: '/admin074nfk35r/index.php/modules/addons/modules/recommended?tabClassName=AdminModulesPositions&_token=OSM6TbMDauBDlRaKaWBdw6imCmZqAmPDhBABrjArUkg',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1095
        $this->displayBlock('content_header', $context, $blocks);
        // line 1096
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1097
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1098
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1099
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>О, нет!</h1>
  <p class=\"mt-3\">
    Мобильная версия этой страницы еще не доступна.
  </p>
  <p class=\"mt-2\">
    Используйте настольный компьютер для просмотра этой страницы, пока она не адаптирована для мобильных устройств.
  </p>
  <p class=\"mt-2\">
    Спасибо.
  </p>
  <a href=\"http://altopromo/admin074nfk35r/index.php?controller=AdminDashboard&amp;token=b102dcc12634bdc4e8ac354ccdba5993\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Назад
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-RU&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/ru/login?email=ergeysaevbars%40mail.ru&amp;firstname=%D0%A1%D0%B5%D1%80%D0%B3%D0%B5%D0%B9&amp;lastname=%D0%98%D1%81%D0%B0%D0%B5%D0%B2&amp;website=http%3A%2F%2Faltopromo%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin074nfk35r/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Подключите Ваш магазин к маркету PrestaShop для автоматического импорта приобретенных дополнений.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Нет учетной записи?</h4>
\t\t\t\t\t\t<p class='text-justify'>Откройте для себя мощь PrestaShop Addons! Исследуйте официальный PrestaShop-маркет.  В нем более 3500 инновационных модулей и шаблонов, оптимизирующих коэффициент конверсии, повышающих посещаемость, укрепляющих лояльность, повышающих вашу производительность</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Присоединиться к PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/ru/forgot-your-password\">Я забыл пароль</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/ru/login?email=ergeysaevbars%40mail.ru&amp;firstname=%D0%A1%D0%B5%D1%80%D0%B3%D0%B5%D0%B9&amp;lastname=%D0%98%D1%81%D0%B0%D0%B5%D0%B2&amp;website=http%3A%2F%2Faltopromo%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-RU&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tСоздать учетную запись
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Войти
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1206
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 100
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1095
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1096
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1097
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1098
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1206
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__4a1971883d10d1f0728b1c4756e5c9e53fb02fc678ddfe5258beb024a77ca386";
    }

    public function getDebugInfo()
    {
        return array (  1296 => 1206,  1291 => 1098,  1286 => 1097,  1281 => 1096,  1276 => 1095,  1267 => 100,  1259 => 1206,  1150 => 1099,  1147 => 1098,  1144 => 1097,  1141 => 1096,  1139 => 1095,  140 => 100,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4a1971883d10d1f0728b1c4756e5c9e53fb02fc678ddfe5258beb024a77ca386", "");
    }
}
