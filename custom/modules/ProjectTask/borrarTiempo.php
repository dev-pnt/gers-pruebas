<?php
$tarea_id = $_REQUEST['tarea_id'];
$usuario =  $_REQUEST['user_id'];
$id_hora =  $_REQUEST['hora_id'];

global $current_user;

if($current_user->id != $usuario){// && $current_user->id != '1'){//Borrar condicion de admin
    echo "<h1>Este registro no est&aacute asignado a su usuario</h1>";
    echo $_SERVER['HTTP_REFERER'];
    exit;
}
$query = "UPDATE horas_causadas SET deleted = 1 WHERE deleted = 0 AND id = $id_hora AND id_usuario = '$usuario' AND id_tarea = '$tarea_id'";


//print_r($query);exit;
global $db;
$db->query("UPDATE project_task SET actual_effort = 0 WHERE actual_effort IS null ");
if($db->query("UPDATE project_task t, horas_causadas h  SET t.actual_effort = t.actual_effort - h.horas WHERE t.id = '$tarea_id' AND h.id = $id_hora AND h.id_tarea = t.id ")){
    $db->query($query);    
}


header("Location: $_SERVER[HTTP_REFERER]");
?>