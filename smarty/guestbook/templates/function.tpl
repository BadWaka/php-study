{$foo}
<br>
{assign var=bar value="德玛西亚"}
{$bar}

{config_load file="colors.conf"}

{include file="header.tpl"}
{insert file="banner_ads.tpl" title="My Site" name="waka"}

{if $logged_in}
    Welcome,
    <span style="color:{#fontColor#}">{$name}</span>
{else}
    Hi,{$name}
{/if}

{include file="footer.tpl"}