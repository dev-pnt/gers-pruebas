<?php

class create_project{
    
    function createProject($bean, $event, $arguments){
       	  include_once("modules/Project/Projects.php");
       	  include_once("include/utils.php");
	   global $db;
	   $project = new Project();
	   //$total_directos = $bean->subtotal_viaticos + $bean->subtotal_transporte + $bean->subtotal_documentos + $bean->subtotal_polizas + $bean->subtotal_viaticos_e + $bean->subtotal_transporte_e;
	   //$total_estudios = $bean->subtotal_topografia + $bean->subtotal_forestal + $bean->subtotal_suelos;
           //$up_totales = "UPDATE opportunities SET total_directos = $total_directos, total_estudios = $total_estudios WHERE id = '$bean->id'";
           //	 print_r($up_totales);exit(); 
	   //$db->query($up_totales);
		   $sta = "SELECT * FROM projects_opportunities WHERE opportunity_id = '$bean->id'";
	  	   $ret = $db->query($sta);
	           $data = $db->fetchByAssoc($ret);
	           $idp = $data['project_id'];
		   //$upr = "UPDATE `project` SET `cantidad_viaticos` = $bean->cantidad_viaticos, `personas_viaticos` = '$bean->personas_viaticos', `valor_viaticos` = '$bean->valor_viaticos', `subtotal_viaticos` = '$bean->subtotal_viaticos', `cantidad_transporte` = '$bean->cantidad_transporte', `personas_transporte` = '$bean->personas_transporte', `valor_transporte` = '$bean->valor_transporte', `subtotal_transporte` = '$bean->subtotal_transporte', `cantidad_documentos` = '$bean->cantidad_documentos', `personas_documentos` = '$bean->personas_documentos', `valor_documentos` = '$bean->valor_documentos', `subtotal_documentos` = '$bean->subtotal_documentos', `cantidad_polizas` = '$bean->cantidad_polizas', `personas_polizas` = '$bean->personas_polizas', `valor_polizas` = '$bean->valor_polizas', `subtotal_polizas` = '$bean->subtotal_polizas', `cantidad_viaticos_e` = '$bean->cantidad_viaticos_e', `personas_viaticos_e` = '$bean->personas_viaticos_e', `valor_viaticos_e` = '$bean->valor_viaticos_e', `subtotal_viaticos_e` = '$bean->subtotal_viaticos_e', `cantidad_transporte_e` = '$bean->cantidad_transporte_e', `personas_transporte_e` = '$bean->personas_transporte_e', `valor_transporte_e` = '$bean->valor_transporte_e', `subtotal_transporte_e` = '$bean->subtotal_transporte_e', `cantidad_topografia` = '$bean->cantidad_topografia', `porcentaje_topografia` = '$bean->porcentaje_topografia', `valor_topografia` = '$bean->valor_topografia', `subtotal_topografia` = '$bean->subtotal_topografia', `cantidad_forestal` = '$bean->cantidad_forestal', `porcentaje_forestal` = '$bean->porcentaje_forestal', `valor_forestal` = '$bean->valor_forestal', `subtotal_forestal` = '$bean->subtotal_forestal', `cantidad_suelos` = '$bean->cantidad_suelos', `porcentaje_suelos` = '$bean->porcentaje_suelos', `valor_suelos` = '$bean->valor_suelos', `subtotal_suelos` = '$bean->subtotal_suelos', `total_directos` = '$bean->total_directos', `total_estudios` = '$bean->total_estudios' WHERE id = '$idp'";
	           //$db->query($upr);
	 if($bean->etapas == "Adjudicacion" && $bean->create_flag == '0'){
		   $project->name = $bean->consecutivo_automatico;
		   $project->consecutivo_automatico = $bean->consecutivo_automatico;
		   $project->assigned_user_id = $bean->assigned_user_id;
		   $project->linea = $bean->linea;
		   $project->referencias = $bean->referencias;
		   $project->save();
		   $query = "UPDATE opportunities SET create_flag = '1' WHERE id = '$bean->id'";
		   $db->query($query);	   	   

		   $sta = "SELECT * FROM projects_opportunities WHERE opportunity_id = '$bean->id' AND deleted = 0";
	  	   $ret = $db->query($sta);
	           $data = $db->fetchByAssoc($ret);
	           $ide = create_guid();
		   $ido = $bean->id;
	           $del = $data['deleted'];
	           $idp = $data['project_id'];
	           $st = "INSERT INTO opportunities_project_1_c (id, date_modified, deleted, opportunities_project_1opportunities_ida, opportunities_project_1project_idb) VALUES('$ide', now(), 0, '$ido', '$idp');";
		   $db->query($st);

		   $sta = "SELECT * FROM accounts_opportunities WHERE opportunity_id = '$bean->id' AND deleted = 0";
	  	   $ret = $db->query($sta);
	           $data = $db->fetchByAssoc($ret);
	           $ide = create_guid();
		   $ida = $data['account_id'];;
	           $st = "INSERT INTO project_accounts_1_c(id, date_modified, deleted, project_accounts_1project_ida, project_accounts_1accounts_idb) VALUES('$ide', now(), 0, '$idp', '$ida');";
		   $db->query($st);
		   
	           $ide = create_guid();
	           $st = "INSERT INTO projects_accounts(id, date_modified, deleted, account_id, project_id) VALUES('$ide', now(), 0, '$ida', '$idp');";
		   $db->query($st);

	   } else {
	      //Nothing
	   }
    
    }

}
?>
