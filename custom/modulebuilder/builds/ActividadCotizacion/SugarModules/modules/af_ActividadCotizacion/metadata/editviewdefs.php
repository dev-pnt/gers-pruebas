<?php
$module_name = 'af_ActividadCotizacion';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'numero_horas',
            'label' => 'LBL_NUMERO_HORAS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'escalafon',
            'studio' => 'visible',
            'label' => 'LBL_ESCALAFON',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>