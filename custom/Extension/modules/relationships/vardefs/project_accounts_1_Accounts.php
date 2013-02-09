<?php
// created: 2013-01-21 08:20:07
$dictionary["Account"]["fields"]["project_accounts_1"] = array (
  'name' => 'project_accounts_1',
  'type' => 'link',
  'relationship' => 'project_accounts_1',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_ACCOUNTS_1_FROM_PROJECT_TITLE',
  'id_name' => 'project_accounts_1project_ida',
);
$dictionary["Account"]["fields"]["project_accounts_1_name"] = array (
  'name' => 'project_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_ACCOUNTS_1_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'project_accounts_1project_ida',
  'link' => 'project_accounts_1',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["project_accounts_1project_ida"] = array (
  'name' => 'project_accounts_1project_ida',
  'type' => 'link',
  'relationship' => 'project_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_PROJECT_ACCOUNTS_1_FROM_PROJECT_TITLE',
);
