{strip}
<p>Тестовые данные из tpl</p>
<script type="text/javascript" src="{sugar_getjspath file="modules/K1_House/js/test.js"}"></script>
<link rel="stylesheet" type="text/css" href="{sugar_getjspath file="modules/K1_House/css/style.css"}" />
<p class="mystyle">{$var1}</p>
<button type="button" class="ajax-use">AJAX</button>
<div class="mycontent"></div>
{if 1>0}
    <p>yes</p>
{else}
    <p>no</p>
{/if}
{foreach from=$var2 item="VALUE" key="KEY"}
    {assign var='NEWVAR' value='TRUE'}
    <p>{$KEY}{$VALUE}{$NEWVAR}</p>
    {foreachelse}
    <p>массив пусть или не существует</p>
{/foreach}
{include file="modules/K1_House/tpls/test2.tpl"}
{/strip}
{html_options name=customer_id options=$cust_options selected=$customer_id}
