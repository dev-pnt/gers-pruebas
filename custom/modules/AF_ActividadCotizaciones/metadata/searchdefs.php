<?php
$module_name = 'AF_ActividadCotizaciones';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'numero_horas' => 
      array (
        'type' => 'int',
        'label' => 'LBL_NUMERO_HORAS',
        'width' => '10%',
        'default' => true,
        'name' => 'numero_horas',
      ),
      'escalafon' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ESCALAFON',
        'width' => '10%',
        'default' => true,
        'name' => 'escalafon',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'width' => '10%',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'numero_horas' => 
      array (
        'type' => 'int',
        'label' => 'LBL_NUMERO_HORAS',
        'width' => '10%',
        'default' => true,
        'name' => 'numero_horas',
      ),
      'escalafon' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ESCALAFON',
        'width' => '10%',
        'default' => true,
        'name' => 'escalafon',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>