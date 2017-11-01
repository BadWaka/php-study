<?php
/* Smarty version 3.1.30, created on 2017-11-01 02:42:32
  from "/Users/wangkai37/workspace/php/php-study/smarty/guestbook/templates/mathematical_calculation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f93498dcd3a8_35617871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14fdffe0294ed6524d5a41ce9c49c761cb120df8' => 
    array (
      0 => '/Users/wangkai37/workspace/php/php-study/smarty/guestbook/templates/mathematical_calculation.tpl',
      1 => 1509504146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f93498dcd3a8_35617871 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/usr/local/lib/smarty-3.1.30/libs/plugins/modifier.truncate.php';
$_smarty_tpl->compiled->nocache_hash = '20815819559f93498d869f2_48698914';
$_smarty_tpl->_assignInScope('foo', 3);
?>


<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['foo']->value);?>

<?php }
}
