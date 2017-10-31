<html>

<head>
    <title>{$foo}</title>
</head>

<body>
{$foo}{$foo}

{assign var=foo1 value='baa'}{$foo1}{$foo}

{$smarty.server.SERVER_NAME}
<br>

{assign var=x value=1}
{assign var=y value=3}
{assign var=foo value=$x+$y}

{$foo}
<br>
{assign var=counter value=18}
{$foo = {$counter}+3}
{$foo = "this is message {$counter}"}
{$foo}
<br>

{* 数组 *}
{assign var=foo value=['y'=>'yellow','b'=>'blue']}
{assign var=foo value=[1,[9,8],3]}
{$foo[1][1]}

<br>

{assign var=bar value='德玛西1'}
{*{$foo=$bar+2}*}
{*{$foo=strlen($bar)}*}
{$foo[]=1}
{$foo[0]}

<br>

{* 点号语法 *}

<br>

{time()}

</body>

</html>
