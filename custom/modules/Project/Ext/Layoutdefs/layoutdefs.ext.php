<?php 
 //WARNING: The contents of this file are auto-generated


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


 // created: 2012-10-31 01:59:44
$layout_defs["Project"]["subpanel_setup"]['project_af_costos_directos_1'] = array (
  'order' => 100,
  'module' => 'af_costos_directos',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PROJECT_AF_COSTOS_DIRECTOS_1_FROM_AF_COSTOS_DIRECTOS_TITLE',
  'get_subpanel_data' => 'project_af_costos_directos_1',
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


//auto-generated file DO NOT EDIT
$layout_defs['Project']['subpanel_setup']['af_royeccion_facturacion_project']['override_subpanel_name'] = 'Project_subpanel_af_royeccion_facturacion_project';


//auto-generated file DO NOT EDIT
$layout_defs['Project']['subpanel_setup']['projecttask']['override_subpanel_name'] = 'Project_subpanel_projecttask';


//auto-generated file DO NOT EDIT
$layout_defs['Project']['subpanel_setup']['accounts']['override_subpanel_name'] = 'Project_subpanel_accounts';

?>