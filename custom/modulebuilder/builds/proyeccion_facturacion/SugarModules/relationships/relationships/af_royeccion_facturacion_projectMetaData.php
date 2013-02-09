<?php
// created: 2013-01-03 17:49:49
$dictionary["af_royeccion_facturacion_project"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'af_royeccion_facturacion_project' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'af_royeccion_facturacion',
      'rhs_table' => 'af_royeccion_facturacion',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'af_royeccion_facturacion_project_c',
      'join_key_lhs' => 'af_royeccion_facturacion_projectproject_ida',
      'join_key_rhs' => 'af_royeccion_facturacion_projectaf_royeccion_facturacion_idb',
    ),
  ),
  'table' => 'af_royeccion_facturacion_project_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'af_royeccion_facturacion_projectproject_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'af_royeccion_facturacion_projectaf_royeccion_facturacion_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'af_royeccion_facturacion_projectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'af_royeccion_facturacion_project_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'af_royeccion_facturacion_projectproject_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'af_royeccion_facturacion_project_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'af_royeccion_facturacion_projectaf_royeccion_facturacion_idb',
      ),
    ),
  ),
);