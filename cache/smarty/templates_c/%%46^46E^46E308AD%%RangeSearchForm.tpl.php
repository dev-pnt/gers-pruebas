<?php /* Smarty version 2.6.11, created on 2013-02-08 16:58:14
         compiled from include/SugarFields/Fields/Int/RangeSearchForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Int/RangeSearchForm.tpl', 38, false),array('modifier', 'default', 'include/SugarFields/Fields/Int/RangeSearchForm.tpl', 92, false),)), $this); ?>
{*
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

*}
{if strlen(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
) <= 0}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key' => 'default_value','string' => true), $this);?>
 }
{else}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
 }
{/if}

<?php if (empty ( $this->_tpl_vars['displayParams']['idName'] )): ?>
{assign var="id" value=<?php echo smarty_function_sugarvar(array('key' => 'name','string' => true), $this);?>
 }
<?php else: ?>
{assign var="id" value=<?php echo $this->_tpl_vars['displayParams']['idName']; ?>
 }
<?php endif; ?>

{if isset($smarty.request.<?php echo $this->_tpl_vars['id_range_choice']; ?>
)}
{assign var="starting_choice" value=$smarty.request.<?php echo $this->_tpl_vars['id_range_choice']; ?>
}
{else}
{assign var="starting_choice" value="="}
{/if}

<script type='text/javascript'>
function {$id}_range_change(val) 
{ldelim}
  calculate_between = (val == 'between');

  //Clear the values depending on the operation
  if(calculate_between) {ldelim}
     document.getElementById("range_{$id}").value = '';   
  {rdelim} else {ldelim}
     document.getElementById("start_range_{$id}").value = '';
     document.getElementById("end_range_{$id}").value = '';
  {rdelim}
 
  document.getElementById("{$id}_range_div").style.display = calculate_between ? 'none' : '';
  document.getElementById("{$id}_between_range_div").style.display = calculate_between ? '' : 'none';
{rdelim}

var {$id}_range_reset = function()
{ldelim}
{$id}_range_change('=');
{rdelim}

YAHOO.util.Event.onDOMReady(function() {ldelim}
if(document.getElementById('search_form_clear'))
{ldelim}
YAHOO.util.Event.addListener('search_form_clear', 'click', {$id}_range_reset);
{rdelim}

{rdelim});
</script>

<span style="white-space:nowrap !important;">
<select id="{$id}_range_choice" name="{$id}_range_choice" style="width:190px !important;" onchange="{$id}_range_change(this.value);">
{html_options options=<?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
 selected=$starting_choice}
</select>
<div id="{$id}_range_div" style="{if $starting_choice=='between'}display:none;{else}display:'';{/if}">
<input type='text' name='range_{$id}' id='range_{$id}' style='width:75px !important;' size='<?php echo ((is_array($_tmp=@$this->_tpl_vars['displayParams']['size'])) ? $this->_run_mod_handler('default', true, $_tmp, 20) : smarty_modifier_default($_tmp, 20)); ?>
' 
    <?php if (isset ( $this->_tpl_vars['displayParams']['maxlength'] )): ?>maxlength='<?php echo $this->_tpl_vars['displayParams']['maxlength']; ?>
'<?php endif; ?> 
    value='{if empty($smarty.request.<?php echo $this->_tpl_vars['id_range']; ?>
) && !empty($smarty.request.<?php echo $this->_tpl_vars['original_id']; ?>
)}{$smarty.request.<?php echo $this->_tpl_vars['original_id']; ?>
}{else}{$smarty.request.<?php echo $this->_tpl_vars['id_range']; ?>
}{/if}' tabindex='<?php echo $this->_tpl_vars['tabindex']; ?>
' <?php echo $this->_tpl_vars['displayParams']['field']; ?>
>
</div>
<div id="{$id}_between_range_div" style="{if $starting_choice=='between'}display:'';{else}display:none;{/if}">
<input type='text' name='start_range_{$id}' 
    id='start_range_{$id}' style='width:75px !important;' size='<?php echo ((is_array($_tmp=@$this->_tpl_vars['displayParams']['size'])) ? $this->_run_mod_handler('default', true, $_tmp, 10) : smarty_modifier_default($_tmp, 10)); ?>
' 
    <?php if (isset ( $this->_tpl_vars['displayParams']['maxlength'] )): ?>maxlength='<?php echo $this->_tpl_vars['displayParams']['maxlength']; ?>
'<?php endif; ?> 
    value='{$smarty.request.<?php echo $this->_tpl_vars['id_range_start']; ?>
 }' tabindex='<?php echo $this->_tpl_vars['tabindex']; ?>
'>
{$APP.LBL_AND}
<input type='text' name='end_range_{$id}' 
    id='end_range_{$id}' style='width:75px !important;' size='<?php echo ((is_array($_tmp=@$this->_tpl_vars['displayParams']['size'])) ? $this->_run_mod_handler('default', true, $_tmp, 10) : smarty_modifier_default($_tmp, 10)); ?>
' 
    <?php if (isset ( $this->_tpl_vars['displayParams']['maxlength'] )): ?>maxlength='<?php echo $this->_tpl_vars['displayParams']['maxlength']; ?>
'<?php endif; ?> 
    value='{$smarty.request.<?php echo $this->_tpl_vars['id_range_end']; ?>
 }' tabindex='<?php echo $this->_tpl_vars['tabindex']; ?>
'>    
</div> 
</span>