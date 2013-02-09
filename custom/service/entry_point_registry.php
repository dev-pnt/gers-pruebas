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

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
$entry_point_registry = array(
    'syncCartera'=>  array('file' => 'custom/include/sync/carteraSync.php', 'auth' => false),
    'syncCompras'=>  array('file' => 'custom/include/sync/comprasSync.php', 'auth' => false),
    'syncItems'=>  array('file' => 'custom/include/sync/itemsSync.php', 'auth' => false),
    'dMesa'=>  array('file' => 'custom/include/pruebaOracle.php', 'auth' => false),
    'importUNOEE'=>  array('file' => 'custom/importInfoFinanciera.php', 'auth' => false),
    'printVisita' => array('file' => 'custom/modules/JM_estudio_credito/imprimirVisita.php', 'auth' => true),
	'cifin' => array('file' => 'custom/include/EstudioCredito/cifin/main.php', 'auth' => true),
	'score_clear' => array('file' => 'custom/include/EstudioCredito/cifin/view/score_clear.php', 'auth' => true),
	'confronta' => array('file' => 'custom/include/EstudioCredito/cifin/view/confronta.php', 'auth' => true),
	'confrontaSet' => array('file' => 'custom/include/EstudioCredito/cifin/controller/confronta_setCuestionario.php', 'auth' => true),
	'informacion_comercial' => array('file' => 'custom/include/EstudioCredito/cifin/view/informacion_comercial.php', 'auth' => true),
	'icp' => array('file' => 'custom/include/EstudioCredito/cifin/view/informacion_comercial_pruebas.php', 'auth' => true),
	'ubica' => array('file' => 'custom/include/EstudioCredito/cifin/view/ubica.php', 'auth' => true),
	'cifin_functions' => array('file' => 'custom/include/EstudioCredito/cifin/model/functions.php', 'auth' => true),
    'setResumen' => array('file' => 'custom/modules/JM_estudio_credito/setResumen.php', 'auth' => false),
    'auxiliar' => array('file' => 'custom/modules/JM_estudio_credito/resumenAuxiliar.php', 'auth' => false),
    'referencias_estudio' => array('file' => 'custom/include/getProductoEstudio.php', 'auth' => true),
    'referencias' => array('file' => 'custom/include/getProducto.php', 'auth' => true),
    'actualizarFacturado' => array('file' => 'custom/modules/JM_estudio_credito/actualizarFacturado.php', 'auth' => false),
    'vistaImpresion' => array('file' => 'custom/modules/ej_garantias/detalles.php', 'auth' => true),
    'listarVisitas' => array('file' => 'custom/modules/JM_estudio_credito/listarVisitas.php', 'auth' => true),
    'editVisita' => array('file' => 'custom/modules/JM_estudio_credito/editVisita.php', 'auth' => true),
    'saveVisita' => array('file' => 'custom/modules/JM_estudio_credito/saveVisita.php', 'auth' => true),
	'galeria' => array('file' => 'custom/modules/JM_estudio_credito/galeria.php', 'auth' => true),
    'emailImage' => array('file' => 'modules/EmailMan/EmailImage.php', 'auth' => false),
	'download' => array('file' => 'download.php', 'auth' => true),
	'export' => array('file' => 'export.php', 'auth' => true),
	'export_dataset' => array('file' => 'export_dataset.php', 'auth' => true),
	'Changenewpassword' => array('file' => 'modules/Users/Changenewpassword.php', 'auth' => false),
	'GeneratePassword' => array('file' => 'modules/Users/GeneratePassword.php', 'auth' => false),
	'vCard' => array('file' => 'vCard.php', 'auth' => true),
	'pdf' => array('file' => 'pdf.php', 'auth' => true),
	'minify' => array('file' => 'jssource/minify.php', 'auth' => true),
    'json_server' => array('file' => 'json_server.php', 'auth' => true),
	'HandleAjaxCall' => array('file' => 'HandleAjaxCall.php', 'auth' => true),
	'TreeData' => array('file' => 'TreeData.php', 'auth' => true),
    'image' => array('file' => 'modules/Campaigns/image.php', 'auth' => false),
    'campaign_trackerv2' => array('file' => 'modules/Campaigns/Tracker.php', 'auth' => false),
    'WebToLeadCapture' => array('file' => 'modules/Campaigns/WebToLeadCapture.php', 'auth' => false),
    'removeme' => array('file' => 'modules/Campaigns/RemoveMe.php', 'auth' => false),
    'acceptDecline' => array('file' => 'modules/Contacts/AcceptDecline.php', 'auth' => false),
    'leadCapture' => array('file' => 'modules/Leads/Capture.php', 'auth' => false),
    'process_queue' => array('file' => 'process_queue.php', 'auth' => true),
	'zipatcher' => array('file' => 'zipatcher.php', 'auth' => true),
    'mm_get_doc' => array('file' => 'modules/MailMerge/get_doc.php', 'auth' => true),
    'getImage' => array('file' => 'include/SugarTheme/getImage.php', 'auth' => false),
    'GenerateQuickComposeFrame' => array('file' => 'modules/Emails/GenerateQuickComposeFrame.php', 'auth' => true),
    'DetailUserRole' => array('file' => 'modules/ACLRoles/DetailUserRole.php', 'auth' => true),
    'getYUIComboFile' => array('file' => 'include/javascript/getYUIComboFile.php', 'auth' => false),
    'UploadFileCheck' => array('file' => 'modules/Configurator/UploadFileCheck.php', 'auth' => true),
    'SAML'=>  array('file' => 'modules/Users/authentication/SAMLAuthenticate/index.php', 'auth' => false),
);
?>
