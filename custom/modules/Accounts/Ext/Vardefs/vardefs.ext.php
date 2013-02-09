<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2013-02-05 07:42:02
$dictionary['Account']['fields']['prefijo_consecutivo']['required']=false;
$dictionary['Account']['fields']['prefijo_consecutivo']['merge_filter']='disabled';

 

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


 // created: 2012-11-07 14:17:45
$dictionary['Account']['fields']['tipo_identificacion']['len']=100;
$dictionary['Account']['fields']['tipo_identificacion']['merge_filter']='disabled';

 
?>