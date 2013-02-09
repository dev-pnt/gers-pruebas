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
 ********************************************************************************/
/*********************************************************************************
 * Description:  Defines the Spanish language pack for the base application.
 * $Id: es_es.lang.php,v 1.14 2010/10/31 15:46:54 aserrano Exp $
 * Source: SugarCRM 6.1.0RC2
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$mod_strings = array (
  'LBL_BLANK' => ' ',
  'LBL_MODULE_NAME' => 'Llamadas',
  'LBL_MODULE_TITLE' => 'Llamadas: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Llamadas',
  'LBL_LIST_FORM_TITLE' => 'Lista de Llamadas',
  'LBL_NEW_FORM_TITLE' => 'Crear Cita',
  'LBL_LIST_CLOSE' => 'Cerrar',
  'LBL_LIST_SUBJECT' => 'Asunto',
  'LBL_LIST_CONTACT' => 'Contacto',
  'LBL_LIST_RELATED_TO' => 'Relacionado con',
  'LBL_LIST_RELATED_TO_ID' => 'Relacionado con ID',
  'LBL_LIST_DATE' => 'Fecha Inicio',
  'LBL_LIST_TIME' => 'Hora Inicio',
  'LBL_LIST_DURATION' => 'Duración',
  'LBL_LIST_DIRECTION' => 'Dirección',
  'LBL_SUBJECT' => 'Asunto:',
  'LBL_REMINDER' => 'Aviso:',
  'LBL_CONTACT_NAME' => 'Contacto:',
  'LBL_DESCRIPTION_INFORMATION' => 'Información adicional',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_STATUS' => 'Estado:',
  'LBL_DIRECTION' => 'Dirección:',
  'LBL_DATE' => 'Fecha Inicio:',
  'LBL_DURATION' => 'Duración:',
  'LBL_DURATION_HOURS' => 'Horas Duración:',
  'LBL_DURATION_MINUTES' => 'Minutos Duración:',
  'LBL_HOURS_MINUTES' => '(horas/minutos)',
  'LBL_CALL' => 'Llamada:',
  'LBL_DATE_TIME' => 'Inicio:',
  'LBL_TIME' => 'Hora inicio:',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_COLON' => ':',
  'LBL_DEFAULT_STATUS' => 'Planificada',
  'LNK_NEW_CALL' => 'Registrar Llamada',
  'LNK_NEW_MEETING' => 'Programar Reunión',
  'LNK_CALL_LIST' => 'Ver Llamadas',
  'LNK_IMPORT_CALLS' => 'Importar Llamadas',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro a eliminar.',
  'NTC_REMOVE_INVITEE' => '¿Está seguro de que desea quitar a este participante de la llamada?',
  'LBL_INVITEE' => 'Participantes',
  'LBL_RELATED_TO' => 'Relacionado con',
  'LNK_NEW_APPOINTMENT' => 'Crear Cita',
  'LBL_SCHEDULING_FORM_TITLE' => 'Planificación',
  'LBL_ADD_INVITEE' => 'Añadir Invitados',
  'LBL_NAME' => 'Nombre',
  'LBL_FIRST_NAME' => 'Nombre',
  'LBL_LAST_NAME' => 'Apellido',
  'LBL_EMAIL' => 'Email',
  'LBL_PHONE' => 'Teléfono',
  'LBL_REMINDER' => 'Aviso',
  'LBL_SEND_BUTTON_TITLE' => 'Enviar Invitaciones [Alt+I]',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Enviar Invitaciones',
  'LBL_DATE_END' => 'Fecha de Fin',
  'LBL_TIME_END' => 'Hora de Fin',
  'LBL_REMINDER_TIME' => 'Hora Aviso',
  'LBL_SEARCH_BUTTON' => 'Buscar',
  'LBL_ACTIVITIES_REPORTS' => 'Informe de Actividad',    
  'LBL_ADD_BUTTON' => 'Añadir',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Llamadas',
  'LBL_LOG_CALL' => 'Registrar Llamada',
  'LNK_SELECT_ACCOUNT' => 'Seleccionar Cuenta',
  'LNK_NEW_ACCOUNT' => 'Nueva Cuenta',
  'LNK_NEW_OPPORTUNITY' => 'Nueva Oportunidad',
  'LBL_DEL' => 'Eliminar',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes Potenciales',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_USERS_SUBPANEL_TITLE' => 'Usuarios',
  'LBL_OUTLOOK_ID' => 'ID Outlook',
  'LBL_MEMBER_OF' => 'Miembro De',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario Asignado',
  'LBL_LIST_MY_CALLS' => 'Mis Llamadas',
  'LBL_SELECT_FROM_DROPDOWN' => 'Por favor, seleccione antes un elemento de la lista desplegable Relacionado Con.',
  'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
  'LBL_ASSIGNED_TO_ID' => 'Usuario Asignado',
  'NOTICE_DURATION_TIME' => 'El tiempo de duración debe ser mayor que 0',
  'LBL_CALL_INFORMATION' => 'Visión General',
  'LBL_REMOVE' => 'quit',
);

?>
