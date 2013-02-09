
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



<?php
global $db;

$id = $_REQUEST['id'];
/**
$st = "SELECT project_id AS id_proyecto
FROM projects_opportunities
WHERE opportunity_id
IN ( SELECT opportunities_af_actividadcotizaciones_1opportunities_ida
FROM opportunities_af_actividadcotizaciones_1_c
WHERE opportunit3e39aciones_idb = '$id')";
**/
$st = "SELECT * FROM project_task WHERE id = '$id'";

$res = $db->query($st);

$data = $db->fetchByAssoc($res);

$idp = $data['project_id'];

global $current_user;

$id_usuario = $current_user->id;


//REVISAR
if($current_user->id != $data['assigned_user_id']){// && $current_user->id != '1'){//Borrar condicion de admin
    echo "<h1>Este registro no est&aacute asignado a su usuario";
    exit;
}
$horas = 0;
if(isset($_REQUEST['horas'])){
 $horas = str_replace(",",".",$_REQUEST['horas']);
}
$id_tarea = $id;
$id_proyecto = $idp;	
$fecha = date('Y-m-d');
if(isset($_REQUEST['fecha']) && $_REQUEST['fecha'] != ''){
    $fecha = $_REQUEST['fecha'];
}
		
$sql = " SELECT s.usuario, s.valor_hora as valor, s.fm fm FROM salarios s
            INNER JOIN (SELECT usuario, MAX(vigente_desde) AS vige 
                            FROM salarios WHERE vigente_desde <= '$fecha' 
                            GROUP BY  usuario) maximo ON maximo.usuario = s.usuario AND maximo.vige = s.vigente_desde
            WHERE s.usuario = '" . $current_user->user_name . "'";

$ret = $db->query($sql);
$valor = 0;
if($fila = $db->fetchByAssoc($ret)){
    
    $valor = $fila['valor'] * $horas * $fila['fm'];
}



if($horas != ""){

    
       $query = "INSERT INTO horas_causadas (id_usuario, fecha_registro, horas, id_tarea, id_proyecto, valor, user_name, fecha_ejecucion, deleted) 
    	   VALUES ('$id_usuario', curdate(), $horas, '$id_tarea', '$id_proyecto', $valor, '". $current_user->user_name ."', '$fecha', 0);";
             echo "<script>alert('Se han causado ".$horas." horas a esta actividad.'); window.close();</script>";
    	$db->query($query);
        $db->query("UPDATE project_task SET actual_effort = 0 WHERE actual_effort IS null ");
        $db->query("UPDATE project_task SET actual_effort = actual_effort + $horas WHERE id = '$id_tarea' ");
}

require_once("custom/include/utiles.php"); 
?>
<h2 style="color: red;">Recuerde: En el momento de legalizar los anticipos debe cambiar estos a 0 (cero)</h2>
<form method="POST">
<table class="detail view  detail508 ">
    <tr>
	<td><label>Numero de Horas a Causar</label></td>
	<td><input type="text" name="horas" /></td>
    
    
    <td><label>Fecha de Ejecuci&oacute;n</label></td>
    <td><?php echo calendarioDB('fecha','');?></td>
    </tr>
</table>
	<input type="submit" name="submit" value="Guardar" />
</form>
