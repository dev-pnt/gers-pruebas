<?php
// created: 2012-10-11 12:48:19
$dictionary["Project"]["fields"]["opportunities_project_1"] = array (
  'name' => 'opportunities_project_1',
  'type' => 'link',
  'relationship' => 'opportunities_project_1',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_PROJECT_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_project_1opportunities_ida',
);
$dictionary["Project"]["fields"]["opportunities_project_1_name"] = array (
  'name' => 'opportunities_project_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_PROJECT_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_project_1opportunities_ida',
  'link' => 'opportunities_project_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Project"]["fields"]["opportunities_project_1opportunities_ida"] = array (
  'name' => 'opportunities_project_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_project_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OPPORTUNITIES_PROJECT_1_FROM_OPPORTUNITIES_TITLE',
);
