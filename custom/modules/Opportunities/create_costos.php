<?php
class create_costos {

    	function createCostos($bean, $event, $arguments){
		include_once("modules/af_costos_directos/af_costos_directos.php");
		include_once("include/utils.php");
		global $db;
		$row = array();
	 if($bean->etapas == "Adjudicacion" && $bean->create_flag == '0'){
		$pcost = new af_costos_directos();
		$opid = $bean->id;
		$ac = "SELECT cd.*, p.opportunities_project_1project_idb 
AS id_project 
FROM af_costos_directos cd, opportunities_af_costos_directos_1_c relc, opportunities_project_1_c p 
WHERE relc.opportunities_af_costos_directos_1opportunities_ida = '$opid'
AND relc.deleted = 0 
AND relc.opportunities_af_costos_directos_1af_costos_directos_idb = cd.id
AND cd.deleted = 0
AND relc.deleted = 0 
AND p.opportunities_project_1opportunities_ida = '$opid'
AND p.deleted = 0;";
		$res = $db->query($ac);
		while($row = $db->fetchByAssoc($res)){
			$guid = create_guid();	
			$cid = $row['id'];
			$pid = $row['id_project'];
			$relcost = "INSERT INTO project_af_costos_directos_1_c (id, deleted, project_af_costos_directos_1project_ida, project_af_costos_directos_1af_costos_directos_idb)
VALUES ('$guid', 0, '$pid', '$cid');";	
			$db->query($relcost);
		}
	} else {
		//Nothing
	}
	}
}

?>
