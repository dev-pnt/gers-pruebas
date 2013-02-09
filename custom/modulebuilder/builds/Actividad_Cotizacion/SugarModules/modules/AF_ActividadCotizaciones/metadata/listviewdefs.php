<?php
$module_name = 'AF_ActividadCotizaciones';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'NUMERO_HORAS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_NUMERO_HORAS',
    'width' => '10%',
    'default' => true,
  ),
  'ESCALAFON' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESCALAFON',
    'width' => '10%',
    'default' => true,
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
