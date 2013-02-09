<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-10-30 23:33:24
$dictionary["Opportunity"]["fields"]["opportunities_af_costos_directos_1"] = array (
  'name' => 'opportunities_af_costos_directos_1',
  'type' => 'link',
  'relationship' => 'opportunities_af_costos_directos_1',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_AF_COSTOS_DIRECTOS_1_FROM_AF_COSTOS_DIRECTOS_TITLE',
);


 // created: 2013-01-10 09:46:33
$dictionary['Opportunity']['fields']['departamento_encargado']['required']=true;
$dictionary['Opportunity']['fields']['departamento_encargado']['merge_filter']='disabled';

 

 // created: 2013-02-08 16:59:15
$dictionary['Opportunity']['fields']['version']['massupdate']='1';
$dictionary['Opportunity']['fields']['version']['options']='version_list';
$dictionary['Opportunity']['fields']['version']['merge_filter']='disabled';

 

// created: 2012-10-31 01:57:49
$dictionary["Opportunity"]["fields"]["opportunities_af_servicios_externos_1"] = array (
  'name' => 'opportunities_af_servicios_externos_1',
  'type' => 'link',
  'relationship' => 'opportunities_af_servicios_externos_1',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_AF_SERVICIOS_EXTERNOS_1_FROM_AF_SERVICIOS_EXTERNOS_TITLE',
);


// created: 2012-10-10 10:14:35
$dictionary["Opportunity"]["fields"]["opportunities_af_actividadcotizaciones_1"] = array (
  'name' => 'opportunities_af_actividadcotizaciones_1',
  'type' => 'link',
  'relationship' => 'opportunities_af_actividadcotizaciones_1',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_AF_ACTIVIDADCOTIZACIONES_1_FROM_AF_ACTIVIDADCOTIZACIONES_TITLE',
);


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


 // created: 2013-01-10 09:49:26
$dictionary['Opportunity']['fields']['amount']['audited']=true;
$dictionary['Opportunity']['fields']['amount']['comments']='Unconverted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['amount']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['amount']['required']=false;

 
?>