<?php 
 $GLOBALS["dictionary"]["Opportunity"]=array (
  'table' => 'opportunities',
  'audited' => true,
  'unified_search' => true,
  'full_text_search' => true,
  'unified_search_default_enabled' => true,
  'duplicate_merge' => true,
  'comment' => 'An opportunity is the target of selling activities',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_OPPORTUNITY_NAME',
      'type' => 'name',
      'dbType' => 'varchar',
      'len' => '50',
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'comment' => 'Name of the opportunity',
      'merge_filter' => 'selected',
      'importable' => 'required',
      'required' => true,
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'opportunities_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'opportunities_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'opportunities_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'opportunity_type' => 
    array (
      'name' => 'opportunity_type',
      'vname' => 'LBL_TYPE',
      'type' => 'enum',
      'options' => 'opportunity_type_dom',
      'len' => '255',
      'audited' => true,
      'comment' => 'Type of opportunity (ex: Existing, New)',
      'merge_filter' => 'enabled',
    ),
    'account_name' => 
    array (
      'name' => 'account_name',
      'rname' => 'name',
      'id_name' => 'account_id',
      'vname' => 'LBL_ACCOUNT_NAME',
      'type' => 'relate',
      'table' => 'accounts',
      'join_name' => 'accounts',
      'isnull' => 'true',
      'module' => 'Accounts',
      'dbType' => 'varchar',
      'link' => 'accounts',
      'len' => '255',
      'source' => 'non-db',
      'unified_search' => true,
      'required' => true,
      'importable' => 'required',
    ),
    'account_id' => 
    array (
      'name' => 'account_id',
      'vname' => 'LBL_ACCOUNT_ID',
      'type' => 'id',
      'source' => 'non-db',
      'audited' => true,
    ),
    'campaign_id' => 
    array (
      'name' => 'campaign_id',
      'comment' => 'Campaign that generated lead',
      'vname' => 'LBL_CAMPAIGN_ID',
      'rname' => 'id',
      'type' => 'id',
      'dbType' => 'id',
      'table' => 'campaigns',
      'isnull' => 'true',
      'module' => 'Campaigns',
      'reportable' => false,
      'massupdate' => false,
      'duplicate_merge' => 'disabled',
    ),
    'campaign_name' => 
    array (
      'name' => 'campaign_name',
      'rname' => 'name',
      'id_name' => 'campaign_id',
      'vname' => 'LBL_CAMPAIGN',
      'type' => 'relate',
      'link' => 'campaign_opportunities',
      'isnull' => 'true',
      'table' => 'campaigns',
      'module' => 'Campaigns',
      'source' => 'non-db',
    ),
    'campaign_opportunities' => 
    array (
      'name' => 'campaign_opportunities',
      'type' => 'link',
      'vname' => 'LBL_CAMPAIGN_OPPORTUNITY',
      'relationship' => 'campaign_opportunities',
      'source' => 'non-db',
    ),
    'lead_source' => 
    array (
      'name' => 'lead_source',
      'vname' => 'LBL_LEAD_SOURCE',
      'type' => 'enum',
      'options' => 'lead_source_dom',
      'len' => '50',
      'comment' => 'Source of the opportunity',
      'merge_filter' => 'enabled',
    ),
    'amount' => 
    array (
      'name' => 'amount',
      'vname' => 'LBL_AMOUNT',
      'type' => 'currency',
      'dbType' => 'double',
      'comment' => 'Unconverted amount of the opportunity',
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'required' => false,
      'options' => 'numeric_range_search_dom',
      'enable_range_search' => true,
      'audited' => true,
      'comments' => 'Unconverted amount of the opportunity',
      'duplicate_merge_dom_value' => '1',
      'merge_filter' => 'disabled',
    ),
    'amount_usdollar' => 
    array (
      'name' => 'amount_usdollar',
      'vname' => 'LBL_AMOUNT_USDOLLAR',
      'type' => 'currency',
      'group' => 'amount',
      'dbType' => 'double',
      'disable_num_format' => true,
      'duplicate_merge' => '0',
      'audited' => true,
      'comment' => 'Formatted amount of the opportunity',
      'studio' => 
      array (
        'wirelesseditview' => false,
        'wirelessdetailview' => false,
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
      ),
    ),
    'currency_id' => 
    array (
      'name' => 'currency_id',
      'type' => 'id',
      'group' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
      ),
      'reportable' => false,
      'comment' => 'Currency used for display purposes',
    ),
    'currency_name' => 
    array (
      'name' => 'currency_name',
      'rname' => 'name',
      'id_name' => 'currency_id',
      'vname' => 'LBL_CURRENCY_NAME',
      'type' => 'relate',
      'isnull' => 'true',
      'table' => 'currencies',
      'module' => 'Currencies',
      'source' => 'non-db',
      'function' => 
      array (
        'name' => 'getCurrencyNameDropDown',
        'returns' => 'html',
      ),
      'studio' => 'false',
      'duplicate_merge' => 'disabled',
    ),
    'currency_symbol' => 
    array (
      'name' => 'currency_symbol',
      'rname' => 'symbol',
      'id_name' => 'currency_id',
      'vname' => 'LBL_CURRENCY_SYMBOL',
      'type' => 'relate',
      'isnull' => 'true',
      'table' => 'currencies',
      'module' => 'Currencies',
      'source' => 'non-db',
      'function' => 
      array (
        'name' => 'getCurrencySymbolDropDown',
        'returns' => 'html',
      ),
      'studio' => 'false',
      'duplicate_merge' => 'disabled',
    ),
    'date_closed' => 
    array (
      'name' => 'date_closed',
      'vname' => 'LBL_DATE_CLOSED',
      'type' => 'date',
      'audited' => true,
      'comment' => 'Expected or actual date the oppportunity will close',
      'importable' => 'required',
      'required' => true,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_created' => 
    array (
      'name' => 'date_created',
      'vname' => 'LBL_DATE_CREATED',
      'type' => 'date',
      'audited' => true,
      'comment' => 'Expected or actual date the oppportunity was created',
      'importable' => 'required',
      'required' => true,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_cotizacion' => 
    array (
      'name' => 'date_cotizacion',
      'vname' => 'LBL_DATE_COTIZACION',
      'type' => 'date',
      'audited' => true,
      'comment' => 'Expected or actual date the oppportunity was QUOTED',
      'importable' => 'required',
      'required' => false,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_request' => 
    array (
      'name' => 'date_request',
      'vname' => 'LBL_DATE_REQUEST',
      'type' => 'date',
      'audited' => true,
      'comment' => 'Expected or actual date the oppportunity was requested',
      'importable' => 'required',
      'required' => true,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_award' => 
    array (
      'name' => 'date_award',
      'vname' => 'LBL_DATE_AWARD',
      'type' => 'date',
      'audited' => true,
      'comment' => 'Expected or actual date the oppportunity was awarded',
      'importable' => 'required',
      'required' => true,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_real_adjudicacion' => 
    array (
      'name' => 'date_real_adjudicacion',
      'vname' => 'LBL_DATE_REAL_ADJUDICACION',
      'type' => 'date',
      'audited' => true,
      'comment' => 'Expected or actual date the oppportunity was awarded',
      'importable' => 'required',
      'required' => false,
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'razones_perdida' => 
    array (
      'name' => 'razones_perdida',
      'vname' => 'LBL_RAZONES_PERDIDA',
      'type' => 'enum',
      'audited' => true,
      'importable' => 'required',
      'required' => false,
      'options' => 'razon_perdida_list',
    ),
    'departamento_encargado' => 
    array (
      'name' => 'departamento_encargado',
      'vname' => 'LBL_DEPARTAMENTO_ENCARGADO',
      'type' => 'enum',
      'audited' => true,
      'importable' => 'required',
      'required' => true,
      'options' => 'contacto_area_list',
      'merge_filter' => 'disabled',
    ),
    'departamento_costos' => 
    array (
      'name' => 'departamento_costos',
      'vname' => 'LBL_DEPARTAMENTO_COSTOS',
      'type' => 'enum',
      'audited' => true,
      'importable' => 'required',
      'required' => false,
      'options' => 'contacto_area_list',
    ),
    'probabilidad' => 
    array (
      'name' => 'probabilidad',
      'vname' => 'LBL_PROBABILIDAD',
      'type' => 'enum',
      'audited' => true,
      'importable' => 'required',
      'required' => false,
      'options' => 'probabilidad_list',
    ),
    'version' => 
    array (
      'name' => 'version',
      'vname' => 'LBL_VERSION',
      'type' => 'enum',
      'audited' => true,
      'importable' => 'required',
      'required' => true,
      'options' => 'version_list',
      'massupdate' => '1',
      'merge_filter' => 'disabled',
    ),
    'etapas' => 
    array (
      'name' => 'etapas',
      'vname' => 'LBL_ETAPAS',
      'type' => 'enum',
      'audited' => true,
      'importable' => 'required',
      'required' => false,
      'options' => 'etapas_list',
    ),
    'linea' => 
    array (
      'name' => 'linea',
      'vname' => 'LBL_LINEA',
      'type' => 'multienum',
      'isMultiSelect' => true,
      'audited' => true,
      'importable' => 'required',
      'required' => false,
      'options' => 'linea_list',
    ),
    'consecutivo_interno' => 
    array (
      'name' => 'consecutivo_interno',
      'vname' => 'LBL_CONSECUTIVO_INTERNO',
      'type' => 'varchar',
      'audited' => true,
      'required' => false,
    ),
    'forma_pago' => 
    array (
      'name' => 'forma_pago',
      'vname' => 'LBL_FORMA_PAGO',
      'type' => 'text',
      'audited' => true,
      'required' => false,
    ),
    'seguimiento_mercadeo' => 
    array (
      'name' => 'seguimiento_mercadeo',
      'vname' => 'LBL_SEGUIMIENTO_MERCADEO',
      'type' => 'text',
      'audited' => true,
      'required' => false,
    ),
    'descuento' => 
    array (
      'name' => 'descuento',
      'vname' => 'LBL_DESCUENTO',
      'type' => 'currency',
      'audited' => true,
      'required' => false,
    ),
    'valor_real' => 
    array (
      'name' => 'valor_real',
      'vname' => 'LBL_VALOR_REAL',
      'type' => 'currency',
      'audited' => true,
      'required' => false,
    ),
    'consecutivo_cliente' => 
    array (
      'name' => 'consecutivo_cliente',
      'vname' => 'LBL_CONSECUTIVO_CLIENTE',
      'type' => 'varchar',
      'audited' => true,
      'required' => false,
    ),
    'referencias' => 
    array (
      'name' => 'referencias',
      'vname' => 'LBL_REFERENCIAS',
      'type' => 'varchar',
      'audited' => true,
      'required' => false,
    ),
    'suma_mejor_estimado' => 
    array (
      'name' => 'suma_mejor_estimado',
      'vname' => 'LBL_SUMA_MEJOR_ESTIMADO',
      'type' => 'bool',
      'audited' => true,
      'required' => false,
    ),
    'encargado_oferta' => 
    array (
      'name' => 'encargado_oferta',
      'vname' => 'LBL_ENCARGADO_OFERTA',
      'type' => 'enum',
      'options' => '',
      'audited' => true,
      'required' => false,
    ),
    'costo_personal' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'costo_personal',
      'vname' => 'LBL_COSTO_PERSONAL',
      'type' => 'html',
      'massupdate' => 0,
      'default' => '&lt;div id=&quot;espacio_costo_personal&quot;&gt;Aqui se carga el costo personal.&lt;/div&gt;',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'default_value' => '&lt;div id=&quot;espacio_costo_personal&quot;&gt;Aqui se carga el costo personal.&lt;/div&gt;',
      'studio' => 'visible',
      'dbType' => 'text',
    ),
    'costo_cotizacion_html' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'costo_cotizacion_html',
      'vname' => 'LBL_COSTO_COTIZACION_HTML',
      'type' => 'html',
      'massupdate' => 0,
      'default' => '&lt;div id=&quot;espacio_costo_cotizacion&quot;&gt;Aqui se carga el costo cotizacion.&lt;/div&gt;',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'default_value' => '&lt;div id=&quot;espacio_costo_cotizacion&quot;&gt;Aqui se carga el costo cotizacion.&lt;/div&gt;',
      'studio' => 'visible',
      'dbType' => 'text',
    ),
    'costo_gastos' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'costo_gastos',
      'vname' => 'LBL_COSTO_GASTOS',
      'type' => 'html',
      'massupdate' => 0,
      'default' => '&lt;div id=&quot;espacio_costo_gastos&quot;&gt;Aqui se carga el costo gastos.&lt;/div&gt;',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'default_value' => '&lt;div id=&quot;espacio_costo_gastos&quot;&gt;Aqui se carga el costo gastos.&lt;/div&gt;',
      'studio' => 'visible',
      'dbType' => 'text',
    ),
    'costo_categorias' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'costo_categorias',
      'vname' => 'LBL_COSTO_CATEGORIAS',
      'type' => 'html',
      'massupdate' => 0,
      'default' => '&lt;div id=&quot;espacio_costo_categorias&quot;&gt;Aqui se carga el costo categorias.&lt;/div&gt;',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'default_value' => '&lt;div id=&quot;espacio_costo_categorias&quot;&gt;Aqui se carga el costo categorias.&lt;/div&gt;',
      'studio' => 'visible',
      'dbType' => 'text',
    ),
    'create_flag' => 
    array (
      'name' => 'create_flag',
      'vname' => 'LBL_CREATE_FLAG',
      'type' => 'bool',
      'audited' => true,
      'required' => false,
    ),
    'consecutivo_automatico' => 
    array (
      'name' => 'consecutivo_automatico',
      'vname' => 'LBL_CONSECUTIVO_AUTOMATICO',
      'type' => 'varchar',
      'audited' => false,
      'required' => false,
    ),
    'contador_automatico' => 
    array (
      'name' => 'contador_automatico',
      'vname' => 'LBL_CONTADOR_AUTOMATICO',
      'type' => 'int',
      'audited' => false,
      'required' => false,
    ),
    'anio_control' => 
    array (
      'name' => 'anio_control',
      'vname' => 'LBL_ANIO_CONTROL',
      'type' => 'int',
      'audited' => false,
      'required' => false,
    ),
    'total_directos' => 
    array (
      'name' => 'total_directos',
      'vname' => 'LBL_TOTAL_DIRECTOS',
      'type' => 'int',
      'audited' => true,
      'required' => false,
    ),
    'total_estudios' => 
    array (
      'name' => 'total_estudios',
      'vname' => 'LBL_TOTAL_ESTUDIOS',
      'type' => 'int',
      'audited' => true,
      'required' => false,
    ),
    'next_step' => 
    array (
      'name' => 'next_step',
      'vname' => 'LBL_NEXT_STEP',
      'type' => 'varchar',
      'len' => '100',
      'comment' => 'The next step in the sales process',
      'merge_filter' => 'enabled',
    ),
    'sales_stage' => 
    array (
      'name' => 'sales_stage',
      'vname' => 'LBL_SALES_STAGE',
      'type' => 'enum',
      'options' => 'sales_stage_dom',
      'len' => '255',
      'audited' => true,
      'comment' => 'Indication of progression towards closure',
      'merge_filter' => 'enabled',
      'importable' => 'required',
      'required' => true,
    ),
    'probability' => 
    array (
      'name' => 'probability',
      'vname' => 'LBL_PROBABILITY',
      'type' => 'int',
      'dbType' => 'double',
      'audited' => true,
      'comment' => 'The probability of closure',
      'validation' => 
      array (
        'type' => 'range',
        'min' => 0,
        'max' => 100,
      ),
      'merge_filter' => 'enabled',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'accounts_opportunities',
      'source' => 'non-db',
      'link_type' => 'one',
      'module' => 'Accounts',
      'bean_name' => 'Account',
      'vname' => 'LBL_ACCOUNTS',
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'relationship' => 'opportunities_contacts',
      'source' => 'non-db',
      'module' => 'Contacts',
      'bean_name' => 'Contact',
      'rel_fields' => 
      array (
        'contact_role' => 
        array (
          'type' => 'enum',
          'options' => 'opportunity_relationship_type_dom',
        ),
      ),
      'vname' => 'LBL_CONTACTS',
    ),
    'tasks' => 
    array (
      'name' => 'tasks',
      'type' => 'link',
      'relationship' => 'opportunity_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_TASKS',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'opportunity_notes',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
    'meetings' => 
    array (
      'name' => 'meetings',
      'type' => 'link',
      'relationship' => 'opportunity_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_MEETINGS',
    ),
    'calls' => 
    array (
      'name' => 'calls',
      'type' => 'link',
      'relationship' => 'opportunity_calls',
      'source' => 'non-db',
      'vname' => 'LBL_CALLS',
    ),
    'emails' => 
    array (
      'name' => 'emails',
      'type' => 'link',
      'relationship' => 'emails_opportunities_rel',
      'source' => 'non-db',
      'vname' => 'LBL_EMAILS',
    ),
    'documents' => 
    array (
      'name' => 'documents',
      'type' => 'link',
      'relationship' => 'documents_opportunities',
      'source' => 'non-db',
      'vname' => 'LBL_DOCUMENTS_SUBPANEL_TITLE',
    ),
    'project' => 
    array (
      'name' => 'project',
      'type' => 'link',
      'relationship' => 'projects_opportunities',
      'source' => 'non-db',
      'vname' => 'LBL_PROJECTS',
    ),
    'leads' => 
    array (
      'name' => 'leads',
      'type' => 'link',
      'relationship' => 'opportunity_leads',
      'source' => 'non-db',
      'vname' => 'LBL_LEADS',
    ),
    'campaigns' => 
    array (
      'name' => 'campaigns',
      'type' => 'link',
      'relationship' => 'opportunities_campaign',
      'module' => 'CampaignLog',
      'bean_name' => 'CampaignLog',
      'source' => 'non-db',
      'vname' => 'LBL_CAMPAIGNS',
      'reportable' => false,
    ),
    'campaign_link' => 
    array (
      'name' => 'campaign_link',
      'type' => 'link',
      'relationship' => 'opportunities_campaign',
      'vname' => 'LBL_CAMPAIGNS',
      'link_type' => 'one',
      'module' => 'Campaigns',
      'bean_name' => 'Campaign',
      'source' => 'non-db',
      'reportable' => false,
    ),
    'currencies' => 
    array (
      'name' => 'currencies',
      'type' => 'link',
      'relationship' => 'opportunity_currencies',
      'source' => 'non-db',
      'vname' => 'LBL_CURRENCIES',
    ),
    'opportunities_af_costos_directos_1' => 
    array (
      'name' => 'opportunities_af_costos_directos_1',
      'type' => 'link',
      'relationship' => 'opportunities_af_costos_directos_1',
      'source' => 'non-db',
      'side' => 'right',
      'vname' => 'LBL_OPPORTUNITIES_AF_COSTOS_DIRECTOS_1_FROM_AF_COSTOS_DIRECTOS_TITLE',
    ),
    'opportunities_af_servicios_externos_1' => 
    array (
      'name' => 'opportunities_af_servicios_externos_1',
      'type' => 'link',
      'relationship' => 'opportunities_af_servicios_externos_1',
      'source' => 'non-db',
      'side' => 'right',
      'vname' => 'LBL_OPPORTUNITIES_AF_SERVICIOS_EXTERNOS_1_FROM_AF_SERVICIOS_EXTERNOS_TITLE',
    ),
    'opportunities_af_actividadcotizaciones_1' => 
    array (
      'name' => 'opportunities_af_actividadcotizaciones_1',
      'type' => 'link',
      'relationship' => 'opportunities_af_actividadcotizaciones_1',
      'source' => 'non-db',
      'side' => 'right',
      'vname' => 'LBL_OPPORTUNITIES_AF_ACTIVIDADCOTIZACIONES_1_FROM_AF_ACTIVIDADCOTIZACIONES_TITLE',
    ),
    'opportunities_project_1' => 
    array (
      'name' => 'opportunities_project_1',
      'type' => 'link',
      'relationship' => 'opportunities_project_1',
      'source' => 'non-db',
      'vname' => 'LBL_OPPORTUNITIES_PROJECT_1_FROM_PROJECT_TITLE',
      'id_name' => 'opportunities_project_1project_idb',
    ),
    'opportunities_project_1_name' => 
    array (
      'name' => 'opportunities_project_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_OPPORTUNITIES_PROJECT_1_FROM_PROJECT_TITLE',
      'save' => true,
      'id_name' => 'opportunities_project_1project_idb',
      'link' => 'opportunities_project_1',
      'table' => 'project',
      'module' => 'Project',
      'rname' => 'name',
    ),
    'opportunities_project_1project_idb' => 
    array (
      'name' => 'opportunities_project_1project_idb',
      'type' => 'link',
      'relationship' => 'opportunities_project_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_OPPORTUNITIES_PROJECT_1_FROM_PROJECT_TITLE',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'opportunitiespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    0 => 
    array (
      'name' => 'idx_opp_name',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'name',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_opp_assigned',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'assigned_user_id',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_opp_id_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'id',
        1 => 'deleted',
      ),
    ),
  ),
  'relationships' => 
  array (
    'opportunities_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'opportunities_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'opportunities_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'opportunity_calls' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Opportunities',
    ),
    'opportunity_meetings' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Opportunities',
    ),
    'opportunity_tasks' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Opportunities',
    ),
    'opportunity_notes' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Opportunities',
    ),
    'opportunity_emails' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Opportunities',
    ),
    'opportunity_leads' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'opportunity_id',
      'relationship_type' => 'one-to-many',
    ),
    'opportunity_currencies' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'currency_id',
      'rhs_module' => 'Currencies',
      'rhs_table' => 'currencies',
      'rhs_key' => 'id',
      'relationship_type' => 'one-to-many',
    ),
    'opportunities_campaign' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'campaign_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_locking' => true,
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);