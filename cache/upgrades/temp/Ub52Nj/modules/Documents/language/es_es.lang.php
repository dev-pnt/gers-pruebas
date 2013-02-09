<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * The Original Code is: SugarCRM Enterprise
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2010 SugarCRM, Inc.;
 * All Rights Reserved.
 ********************************************************************************/
/*********************************************************************************
 * Description:  Defines the Spanish language pack for the base application.
 * $Id: es_es.lang.php,v 1.12 2010/08/03 15:00:13 aserrano Exp $
 * Source: SugarCRM 6.0.0
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Documentos',
  'LBL_MODULE_TITLE' => 'Documentos: Inicio',
  'LNK_NEW_DOCUMENT' => 'Crear Documento',
  'LNK_DOCUMENT_LIST' => 'Ver Documentos',
  'LBL_DOC_REV_HEADER' => 'Versiones',
  'LBL_SEARCH_FORM_TITLE'=> 'Búsqueda de Documentos',
  'LBL_DOCUMENT_ID' => 'ID de Documento',
  'LBL_NAME' => 'Nombre de Documento',
	//module
  'LBL_DESCRIPTION' => 'Descripción',
  'LBL_CATEGORY' => 'Categoría',
  'LBL_SUBCATEGORY' => 'Subcategoría',
  'LBL_STATUS' => 'Estado',
  'LBL_CREATED_BY' => 'Creado por',
	//vardef labels
  'LBL_DATE_ENTERED' => 'Fecha Creación',
  'LBL_DATE_MODIFIED' => 'Fecha Modificación',
  'LBL_DELETED' => 'Eliminado',
  'LBL_MODIFIED' => 'Modificado por ID',
  'LBL_MODIFIED_USER' => 'Modificado por',
  'LBL_CREATED' => 'Creado por',
  'LBL_REVISIONS' => 'Versiones',
  'LBL_RELATED_DOCUMENT_ID'=>'ID de Documento Relacionado',
  'LBL_RELATED_DOCUMENT_REVISION_ID'=>'ID de Versión de Documento Relacionado',
  'LBL_IS_TEMPLATE'=>'Es una Plantilla',
  'LBL_TEMPLATE_TYPE'=>'Tipo de Documento',
  'LBL_ASSIGNED_TO_NAME'=>'Asignado a:',
  'LBL_REVISION_NAME' => 'Número de Versión',
  'LBL_FILENAME' => 'Nombre de Archivo:',
  'LBL_MIME' => 'Tipo MIME',
  'LBL_REVISION' => 'Versión',
  'LBL_DOCUMENT' => 'Documento Relacionado',
  'LBL_LATEST_REVISION' => 'Última Versión',
  'LBL_CHANGE_LOG' => 'Historial de Cambios:',
  'LBL_ACTIVE_DATE' => 'Fecha de Publicación',
  'LBL_EXPIRATION_DATE' => 'Fecha de Caducidad',
  'LBL_FILE_EXTENSION' => 'Extensión de Archivo',
  'LBL_LAST_REV_MIME_TYPE' => 'Tipo MIME de la última versión',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Sin especificar',
  //quick search
  'LBL_NEW_FORM_TITLE' => 'Nuevo Documento',
  'LBL_DOC_NAME' => 'Nombre de Documento:',
  'LBL_DOC_VERSION' => 'Versión:',
  'LBL_CATEGORY_VALUE' => 'Categoría:',
  'LBL_SUBCATEGORY_VALUE' => 'Subcategoría:',
  'LBL_DOC_STATUS' => 'Estado:',
  'LBL_LAST_REV_CREATOR' => 'Versión Creada Por:',
  'LBL_LASTEST_REVISION_NAME' => 'Nombre de la última versión:',
  'LBL_SELECTED_REVISION_NAME' => 'Nombre de la versión seleccionada:',
  'LBL_CONTRACT_STATUS' => 'Estado del contrato:',
  'LBL_CONTRACT_NAME' => 'Nombre del contrato:',
  'LBL_LAST_REV_DATE' => 'Fecha de Versión:',
  'LBL_DOWNNLOAD_FILE' => 'Archivo de Descarga:',
  'LBL_DET_RELATED_DOCUMENT'=>'Documento Relacionado:',
  'LBL_DET_RELATED_DOCUMENT_VERSION'=>'Versión de Documento Relacionado:',
  'LBL_DET_IS_TEMPLATE'=>'¿Plantilla? :',
  'LBL_DET_TEMPLATE_TYPE'=>'Tipo de Documento:',
  'LBL_TEAM'=> 'Equipo:',

	//document edit and detail view
  'LBL_DOC_DESCRIPTION' => 'Descripción:',
  'LBL_DOC_ACTIVE_DATE' => 'Fecha de Publicación:',
  'LBL_DOC_EXP_DATE' => 'Fecha de Caducidad:',
  'LBL_LIST_FORM_TITLE' => 'Lista de Documentos',
  'LBL_LIST_DOCUMENT' => 'Documento',
  'LBL_LIST_DOWNLOAD' => 'Descargar',
  'LBL_LIST_CATEGORY' => 'Categoría',
  'LBL_LIST_SUBCATEGORY' => 'Subcategoría',
  'LBL_LIST_REVISION' => 'Versión',
  'LBL_LIST_LAST_REV_CREATOR' => 'Publicado Por',
  'LBL_LIST_LAST_REV_DATE' => 'Fecha de Versión',
  'LBL_LIST_VIEW_DOCUMENT' => 'Ver',
  'LBL_LIST_ACTIVE_DATE' => 'Fecha de Publicación',
  'LBL_LIST_EXP_DATE' => 'Fecha de Caducidad',
	//document list view.
  'LBL_LIST_STATUS' => 'Estado',	
  'LBL_LINKED_ID' => 'Id enlace',
  'LBL_SELECTED_REVISION_ID' => 'Id de versión seleccionada',
  'LBL_LATEST_REVISION_ID' => 'Id de última versión',
  'LBL_SELECTED_REVISION_FILENAME' => 'Nombre de archivo de versión seleccionada',
  'LBL_FILE_URL' => 'URL del archivo',
  'LBL_REVISIONS_PANEL' => 'Detalles de la Versión',
  'LBL_REVISIONS_SUBPANEL' => 'Versiones',
  'LBL_SF_DOCUMENT' => 'Nombre de Documento:',
  'LBL_SF_CATEGORY' => 'Categoría:',
  'LBL_SF_SUBCATEGORY' => 'Subcategoría:',
  'LBL_SF_ACTIVE_DATE' => 'Fecha de Publicación:',
  'LBL_SF_EXP_DATE' => 'Fecha de Caducidad:',
  'DEF_CREATE_LOG' => 'Documento Creado',
  'ERR_DOC_NAME' => 'Nombre de Documento',
  'ERR_DOC_ACTIVE_DATE' => 'Fecha de Publicación',
  'ERR_DOC_EXP_DATE' => 'Fecha de Caducidad',
	//document revisions.
  'ERR_FILENAME' => 'Nombre de Archivo',
  'ERR_DOC_VERSION' => 'Versión de Documento',
  'ERR_DELETE_CONFIRM' => '¿Desea eliminar esta versión del documento?',
  'ERR_DELETE_LATEST_VERSION' => 'No tiene permisos para eliminar la última versión de un documento.',
  'LNK_NEW_MAIL_MERGE' => 'Combinar Correspondencia',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Plantilla para Combinar Correspondencia:',
  'LBL_TREE_TITLE' => 'Documentos',
  	//sub-panel vardefs.
  'LBL_LIST_DOCUMENT_NAME'=>'Nombre de Documento',
  'LBL_CONTRACT_NAME'=>'Nombre de Contrato:',
  'LBL_LIST_IS_TEMPLATE'=>'¿Plantilla?',
  'LBL_LIST_TEMPLATE_TYPE'=>'Tipo de Documento',
  'LBL_LIST_SELECTED_REVISION'=>'Versión Seleccionada',
  'LBL_LIST_LATEST_REVISION'=>'Última Versión',
  'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Contratos Relacionados',
  //'LNK_DOCUMENT_CAT'=>'Categorías de Documentos',
  'LBL_LAST_REV_CREATE_DATE'=>'Fecha de Creación de Última Versión',
  'LBL_CONTRACTS' => 'Contratos',
  'LBL_CREATED_USER' => 'Usuario Creado',
  'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Versiones',
  'LBL_DOCUMENT_INFORMATION' => 'Visión General',
);


?>
