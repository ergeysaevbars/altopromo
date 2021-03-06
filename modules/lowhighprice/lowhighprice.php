<?php
if (!defined('_PS_VERSION_'))
    exit;

class LowHighPrice extends Module
{
    public function __construct()
    {
        $this->name = 'lowhighprice';
        $this->tab = 'front_office_features';
        $this->version = '1.0';
        $this->author = 'Sergey Isaev';
        $this->ps_versions_compliancy = array('min' => "1.5", 'max' => _PS_VERSION_);
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->displayName = $this->l("Low High Price");
        $this->description = $this->l("Shows Low High Price");
        parent::__construct();
    }

    public function install()
    {
        if (!parent::install() || !$this->registerHook('displayFooter'))
            return false;
        return true;
    }

    public function uninstall()
    {
        return parent::uninstall(); // TODO: Change the autogenerated stub
    }

    public function getContent()
    {
        $html = $this->setLowAndHighPrice();
        ob_start();
        require_once $_SERVER['DOCUMENT_ROOT'] . '/modules/' . $this->name . '/views/form.php';
        $html .= ob_get_clean();
        return $html;
    }

    public function hookDisplayFooter(array $params)
    {
        $min = Configuration::get('MIN_PRICE');
        $max = Configuration::get('MAX_PRICE');
        $query = "SELECT COUNT(*) FROM ps_product_shop WHERE price BETWEEN $min AND $max";
        $res = Db::getInstance()->getValue($query);
        $res = "В ценовом диапазоне от $min до $max найдено товаров $res";
        return $res;
    }

    private function setLowAndHighPrice()
    {
        if (Tools::isSubmit('save_price')){
            $low = (float)Tools::getValue('low_price');
            $high = (float)Tools::getValue('high_price');
            if (!$low || !$high || $high < $low)
                return $this->displayError('Не корректно указаны значения');
            Configuration::updateValue('MIN_PRICE', $low);
            Configuration::updateValue('MAX_PRICE', $high);
            return $this->displayConfirmation('Значения установлены1');
        }
        return '';
    }
}