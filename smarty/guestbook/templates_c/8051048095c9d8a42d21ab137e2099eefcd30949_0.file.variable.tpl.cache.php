<?php
/* Smarty version 3.1.30, created on 2017-10-31 09:09:23
  from "/Users/wangkai37/workspace/php/php-study/smarty/guestbook/templates/variable.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f83dc35fcfd8_08498529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8051048095c9d8a42d21ab137e2099eefcd30949' => 
    array (
      0 => '/Users/wangkai37/workspace/php/php-study/smarty/guestbook/templates/variable.tpl',
      1 => 1509440960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f83dc35fcfd8_08498529 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '155935150959f83dc35d5507_49398641';
?>
<html>

<head>
    <title><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</title>
</head>

<body>
<?php echo $_smarty_tpl->tpl_vars['foo']->value;
echo $_smarty_tpl->tpl_vars['foo']->value;?>


<?php $_smarty_tpl->_assignInScope('foo1', 'baa');
echo $_smarty_tpl->tpl_vars['foo1']->value;
echo $_smarty_tpl->tpl_vars['foo']->value;?>


<?php echo $_SERVER['SERVER_NAME'];?>

<br>

<?php $_smarty_tpl->_assignInScope('x', 1);
$_smarty_tpl->_assignInScope('y', 3);
$_smarty_tpl->_assignInScope('foo', $_smarty_tpl->tpl_vars['x']->value+$_smarty_tpl->tpl_vars['y']->value);
?>

<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>

<br>
<?php $_smarty_tpl->_assignInScope('counter', 18);
ob_start();
echo $_smarty_tpl->tpl_vars['counter']->value;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('foo', $_prefixVariable1+3);
$_smarty_tpl->_assignInScope('foo', "this is message ".((string)$_smarty_tpl->tpl_vars['counter']->value));
echo $_smarty_tpl->tpl_vars['foo']->value;?>

<br>


<?php $_smarty_tpl->_assignInScope('foo', array('y'=>'yellow','b'=>'blue'));
$_smarty_tpl->_assignInScope('foo', array(1,array(9,8),3));
echo $_smarty_tpl->tpl_vars['foo']->value[1][1];?>


<br>

<?php $_smarty_tpl->_assignInScope('bar', '德玛西1');
?>


<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['foo']) ? $_smarty_tpl->tpl_vars['foo']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 1;
$_smarty_tpl->_assignInScope('foo', $_tmp_array);
echo $_smarty_tpl->tpl_vars['foo']->value[0];?>


<br>



<br>

<?php echo time();?>


</body>

</html>
<?php }
}
