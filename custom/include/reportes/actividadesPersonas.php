<?php
require_once("custom/include/utiles.php");
require_once("custom/modules/Project/FunProyectos.php");

global $current_user;
global $db;

$user_id = $current_user->id;

if(isset($_REQUEST['user_id'])){
    $user_id = $_REQUEST['user_id'];
}



$usuarios = array();


/** Listado de usuarios */
$sql_usuarios = "SELECT id, concat(first_name, ' ', last_name) as nombre FROM users WHERE status = 'Active' ";
$result_usuarios = $db->query($sql_usuarios);
while($fila = $db->fetchByAssoc($result_usuarios)){
    $usuarios[$fila['id']] = $fila['nombre'];    
}

$anho = date('Y');
$mes =  date('m');
require_once("custom/include/utiles.php");       
$dias = cal_days_in_month(CAL_GREGORIAN, $mes, $anho);
    
    
    
$fi = $anho."-".$mes."-01";
if(isset($_REQUEST['inicia'])){
    $fi = $_REQUEST['inicia'];
}
$valor_hora = FunProyectos::valorHora($user_id,$fi);
$ff = $anho."-".$mes."-".$dias;
if(isset($_REQUEST['termina'])){
    $ff = $_REQUEST['termina'];
}



?>
<form action="index.php?module=Calendar&action=reporteActividades" method="POST">
    <table>
        <tr>
            <td>Fecha inicial:</td>
            <td><?php echo calendarioDB('inicia',$fi); ?></td>
            <td>Fecha final:</td>
            <td><?php echo calendarioDB('termina',$ff); ?></td>
            <td>Colaborador:</td>
            <td><?php echo html_select('user_id',$usuarios,$user_id,false,'',true);  ?></td>
            <td><input type="submit" class="button" name="Filtrar" value="Filtrar" /></td>
        </tr>
    
    </table>
</form>
<br />
<hr />
<?php
/** Reuniones */
$sql = "(SELECT DATE(date_start) fecha, description, tipo as lugar, name, 
            ((TIMESTAMPDIFF(MINUTE, date_start,date_end))/60) as duracion, 
            ((TIMESTAMPDIFF(MINUTE, date_start,date_end))/60)*$valor_hora as valor 
            FROM meetings  
            WHERE assigned_user_id = '$user_id' AND date_start BETWEEN '$fi' AND '$ff' AND deleted = 0 
                AND suma = 1 AND status = 'Held' )
        union
        (SELECT DATE(date_start) fecha, m.description as description, tipo as lugar, name,  
            ((TIMESTAMPDIFF(MINUTE, date_start,date_end))/60) as duracion, 
            ((TIMESTAMPDIFF(MINUTE, date_start,date_end))/60)*$valor_hora as valor 
            FROM meetings  m, meetings_users rel
            WHERE rel.user_id = '$user_id' AND m.date_start BETWEEN '$fi' AND '$ff' AND m.deleted = 0 
                AND m.suma = 1 AND m.status = 'Held' AND m.id = rel.meeting_id )    
        union
        (SELECT DATE(date_start) fecha, description, concat('Llamada','') as lugar, name, 
            ((TIMESTAMPDIFF(MINUTE, date_start,date_end))/60) as duracion, 
            ((TIMESTAMPDIFF(MINUTE, date_start,date_end))/60)*$valor_hora as valor 
            FROM calls 
            WHERE assigned_user_id = '$user_id' AND date_start BETWEEN '$fi' AND '$ff' AND deleted = 0 
                 AND status = 'Held' )            
         union
         (SELECT h.fecha_ejecucion fecha, t.description, p.name as lugar, t.name name, 
            h.horas as duracion, h.valor as valor 
            FROM horas_causadas h, project_task t, project p  
            WHERE t.id = h.id_tarea  
            AND p.id = t.project_id 
            AND h.fecha_ejecucion BETWEEN '$fi' AND '$ff' AND t.assigned_user_id = '$user_id' 
            AND p.deleted = 0 AND t.deleted = 0  AND h.deleted = 0 ) 
            
            ORDER BY fecha";
         

//echo "$sql <br/>";

$result = $db->query($sql);
$datos = array();
$total = 0;
while($fila = $db->fetchByAssoc($result)){
    $total += $fila['valor'];
    $fila['valor'] = "$ ". number_format($fila['valor'],0);
    $datos[] = $fila;
}

$cabeceras = array(
    'fecha' => 'Fecha',
    'description' => 'Descripci&oacute;n',
    'lugar' => 'Tipo',
    'name' => 'Actividad',
    
    'duracion' => 'Duraci&oacute;n',
    'valor' => 'Valor',
);
echo printArray($datos, $cabeceras, '');
echo "<br/><strong>Total: $ </strong> ". number_format($total,0);


?>
