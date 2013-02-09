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
 * The Original Code is: SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2010 SugarCRM, Inc.;
 * All Rights Reserved.
 * *******************************************************************************/
/*********************************************************************************
 * Description:  Defines the Spanish language pack for the base application.
 * $Id: JotPadDashlet.es_es.lang.php,v 1.5 2010/03/10 21:39:49 aserrano Exp $
 * Source: SugarCRM 5.1.0
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$defaultText = 
<<<EOQ
<b>¡Bienvenido a Sugar 5.1!</b><br /><br />

Haga clic en <b>Mi Cuenta</b> para establecer sus preferencias.<br />
Haga clic en el icono con un <b>Interrogante</b> para acceder a la página de Ayuda de cada módulo.<br /><br />

Para obtener asistencia sobre cómo comenzar, haga clic en el enlace de <b>Formación</b> para más información sobre la oferta en formación de <b>Sugar University</b>.<br />
EOQ
;

$dashletStrings['JotPadDashlet'] = array('LBL_TITLE'            => 'JotPad',
                                         'LBL_DESCRIPTION'      => 'Un dashlet para guardar sus notas',
                                         'LBL_SAVING'           => 'Guardando JotPad ...',
                                         'LBL_SAVED'            => 'Guardado',
                                         'LBL_CONFIGURE_TITLE'  => 'Título',
                                         'LBL_CONFIGURE_HEIGHT' => 'Altura (1 - 300)',
                                         'LBL_DBLCLICK_HELP'    => 'Haga doble clic abajo para Editar.',
                                         'LBL_DEFAULT_TEXT'     => $defaultText, 
);
?> 
