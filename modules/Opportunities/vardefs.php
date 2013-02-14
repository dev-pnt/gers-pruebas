<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/


$dictionary['Opportunity'] = array('table' => 'opportunities','audited'=>true, 'unified_search' => true, 'full_text_search' => true, 'unified_search_default_enabled' => true, 'duplicate_merge'=>true,
		'comment' => 'An opportunity is the target of selling activities',
		'fields' => array (
  'name' =>
  array (
    'name' => 'name',
    'vname' => 'LBL_OPPORTUNITY_NAME',
    'type' => 'name',
    'dbType' => 'varchar',
    'len' => '50',
    'unified_search' => true,
    'full_text_search' => array('boost' => 3),
    'comment' => 'Name of the opportunity',
    'merge_filter' => 'selected',
    'importable' => 'required',
    'required' => true,
  ),
  'opportunity_type' =>
  array (
    'name' => 'opportunity_type',
    'vname' => 'LBL_TYPE',
    'type' => 'enum',
    'options'=> 'opportunity_type_dom',
    'len' => '255',
    'audited'=>true,
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
    'join_name'=>'accounts',
    'isnull' => 'true',
    'module' => 'Accounts',
    'dbType' => 'varchar',
    'link'=>'accounts',
    'len' => '255',
   	 'source'=>'non-db',
   	 'unified_search' => true,
   	 'required' => true,
   	 'importable' => 'required',
     'required' => true,
  ),
  'account_id' =>
   array (
    'name' => 'account_id',
    'vname' => 'LBL_ACCOUNT_ID',
    'type' => 'id',
    'source'=>'non-db',
    'audited'=>true,
  ),
  'campaign_id' =>
      array (
        'name' => 'campaign_id',
        'comment' => 'Campaign that generated lead',
        'vname'=>'LBL_CAMPAIGN_ID',
        'rname' => 'id',
        'type' => 'id',
        'dbType'=>'id',
        'table' => 'campaigns',
        'isnull' => 'true',
        'module' => 'Campaigns',
        //'dbType' => 'char',
        'reportable'=>false,
        'massupdate' => false,
        'duplicate_merge'=> 'disabled',
      ),
  'campaign_name'=>
   	   array(
		'name'=>'campaign_name',
		'rname'=>'name',
		'id_name'=>'campaign_id',
		'vname'=>'LBL_CAMPAIGN',
		'type'=>'relate',
		'link' => 'campaign_opportunities',
		'isnull'=>'true',
		'table' => 'campaigns',
		'module'=>'Campaigns',
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
    //'function'=>array('vname'=>'getCurrencyType'),
    'type' => 'currency',
//    'disable_num_format' => true,
    'dbType' => 'double',
    'comment' => 'Unconverted amount of the opportunity',
    'importable' => 'required',
    'duplicate_merge'=>'1',
    'required' => true,
  	'options' => 'numeric_range_search_dom',
    'enable_range_search' => true,
  ),
  'amount_usdollar' =>
  array (
    'name' => 'amount_usdollar',
    'vname' => 'LBL_AMOUNT_USDOLLAR',
    'type' => 'currency',
    'group'=>'amount',
    'dbType' => 'double',
    'disable_num_format' => true,
    'duplicate_merge'=>'0',
    'audited'=>true,
    'comment' => 'Formatted amount of the opportunity',
    'studio' => array('wirelesseditview'=>false, 'wirelessdetailview'=>false, 'editview'=>false, 'detailview'=>false, 'quickcreate'=>false,),
  ),
  'currency_id' =>
  array (
    'name' => 'currency_id',
    'type' => 'id',
    'group'=>'currency_id',
    'vname' => 'LBL_CURRENCY',
	'function'=>array('name'=>'getCurrencyDropDown', 'returns'=>'html'),
    'reportable'=>false,
    'comment' => 'Currency used for display purposes'
  ),
  'currency_name'=>
   	   array(
		'name'=>'currency_name',
		'rname'=>'name',
		'id_name'=>'currency_id',
		'vname'=>'LBL_CURRENCY_NAME',
		'type'=>'relate',
		'isnull'=>'true',
		'table' => 'currencies',
		'module'=>'Currencies',
		'source' => 'non-db',
        'function'=>array('name'=>'getCurrencyNameDropDown', 'returns'=>'html'),
        'studio' => 'false',
   	    'duplicate_merge' => 'disabled',
	),
   'currency_symbol'=>
   	   array(
		'name'=>'currency_symbol',
		'rname'=>'symbol',
		'id_name'=>'currency_id',
		'vname'=>'LBL_CURRENCY_SYMBOL',
		'type'=>'relate',
		'isnull'=>'true',
		'table' => 'currencies',
		'module'=>'Currencies',
		'source' => 'non-db',
        'function'=>array('name'=>'getCurrencySymbolDropDown', 'returns'=>'html'),
        'studio' => 'false',
   	    'duplicate_merge' => 'disabled',
	),
  'date_closed' =>
  array (
    'name' => 'date_closed',
    'vname' => 'LBL_DATE_CLOSED',
    'type' => 'date',
    'audited'=>true,
    'comment' => 'Expected or actual date the oppportunity will close',
	'importable' => 'required',
    'required' => true,
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
  ),
  
  //Creados
  	'date_created' =>
  array (
    'name' => 'date_created',
    'vname' => 'LBL_DATE_CREATED',
    'type' => 'date',
    'audited'=>true,
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
    'audited'=>true,
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
    'audited'=>true,
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
    'audited'=>true,
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
    'audited'=>true,
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
    'audited'=>true,
	'importable' => 'required',
    'required' => false,
    'options' => 'razon_perdida_list',
  ),
    'departamento_encargado' =>
  array (
    'name' => 'departamento_encargado',
    'vname' => 'LBL_DEPARTAMENTO_ENCARGADO',
    'type' => 'enum',
    'audited'=>true,
	'importable' => 'required',
    'required' => false,
    'options' => 'contacto_area_list',
  ),

    'departamento_costos' =>
  array (
    'name' => 'departamento_costos',
    'vname' => 'LBL_DEPARTAMENTO_COSTOS',
    'type' => 'enum',
    'audited'=>true,
	'importable' => 'required',
    'required' => false,
    'options' => 'contacto_area_list',
  ),
    'probabilidad' =>
  array (
    'name' => 'probabilidad',
    'vname' => 'LBL_PROBABILIDAD',
    'type' => 'enum',
    'audited'=>true,
	'importable' => 'required',
    'required' => false,
    'options' => 'probabilidad_list',
  ),
  'version' =>
  array (
    'name' => 'version',
    'vname' => 'LBL_VERSION',
    'type' => 'enum',
    'audited'=>true,
	'importable' => 'required',
    'required' => true,
    'options' => 'version_dom',
  ),
    'etapas' =>
  array (
    'name' => 'etapas',
    'vname' => 'LBL_ETAPAS',
    'type' => 'enum',
    'audited'=>true,
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
    'audited'=>true,
	'importable' => 'required',
    'required' => false,
    'options' => 'linea_list',
  ),
    'consecutivo_interno' =>
  array (
    'name' => 'consecutivo_interno',
    'vname' => 'LBL_CONSECUTIVO_INTERNO',
    'type' => 'varchar',
    'audited'=>true,
    'required' => false,
  ),
     'forma_pago' =>
  array (
    'name' => 'forma_pago',
    'vname' => 'LBL_FORMA_PAGO',
    'type' => 'text',
    'audited'=>true,
    'required' => false,
  ),
     'seguimiento_mercadeo' =>
  array (
    'name' => 'seguimiento_mercadeo',
    'vname' => 'LBL_SEGUIMIENTO_MERCADEO',
    'type' => 'text',
    'audited'=>true,
    'required' => false,
  ),
     'descuento' =>
  array (
    'name' => 'descuento',
    'vname' => 'LBL_DESCUENTO',
    'type' => 'currency',
    'audited'=>true,
    'required' => false,
  ),
     'valor_real' =>
  array (
    'name' => 'valor_real',
    'vname' => 'LBL_VALOR_REAL',
    'type' => 'currency',
    'audited'=>true,
    'required' => false,
  ),
    'consecutivo_cliente' =>
  array (
    'name' => 'consecutivo_cliente',
    'vname' => 'LBL_CONSECUTIVO_CLIENTE',
    'type' => 'varchar',
    'audited'=>true,
    'required' => false,
  ),
    'referencias' =>
  array (
    'name' => 'referencias',
    'vname' => 'LBL_REFERENCIAS',
    'type' => 'varchar',
    'audited'=>true,
    'required' => false,
  ),
    'suma_mejor_estimado' =>
  array (
    'name' => 'suma_mejor_estimado',
    'vname' => 'LBL_SUMA_MEJOR_ESTIMADO',
    'type' => 'bool',
    'audited'=>true,
    'required' => false,
  ),
    'encargado_oferta' =>
  array (
    'name' => 'encargado_oferta',
    'vname' => 'LBL_ENCARGADO_OFERTA',
    'type' => 'enum',
    'options' => '',
    'audited'=>true,
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


//costo_cot
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
    'audited'=>true,
    'required' => false,
  ),
'consecutivo_automatico' =>
  array (
    'name' => 'consecutivo_automatico',
    'vname' => 'LBL_CONSECUTIVO_AUTOMATICO',
    'type' => 'varchar',
    'audited'=>false,
    'required' => false,
  ),
'contador_automatico' =>
  array (
    'name' => 'contador_automatico',
    'vname' => 'LBL_CONTADOR_AUTOMATICO',
    'type' => 'int',
    'audited'=>false,
    'required' => false,
  ),
'anio_control' =>
  array (
    'name' => 'anio_control',
    'vname' => 'LBL_ANIO_CONTROL',
    'type' => 'int',
    'audited'=>false,
    'required' => false,
  ),
	
	
	  
			  'total_directos' =>
			  array (
			    'name' => 'total_directos',
			    'vname' => 'LBL_TOTAL_DIRECTOS',
			    'type' => 'int',
			    'audited'=>true,
			    'required' => false,
			  ),		
			  'total_estudios' =>
			  array (
			    'name' => 'total_estudios',
			    'vname' => 'LBL_TOTAL_ESTUDIOS',
			    'type' => 'int',
			    'audited'=>true,
			    'required' => false,
			  ),		

		//viaticos
  
  //End Creados
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
    'audited'=>true,
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
    'audited'=>true,
    'comment' => 'The probability of closure',
    'validation' => array('type' => 'range', 'min' => 0, 'max' => 100),
    'merge_filter' => 'enabled',
  ),
  'accounts' =>
  array (
  	'name' => 'accounts',
    'type' => 'link',
    'relationship' => 'accounts_opportunities',
    'source'=>'non-db',
    'link_type'=>'one',
    'module'=>'Accounts',
    'bean_name'=>'Account',
		'vname'=>'LBL_ACCOUNTS',
  ),
  'contacts' =>
  array (
  	'name' => 'contacts',
    'type' => 'link',
    'relationship' => 'opportunities_contacts',
    'source'=>'non-db',
    'module'=>'Contacts',
    'bean_name'=>'Contact',
    'rel_fields'=>array('contact_role'=>array('type'=>'enum', 'options'=>'opportunity_relationship_type_dom')),
	'vname'=>'LBL_CONTACTS',
  ),
  'tasks' =>
  array (
  	'name' => 'tasks',
    'type' => 'link',
    'relationship' => 'opportunity_tasks',
    'source'=>'non-db',
		'vname'=>'LBL_TASKS',
  ),
  'notes' =>
  array (
  	'name' => 'notes',
    'type' => 'link',
    'relationship' => 'opportunity_notes',
    'source'=>'non-db',
		'vname'=>'LBL_NOTES',
  ),
  'meetings' =>
  array (
  	'name' => 'meetings',
    'type' => 'link',
    'relationship' => 'opportunity_meetings',
    'source'=>'non-db',
		'vname'=>'LBL_MEETINGS',
  ),
  'calls' =>
  array (
  	'name' => 'calls',
    'type' => 'link',
    'relationship' => 'opportunity_calls',
    'source'=>'non-db',
		'vname'=>'LBL_CALLS',
  ),
  'emails' =>
  array (
  	'name' => 'emails',
    'type' => 'link',
    'relationship' => 'emails_opportunities_rel',/* reldef in emails */
    'source'=>'non-db',
		'vname'=>'LBL_EMAILS',
  ),
  'documents'=>
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
    'source'=>'non-db',
		'vname'=>'LBL_PROJECTS',
  ),
  'leads' =>
  array (
  	'name' => 'leads',
    'type' => 'link',
    'relationship' => 'opportunity_leads',
    'source'=>'non-db',
		'vname'=>'LBL_LEADS',
  ),

    'campaigns' => array(
        'name' => 'campaigns',
        'type' => 'link',
        'relationship' => 'opportunities_campaign',
        'module' => 'CampaignLog',
        'bean_name' => 'CampaignLog',
        'source' => 'non-db',
        'vname' => 'LBL_CAMPAIGNS',
        'reportable' => false
    ),

    'campaign_link' => array(
        'name' => 'campaign_link',
        'type' => 'link',
        'relationship' => 'opportunities_campaign',
        'vname' => 'LBL_CAMPAIGNS',
        'link_type' => 'one',
        'module' => 'Campaigns',
        'bean_name' => 'Campaign',
        'source' => 'non-db',
        'reportable' => false
    ),
  'currencies' =>
  array (
    'name' => 'currencies',
    'type' => 'link',
    'relationship' => 'opportunity_currencies',
    'source'=>'non-db',
    'vname'=>'LBL_CURRENCIES',
  ),
),
		'indices' => array (
			array(
				'name' => 'idx_opp_name',
				'type' => 'index',
				'fields' => array('name'),
			),
			array(
				'name' => 'idx_opp_assigned',
				'type' => 'index',
				'fields' => array('assigned_user_id'),
			),
			array(
				'name' => 'idx_opp_id_deleted',
				'type' => 'index',
				'fields' => array('id','deleted'),
			),
		),

 'relationships' => array (
	'opportunity_calls' => array('lhs_module'=> 'Opportunities', 'lhs_table'=> 'opportunities', 'lhs_key' => 'id',
							  'rhs_module'=> 'Calls', 'rhs_table'=> 'calls', 'rhs_key' => 'parent_id',
							  'relationship_type'=>'one-to-many', 'relationship_role_column'=>'parent_type',
							  'relationship_role_column_value'=>'Opportunities')
	,'opportunity_meetings' => array('lhs_module'=> 'Opportunities', 'lhs_table'=> 'opportunities', 'lhs_key' => 'id',
							  'rhs_module'=> 'Meetings', 'rhs_table'=> 'meetings', 'rhs_key' => 'parent_id',
							  'relationship_type'=>'one-to-many', 'relationship_role_column'=>'parent_type',
							  'relationship_role_column_value'=>'Opportunities')
	,'opportunity_tasks' => array('lhs_module'=> 'Opportunities', 'lhs_table'=> 'opportunities', 'lhs_key' => 'id',
							  'rhs_module'=> 'Tasks', 'rhs_table'=> 'tasks', 'rhs_key' => 'parent_id',
							  'relationship_type'=>'one-to-many', 'relationship_role_column'=>'parent_type',
							  'relationship_role_column_value'=>'Opportunities')
	,'opportunity_notes' => array('lhs_module'=> 'Opportunities', 'lhs_table'=> 'opportunities', 'lhs_key' => 'id',
							  'rhs_module'=> 'Notes', 'rhs_table'=> 'notes', 'rhs_key' => 'parent_id',
							  'relationship_type'=>'one-to-many', 'relationship_role_column'=>'parent_type',
							  'relationship_role_column_value'=>'Opportunities')
	,'opportunity_emails' => array('lhs_module'=> 'Opportunities', 'lhs_table'=> 'opportunities', 'lhs_key' => 'id',
							  'rhs_module'=> 'Emails', 'rhs_table'=> 'emails', 'rhs_key' => 'parent_id',
							  'relationship_type'=>'one-to-many', 'relationship_role_column'=>'parent_type',
							  'relationship_role_column_value'=>'Opportunities')
	,'opportunity_leads' => array('lhs_module'=> 'Opportunities', 'lhs_table'=> 'opportunities', 'lhs_key' => 'id',
							  'rhs_module'=> 'Leads', 'rhs_table'=> 'leads', 'rhs_key' => 'opportunity_id',
							  'relationship_type'=>'one-to-many')
    ,'opportunity_currencies' => array('lhs_module'=> 'Opportunities', 'lhs_table'=> 'opportunities', 'lhs_key' => 'currency_id',
                              'rhs_module'=> 'Currencies', 'rhs_table'=> 'currencies', 'rhs_key' => 'id',
                              'relationship_type'=>'one-to-many')
  ,'opportunities_assigned_user' =>
   array('lhs_module'=> 'Users', 'lhs_table'=> 'users', 'lhs_key' => 'id',
   'rhs_module'=> 'Opportunities', 'rhs_table'=> 'opportunities', 'rhs_key' => 'assigned_user_id',
   'relationship_type'=>'one-to-many')

   ,'opportunities_modified_user' =>
   array('lhs_module'=> 'Users', 'lhs_table'=> 'users', 'lhs_key' => 'id',
   'rhs_module'=> 'Opportunities', 'rhs_table'=> 'opportunities', 'rhs_key' => 'modified_user_id',
   'relationship_type'=>'one-to-many')

   ,'opportunities_created_by' =>
   array('lhs_module'=> 'Users', 'lhs_table'=> 'users', 'lhs_key' => 'id',
   'rhs_module'=> 'Opportunities', 'rhs_table'=> 'opportunities', 'rhs_key' => 'created_by',
   'relationship_type'=>'one-to-many'),
'opportunities_campaign' =>
   array('lhs_module'=> 'Campaigns', 'lhs_table'=> 'campaigns', 'lhs_key' => 'id',
   'rhs_module'=> 'Opportunities', 'rhs_table'=> 'opportunities', 'rhs_key' => 'campaign_id',
   'relationship_type'=>'one-to-many'),
)
//This enables optimistic locking for Saves From EditView
	,'optimistic_locking'=>true,
);
VardefManager::createVardef('Opportunities','Opportunity', array('default', 'assignable',
));
?>
