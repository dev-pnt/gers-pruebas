<?php

require_once("custom/include/utiles.php");

$anho = date('Y');
$mes =  date('m');
$dias = cal_days_in_month(CAL_GREGORIAN, $mes, $anho);
    
    
    
$fi = $anho."-".$mes."-01";
if(isset($_REQUEST['fi'])){
    $fi = $_REQUEST['fi'];
}

$ff = $anho."-".$mes."-".$dias;
if(isset($_REQUEST['ff'])){
    $ff = $_REQUEST['ff'];
}

$p_id = $_REQUEST['p_id'];


?>
<head>
<link rel="stylesheet" type="text/css" href="cache/themes/Sugar5/css/yui.css?v=RKT-kIe5EBcBLcc_2IwHhQ" />
<link rel="stylesheet" type="text/css" href="include/javascript/jquery/themes/base/jquery.ui.all.css" />
<link rel="stylesheet" type="text/css" href="cache/themes/Sugar5/css/deprecated.css?v=RKT-kIe5EBcBLcc_2IwHhQ" />
<link rel="stylesheet" type="text/css" href="cache/themes/Sugar5/css/style.css?v=RKT-kIe5EBcBLcc_2IwHhQ" />
<script type="text/javascript" src="cache/include/javascript/sugar_grp1_jquery.js?v=RKT-kIe5EBcBLcc_2IwHhQ"></script>
<script type="text/javascript" src="cache/include/javascript/sugar_grp1_yui.js?v=RKT-kIe5EBcBLcc_2IwHhQ"></script>
<script type="text/javascript" src="cache/include/javascript/sugar_grp1.js?v=RKT-kIe5EBcBLcc_2IwHhQ"></script>


<script type="text/javascript" src="include/javascript/calendar.js?v=RKT-kIe5EBcBLcc_2IwHhQ"></script>

</head>
<body class="detail view  detail508">

<form action="index.php?entryPoint=repProyAct" method="POST">
    <input type="hidden" name="p_id" value="<?php echo $p_id; ?>" />
    <table>
        <tr>
            <td>Fecha inicial:</td>
            <td><?php echo calendarioDB('fi',$fi); ?></td>
            <td>Fecha final:</td>
            <td><?php echo calendarioDB('ff',$ff); ?></td>
            
            <td><input type="submit" class="button" name="Filtrar" value="Filtrar" /></td>
        </tr>
    
    </table>
</form>
<br />
<hr />

<?php

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
        $fila['valor'] = "$ ". number_format($fila['valor'],2);
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

echo printArray($resultado, $cabeceras, '',true);
echo "<br/><strong>Total Periodo: $ </strong>" . number_format($total,0);
echo "<br/><strong>Total Acumulado: $ </strong>" . number_format($total_acum,0);

?>
</body>