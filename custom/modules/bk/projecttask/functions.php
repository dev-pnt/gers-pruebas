<?php
class functions {

    	function horas(&$bean, $event, $arguments){
		if($bean->actual_effort == Null){
			$bean->actual_effort = $bean->estimated_effort;
		} else {
			//Nothing
		}
	}
 	
    	function totalizador_anticipos(&$bean, $event, $arguments){
		global $db;
		
		$id = $bean->id;
	   if($bean->anticipos){	
		$ultimo_anticipo = $bean->anticipos;

	 	$query = "SELECT project_id FROM project_task WHERE id = '$id' AND deleted = 0";
		$res = $db->query($query);
		
		$data = $db->fetchByAssoc($res);
		$project_id = $data['project_id'];

		$query = "SELECT SUM(anticipos) as total FROM project_task WHERE project_id = '$project_id' AND deleted = 0";
		$res = $db->query($query);
		$data = $db->fetchByAssoc($res);

		$total_bd = $data['total'];
		$total = $total_bd + $ultimo_anticipo;
		$query = "UPDATE project SET total_anticipos = $total_bd WHERE id = '$project_id' AND deleted = 0";
		$db->query($query);
	   } else {
	   	//Nothing
  	     }

	}
}
?>
