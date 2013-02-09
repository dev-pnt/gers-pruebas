<?php
$module_name = 'af_royeccion_facturacion';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fecha_proyectada',
            'label' => 'LBL_FECHA_PROYECTADA',
          ),
          1 => 
          array (
            'name' => 'fecha_real',
            'label' => 'LBL_FECHA_REAL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'valor_proyectado',
            'label' => 'LBL_VALOR_PROYECTADO',
          ),
          1 => 
          array (
            'name' => 'valor_corregido',
            'label' => 'LBL_VALOR_CORREGIDO',
          ),
        ),
      ),
    ),
  ),
);
?>
