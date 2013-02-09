<?php
// created: 2012-10-30 23:34:06
$dictionary["af_costos_directos"]["fields"]["opportunities_af_costos_directos_2"] = array (
  'name' => 'opportunities_af_costos_directos_2',
  'type' => 'link',
  'relationship' => 'opportunities_af_costos_directos_2',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_AF_COSTOS_DIRECTOS_2_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_af_costos_directos_2opportunities_ida',
);
$dictionary["af_costos_directos"]["fields"]["opportunities_af_costos_directos_2_name"] = array (
  'name' => 'opportunities_af_costos_directos_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_AF_COSTOS_DIRECTOS_2_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_af_costos_directos_2opportunities_ida',
  'link' => 'opportunities_af_costos_directos_2',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["af_costos_directos"]["fields"]["opportunities_af_costos_directos_2opportunities_ida"] = array (
  'name' => 'opportunities_af_costos_directos_2opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_af_costos_directos_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_AF_COSTOS_DIRECTOS_2_FROM_AF_COSTOS_DIRECTOS_TITLE',
);
