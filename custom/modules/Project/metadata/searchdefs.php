<?php
$searchdefs ['Project'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
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
      'estimated_start_date' => 
      array (
        'name' => 'estimated_start_date',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_ASSIGNED_USER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_id',
      ),
      'project_accounts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_PROJECT_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
        'id' => 'PROJECT_ACCOUNTS_1ACCOUNTS_IDB',
        'width' => '10%',
        'default' => true,
        'name' => 'project_accounts_1_name',
      ),
      'departamento_encargado' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_DEPARTAMENTO_ENCARGADO',
        'width' => '10%',
        'default' => true,
        'name' => 'departamento_encargado',
      ),
      'linea' => 
      array (
        'type' => 'enum',
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
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'estimated_end_date' => 
      array (
        'name' => 'estimated_end_date',
        'default' => true,
        'width' => '10%',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
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
      'priority' => 
      array (
        'name' => 'priority',
        'default' => true,
        'width' => '10%',
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