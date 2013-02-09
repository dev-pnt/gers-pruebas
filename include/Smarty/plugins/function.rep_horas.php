<?php

function smarty_function_rep_horas($params, &$smarty)
{
    $id_tarea = $params['id_tarea'];
    
    global $db;
    global $current_user;
    //print_r($current_user->id);die();
    require_once("custom/include/utiles.php");
    $query = "SELECT * FROM horas_causadas WHERE  id_tarea = '$id_tarea' ORDER BY deleted ASC, fecha_ejecucion ASC";
    
    
    $result = $db->query($query);
    $tabla = "<table>
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th>Fecha de Registro</th>
                        <th>Fecha de Ejecuci&oacute;n</th>
                        <th>Horas causadas</th>
                    </tr>
                
                </thead>
                <tbody>";
    while($fila = $db->fetchByAssoc($result)){
        $estilo = "";
        $a = "&nbsp;"; 
        
        if($current_user->id == $fila['id_usuario']){
            $a = "<a href='index.php?module=ProjectTask&action=borrarTiempo&tarea_id=$fila[id_tarea]&user_id=$fila[id_usuario]&hora_id=$fila[id]'>Borrar</a>"; 
        }
        
        if($fila['deleted'] != 0){
            $estilo = "style='text-decoration:line-through;'";
            $a = "&nbsp;";    
        }
        $tabla .= "<tr $estilo>
                        <td>$a</td>
                        <td>$fila[fecha_registro]</td>
                        <td>$fila[fecha_ejecucion]</td>
                        <td>$fila[horas]</td>
                    </tr>";                
    }
    $tabla .= "</tbody></table>";
    return $tabla;
    
}
?>