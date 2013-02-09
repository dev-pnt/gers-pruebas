<?php
$viewdefs ['Cases'] = 
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
            'type' => 'readonly',
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
            'displayParams' => 
            array (
              'size' => 75,
            ),
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'nl2br' => true,
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'work_log',
            'comment' => 'Free-form text used to denote activities of interest',
            'label' => 'LBL_WORK_LOG',
          ),
        ),
        8 => 
        array (
          0 => 'assigned_user_name',
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
        2 => 
        array (
          0 => 
          array (
            'name' => 'resolution',
            'nl2br' => true,
          ),
        ),
      ),
    ),
  ),
);
?>
