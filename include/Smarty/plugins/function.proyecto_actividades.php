<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
function smarty_function_proyecto_actividades($params, &$smarty)
{
    $p_id = $params['p_id'];
    require_once("custom/include/utiles.php");
    
    
    $anho = date('Y');
    $mes =  date('m');
       
    $dias = cal_days_in_month(CAL_GREGORIAN, $mes, $anho);
    
    //$dia = 31;
    
    $fi = $anho."-".$mes."-01";
    $ff = $anho."-".$mes."-".$dias;
    
    
    
    
    $sql =  "SELECT u.id user_id, a.id act_id, CONCAT(u.first_name, ' ', u.last_name) as nombre, s.escalafon escalafon, 
                    a.name actividad, sum(h.horas) tiempo, sum(h.valor) valor 
                    FROM project_task a, users u, salarios s, horas_causadas h 
                    WHERE a.assigned_user_id = u.id AND u.user_name = s.usuario AND a.project_id = '$p_id' 
                        AND h.id_tarea = a.id AND h.fecha_ejecucion BETWEEN '$fi' AND '$ff'
                    GROUP BY u.id, a.id ";
                    
                    
    $sql_sin_tiempo =  "SELECT u.id user_id, a.id act_id, sum(h.horas) tiempo_total, sum(h.valor) valor_total 
                    FROM project_task a, users u, salarios s, horas_causadas h 
                    WHERE a.assigned_user_id = u.id AND u.user_name = s.usuario AND a.project_id = '$p_id' 
                        AND h.id_tarea = a.id 
                    GROUP BY u.id, a.id ";
    
    
    global $db;
    $res = array();
    
    $total = 0;
    $total_acum = 0;
    
    $result = $db->query($sql);
    
    while($fila = $db->fetchByAssoc($result)){
        $res[$fila['user_id']][$fila['act_id']] = $fila;
        $total += $fila['valor'];
        
    }
    
    $result = $db->query($sql_sin_tiempo);
    
    
    while($fila = $db->fetchByAssoc($result)){
        $total_acum += $fila['valor_total'];
        $res[$fila['user_id']][$fila['act_id']]['tiempo_total'] = $fila['tiempo_total'];
        
        if(isset($res[$fila['user_id']][$fila['act_id']]['tiempo']) && $res[$fila['user_id']][$fila['act_id']]['tiempo'] > 0 ){
            $res[$fila['user_id']][$fila['act_id']]['diferencia'] =  $fila['tiempo_total'] -  $res[$fila['user_id']][$fila['act_id']]['tiempo'];    
        }else $res[$fila['user_id']][$fila['act_id']]['diferencia'] =  $fila['tiempo_total'];
        
    }
    
    $resultado = array();
    /** Limpiar */
    foreach($res as $act){
        foreach($act as $fila){
            unset($fila['user_id']);
            unset($fila['act_id']);
            $resultado[] = $fila;
        }
    }
    
    $cabeceras = array(
        'nombre' => 'Nombre',
        'escalafon' => 'Escalaf&oacute;n',
        'actividad' => 'Actividad',
        'tiempo' => 'T. Periodo',
        'tiempo_total' => 'Tiempo global',
        'diferencia' => 'Diferencia',
        'valor' => 'Valor',
    
    );
    
    $cadena = printArray($resultado, $cabeceras, '');
    $cadena .= "<br/><strong>Total Periodo: $ </strong>" . number_format($total,0);
    $cadena .= "<br/><strong>Total Acumulado: $ </strong>" . number_format($total_acum,0);
    
    $cadena .= "<br/><strong>Mes analizado: </strong>" . $anho."-".$mes;
    
    return $cadena;
}
?>