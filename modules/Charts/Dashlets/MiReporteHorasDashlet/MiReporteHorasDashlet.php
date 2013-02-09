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





require_once('include/Dashlets/DashletGenericChart.php');

class MiReporteHorasDashlet extends DashletGenericChart
{
    
    public $anho;
    public $mes;
    public $meses_label = array(
                            '01'=> 'Enero',
                            '02'=> 'Febrero',
                            '03'=> 'Marzo',
                            '04'=> 'Abril',
                            '05'=> 'Mayo',
                            '06'=> 'Junio',
                            '07'=> 'Julio',
                            '08'=> 'Agosto',
                            '09'=> 'Septiembre',
                            '10'=> 'Octubre',
                            '11'=> 'Noviembre',
                            '12'=> 'Diciembre',
                        );

    protected $_seedName = 'Opportunities';

    /**
     * @see DashletGenericChart::__construct()
     */
    public function __construct(
        $id,
        array $options = null
        )
    {
        global $timedate;
        if(empty($options['anho'])){
            $options['anho'] = date('Y');
        }
        if(empty($options['mes'])){
            $options['mes'] = date('m');
        }
        if(empty($options['title']))
            $options['title'] = translate('LBL_REPORTE_HORAS', 'Calendar');

        parent::__construct($id,$options);
    }

    /**
     * @see DashletGenericChart::displayOptions()
     */
    public function displayOptions()
    {
        
        $anhios = array();
        $y = date('Y');
        for($i = $y-2; $i<= $y+2; $i++){
            $anhios[$i] = $i;
        }
        $this->_searchFields['anho']['options'] = $anhios;
        $this->_searchFields['anho']['input_name0'] = $this->anho;
        
        $this->_searchFields['mes']['options'] = $this->meses_label;
        $this->_searchFields['mes']['input_name0'] = $this->mes;
        
        return parent::displayOptions();
    }

    /**
     * @see DashletGenericChart::display()
     */
    public function display()
    {
        $vals = $this->getDatos();
        
        return $this->pintar($this->getDatos());
        //return "HOLA MUNDO";
    }

	
    private function getDatos()
    {
    	global $current_user, $db;
        $user_id = $current_user->id;
        
        $anho = (isset($this->anho))? $this->anho : date('Y');
        $mes =  (isset($this->mes))? $this->mes : date('m');
        
        
        $dias = cal_days_in_month(CAL_GREGORIAN, $mes, $anho);
        $inicia = $anho."-".$mes."-01";
        $termina = $anho."-".$mes."-".$dias . " 23:59:59";
        
        
        
        
    	$sql = "(SELECT DATE(date_start) fecha, assigned_user_id usuario_id,  
            ((TIMESTAMPDIFF(MINUTE, date_start,date_end))/60) as duracion 
            FROM meetings 
            WHERE date_start BETWEEN '$inicia' AND '$termina' AND deleted = 0  AND suma = 1 AND status = 'Held'  ";
            if(strlen($user_id)>0){
                $sql .= " AND assigned_user_id = '$user_id' ";
            }
            
            $sql .= ")
        union
        (SELECT DATE(date_start) fecha,  rel.user_id usuario_id,  
            ((TIMESTAMPDIFF(MINUTE, date_start,date_end))/60) as duracion 
             
            FROM meetings  m, meetings_users rel
            WHERE  m.date_start BETWEEN '$inicia' AND '$termina' AND m.deleted = 0 
                AND m.suma = 1 AND m.status = 'Held' AND m.id = rel.meeting_id AND rel.accept_status = 'accept' ";
            if(strlen($user_id)>0){
                $sql .= " AND rel.user_id = '$user_id' ";
            }
            
        $sql .= " )
             
        union
        (SELECT DATE(date_start) fecha, assigned_user_id usuario_id,  
            ((TIMESTAMPDIFF(MINUTE, date_start,date_end))/60) as duracion 
            FROM calls  
            WHERE date_start BETWEEN '$inicia' AND '$termina' AND deleted = 0 AND status = 'Held' ";
            if(strlen($user_id)>0){
                $sql .= " AND assigned_user_id = '$user_id' ";
            }
            $sql .= ")            
         union
         (SELECT h.fecha_ejecucion fecha, t.assigned_user_id usuario_id,  
            h.horas as duracion 
            FROM horas_causadas h, project_task t, project p 
            WHERE t.id = h.id_tarea 
            AND h.fecha_ejecucion BETWEEN '$inicia' AND '$termina'  
            AND p.deleted = 0 AND h.deleted = 0 AND t.deleted = 0  
            AND p.id = t.project_id ";
            if(strlen($user_id)>0){
                $sql .= " AND t.assigned_user_id = '$user_id' ";
            }
            $sql .= ") 
            ORDER BY usuario_id, fecha ";
        $tareas = array();
        $result = $db->query($sql);
        while($fila = $db->fetchByAssoc($result)){
            
            $tmp = 0;
            if(isset($tareas[$fila['fecha']])){
                $tmp = $tareas[$fila['fecha']];
            }
            $tareas[$fila['fecha']] = $fila['duracion'] + $tmp;
        }
        return $tareas;
    }

   private function pintar($data){
        
        $anho = (isset($this->anho))? $this->anho : date('Y');
        $mes =  (isset($this->mes))? $this->mes : date('m');
        
        $tam = 30;
        $dias = cal_days_in_month(CAL_GREGORIAN, $mes, $anho);
        $inicia = $anho."-".$mes."-01";
        $termina = $anho."-".$mes."-".$dias . " 23:59:59";
        $inicializado = false;
        $res .= "<div style='width: 100%;'>
                <strong>&nbsp;Reporte de ". $this->meses_label[$mes]. "</strong>
                <br/>
                <table align='center'>
                    <tr>
                        <th>L</th>
                        <th>M</th>
                        <th>M</th>
                        <th>J</th>
                        <th>V</th>
                    </tr>
                    <tr>";
        if(!$inicializado){
            $n_dia =  date("N",mktime(0, 0, 0, $mes  , 1, $anho));
            for($i=1; $i<$n_dia; $i++){
                $res .= "<td style='background-color: #E1E1E1; width:40px; height: 40px;'>&nbsp;</td>";
            }
            $inicializado = true;
        }
        
        for($i = 1; $i<=$dias; $i++){
            $ni = "$i";
            if($i < 10){
                $ni = "0".$i;
            }
            $n_dia =  date("N",mktime(0, 0, 0, $mes  , $i, $anho));
            //print_r($n_dia);
            if($n_dia == 1){
                $res .= "</tr><tr>";
            }
            if($n_dia < 6){
                $tmp = 0;
                $estilo = " style='background-color:#FD7760; text-align: right; width:40px; height: 40px;' ";
                if(isset($data["$anho-$mes-$ni"]) && $data["$anho-$mes-$ni"] > 0 ){
                   $val_tmp =  $data["$anho-$mes-$ni"];
                   
                   if($val_tmp >= 8.5){
                        $estilo = " style='background-color:#80FF80; text-align: right; width:40px; height: 40px;' ";
                    }elseif($val_tmp >= 7){
                        $estilo = " style='background-color:#FFFF80; text-align: right; width:40px; height: 40px;' ";
                    }
                    $res .= "<td $estilo>$ni<br/><br/><strong> $val_tmp</strong> </td>"; 
                }else $res .= "<td $estilo>$ni<br/> <br/><strong>0</strong> </td>";
            }
            
            
        }
        $res .= "</tr></table></div>";
        return $res;
    
   }
}

?>