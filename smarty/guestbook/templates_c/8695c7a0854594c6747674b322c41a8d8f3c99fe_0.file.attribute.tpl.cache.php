<?php
/* Smarty version 3.1.30, created on 2017-10-31 09:41:11
  from "/Users/wangkai37/workspace/php/php-study/smarty/guestbook/templates/attribute.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f84537559425_56412814',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '8695c7a0854594c6747674b322c41a8d8f3c99fe' => 
    array (
      0 => '/Users/wangkai37/workspace/php/php-study/smarty/guestbook/templates/attribute.tpl',
      1 => 1509442868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.tpl' => 1,
    'file:header.tpl' => 2,
  ),
),false)) {
function content_59f84537559425_56412814 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once '/usr/local/lib/smarty-3.1.30/libs/plugins/function.counter.php';
if (!is_callable('smarty_function_html_select_date')) require_once '/usr/local/lib/smarty-3.1.30/libs/plugins/function.html_select_date.php';
if (!is_callable('smarty_function_mailto')) require_once '/usr/local/lib/smarty-3.1.30/libs/plugins/function.mailto.php';
if (!is_callable('smarty_function_html_options')) require_once '/usr/local/lib/smarty-3.1.30/libs/plugins/function.html_options.php';
$_smarty_tpl->compiled->nocache_hash = '114746422959f845374fdfe7_72758004';
$_smarty_tpl->_subTemplateRender("file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '/*%%SmartyNocache:114746422959f845374fdfe7_72758004%%*/<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:114746422959f845374fdfe7_72758004%%*/';?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('attrib_name'=>"attrib value"), 0, true);
?>

<?php $_smarty_tpl->_assignInScope('includeFile', "header.tpl");
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['includeFile']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>




<?php ob_start();
echo smarty_function_counter(array(),$_smarty_tpl);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('foo', $_prefixVariable1);
echo $_smarty_tpl->tpl_vars['foo']->value;?>


<?php $_smarty_tpl->_assignInScope('bar', 3);
$_smarty_tpl->_assignInScope('foo', substr($_smarty_tpl->tpl_vars['bar']->value,2,5));
echo $_smarty_tpl->tpl_vars['foo']->value;?>


<?php $_smarty_tpl->_assignInScope('foo', strlen($_smarty_tpl->tpl_vars['bar']->value));
echo $_smarty_tpl->tpl_vars['foo']->value;?>


<?php $_smarty_tpl->_assignInScope('buh', 8);
$_smarty_tpl->_assignInScope('foo', $_smarty_tpl->tpl_vars['buh']->value+strlen($_smarty_tpl->tpl_vars['bar']->value));
echo $_smarty_tpl->tpl_vars['foo']->value;?>


<?php echo smarty_function_html_select_date(array('display_days'=>true),$_smarty_tpl);?>


<?php echo smarty_function_mailto(array('address'=>"smarty@example.com"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('companies', array(1,2,3,4,5));
$_smarty_tpl->_assignInScope('company_id', 1);
?>
<select name="company_id">
    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['companies']->value,'selected'=>$_smarty_tpl->tpl_vars['company_id']->value),$_smarty_tpl);?>

</select><?php }
}
