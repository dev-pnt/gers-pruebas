<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2012-11-07 14:58:57
$dictionary['af_costos_directos']['fields']['categoria']['required']=true;
$dictionary['af_costos_directos']['fields']['categoria']['merge_filter']='disabled';

 

 // created: 2012-11-07 14:59:13
$dictionary['af_costos_directos']['fields']['tipo_costo']['merge_filter']='disabled';
$dictionary['af_costos_directos']['fields']['tipo_costo']['required']=true;

 

// created: 2012-10-30 23:33:24
$dictionary["af_costos_directos"]["fields"]["opportunities_af_costos_directos_1"] = array (
  'name' => 'opportunities_af_costos_directos_1',
  'type' => 'link',
  'relationship' => 'opportunities_af_costos_directos_1',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_AF_COSTOS_DIRECTOS_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_af_costos_directos_1opportunities_ida',
);
$dictionary["af_costos_directos"]["fields"]["opportunities_af_costos_directos_1_name"] = array (
  'name' => 'opportunities_af_costos_directos_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_AF_COSTOS_DIRECTOS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_af_costos_directos_1opportunities_ida',
  'link' => 'opportunities_af_costos_directos_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["af_costos_directos"]["fields"]["opportunities_af_costos_directos_1opportunities_ida"] = array (
  'name' => 'opportunities_af_costos_directos_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_af_costos_directos_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_AF_COSTOS_DIRECTOS_1_FROM_AF_COSTOS_DIRECTOS_TITLE',
);


// created: 2012-10-31 01:59:44
$dictionary["af_costos_directos"]["fields"]["project_af_costos_directos_1"] = array (
  'name' => 'project_af_costos_directos_1',
  'type' => 'link',
  'relationship' => 'project_af_costos_directos_1',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_AF_COSTOS_DIRECTOS_1_FROM_PROJECT_TITLE',
  'id_name' => 'project_af_costos_directos_1project_ida',
);
$dictionary["af_costos_directos"]["fields"]["project_af_costos_directos_1_name"] = array (
  'name' => 'project_af_costos_directos_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_AF_COSTOS_DIRECTOS_1_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'project_af_costos_directos_1project_ida',
  'link' => 'project_af_costos_directos_1',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["af_costos_directos"]["fields"]["project_af_costos_directos_1project_ida"] = array (
  'name' => 'project_af_costos_directos_1project_ida',
  'type' => 'link',
  'relationship' => 'project_af_costos_directos_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROJECT_AF_COSTOS_DIRECTOS_1_FROM_AF_COSTOS_DIRECTOS_TITLE',
);


 // created: 2012-12-14 11:55:50
$dictionary['af_costos_directos']['fields']['numero_personas']['default']='1';

 
?>