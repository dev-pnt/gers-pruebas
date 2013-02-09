<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2013-01-03 17:49:49
$dictionary["Project"]["fields"]["af_royeccion_facturacion_project"] = array (
  'name' => 'af_royeccion_facturacion_project',
  'type' => 'link',
  'relationship' => 'af_royeccion_facturacion_project',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_AF_ROYECCION_FACTURACION_PROJECT_FROM_AF_ROYECCION_FACTURACION_TITLE',
);


// created: 2012-10-31 01:59:44
$dictionary["Project"]["fields"]["project_af_costos_directos_1"] = array (
  'name' => 'project_af_costos_directos_1',
  'type' => 'link',
  'relationship' => 'project_af_costos_directos_1',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_PROJECT_AF_COSTOS_DIRECTOS_1_FROM_AF_COSTOS_DIRECTOS_TITLE',
);


 // created: 2013-01-22 09:35:46
$dictionary['Project']['fields']['linea']['massupdate']='1';
$dictionary['Project']['fields']['linea']['merge_filter']='disabled';

 

 // created: 2012-12-14 12:04:12
$dictionary['Project']['fields']['status']['required']=true;
$dictionary['Project']['fields']['status']['audited']=true;
$dictionary['Project']['fields']['status']['merge_filter']='disabled';

 

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

?>