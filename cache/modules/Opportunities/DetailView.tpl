

<script language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
{/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="20%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
<input type="hidden" name="create_flag" value="{$fields.create_flag.value}"/>
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" name ><li class="sugar_action_button" >{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Opportunities'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} <ul id class="subnav" ><li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Opportunities'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li><li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Opportunities'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li><li>{if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Opportunities'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if} </li><li><input type="hidden" name="create_flag" value="{$fields.create_flag.value}"/></li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Opportunities", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>
</div>
</td>
<td align="right" width="80%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="Opportunities_detailview_tabs"
class="yui-navset detailview_tabs"
>

<ul class="yui-nav">

<li><a id="tab0" href="javascript:void(0)"><em>{sugar_translate label='DEFAULT' module='Opportunities'}</em></a></li>


<li><a id="tab1" href="javascript:void(0)"><em>{sugar_translate label='LBL_DETAILVIEW_PANEL18' module='Opportunities'}</em></a></li>

<li><a id="tab2" href="javascript:void(0)"><em>{sugar_translate label='LBL_DETAILVIEW_PANEL20' module='Opportunities'}</em></a></li>
</ul>
<div class="yui-content">
<div id='tabcontent0'>
<div id='detailpanel_1' class='detail view  detail508 '>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='DEFAULT' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_OPPORTUNITY_NAME' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.account_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNT_NAME' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.account_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.account_id.value)}
{capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$fields.account_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="account_id" class="sugar_field">{$fields.account_name.value}</span>
{if !empty($fields.account_id.value)}</a>{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.version.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VERSION' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.version.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.version.options)}
<input type="hidden" class="sugar_field" id="{$fields.version.name}" value="{ $fields.version.options }">
{ $fields.version.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.version.name}" value="{ $fields.version.value }">
{ $fields.version.options[$fields.version.value]}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.consecutivo_cliente.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CONSECUTIVO_CLIENTE' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.consecutivo_cliente.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.consecutivo_cliente.value) <= 0}
{assign var="value" value=$fields.consecutivo_cliente.default_value }
{else}
{assign var="value" value=$fields.consecutivo_cliente.value }
{/if} 
<span class="sugar_field" id="{$fields.consecutivo_cliente.name}">{$fields.consecutivo_cliente.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.consecutivo_automatico.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CONSECUTIVO_AUTOMATICO' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.consecutivo_automatico.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.consecutivo_automatico.value) <= 0}
{assign var="value" value=$fields.consecutivo_automatico.default_value }
{else}
{assign var="value" value=$fields.consecutivo_automatico.value }
{/if} 
<span class="sugar_field" id="{$fields.consecutivo_automatico.name}">{$fields.consecutivo_automatico.value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.departamento_encargado.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DEPARTAMENTO_ENCARGADO' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.departamento_encargado.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.departamento_encargado.options)}
<input type="hidden" class="sugar_field" id="{$fields.departamento_encargado.name}" value="{ $fields.departamento_encargado.options }">
{ $fields.departamento_encargado.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.departamento_encargado.name}" value="{ $fields.departamento_encargado.value }">
{ $fields.departamento_encargado.options[$fields.departamento_encargado.value]}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_closed.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_CLOSED' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_closed.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.date_closed.value) <= 0}
{assign var="value" value=$fields.date_closed.default_value }
{else}
{assign var="value" value=$fields.date_closed.value }
{/if}
<span class="sugar_field" id="{$fields.date_closed.name}">{$value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_request.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_REQUEST' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_request.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.date_request.value) <= 0}
{assign var="value" value=$fields.date_request.default_value }
{else}
{assign var="value" value=$fields.date_request.value }
{/if}
<span class="sugar_field" id="{$fields.date_request.name}">{$value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_award.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_AWARD' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_award.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.date_award.value) <= 0}
{assign var="value" value=$fields.date_award.default_value }
{else}
{assign var="value" value=$fields.date_award.value }
{/if}
<span class="sugar_field" id="{$fields.date_award.name}">{$value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_real_adjudicacion.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_REAL_ADJUDICACION' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_real_adjudicacion.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.date_real_adjudicacion.value) <= 0}
{assign var="value" value=$fields.date_real_adjudicacion.default_value }
{else}
{assign var="value" value=$fields.date_real_adjudicacion.value }
{/if}
<span class="sugar_field" id="{$fields.date_real_adjudicacion.name}">{$value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_cotizacion.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_COTIZACION' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_cotizacion.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.date_cotizacion.value) <= 0}
{assign var="value" value=$fields.date_cotizacion.default_value }
{else}
{assign var="value" value=$fields.date_cotizacion.value }
{/if}
<span class="sugar_field" id="{$fields.date_cotizacion.name}">{$value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.etapas.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ETAPAS' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.etapas.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.etapas.options)}
<input type="hidden" class="sugar_field" id="{$fields.etapas.name}" value="{ $fields.etapas.options }">
{ $fields.etapas.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.etapas.name}" value="{ $fields.etapas.value }">
{ $fields.etapas.options[$fields.etapas.value]}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.lead_source.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LEAD_SOURCE' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.lead_source.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.lead_source.options)}
<input type="hidden" class="sugar_field" id="{$fields.lead_source.name}" value="{ $fields.lead_source.options }">
{ $fields.lead_source.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.lead_source.name}" value="{ $fields.lead_source.value }">
{ $fields.lead_source.options[$fields.lead_source.value]}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.departamento_costos.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DEPARTAMENTO_COSTOS' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.departamento_costos.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.departamento_costos.options)}
<input type="hidden" class="sugar_field" id="{$fields.departamento_costos.name}" value="{ $fields.departamento_costos.options }">
{ $fields.departamento_costos.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.departamento_costos.name}" value="{ $fields.departamento_costos.value }">
{ $fields.departamento_costos.options[$fields.departamento_costos.value]}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.razones_perdida.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_RAZONES_PERDIDA' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.razones_perdida.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.razones_perdida.options)}
<input type="hidden" class="sugar_field" id="{$fields.razones_perdida.name}" value="{ $fields.razones_perdida.options }">
{ $fields.razones_perdida.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.razones_perdida.name}" value="{ $fields.razones_perdida.value }">
{ $fields.razones_perdida.options[$fields.razones_perdida.value]}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.probabilidad.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PROBABILIDAD' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.probabilidad.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.probabilidad.options)}
<input type="hidden" class="sugar_field" id="{$fields.probabilidad.name}" value="{ $fields.probabilidad.options }">
{ $fields.probabilidad.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.probabilidad.name}" value="{ $fields.probabilidad.value }">
{ $fields.probabilidad.options[$fields.probabilidad.value]}
{/if}
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.opportunities_project_1_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_OPPORTUNITIES_PROJECT_1_FROM_PROJECT_TITLE' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.opportunities_project_1_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.opportunities_project_1project_idb.value)}
{capture assign="detail_url"}index.php?module=Project&action=DetailView&record={$fields.opportunities_project_1project_idb.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="opportunities_project_1project_idb" class="sugar_field">{$fields.opportunities_project_1_name.value}</span>
{if !empty($fields.opportunities_project_1project_idb.value)}</a>{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.assigned_user_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.assigned_user_name.hidden}
{counter name="panelFieldCount"}

<span id="assigned_user_id" class="sugar_field">{$fields.assigned_user_name.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.create_flag.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CREATE_FLAG' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.create_flag.hidden}
{counter name="panelFieldCount"}

{if strval($fields.create_flag.value) == "1" || strval($fields.create_flag.value) == "yes" || strval($fields.create_flag.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.create_flag.name}" id="{$fields.create_flag.name}" value="$fields.create_flag.value" disabled="true" {$checked}>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.amount.hidden}
{capture name="label" assign="label"}{$MOD.LBL_AMOUNT} ({$CURRENCY}){/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.amount.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.amount.name}'>
{sugar_number_format var=$fields.amount.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.valor_real.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VALOR_REAL' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.valor_real.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.valor_real.name}'>
{sugar_number_format var=$fields.valor_real.value }
</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.descuento.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCUENTO' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.descuento.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.descuento.name}'>
{sugar_number_format var=$fields.descuento.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.forma_pago.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FORMA_PAGO' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.forma_pago.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.forma_pago.name|escape:'html'|url2html|nl2br}">{$fields.forma_pago.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.description.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.description.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.seguimiento_mercadeo.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SEGUIMIENTO_MERCADEO' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.seguimiento_mercadeo.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.seguimiento_mercadeo.name|escape:'html'|url2html|nl2br}">{$fields.seguimiento_mercadeo.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<div id='detailpanel_2' class='detail view  detail508 '>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL3' module='Opportunities'}
<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table id='LBL_EDITVIEW_PANEL3' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.linea.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LINEA' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.linea.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.linea.value) && ($fields.linea.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.linea.name}" value="{$fields.linea.value}">
{multienum_to_array string=$fields.linea.value assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">{ $fields.linea.options.$item }</li>
{/foreach}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.referencias.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_REFERENCIAS' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.referencias.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.referencias.value) <= 0}
{assign var="value" value=$fields.referencias.default_value }
{else}
{assign var="value" value=$fields.referencias.value }
{/if} 
<span class="sugar_field" id="{$fields.referencias.name}">{$fields.referencias.value}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL3").style.display='none';</script>
{/if}
</div>    <div id='tabcontent1'>
<div id='detailpanel_3' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='LBL_DETAILVIEW_PANEL18' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.costo_personal.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_COSTO_PERSONAL' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.costo_personal.hidden}
{counter name="panelFieldCount"}
<span id="costo_personal" class="sugar_field">{costo_personal id=$fields.id.value module="cotizacion"}</span>
{/if}
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_DETAILVIEW_PANEL18").style.display='none';</script>
{/if}
</div>    <div id='tabcontent2'>
<div id='detailpanel_4' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='LBL_DETAILVIEW_PANEL20' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.costo_categorias.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_COSTO_CATEGORIAS' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.costo_categorias.hidden}
{counter name="panelFieldCount"}
<span id="costo_categorias" class="sugar_field">{costo_categorias id=$fields.id.value module="cotizacion"}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.costo_gastos.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_COSTO_GASTOS' module='Opportunities'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.costo_gastos.hidden}
{counter name="panelFieldCount"}
<span id="costo_gastos" class="sugar_field">{costo_gastos id=$fields.id.value module="cotizacion"}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_DETAILVIEW_PANEL20").style.display='none';</script>
{/if}
</div>
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type='text/javascript' src='{sugar_getjspath file='include/javascript/popup_helper.js'}'></script>
<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"></script>
<script type="text/javascript">
var Opportunities_detailview_tabs = new YAHOO.widget.TabView("Opportunities_detailview_tabs");
Opportunities_detailview_tabs.selectTab(0);
</script>