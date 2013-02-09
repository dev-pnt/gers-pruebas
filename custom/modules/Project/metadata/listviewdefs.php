<?php
$listViewDefs ['Project'] = 
array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
  ),
  'PROJECT_ACCOUNTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PROJECT_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'PROJECT_ACCOUNTS_1ACCOUNTS_IDB',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ESTIMATED_START_DATE' => 
  array (
    'width' => '20%',
    'label' => 'LBL_DATE_START',
    'link' => false,
    'default' => true,
  ),
  'ESTIMATED_END_DATE' => 
  array (
    'width' => '20%',
    'label' => 'LBL_DATE_END',
    'link' => false,
    'default' => true,
  ),
  'DEPARTAMENTO_ENCARGADO' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DEPARTAMENTO_ENCARGADO',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'width' => '20%',
    'label' => 'LBL_STATUS',
    'link' => false,
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER_ID',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'LINEA' => 
  array (
    'type' => 'multienum',
    'label' => 'LBL_LINEA',
    'width' => '10%',
    'default' => false,
  ),
  'REFERENCIAS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REFERENCIAS',
    'width' => '10%',
    'default' => false,
  ),
  'TOTAL_FACTURADO' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTAL_FACTURADO',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'TOTAL_CIF' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTAL_CIF',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'VALOR' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALOR',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'FORMA_PAGO' => 
  array (
    'type' => 'text',
    'label' => 'LBL_FORMA_PAGO',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'PRIORITY' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_PRIORITY',
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
);
?>