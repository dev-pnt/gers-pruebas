<?php
$module_name = 'AF_ActividadCotizaciones';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'numero_horas',
            'label' => 'LBL_NUMERO_HORAS',
          ),
          1 => 
          array (
            'name' => 'escalafon',
            'studio' => 'visible',
            'label' => 'LBL_ESCALAFON',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'costo_actividad',
            'label' => 'LBL_COSTO_ACTIVIDAD',
          ),
          1 => 
          array (
            'name' => 'opportunities_af_actividadcotizaciones_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
