<?php
$viewdefs ['Opportunities'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    0 => 
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
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
          ),
          1 => 'account_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'version',
            'label' => 'LBL_VERSION',
          ),
          1 => 
          array (
            'name' => 'consecutivo_cliente',
            'label' => 'LBL_CONSECUTIVO_CLIENTE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'departamento_encargado',
            'label' => 'LBL_DEPARTAMENTO_ENCARGADO',
          ),
          1 => 
          array (
            'name' => 'etapas',
            'label' => 'LBL_ETAPAS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'date_closed',
          ),
          1 => 
          array (
            'name' => 'date_request',
            'comment' => 'Expected or actual date the oppportunity was requested',
            'label' => 'LBL_DATE_REQUEST',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'date_award',
            'comment' => 'Expected or actual date the oppportunity was awarded',
            'label' => 'LBL_DATE_AWARD',
          ),
          1 => 
          array (
            'name' => 'date_real_adjudicacion',
            'comment' => 'Expected or actual date the oppportunity was awarded',
            'label' => 'LBL_DATE_REAL_ADJUDICACION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_cotizacion',
            'comment' => 'Expected or actual date the oppportunity was QUOTED',
            'label' => 'LBL_DATE_COTIZACION',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 'lead_source',
          1 => 
          array (
            'name' => 'departamento_costos',
            'label' => 'LBL_DEPARTAMENTO_COSTOS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'razones_perdida',
            'label' => 'LBL_RAZONES_PERDIDA',
          ),
          1 => 
          array (
            'name' => 'probabilidad',
            'label' => 'LBL_PROBABILIDAD',
          ),
        ),
        8 => 
        array (
          0 => '',
          1 => 'assigned_user_name',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'amount',
          ),
          1 => 
          array (
            'name' => 'valor_real',
            'label' => 'LBL_VALOR_REAL',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'descuento',
            'label' => 'LBL_DESCUENTO',
          ),
          1 => 
          array (
            'name' => 'forma_pago',
            'label' => 'LBL_FORMA_PAGO',
          ),
        ),
        11 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'linea',
            'label' => 'LBL_LINEA',
          ),
          1 => 
          array (
            'name' => 'referencias',
            'label' => 'LBL_REFERENCIAS',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'seguimiento_mercadeo',
            'label' => 'LBL_SEGUIMIENTO_MERCADEO',
          ),
        ),
      ),
    ),
  ),
);
?>
