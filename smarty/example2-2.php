<?php
// unix style (note capital 'S')
define('SMARTY_DIR', '/usr/local/lib/smarty-3.1.30/libs/');

// both unix and windows
// define('SMARTY_DIR', str_replace("\\", "/", getcwd()) . '/includes/smarty-3.1.30/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();
?>