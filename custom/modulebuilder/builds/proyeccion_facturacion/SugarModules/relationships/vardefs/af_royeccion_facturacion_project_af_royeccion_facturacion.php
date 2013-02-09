<?php
// created: 2013-01-03 17:49:49
$dictionary["af_royeccion_facturacion"]["fields"]["af_royeccion_facturacion_project"] = array (
  'name' => 'af_royeccion_facturacion_project',
  'type' => 'link',
  'relationship' => 'af_royeccion_facturacion_project',
  'source' => 'non-db',
  'vname' => 'LBL_AF_ROYECCION_FACTURACION_PROJECT_FROM_PROJECT_TITLE',
  'id_name' => 'af_royeccion_facturacion_projectproject_ida',
);
$dictionary["af_royeccion_facturacion"]["fields"]["af_royeccion_facturacion_project_name"] = array (
  'name' => 'af_royeccion_facturacion_project_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AF_ROYECCION_FACTURACION_PROJECT_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'af_royeccion_facturacion_projectproject_ida',
  'link' => 'af_royeccion_facturacion_project',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["af_royeccion_facturacion"]["fields"]["af_royeccion_facturacion_projectproject_ida"] = array (
  'name' => 'af_royeccion_facturacion_projectproject_ida',
  'type' => 'link',
  'relationship' => 'af_royeccion_facturacion_project',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AF_ROYECCION_FACTURACION_PROJECT_FROM_AF_ROYECCION_FACTURACION_TITLE',
);
