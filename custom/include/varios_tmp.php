<pre>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once "custom/modules/Project/FunProyectos.php";

function recalcular_cotizaciones($id = false){
    global $db;
    
    $quer = "SELECT * FROM opportunities WHERE deleted = 0 ";
    
    if($id){
        $quer = "SELECT * FROM opportunities WHERE deleted = 0 AND id = '$id' ";
    }
    
    
    $res = $db->query($quer);
    
    
    while($fila = $db->fetchByAssoc($res)){
            $idc = $fila['id'];
            $tmp_costos_gastos = FunProyectos::getCotiCostosGastos($idc);
            $cif =  $tmp_costos_gastos['costos'] + $tmp_costos_gastos['gastos'];
                                    
            $tmp_horas_valor = FunProyectos::getCotiHorasValor($idc);
            $mano_obra = $tmp_horas_valor['valor_total']; 
    		
            
            $total = $cif + $mano_obra; 	
    		$sql = "UPDATE opportunities SET amount = $total  WHERE id = '$idc' ";
            echo $sql . "<br/>";
    		$db->query($sql);
    }
    
    
}

recalcular_cotizaciones();


?>
</pre>