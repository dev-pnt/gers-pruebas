<?php
$viewdefs ['Accounts'] = 
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'identificacion',
            'label' => 'LBL_IDENTIFICACION',
          ),
          1 => 
          array (
            'name' => 'tipo_identificacion',
            'label' => 'LBL_TIPO_IDENTIFICACION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'prefijo_consecutivo',
            'label' => 'LBL_PREFIJO_CONSECUTIVO',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'comment' => 'Name of the Company',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'enableConnectors' => true,
              'module' => 'Accounts',
              'connectors' => 
              array (
                0 => 'ext_rest_linkedin',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'razon_social',
            'label' => 'LBL_RAZON_SOCIAL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'label' => 'LBL_SHIPPING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'comment' => 'The office phone number',
            'label' => 'LBL_PHONE_OFFICE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
            'displayParams' => 
            array (
              'link_target' => '_blank',
            ),
          ),
          1 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'sector_economico',
            'label' => 'LBL_SECTOR_ECONOMICO',
          ),
          1 => 
          array (
            'name' => 'calificacion',
            'label' => 'LBL_CALIFICACION',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'tamanio_facturacion',
            'label' => 'LBL_TAMANIO_FACTURACION',
          ),
          1 => 
          array (
            'name' => 'total_vendido_con_gers',
            'label' => 'LBL_TOTAL_VENDIDO_CON_GERS',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'relaciones_otras_empresas',
            'label' => 'LBL_RELACIONES_OTRAS_EMPRESAS',
          ),
          1 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_MEMBER_OF',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'project_accounts_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
