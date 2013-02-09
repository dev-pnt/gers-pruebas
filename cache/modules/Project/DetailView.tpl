

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
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" name ><li class="sugar_action_button" ><input id="edit_button" class="button" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" name="Edit" onclick="var _form = document.getElementById('formDetailView');{if $IS_TEMPLATE}_form.return_module.value='Project'; _form.return_action.value='ProjectTemplatesDetailView'; _form.return_id.value='{$id}'; _form.action.value='ProjectTemplatesEditView';{else}_form.return_module.value='Project'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView'; {/if};_form.submit();" type="button" value=" {$APP.LBL_EDIT_BUTTON_LABEL} "/><ul id class="subnav" ><li><input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" id="delete_button" class="button" onclick="var _form = document.getElementById('formDetailView');{if $IS_TEMPLATE}_form.return_module.value='Project'; _form.return_action.value='ProjectTemplatesListView'; _form.action.value='Delete'; if (confirm('{$APP.NTC_DELETE_CONFIRMATION}')) _form.submit();{else}_form.return_module.value='Project'; _form.return_action.value='ListView'; _form.action.value='Delete'; if (confirm('{$APP.NTC_DELETE_CONFIRMATION}')) _form.submit();{/if};_form.submit();" type="button" value="{$APP.LBL_DELETE_BUTTON_LABEL}"/></li><li><input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" name="Duplicate" id="duplicate_button" onclick="var _form = document.getElementById('formDetailView');{if $IS_TEMPLATE}_form.return_module.value='Project'; _form.return_action.value='ProjectTemplatesDetailView'; _form.isDuplicate.value=true; _form.action.value='projecttemplateseditview'; _form.return_id.value='{$id}';{else}_form.return_module.value='Project'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';{/if};_form.submit();" type="button" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}"/></li><li><input type="button" name="act_proy" value="Informe de Actividades" onclick="window.open('index.php?entryPoint=repProyAct&p_id={$fields.id.value}','Informe de Actividades','width=800,height=600,scrollbars=1');" //></li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Project", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>
</div>
</td>
<td align="right" width="80%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="Project_detailview_tabs"
class="yui-navset detailview_tabs"
>

<ul class="yui-nav">

<li><a id="tab0" href="javascript:void(0)"><em>{sugar_translate label='LBL_PROJECT_INFORMATION' module='Project'}</em></a></li>

<li><a id="tab1" href="javascript:void(0)"><em>{sugar_translate label='LBL_DETAILVIEW_PANEL15' module='Project'}</em></a></li>

<li><a id="tab2" href="javascript:void(0)"><em>{sugar_translate label='LBL_DETAILVIEW_PANEL16' module='Project'}</em></a></li>
</ul>
<div class="yui-content">
<div id='tabcontent0'>
<div id='detailpanel_1' class='detail view  detail508 '>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='LBL_PROJECT_INFORMATION' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Project'}{/capture}
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
{if !$fields.valor.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VALOR' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.valor.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.valor.name}'>
{sugar_number_format var=$fields.valor.value }
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
{if !$fields.status.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.status.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.status.options)}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.options }">
{ $fields.status.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.value }">
{ $fields.status.options[$fields.status.value]}
{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.departamento_encargado.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DEPARTAMENTO_ENCARGADO' module='Project'}{/capture}
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
{if !$fields.estimated_start_date.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_START' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.estimated_start_date.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.estimated_start_date.value) <= 0}
{assign var="value" value=$fields.estimated_start_date.default_value }
{else}
{assign var="value" value=$fields.estimated_start_date.value }
{/if}
<span class="sugar_field" id="{$fields.estimated_start_date.name}">{$value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.priority.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PRIORITY' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.priority.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.priority.options)}
<input type="hidden" class="sugar_field" id="{$fields.priority.name}" value="{ $fields.priority.options }">
{ $fields.priority.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.priority.name}" value="{ $fields.priority.value }">
{ $fields.priority.options[$fields.priority.value]}
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
{if !$fields.estimated_end_date.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_END' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.estimated_end_date.hidden}
{counter name="panelFieldCount"}


{if strlen($fields.estimated_end_date.value) <= 0}
{assign var="value" value=$fields.estimated_end_date.default_value }
{else}
{assign var="value" value=$fields.estimated_end_date.value }
{/if}
<span class="sugar_field" id="{$fields.estimated_end_date.name}">{$value}</span>
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
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Project'}{/capture}
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
{if !$fields.date_entered.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_entered.hidden}
{counter name="panelFieldCount"}


{assign var="value" value=23-01-2013 }
<span class="sugar_field" id="{$fields.date_entered.name}">{$value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.assigned_user_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO' module='Project'}{/capture}
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
{if !$fields.opportunities_project_1_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_OPPORTUNITIES_PROJECT_1_FROM_OPPORTUNITIES_TITLE' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.opportunities_project_1_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.opportunities_project_1opportunities_ida.value)}
{capture assign="detail_url"}index.php?module=Opportunities&action=DetailView&record={$fields.opportunities_project_1opportunities_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="opportunities_project_1opportunities_ida" class="sugar_field">{$fields.opportunities_project_1_name.value}</span>
{if !empty($fields.opportunities_project_1opportunities_ida.value)}</a>{/if}
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.project_accounts_1_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PROJECT_ACCOUNTS_1_FROM_ACCOUNTS_TITLE' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.project_accounts_1_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.project_accounts_1accounts_idb.value)}
{capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$fields.project_accounts_1accounts_idb.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="project_accounts_1accounts_idb" class="sugar_field">{$fields.project_accounts_1_name.value}</span>
{if !empty($fields.project_accounts_1accounts_idb.value)}</a>{/if}
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
{if !$fields.linea.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LINEA' module='Project'}{/capture}
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
{capture name="label" assign="label"}{sugar_translate label='LBL_REFERENCIAS' module='Project'}{/capture}
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
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_PROJECT_INFORMATION").style.display='none';</script>
{/if}
</div>    <div id='tabcontent1'>
<div id='detailpanel_2' class='detail view  detail508 '>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='LBL_DETAILVIEW_PANEL15' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.costo_categorias.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_COSTO_CATEGORIAS' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.costo_categorias.hidden}
{counter name="panelFieldCount"}
<span id="costo_categorias" class="sugar_field">{costo_categorias id=$fields.id.value module="proyecto"}</span>
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
{if !$fields.costo_gastos.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_COSTO_GASTOS' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.costo_gastos.hidden}
{counter name="panelFieldCount"}
<span id="costo_gastos" class="sugar_field">{costo_gastos id=$fields.id.value module="proyecto"}</span>
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
<script>document.getElementById("LBL_DETAILVIEW_PANEL15").style.display='none';</script>
{/if}
</div>    <div id='tabcontent2'>
<div id='detailpanel_3' class='detail view  detail508 '>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='LBL_DETAILVIEW_PANEL16' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.valor.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VALOR' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.valor.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.valor.name}'>
{sugar_number_format var=$fields.valor.value }
</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.avance.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_AVANCE' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.avance.hidden}
{counter name="panelFieldCount"}
<span id="avance" class="sugar_field">{assign var=reporinfo value=$fields.id.value|datos_proyecto}{$reporinfo.facturado / $fields.valor.value}%</span>
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
{if !$fields.total_facturado.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_FACTURADO' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.total_facturado.hidden}
{counter name="panelFieldCount"}
<span id="total_facturado" class="sugar_field">$ {$reporinfo.facturado|number_format:0}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.horas_proyecto.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_HORAS_PROYECTO' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.horas_proyecto.hidden}
{counter name="panelFieldCount"}
<span id="horas_proyecto" class="sugar_field">{$reporinfo.horas_proyecto}</span>
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
{if !$fields.mano_obra_horas_cotizado.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MANO_OBRA_HORAS_COTIZADO' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.mano_obra_horas_cotizado.hidden}
{counter name="panelFieldCount"}
<span id="mano_obra_horas_cotizado" class="sugar_field">{$reporinfo.horas}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.mano_obra_valor_cotizado.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VALOR_MANO_OBRA_HORAS_COTIZADO' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.mano_obra_valor_cotizado.hidden}
{counter name="panelFieldCount"}
<span id="mano_obra_valor_cotizado" class="sugar_field">$ {$reporinfo.valor_mano_obra|number_format:0}</span>
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
{if !$fields.costos_cotizados.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_COSTOS_COTIZADOS' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.costos_cotizados.hidden}
{counter name="panelFieldCount"}
<span id="costos_cotizados" class="sugar_field">$ {$reporinfo.costos_cotizados|number_format:0}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.gastos_externos_cotizados.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_GASTOS_EXTERNOS_COTIZADOS' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.gastos_externos_cotizados.hidden}
{counter name="panelFieldCount"}
<span id="gastos_externos_cotizados" class="sugar_field">$ {$reporinfo.gastos_cotizados|number_format:0}</span>
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
{if !$fields.costos_reales.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_COSTOS_REALES' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.costos_reales.hidden}
{counter name="panelFieldCount"}
<span id="costos_reales" class="sugar_field">$ {$reporinfo.costos_reales|number_format:0}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.valor_mano_obra_real.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VALOR_MANO_OBRA_REAL' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.valor_mano_obra_real.hidden}
{counter name="panelFieldCount"}
<span id="valor_mano_obra_real" class="sugar_field">$ {$reporinfo.valor_mano_obra_real|number_format:0}</span>
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
{if !$fields.anticipos.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ANTICIPOS' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.anticipos.hidden}
{counter name="panelFieldCount"}
<span id="anticipos" class="sugar_field">{if $reporinfo.anticipos > 0}<label style="color:red;">{else}<label>{/if} $ {$reporinfo.anticipos|number_format:0}</label></span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.diferencia.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DIFERENCIA' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.diferencia.hidden}
{counter name="panelFieldCount"}
<span id="diferencia" class="sugar_field">$ {$reporinfo.diferencia|number_format:0}</span>
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
{if !$fields.rentabilidad.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_RENTABILIDAD' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.rentabilidad.hidden}
{counter name="panelFieldCount"}
<span id="rentabilidad" class="sugar_field">{$reporinfo.rentabilidad|number_format:2}%</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.calificacion.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CALIFICACION' module='Project'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td width='37.5%'  >
{if !$fields.calificacion.hidden}
{counter name="panelFieldCount"}
<span id="calificacion" class="sugar_field"><img src="include/images/{$reporinfo.imagen}" /></span>
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
<script>document.getElementById("LBL_DETAILVIEW_PANEL16").style.display='none';</script>
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
var Project_detailview_tabs = new YAHOO.widget.TabView("Project_detailview_tabs");
Project_detailview_tabs.selectTab(0);
</script>