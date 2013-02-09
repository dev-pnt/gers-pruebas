<?php
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
