<?php
/* Smarty version 3.1.30, created on 2017-10-31 12:45:40
  from "/Users/wangkai37/workspace/php/php-study/smarty/guestbook/templates/mathematical_calculation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f87074650873_49110455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14fdffe0294ed6524d5a41ce9c49c761cb120df8' => 
    array (
      0 => '/Users/wangkai37/workspace/php/php-study/smarty/guestbook/templates/mathematical_calculation.tpl',
      1 => 1509453908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f87074650873_49110455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '133941868259f87074621978_61796380';
$_smarty_tpl->_assignInScope('foo', 3);
echo $_smarty_tpl->tpl_vars['foo']->value+1;?>

<?php echo $_smarty_tpl->tpl_vars['foo']->value*$_smarty_tpl->tpl_vars['bar']->value;
}
}
