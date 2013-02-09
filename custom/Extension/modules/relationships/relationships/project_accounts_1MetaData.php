<?php
// created: 2013-01-21 08:20:07
$dictionary["project_accounts_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'project_accounts_1' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'project_accounts_1_c',
      'join_key_lhs' => 'project_accounts_1project_ida',
      'join_key_rhs' => 'project_accounts_1accounts_idb',
    ),
  ),
  'table' => 'project_accounts_1_c',
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
      'name' => 'project_accounts_1project_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'project_accounts_1accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'project_accounts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'project_accounts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'project_accounts_1project_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'project_accounts_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'project_accounts_1accounts_idb',
      ),
    ),
  ),
);