<?php
class create_servicios {

function create($bean, $event, $arguments){
	include_once("modules/af_costos_directos/af_servicios_externos.php");
		global $db;
	 if($bean->etapas == "Adjudicacion" && $bean->create_flag == '0'){
     $row = array();	
		$pcost = new af_servicios_externos();
		$opid = $bean->id;
		$ac = "SELECT se.* , p.opportunities_project_1project_idb AS id_project
FROM af_servicios_externos se , opportunities_af_servicios_externos_1_c relc, opportunities_project_1_c p
WHERE relc.opportunities_af_servicios_externos_1opportunities_ida = '$opid'
AND p.opportunities_project_1opportunities_ida = '$opid';";
		$res = $db->query($ac);
		
		while($row = $db->fetchByAssoc($res)){
		//print_r($row);
			
			$cid = $row['id'];
			$pid = $row['id_project'];
/*
			$pcost->name = $row['name'];
			$pcost->cantidad  = $row['cantidad'];
			$pcost->porcentaje = $row['porcentaje'];
			$pcost->valor = $row['valor'];
			$pcost->subtotal = $row['subtotal'];
			$pcost->save();
*/
			$relcost = "INSERT INTO project_af_servicios_externos_1_c (id, deleted, project_af_servicios_externos_1project_ida, project_af_servicios_externos_1af_servicios_externos_idb)
VALUES ('$bean->id', 0, '$pid', '$cid');";
			//$db->query($relcost);
		}
	exit();
	} else {
		//Nothing
	}
	}

}

?>
