<?php
// created: 2013-01-04 09:45:10
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'fecha_proyectada' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_FECHA_PROYECTADA',
    'width' => '10%',
    'default' => true,
  ),
  'fecha_real' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_FECHA_REAL',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'af_royeccion_facturacion',
    'width' => '4%',
    'default' => true,
  ),
  'valor_proyectado' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_VALOR_PROYECTADO',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'valor_corregido' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_VALOR_CORREGIDO',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'valor_remanente' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_VALOR_REMANENTE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'af_royeccion_facturacion',
    'width' => '5%',
    'default' => true,
  ),
);