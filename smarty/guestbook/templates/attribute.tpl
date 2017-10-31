{include file="index.tpl"}
{include file="header.tpl" nocache}
{include file="header.tpl" attrib_name="attrib value"}
{assign var=includeFile value="header.tpl"}
{include file=$includeFile}

{*{include file=#includeFile# title="My Title"}*}

{assign var=foo value={counter}}
{$foo}

{assign var=bar value=3}
{assign var=foo value=substr($bar,2,5)}
{$foo}

{assign var=foo value=$bar|strlen}
{$foo}

{assign var=buh value=8}
{assign var=foo value=$buh+$bar|strlen}
{$foo}

{html_select_date display_days=true}

{mailto address="smarty@example.com"}

{assign var=companies value=[1,2,3,4,5]}
{assign var=company_id value=1}
<select name="company_id">
    {html_options options=$companies selected=$company_id}
</select>