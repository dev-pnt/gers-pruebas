<?php
// created: 2012-10-11 12:48:19
$dictionary["Opportunity"]["fields"]["opportunities_project_1"] = array (
  'name' => 'opportunities_project_1',
  'type' => 'link',
  'relationship' => 'opportunities_project_1',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_PROJECT_1_FROM_PROJECT_TITLE',
  'id_name' => 'opportunities_project_1project_idb',
);
$dictionary["Opportunity"]["fields"]["opportunities_project_1_name"] = array (
  'name' => 'opportunities_project_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_PROJECT_1_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'opportunities_project_1project_idb',
  'link' => 'opportunities_project_1',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["opportunities_project_1project_idb"] = array (
  'name' => 'opportunities_project_1project_idb',
  'type' => 'link',
  'relationship' => 'opportunities_project_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OPPORTUNITIES_PROJECT_1_FROM_PROJECT_TITLE',
);
