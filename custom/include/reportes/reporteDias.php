<?php

require_once("custom/include/lib/diasFestivos.php");
require_once("custom/include/utiles.php");
global $db;
global $current_user;


$ano_actual = date('Y');
$anho = (isset($_POST['anho']))? $_POST['anho'] : date('Y');
$mes =  (isset($_POST['mes']))? $_POST['mes'] : date('m');




$dias = cal_days_in_month(CAL_GREGORIAN, $mes, $anho);


$anos_label = array();

for($i = $ano_actual-2; $i<=$ano_actual+5; $i++){
    $anos_label[$i] = $i;
}
$meses_label = array(
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
$inicia = $anho."-".$mes."-01";
$termina = $anho."-".$mes."-".$dias . " 23:59:59";

$usuarios = array();
$user_id = $current_user->id;

if(isset($_REQUEST['user_id'])){
    $user_id = $_REQUEST['user_id'];
}

/** Listado de usuarios */
$sql_usuarios = "SELECT id, concat(first_name, ' ', last_name) as nombre FROM users WHERE status = 'Active' ";
$result_usuarios = $db->query($sql_usuarios);
while($fila = $db->fetchByAssoc($result_usuarios)){
    $usuarios[$fila['id']] = $fila['nombre'];    
}
?>
<form action="index.php?module=Calendar&action=reporteDias" method="POST">
<table>
    <tr>
        <td>A&ntilde;o:</td>
        <td><?php echo html_select('anho',$anos_label,$anho,false,'',true); ?> </td>
        <td>Mes:</td>
        <td><?php echo html_select('mes',$meses_label,$mes,false,'',true); ?></td>
        <td>Colaborador:</td>
        <td><?php echo html_select('user_id',$usuarios,$user_id,false,'',true);  ?></td>
        <td><input type="submit" class="button" name="Filtrar" value="Filtrar" /></td>
    </tr>

</table>
</form>
<br />
<hr />
<?php

/** Listado de tareas */
$sql = "(SELECT id, DATE(date_start) fecha, assigned_user_id usuario_id,  
            ((TIMESTAMPDIFF(MINUTE, date_start,date_end))/60) as duracion 
            FROM meetings 
            WHERE date_start BETWEEN '$inicia' AND '$termina' AND deleted = 0  AND suma = 1 AND status = 'Held'  ";
            if(strlen($user_id)>0){
                $sql .= " AND assigned_user_id = '$user_id' ";
            }
            
            $sql .= ")
        union
        (SELECT m.id, DATE(date_start) fecha,  rel.user_id usuario_id,  
            ((TIMESTAMPDIFF(MINUTE, date_start,date_end))/60) as duracion 
             
            FROM meetings  m, meetings_users rel
            WHERE  m.date_start BETWEEN '$inicia' AND '$termina' AND m.deleted = 0 
                AND m.suma = 1 AND m.status = 'Held' AND m.id = rel.meeting_id ";
            if(strlen($user_id)>0){
                $sql .= " AND rel.user_id = '$user_id' ";
            }
            
        $sql .= " )
             
        union
        (SELECT id, DATE(date_start) fecha, assigned_user_id usuario_id,  
            ((TIMESTAMPDIFF(MINUTE, date_start,date_end))/60) as duracion 
            FROM calls  
            WHERE date_start BETWEEN '$inicia' AND '$termina' AND deleted = 0 AND status = 'Held' ";
            if(strlen($user_id)>0){
                $sql .= " AND assigned_user_id = '$user_id' ";
            }
            $sql .= ")            
         union
         (SELECT h.id, h.fecha_ejecucion fecha, t.assigned_user_id usuario_id,  
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
//echo $sql;
$tareas = array();
$result = $db->query($sql);
while($fila = $db->fetchByAssoc($result)){
    
    $tmp = 0;
    if(isset($tareas[$fila['usuario_id']][$fila['fecha']])){
        $tmp = $tareas[$fila['usuario_id']][$fila['fecha']];
    }
    $tareas[$fila['usuario_id']][$fila['fecha']] = $fila['duracion'] + $tmp;
}

if(strlen($user_id)>0){
    $tmp = $usuarios[$user_id];
    $usuarios = array($user_id => $tmp);
}
?>
<table width="100%">
    <thead>
        <tr>
            <th rowspan="2">Colaborador</th>
            <th colspan="<?php echo $dias ?>">D&iacute;as</th>
        </tr>
        <tr>
            <?php for($i=1; $i<= $dias; $i++): ?>
                <?php $dia_nombre = date("l",mktime(0, 0, 0, $mes  , $i, $anho)); ?>
                <?php if(!in_array($i,$diasFestivos[$anho][$mes]) && $dia_nombre != "Saturday" && $dia_nombre != "Sunday"):?>
                    <th><?php if($i<10) echo "0".$i; else echo $i;?></th>
                <?php endif ?>
            <?php endfor ?>
            <th><strong>Total</strong></th>
        </tr>
    
    </thead>
    <tbody>
        <?php foreach($usuarios as $id_u => $nombre_u):?>
            <tr>
                <td><?php echo $nombre_u; 
                        $total_usuario = 0; ?>
                </td>
                <?php for($i=1; $i<= $dias; $i++): ?>
                    <?php $dia_nombre = date("l",mktime(0, 0, 0, $mes  , $i, $anho)); ?>
                    <?php if(!in_array($i,$diasFestivos[$anho][$mes]) && $dia_nombre != "Saturday" && $dia_nombre != "Sunday"):?>
                        <?php
                                $val_tmp = 0;
                                $d_tmp =  $i; 
                                if($i<10){
                                    $d_tmp =  "0".$i;
                                }
                                $fecha_tmp = $anho."-".$mes."-".$d_tmp;
                                if(isset($tareas[$id_u][$fecha_tmp])){
                                    $val_tmp = $tareas[$id_u][$fecha_tmp];
                                }
                                $total_usuario += $val_tmp;
                                if($val_tmp >= 8.5){
                                    $estilo = " style='background-color:#80FF80; text-align: right;' ";
                                }elseif($val_tmp >= 7){
                                    $estilo = " style='background-color:#FFFF80; text-align: right;' ";
                                }else $estilo = " style='background-color:#FD7760; text-align: right;' ";
                                      
                                echo "<td $estilo> $val_tmp </td>";
                        
                        ?>
                    <?php endif ?>
                     
                 <?php endfor ?>
                <!-- Total -->
                <td style="font-weight: bold; text-align: right;"> <?php echo $total_usuario; ?> </td>
            </tr>
            
         <?php endforeach ?>
        
        </tbody>
</table>