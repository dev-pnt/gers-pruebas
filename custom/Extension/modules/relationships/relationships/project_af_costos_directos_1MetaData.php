<?php
// created: 2012-10-31 01:59:44
$dictionary["project_af_costos_directos_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'project_af_costos_directos_1' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'af_costos_directos',
      'rhs_table' => 'af_costos_directos',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'project_af_costos_directos_1_c',
      'join_key_lhs' => 'project_af_costos_directos_1project_ida',
      'join_key_rhs' => 'project_af_costos_directos_1af_costos_directos_idb',
    ),
  ),
  'table' => 'project_af_costos_directos_1_c',
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
      'name' => 'project_af_costos_directos_1project_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'project_af_costos_directos_1af_costos_directos_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'project_af_costos_directos_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'project_af_costos_directos_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'project_af_costos_directos_1project_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'project_af_costos_directos_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'project_af_costos_directos_1af_costos_directos_idb',
      ),
    ),
  ),
);