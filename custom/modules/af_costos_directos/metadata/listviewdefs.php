<?php
$module_name = 'af_costos_directos';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CATEGORIA' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_CATEGORIA',
    'width' => '10%',
    'default' => true,
  ),
  'TIPO_COSTO' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TIPO_COSTO',
    'width' => '10%',
    'default' => true,
  ),
  'SUBTOTAL' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_SUBTOTAL',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
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
  'NUMERO_PERSONAS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NUMERO_PERSONAS',
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
  'OPPORTUNITIES_AF_COSTOS_DIRECTOS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPPORTUNITIES_AF_COSTOS_DIRECTOS_1_FROM_OPPORTUNITIES_TITLE',
    'id' => 'OPPORTUNITIES_AF_COSTOS_DIRECTOS_1OPPORTUNITIES_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'PROJECT_AF_COSTOS_DIRECTOS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PROJECT_AF_COSTOS_DIRECTOS_1_FROM_PROJECT_TITLE',
    'id' => 'PROJECT_AF_COSTOS_DIRECTOS_1PROJECT_IDA',
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
