<?php
class functions {

    	function consecutivo_patron($bean, $event, $arguments){
	
		$d = date("d");
		$m = date("m");
		$y = date("Y");
		$dep = $bean->departamento_encargado;
				
		$departments = array(
							'' => 'A',
							'000CB' => 'CB',
							'000CC' => 'CC',
							'000CO' => 'CO',
							'000CP' => 'CP',
							'000CV' => 'CV',
							'000GA' => 'GA',
							'000GD' => 'GD',
							'000GE' => 'GE',
							'000GL' => 'GL',
							'000IC' => 'IC',
							'000NE' => 'NE',
							'00GCN' => 'GCN',
							'000GC' => 'GC',
							'00GLL' => 'GLL',
						);

		$cons = "G-".$m."".$d."-".$departments[$dep]."-".$y;
		$bean->consecutivo_automatico = $cons;	
		
	}
    	
	function consecutivo($bean, $event, $arguments){
	   if(strlen($bean->consecutivo_automatico) <= 0){
	        global $db;
    		$query = "SELECT consecutivo_automatico as num FROM notes";
    		$res = $db->query($query);
    		while($row = $db->fetchByAssoc($res)){
    			$data[] = $row['num'];	
		}
		$num = max($data);
    		$cons = $num + 1;
    		$bean->consecutivo_automatico = $cons;   
	   }
	}
}
?> 
