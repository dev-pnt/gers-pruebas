<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-10-31 01:57:49
$dictionary["af_servicios_externos"]["fields"]["opportunities_af_servicios_externos_1"] = array (
  'name' => 'opportunities_af_servicios_externos_1',
  'type' => 'link',
  'relationship' => 'opportunities_af_servicios_externos_1',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_AF_SERVICIOS_EXTERNOS_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_af_servicios_externos_1opportunities_ida',
);
$dictionary["af_servicios_externos"]["fields"]["opportunities_af_servicios_externos_1_name"] = array (
  'name' => 'opportunities_af_servicios_externos_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_AF_SERVICIOS_EXTERNOS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_af_servicios_externos_1opportunities_ida',
  'link' => 'opportunities_af_servicios_externos_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["af_servicios_externos"]["fields"]["opportunities_af_servicios_externos_1opportunities_ida"] = array (
  'name' => 'opportunities_af_servicios_externos_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_af_servicios_externos_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_AF_SERVICIOS_EXTERNOS_1_FROM_AF_SERVICIOS_EXTERNOS_TITLE',
);

?>