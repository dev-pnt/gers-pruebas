<?php
require_once("custom/modules/Project/FunProyectos.php");


class functions {

    	function costo_actividad($bean, $event, $arguments){
		       
            $escalafones = FunProyectos::getEscalafones();
            $esc = $bean->escalafon;
            $hor = $bean->numero_horas;
            global $sugar_config;
            $escalafon_tmp = $escalafones[$esc];
            //print_r($escalafon_tmp);die();
    		$costo = ($hor  * $escalafon_tmp['salario'] * $escalafon_tmp['fm'])/$sugar_config['horas_mes'];
            //print_r($costo);die();
    		$bean->costo_actividad = $costo;
		
	}

	
    	function valor_cot($bean, $event, $arguments){
        	global $db;
		
    		$id = $bean->id;
    		$sql = "SELECT opportunities_af_actividadcotizaciones_1opportunities_ida AS idc FROM opportunities_af_actividadcotizaciones_1_c WHERE opportunit3e39aciones_idb  = '$id' AND deleted = 0";
    		$res = $db->query($sql);
    		
    		$data = $db->fetchByAssoc($res);
    		$idc = $data['idc'];
            
            $tmp_costos_gastos = FunProyectos::getCotiCostosGastos($idc);
            $cif =  $tmp_costos_gastos['costos'] + $tmp_costos_gastos['gastos'];
            
            $tmp_horas_valor = FunProyectos::getCotiHorasValor($idc);
            $mano_obra = $tmp_horas_valor['valor_total']; 
    		
            
            $total = $cif + $mano_obra; 	
    		$sql = "UPDATE opportunities SET amount = $total  WHERE id = '$idc' ";
    		$db->query($sql);
		
	}
}

?> 
