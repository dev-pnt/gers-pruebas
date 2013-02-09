

<script>
{literal}
$(document).ready(function(){
$("ul.clickMenu").each(function(index, node){
$(node).sugarActionMenu();
});
});
{/literal}
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="action_buttons">{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_HEADER">{/if}  {if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_HEADER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Notes'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {/if} {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Notes", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</td>
<td align='right'>
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>
<div id="EditView_tabs"
>
<div >
<div id="detailpanel_1" class="{$def.templateMeta.panelClass|default:'edit view edit508'}">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_NOTE_INFORMATION' module='Notes'}
<script>
document.getElementById('detailpanel_1').className += ' expanded';
</script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_NOTE_INFORMATION'  class="edit view panelContainer">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='contact_name_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_CONTACT_NAME' module='Notes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.contact_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.contact_name.name}" size="" value="{$fields.contact_name.value}" title='' autocomplete="off"  	 accesskey='7'  >
<input type="hidden" name="{$fields.contact_name.id_name}" 
id="{$fields.contact_name.id_name}" 
value="{$fields.contact_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.contact_name.name}" id="btn_{$fields.contact_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_CONTACTS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_CONTACTS_LABEL"}"
onclick='open_popup(
"{$fields.contact_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"contact_id","name":"contact_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.contact_name.name}" id="btn_clr_{$fields.contact_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.contact_name.name}', '{$fields.contact_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.contact_name.name}']) != 'undefined'",
		enableQS
);
</script>
<td valign="top" id='parent_name_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_RELATED_TO' module='Notes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

<select name='parent_type' tabindex="0" id='parent_type' title=''  onchange='document.{$form_name}.{$fields.parent_name.name}.value="";document.{$form_name}.parent_id.value=""; changeParentQS("{$fields.parent_name.name}"); checkParentType(document.{$form_name}.parent_type.value, document.{$form_name}.btn_{$fields.parent_name.name});'>
{html_options options=$fields.parent_name.options selected=$fields.parent_type.value sortoptions=true}
</select>
{if empty($fields.parent_name.options[$fields.parent_type.value])}
{assign var="keepParent" value = 0}
{else}
{assign var="keepParent" value = 1}
{/if}
<input type="text" name="{$fields.parent_name.name}" id="{$fields.parent_name.name}" class="sqsEnabled" tabindex="0"
size="" {if $keepParent}value="{$fields.parent_name.value}"{/if} autocomplete="off"><input type="hidden" name="{$fields.parent_id.name}" id="{$fields.parent_id.name}"  
{if $keepParent}value="{$fields.parent_id.value}"{/if}>
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.parent_name.name}" id="btn_{$fields.parent_name.name}" tabindex="0"	
title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(document.{$form_name}.parent_type.value, 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"parent_id","name":"parent_name"}}{/literal}, "single", true);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.parent_name.name}" id="btn_clr_{$fields.parent_name.name}" tabindex="0" title="{sugar_translate label="LBL_CLEAR_BUTTON_TITLE"}" class="button lastChild" onclick="this.form.{$fields.parent_name.name}.value = ''; this.form.{$fields.parent_id.name}.value = '';" value="{sugar_translate label="LBL_CLEAR_BUTTON_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
{literal}
<script type="text/javascript">
if (typeof(changeParentQS) == 'undefined'){
function changeParentQS(field) {
    if(typeof sqs_objects == 'undefined') {
       return;
    }
	field = YAHOO.util.Dom.get(field);
    var form = field.form;
    var sqsId = form.id + "_" + field.id;
    if(sqs_objects[sqsId] == undefined){
    	return;
    }
    var typeField =  form.elements.parent_type;
    var new_module = typeField.value;
    if(typeof(disabledModules) != 'undefined' && typeof(disabledModules[new_module]) != 'undefined') {
		sqs_objects[sqsId]["disable"] = true;
		field.readOnly = true;
	} else {
		sqs_objects[sqsId]["disable"] = false;
		field.readOnly = false;
    }
	//Update the SQS globals to reflect the new module choice
    sqs_objects[sqsId]["modules"] = new Array(new_module);
    if (typeof(QSFieldsArray[sqsId]) != 'undefined')
    {
        QSFieldsArray[sqsId].sqs.modules = new Array(new_module);
    }
	if(typeof QSProcessedFieldsArray != 'undefined')
    {
	   QSProcessedFieldsArray[sqsId] = false;
    }
    enableQS(false);
}}
//change this in case it wasn't the default on editing existing items.
$(document).ready(function(){
	changeParentQS("parent_name")
});
</script>
<script>var disabledModules=[];</script>
<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_parent_name']={"form":"EditView","method":"query","modules":["{/literal}{if !empty($fields.parent_type.value)}{$fields.parent_type.value}{else}Accounts{/if}{literal}"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};</script>
{/literal}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='name_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_NOTE_SUBJECT' module='Notes'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' 
id='{$fields.name.name}' size='60' 
maxlength='255' 
value='{$value}' title=''      >
<td valign="top" id='_label' width='12.5%' scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='filename_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_FILENAME' module='Notes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

<script type="text/javascript" src='include/SugarFields/Fields/File/SugarFieldFile.js?v=NRcVdvMAzosjsfxaQyXRJg'></script>
{if !empty($fields.filename.value) }
{assign var=showRemove value=true}
{else}
{assign var=showRemove value=false}
{/if}
{assign var=noChange value=false}
<input type="hidden" name="deleteAttachment" value="0">
<input type="hidden" name="{$fields.filename.name}" id="{$fields.filename.name}" value="{$fields.filename.value}">
<span id="{$fields.filename.name}_old" style="display:{if !$showRemove}none;{/if}">
<a href="index.php?entryPoint=download&id={$fields.id.value}&type={$module}" class="tabDetailViewDFLink">{$fields.filename.value}</a>
{if !$noChange}
<input type='button' class='button' id='remove_button' value='{$APP.LBL_REMOVE}' onclick='SUGAR.field.file.deleteAttachment("{$fields.filename.name}","",this);'>
{/if}
</span>
{if !$noChange}
<span id="{$fields.filename.name}_new" style="display:{if $showRemove}none;{/if}">
<input type="hidden" name="{$fields.filename.name}_escaped">
<input id="{$fields.filename.name}_file" name="{$fields.filename.name}_file" 
type="file" title='' size="30"
maxlength='255'
>
{else}

{/if}
</span>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='description_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_NOTE_STATUS' module='Notes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  
<textarea  id='{$fields.description.name}' name='{$fields.description.name}'
rows="30" 
cols="90" 
title='' tabindex="0" 
 >{$value}</textarea>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(1, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_NOTE_INFORMATION").style.display='none';</script>
{/if}
<div id="detailpanel_2" class="{$def.templateMeta.panelClass|default:'edit view edit508'}">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_PANEL_ASSIGNMENT' module='Notes'}
<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_PANEL_ASSIGNMENT'  class="edit view panelContainer">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='assigned_user_name_label' width='12.5%' scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO' module='Notes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' colspan='3'>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" 
id="{$fields.assigned_user_name.id_name}" 
value="{$fields.assigned_user_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.assigned_user_name.name}" id="btn_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
"{$fields.assigned_user_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.assigned_user_name.name}" id="btn_clr_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.assigned_user_name.name}', '{$fields.assigned_user_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.assigned_user_name.name}']) != 'undefined'",
		enableQS
);
</script>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_PANEL_ASSIGNMENT").style.display='none';</script>
{/if}
</div></div>

<script language="javascript">
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<div class="action_buttons">{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_FOOTER">{/if}  {if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_FOOTER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Notes'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {/if} {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Notes", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</div>
</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
{sugar_getscript file="include/javascript/dashlets.js"}
<script>
function deleteAttachmentCallBack(text)
{literal} { {/literal}
if(text == 'true') {literal} { {/literal}
document.getElementById('new_attachment').style.display = '';
ajaxStatus.hideStatus();
document.getElementById('old_attachment').innerHTML = '';
{literal} } {/literal} else {literal} { {/literal}
document.getElementById('new_attachment').style.display = 'none';
ajaxStatus.flashStatus(SUGAR.language.get('Notes', 'ERR_REMOVING_ATTACHMENT'), 2000);
{literal} } {/literal}
{literal} } {/literal}
</script>
<script>toggle_portal_flag(); function toggle_portal_flag()  {literal} { {/literal} {$TOGGLE_JS} {literal} } {/literal} </script>
<!-- End Meta-Data Javascript -->
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>{literal}
<script type="text/javascript">
addForm('EditView');addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'consecutivo_automatico', 'varchar', false,'{/literal}{sugar_translate label='LBL_CONSECUTIVO_AUTOMATICO' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Fecha de Creación' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Fecha de Modificación' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_BY' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_BY' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED_BY' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NOTE_SUBJECT' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'file_mime_type', 'varchar', false,'{/literal}{sugar_translate label='LBL_FILE_MIME_TYPE' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'file_url', 'function', false,'{/literal}{sugar_translate label='LBL_FILE_URL' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'filename', 'file', false,'{/literal}{sugar_translate label='LBL_FILENAME' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'parent_type', 'parent_type', false,'{/literal}{sugar_translate label='LBL_PARENT_TYPE' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'parent_id', 'id', false,'{/literal}{sugar_translate label='LBL_PARENT_ID' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'contact_id', 'id', false,'{/literal}{sugar_translate label='LBL_CONTACT_ID' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'portal_flag', 'bool', true,'{/literal}{sugar_translate label='LBL_PORTAL_FLAG' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'embed_flag', 'bool', false,'{/literal}{sugar_translate label='LBL_EMBED_FLAG' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'parent_name', 'parent', false,'{/literal}{sugar_translate label='LBL_RELATED_TO' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'contact_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CONTACT_NAME' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'contact_phone', 'phone', false,'{/literal}{sugar_translate label='LBL_PHONE' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'contact_email', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'account_id', 'id', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_ID' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'opportunity_id', 'id', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_ID' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'acase_id', 'id', false,'{/literal}{sugar_translate label='LBL_CASE_ID' module='Notes' for_js=true}{literal}' );
addToValidate('EditView', 'lead_id', 'id', false,'{/literal}{sugar_translate label='LBL_LEAD_ID' module='Notes' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Notes' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Notes' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'contact_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Notes' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_CONTACT_NAME' module='Notes' for_js=true}{literal}', 'contact_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_contact_name']={"form":"EditView","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["contact_name","contact_id","contact_id","contact_id"],"required_list":["contact_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['EditView_parent_name']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['EditView_assigned_user_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Sin coincidencias"};</script>{/literal}
