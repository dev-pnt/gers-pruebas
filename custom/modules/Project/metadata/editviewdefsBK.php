<?php
$viewdefs ['Project'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'form' => 
      array (
        'hidden' => '<input type="hidden" name="is_template" value="{$is_template}" />',
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 
          array (
            'customCode' => '{if !empty($smarty.request.return_action) && $smarty.request.return_action == "ProjectTemplatesDetailView" && (!empty($fields.id.value) || !empty($smarty.request.return_id)) }<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'ProjectTemplatesDetailView\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL{$place}"> {elseif !empty($smarty.request.return_action) && $smarty.request.return_action == "DetailView" && (!empty($fields.id.value) || !empty($smarty.request.return_id)) }<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'DetailView\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL{$place}"> {elseif $is_template}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'ProjectTemplatesListView\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL{$place}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'index\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL{$place}"> {/if}',
          ),
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_PROJECT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL8' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL9' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL11' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL12' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL13' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_project_information' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 'priority',
          1 => 'estimated_start_date',
        ),
        2 => 
        array (
          0 => 'estimated_end_date',
          1 => 'status',
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'forma_pago',
            'label' => 'LBL_FORMA_PAGO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'departamento_encargado',
            'label' => 'LBL_DEPARTAMENTO_ENCARGADO',
          ),
          1 => 
          array (
            'name' => 'factor_mult',
            'label' => 'LBL_FACTOR_MULT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'costo_total',
            'label' => 'LBL_COSTO_TOTAL',
          ),
          1 => 'assigned_user_name',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'opportunities_project_1_name',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cantidad_viaticos',
            'label' => 'LBL_CANTIDAD_VIATICOS',
          ),
          1 => 
          array (
            'name' => 'personas_viaticos',
            'label' => 'LBL_PERSONAS_VIATICOS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'valor_viaticos',
            'label' => 'LBL_VALOR_VIATICOS',
          ),
          1 => 
          array (
            'name' => 'subtotal_viaticos',
            'label' => 'LBL_SUBTOTAL_VIATICOS',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cantidad_transporte',
            'label' => 'LBL_CANTIDAD_TRANSPORTE',
          ),
          1 => 
          array (
            'name' => 'personas_transporte',
            'label' => 'LBL_PERSONAS_TRANSPORTE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'valor_transporte',
            'label' => 'LBL_VALOR_TRANSPORTE',
          ),
          1 => 
          array (
            'name' => 'subtotal_transporte',
            'label' => 'LBL_SUBTOTAL_TRANSPORTE',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cantidad_documentos',
            'label' => 'LBL_CANTIDAD_DOCUMENTOS',
          ),
          1 => 
          array (
            'name' => 'personas_documentos',
            'label' => 'LBL_PERSONAS_DOCUMENTOS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'valor_documentos',
            'label' => 'LBL_VALOR_DOCUMENTOS',
          ),
          1 => 
          array (
            'name' => 'subtotal_documentos',
            'label' => 'LBL_SUBTOTAL_DOCUMENTOS',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cantidad_polizas',
            'label' => 'LBL_CANTIDAD_POLIZAS',
          ),
          1 => 
          array (
            'name' => 'personas_polizas',
            'label' => 'LBL_PERSONAS_POLIZAS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'valor_polizas',
            'label' => 'LBL_VALOR_POLIZAS',
          ),
          1 => 
          array (
            'name' => 'subtotal_polizas',
            'label' => 'LBL_SUBTOTAL_POLIZAS',
          ),
        ),
      ),
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cantidad_viaticos_e',
            'label' => 'LBL_CANTIDAD_VIATOCOS_E',
          ),
          1 => 
          array (
            'name' => 'personas_viaticos_e',
            'label' => 'LBL_PERSONAS_VIATOCOS_E',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'valor_viaticos_e',
            'label' => 'LBL_VALOR_VIATOCOS_E',
          ),
          1 => 
          array (
            'name' => 'subtotal_viaticos_e',
            'label' => 'LBL_SUBTOTAL_VIATOCOS_E',
          ),
        ),
      ),
      'lbl_editview_panel9' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cantidad_transporte_e',
            'label' => 'LBL_CANTIDAD_TRANSPORTE_E',
          ),
          1 => 
          array (
            'name' => 'personas_transporte_e',
            'label' => 'LBL_PERSONAS_TRANSPORTE_E',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'valor_transporte_e',
            'label' => 'LBL_VALOR_TRANSPORTE_E',
          ),
          1 => 
          array (
            'name' => 'subtotal_transporte_e',
            'label' => 'LBL_SUBTOTAL_TRANSPORTE_E',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
        ),
      ),
      'lbl_editview_panel11' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cantidad_topografia',
            'label' => 'LBL_CANTIDAD_TOPOGRAFIA',
          ),
          1 => 
          array (
            'name' => 'porcentaje_topografia',
            'label' => 'LBL_PORCENTAJE_TOPOGRAFIA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'valor_topografia',
            'label' => 'LBL_VALOR_TOPOGRAFIA',
          ),
          1 => 
          array (
            'name' => 'subtotal_topografia',
            'label' => 'LBL_SUBTOTAL_TOPOGRAFIA',
          ),
        ),
      ),
      'lbl_editview_panel12' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cantidad_forestal',
            'label' => 'LBL_CANTIDAD_FORESTAL',
          ),
          1 => 
          array (
            'name' => 'porcentaje_forestal',
            'label' => 'LBL_PORCENTAJE_FORESTAL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'valor_forestal',
            'label' => 'LBL_VALOR_FORESTAL',
          ),
          1 => 
          array (
            'name' => 'subtotal_forestal',
            'label' => 'LBL_SUBTOTAL_FORESTAL',
          ),
        ),
      ),
      'lbl_editview_panel13' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cantidad_suelos',
            'label' => 'LBL_CANTIDAD_SUELOS',
          ),
          1 => 
          array (
            'name' => 'porcentaje_suelos',
            'label' => 'LBL_PORCENTAJE_SUELOS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'valor_suelos',
            'label' => 'LBL_VALOR_SUELOS',
          ),
          1 => 
          array (
            'name' => 'subtotal_suelos',
            'label' => 'LBL_SUBTOTAL_SUELOS',
          ),
        ),
      ),
    ),
  ),
);
?>
