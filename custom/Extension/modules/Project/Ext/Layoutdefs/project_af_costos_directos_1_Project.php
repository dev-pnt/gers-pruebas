<?php
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
