<?php
/* Smarty version 3.1.30, created on 2017-10-31 09:24:52
  from "/Users/wangkai37/workspace/php/php-study/smarty/guestbook/templates/comments.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f84164e4c707_59910798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '613af0c2b6166d82ea58d4af7e7d88ef9ff1eb06' => 
    array (
      0 => '/Users/wangkai37/workspace/php/php-study/smarty/guestbook/templates/comments.tpl',
      1 => 1509439145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_59f84164e4c707_59910798 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/usr/local/lib/smarty-3.1.30/libs/plugins/function.html_options.php';
?>


<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>

<!-- HTML 注释会发送到浏览器 -->






<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- 显示 main content 块 -->
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['includeFile']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>





<!-- 变量被注释了 -->




<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['vals']->value,'selected'=>$_smarty_tpl->tpl_vars['selected_id']->value),$_smarty_tpl);?>

</select>
*}

</body>
</html><?php }
}
