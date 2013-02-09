<?php
// created: 2012-10-17 13:09:12
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'escalafon' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_ESCALAFON',
    'width' => '10%',
    'default' => true,
  ),
  'numero_horas' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_NUMERO_HORAS',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'AF_ActividadCotizaciones',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'AF_ActividadCotizaciones',
    'width' => '5%',
    'default' => true,
  ),
);