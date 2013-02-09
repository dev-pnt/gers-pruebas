<?php
 // created: 2013-01-03 17:49:49
$layout_defs["Project"]["subpanel_setup"]['af_royeccion_facturacion_project'] = array (
  'order' => 100,
  'module' => 'af_royeccion_facturacion',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AF_ROYECCION_FACTURACION_PROJECT_FROM_AF_ROYECCION_FACTURACION_TITLE',
  'get_subpanel_data' => 'af_royeccion_facturacion_project',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
