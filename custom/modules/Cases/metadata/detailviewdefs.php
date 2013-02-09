<?php
$viewdefs ['Cases'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          4 => 
          array (
            'customCode' => '<input title="{$MOD.LBL_CREATE_KB_DOCUMENT}" accessKey="M" class="button" onclick="this.form.return_module.value=\'Cases\'; this.form.return_action.value=\'DetailView\';this.form.action.value=\'EditView\';this.form.module.value=\'KBDocuments\';" type="submit" name="button" value="{$MOD.LBL_CREATE_KB_DOCUMENT}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CREATE_KB_DOCUMENT}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_CREATE_KB_DOCUMENT}',
                'accessKey' => 'M',
                'class' => 'button',
                'onclick' => 'this.form.return_module.value=\'Cases\'; this.form.return_action.value=\'DetailView\';this.form.action.value=\'EditView\';this.form.module.value=\'KBDocuments\';',
                'name' => 'button',
              ),
            ),
          ),
        ),
      ),
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CASE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_case_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'case_number',
            'label' => 'LBL_CASE_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 'priority',
          1 => 
          array (
            'name' => 'departamento_encargado',
            'label' => 'LBL_DEPARTAMENT_ENCARGADO',
          ),
        ),
        2 => 
        array (
          0 => 'status',
          1 => 'account_name',
        ),
        3 => 
        array (
          0 => 'type',
          1 => 
          array (
            'name' => 'canal_ingreso',
            'label' => 'LBL_CANAL_INGRESO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fecha_respuesta',
            'label' => 'LBL_FECHA_RESPUESTA',
          ),
          1 => 
          array (
            'name' => 'fecha_est_solucion',
            'label' => 'LBL_FECHA_EST_SOLUCION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_SUBJECT',
          ),
        ),
        6 => 
        array (
          0 => 'description',
        ),
        7 => 
        array (
          0 => 'resolution',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'satisfecho',
            'label' => 'LBL_SATISFECHO',
          ),
          1 => 
          array (
            'name' => 'fecha_solucion',
            'label' => 'LBL_FECHA_SOLUCION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'solucion',
            'label' => 'LBL_SOLUCION',
          ),
        ),
      ),
    ),
  ),
);
?>
