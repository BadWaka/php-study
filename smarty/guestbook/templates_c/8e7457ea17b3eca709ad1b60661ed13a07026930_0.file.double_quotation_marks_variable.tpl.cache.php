<?php
/* Smarty version 3.1.30, created on 2017-10-31 12:42:49
  from "/Users/wangkai37/workspace/php/php-study/smarty/guestbook/templates/double_quotation_marks_variable.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f86fc91e9b56_77918931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e7457ea17b3eca709ad1b60661ed13a07026930' => 
    array (
      0 => '/Users/wangkai37/workspace/php/php-study/smarty/guestbook/templates/double_quotation_marks_variable.tpl',
      1 => 1509453764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f86fc91e9b56_77918931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '140435619059f86fc91b4798_27552815';
?>



<?php $_smarty_tpl->_assignInScope('tpl_name', "demaxiya");
?>






<?php $_smarty_tpl->_assignInScope('module', array('contact'=>'yellow'));
$_smarty_tpl->_assignInScope('view', 'contact');
?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['module']->value[$_smarty_tpl->tpl_vars['view']->value]).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
