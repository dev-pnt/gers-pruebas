<?php
$module_name = 'af_royeccion_facturacion';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'FECHA_PROYECTADA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_PROYECTADA',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_REAL' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_REAL',
    'width' => '10%',
    'default' => true,
  ),
  'VALOR_PROYECTADO' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALOR_PROYECTADO',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'VALOR_CORREGIDO' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALOR_CORREGIDO',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'VALOR_REMANENTE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_VALOR_REMANENTE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'ESTADO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'default' => true,
  ),
  'AF_ROYECCION_FACTURACION_PROJECT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AF_ROYECCION_FACTURACION_PROJECT_FROM_PROJECT_TITLE',
    'id' => 'AF_ROYECCION_FACTURACION_PROJECTPROJECT_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
?>
