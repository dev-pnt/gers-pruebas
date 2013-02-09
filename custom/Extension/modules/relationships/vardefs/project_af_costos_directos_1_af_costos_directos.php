<?php
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
