<?php
$listViewDefs ['Opportunities'] = 
array (
  'CONSECUTIVO_AUTOMATICO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CONSECUTIVO_AUTOMATICO',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_OPPORTUNITY_NAME',
    'link' => true,
    'default' => true,
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'id' => 'ACCOUNT_ID',
    'module' => 'Accounts',
    'link' => true,
    'default' => true,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'contextMenu' => 
    array (
      'objectType' => 'sugarAccount',
      'metaData' => 
      array (
        'return_module' => 'Contacts',
        'return_action' => 'ListView',
        'module' => 'Accounts',
        'parent_id' => '{$ACCOUNT_ID}',
        'parent_name' => '{$ACCOUNT_NAME}',
        'account_id' => '{$ACCOUNT_ID}',
        'account_name' => '{$ACCOUNT_NAME}',
      ),
    ),
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ETAPAS' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_ETAPAS',
    'width' => '10%',
    'default' => true,
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'VALOR_REAL' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALOR_REAL',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'DATE_CLOSED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DATE_CLOSED',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'DATE_CREATED' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_CREATED',
    'width' => '10%',
    'default' => false,
  ),
  'SEGUIMIENTO_MERCADEO' => 
  array (
    'type' => 'text',
    'label' => 'LBL_SEGUIMIENTO_MERCADEO',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'OPPORTUNITIES_PROJECT_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPPORTUNITIES_PROJECT_1_FROM_PROJECT_TITLE',
    'id' => 'OPPORTUNITIES_PROJECT_1PROJECT_IDB',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_REAL_ADJUDICACION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_REAL_ADJUDICACION',
    'width' => '10%',
    'default' => false,
  ),
  'VERSION' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_VERSION',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_AWARD' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_AWARD',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_REQUEST' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_REQUEST',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_COTIZACION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_COTIZACION',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'OPPORTUNITY_TYPE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TYPE',
    'default' => false,
  ),
  'LEAD_SOURCE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LEAD_SOURCE',
    'default' => false,
  ),
  'NEXT_STEP' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NEXT_STEP',
    'default' => false,
  ),
  'PROBABILITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PROBABILITY',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
  'DEPARTAMENTO_ENCARGADO' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DEPARTAMENTO_ENCARGADO',
    'width' => '10%',
    'default' => false,
  ),
);
?>
