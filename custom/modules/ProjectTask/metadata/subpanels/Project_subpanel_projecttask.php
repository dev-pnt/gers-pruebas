<?php
// created: 2013-01-10 11:31:32
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '30%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'date_start' => 
  array (
    'vname' => 'LBL_DATE_START',
    'width' => '15%',
    'default' => true,
  ),
  'estimated_effort' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_ESTIMATED_EFFORT',
    'width' => '10%',
    'default' => true,
  ),
  'anticipos' => 
  array (
    'type' => 'float',
    'vname' => 'LBL_ANTICIPOS',
    'width' => '10%',
    'default' => true,
  ),
  'actual_effort' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_ACTUAL_EFFORT',
    'width' => '10%',
    'default' => true,
  ),
  'date_finish' => 
  array (
    'vname' => 'LBL_DATE_FINISH',
    'width' => '15%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ASSIGNED_USER_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
);