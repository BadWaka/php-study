<?php
//define('SMARTY_DIR', '/usr/local/lib/smarty-3.1.30/libs/');
//
//require_once(SMARTY_DIR . 'Smarty.class.php');
//$smarty = new Smarty();
//
//$smarty->setTemplateDir('../templates/');
//$smarty->setCompileDir('../templates_c/');
//$smarty->setConfigDir('../configs/');
//$smarty->setCacheDir('../cache/');
//
//$smarty->assign('name', 'Ned');
//// $smarty->debugging = true
//$smarty->display('index.tpl');

require('../includes/setup.php');
$smarty = new Smarty_GuestBook();
$smarty->assign('name', 'Ned');
$smarty->assign('foo', '这是一个标题');
//$smarty->display('index.tpl');
//$smarty->display('comments.tpl');
//$smarty->display('variable.tpl');
//$smarty->display('function.tpl');
//$smarty->display('attribute.tpl');
//$smarty->display('double_quotation_marks_variable.tpl');
$smarty->display('mathematical_calculation.tpl');