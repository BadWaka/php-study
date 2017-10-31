<?php
define('SMARTY_DIR', '/usr/local/lib/smarty-3.1.30/libs/');

require(SMARTY_DIR . 'Smarty.class.php');

class Smarty_GuestBook extends Smarty
{
    function __construct()
    {
        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();

        $this->setTemplateDir('../templates/');
        $this->setCompileDir('../templates_c/');
        $this->setConfigDir('../configs/');
        $this->setCacheDir('../cache/');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'Guest Book');
    }
}