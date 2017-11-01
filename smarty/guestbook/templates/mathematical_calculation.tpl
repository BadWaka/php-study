{assign var=foo value=3}
{*{$foo+1}*}
{*{$foo*$bar}*}
{$foo|truncate}
{*{$foo|truncate:"`$fooTruncCount/$barTruncFactor-1`"}*}