<?php
// created: 2013-01-21 08:20:07
$dictionary["Project"]["fields"]["project_accounts_1"] = array (
  'name' => 'project_accounts_1',
  'type' => 'link',
  'relationship' => 'project_accounts_1',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'project_accounts_1accounts_idb',
);
$dictionary["Project"]["fields"]["project_accounts_1_name"] = array (
  'name' => 'project_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'project_accounts_1accounts_idb',
  'link' => 'project_accounts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Project"]["fields"]["project_accounts_1accounts_idb"] = array (
  'name' => 'project_accounts_1accounts_idb',
  'type' => 'link',
  'relationship' => 'project_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_PROJECT_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
