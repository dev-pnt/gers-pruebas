<?php
$module_name = 'af_servicios_externos';
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
          1 => 
          array (
            'name' => 'cantidad',
            'label' => 'LBL_CANTIDAD',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'porcentaje',
            'label' => 'LBL_PORCENTAJE',
          ),
          1 => 
          array (
            'name' => 'valor',
            'label' => 'LBL_VALOR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'subtotal',
            'label' => 'LBL_SUBTOTAL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'opportunities_af_servicios_externos_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
