{*{assign var=foo value="德玛西亚"}*}
{*{func var="test $foo test"}*}

{assign var=tpl_name value="demaxiya"}
{*{include file="subdir/$tpl_name.tpl"}*}

{*{include file='subdir/$tpl_name/tpl'}*}

{*{cycle values="one,two,`$smarty.config.myval`"}*}

{assign var=module value=['contact'=>'yellow']}
{assign var=view value='contact'}
{*{include file="`$module.contact`.tpl"}*}
{include file="`$module.$view`.tpl"}