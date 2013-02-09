<?php
class functions {

    	function subtotal(&$bean, $event, $arguments){
	
			$bean->subtotal = $bean->valor * $bean->cantidad * $bean->numero_personas;
	}

	function valor_cot(&$bean, $event, $arguments){
        	global $db;
		
		$id = $bean->id;
		$sql = "SELECT opportunities_af_costos_directos_1opportunities_ida	 AS opp FROM opportunities_af_costos_directos_1_c WHERE opportunities_af_costos_directos_1af_costos_directos_idb = '$id' AND deleted = 0";
		$res = $db->query($sql);
		
		$data = $db->fetchByAssoc($res);
		
		$opp = $data['opp'];
		
			
		//$sql = "SELECT SUM(subtotal) as total FROM af_costos_directos WHERE id in (SELECT opportunities_af_costos_directos_1af_costos_directos_idb FROM opportunities_af_costos_directos_1_c WHERE opportunities_af_costos_directos_1opportunities_ida = '$opp' AND deleted = 0) AND deleted = 0";

		$sql = "SELECT subtotal FROM af_costos_directos WHERE id = '$id'";
		$res = $db->query($sql);
		
		$data = $db->fetchByAssoc($res);
		
		$total_costo_directo = $data['subtotal'];

		$sql = "SELECT amount FROM  opportunities WHERE id = '$opp' AND deleted = 0";
		$res = $db->query($sql);
		
		$data = $db->fetchByAssoc($res);
		
		$amount = $data['amount'];

		$total = $amount + $total_costo_directo;

		$sql = "UPDATE opportunities SET amount = $total WHERE id = '$opp' AND deleted = 0";
		$db->query($sql);
		
	}
}
?>
