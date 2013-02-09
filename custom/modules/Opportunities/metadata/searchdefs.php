<?php
$searchdefs ['Opportunities'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      0 => 
      array (
        'name' => 'open_only',
        'label' => 'LBL_OPEN_ITEMS',
        'type' => 'bool',
        'default' => false,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'date_closed' => 
      array (
        'name' => 'date_closed',
        'default' => true,
        'width' => '10%',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'date_real_adjudicacion' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_REAL_ADJUDICACION',
        'width' => '10%',
        'default' => true,
        'name' => 'date_real_adjudicacion',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'account_name' => 
      array (
        'name' => 'account_name',
        'default' => true,
        'width' => '10%',
      ),
      'departamento_encargado' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_DEPARTAMENTO_ENCARGADO',
        'width' => '25%',
        'default' => true,
        'name' => 'departamento_encargado',
      ),
      'linea' => 
      array (
        'type' => 'multienum',
        'label' => 'LBL_LINEA',
        'width' => '10%',
        'default' => true,
        'name' => 'linea',
      ),
      'referencias' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REFERENCIAS',
        'width' => '10%',
        'default' => true,
        'name' => 'referencias',
      ),
      'seguimiento_mercadeo' => 
      array (
        'type' => 'text',
        'label' => 'LBL_SEGUIMIENTO_MERCADEO',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'seguimiento_mercadeo',
      ),
      'probabilidad' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_PROBABILIDAD',
        'width' => '10%',
        'default' => true,
        'name' => 'probabilidad',
      ),
      'amount' => 
      array (
        'name' => 'amount',
        'default' => true,
        'width' => '10%',
      ),
      'etapas' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_ETAPAS',
        'width' => '10%',
        'default' => true,
        'name' => 'etapas',
      ),
      'consecutivo_automatico' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CONSECUTIVO_AUTOMATICO',
        'width' => '10%',
        'default' => true,
        'name' => 'consecutivo_automatico',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'lead_source' => 
      array (
        'name' => 'lead_source',
        'default' => true,
        'width' => '10%',
      ),
      'next_step' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NEXT_STEP',
        'width' => '10%',
        'default' => true,
        'name' => 'next_step',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
