<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
            'name' => 'razon_social',
            'label' => 'LBL_RAZON_SOCIAL',
          ),
          1 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'phone_alternate',
            'comment' => 'An alternate phone number',
            'label' => 'LBL_PHONE_ALT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
          1 => 
          array (
            'name' => 'sector',
            'label' => 'LBL_SECTOR',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'sector_economico',
            'label' => 'LBL_SECTOR_ECONOMICO',
          ),
          1 => 
          array (
            'name' => 'subsector_economico',
            'label' => 'LBL_SUBSECTOR_ECONOMICO',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'calificacion',
            'label' => 'LBL_CALIFICACION',
          ),
          1 => 
          array (
            'name' => 'rangos',
            'label' => 'LBL_RANGOS',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'total_vendido_con_gers',
            'label' => 'LBL_TOTAL_VENDIDO_CON_GERS',
          ),
          1 => 
          array (
            'name' => 'relaciones_otras_empresas',
            'label' => 'LBL_RELACIONES_OTRAS_EMPRESAS',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'impuestos',
            'label' => 'LBL_IMPUESTOS',
          ),
          1 => 
          array (
            'name' => 'exogena',
            'label' => 'LBL_EXOGENA',
          ),
        ),
        11 => 
        array (
          0 => 'parent_name',
        ),
        12 => 
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
