<?php

function printArray($datos, $cabeceras, $table_head, $alinear = false){
    $llaves = array_keys($cabeceras);
    $tabla = "<table $table_head >
                <thead>
                    <tr>
                        <th>";
                        $tabla .= implode("</th><th>",$cabeceras);
                    $tabla .= "</th>
                    </tr>
                </thead>
                <tbody>";
                foreach($datos as $fila){
                    $tabla .= "<tr>";
                    foreach($llaves as $key){
                        if($alinear && (is_numeric($fila[$key]) || strpos($fila[$key],"$") !== false)){
                            $style = "style='text-align: right;'";
                        }else $style = "";
                        $tabla .= "<td $style>". $fila[$key] . "</td>";
                    }
                    $tabla .= "</tr>";
                }
                $tabla .= "</tbody>
            </table>";
    return $tabla;
}

function html_select($name, $opciones, $seleccionada='', $id = false, $class='',$blanca = false , $tupla = false){
        if($id){
            $id = $name;
        }
        $res = "<select id='$id' name='$name' class='$class' >";
        if($blanca){
            $res .= "<option value='' title=''></option>";
        }
        foreach($opciones as $llave => $valor){
            if($tupla){
                $llave = $valor;
            }
            if($seleccionada == $llave){
                $sel = "selected='selected'";
            }else {
                $sel = "";
            }
            $res .= "<option value='$llave' $sel title='$valor' >$valor</option>"; 
            
            
        }
        $res .= "</select>";
        return $res;
}

function calendarioDB($name, $ff = ''){
    $res = "<span class='dateTime'>
                <input type='text' maxlength='10' size='11' tabindex='0' title='' value='$ff' id='$name' name='$name' autocomplete='off' class='date_input'>
                <img border='0' id='$name"."_trigger' style='position:relative; top:6px' alt='Introducir Fecha' src='themes/Sugar5/images/jscalendar.gif'>
            </span>
            <script type='text/javascript'>
                Calendar.setup ({
                inputField : '$name',
                ifFormat : '%Y-%m-%d %I:%M%P',
                daFormat : '%Y-%m-%d %I:%M%P',
                button : '$name"."_trigger',
                singleClick : true,
                dateStr : '$ff',
                startWeekday: 0,
                step : 1,
                weekNumbers:false
                }
                );
            </script>";
    return $res;
    
}
?>