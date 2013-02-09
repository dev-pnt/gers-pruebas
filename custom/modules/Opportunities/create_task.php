<?php
class create_task {

    	function createTask($bean, $event, $arguments){
		include_once("modules/ProjectTask/ProjectTask.php");
		global $db;

	 if($bean->etapas == "Adjudicacion" && $bean->create_flag == 0){
		$opid = $bean->id;
		$ac = "SELECT ac.* , op.opportunities_project_1project_idb 
AS project_id
FROM af_actividadcotizaciones ac, opportunities_project_1_c op, opportunities_af_actividadcotizaciones_1_c rel
WHERE rel.opportunities_af_actividadcotizaciones_1opportunities_ida = '$opid'
AND rel.deleted = 0
AND ac.id = rel.opportunit3e39aciones_idb
AND ac.deleted = 0
AND rel.deleted = 0
AND rel.opportunities_af_actividadcotizaciones_1opportunities_ida = op.opportunities_project_1opportunities_ida 
AND rel.deleted = 0 
AND op.deleted = 0
AND op.opportunities_project_1opportunities_ida = '$opid' 
AND op.deleted = 0;";
		$res = $db->query($ac);
		while($row = $db->fetchByAssoc($res)){
			$ptask = new ProjectTask();
			$ptask->name = $row['name'];
			$ptask->estimated_effort  = $row['numero_horas'];
			$ptask->escalafon = $row['escalafon'];
			$ptask->project_id = $row['project_id'];
			$ptask->save();
		}
		} else {
			//Nothing
		}
	}

}

?>
