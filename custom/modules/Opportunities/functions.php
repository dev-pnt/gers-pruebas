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

		$cons = "COT-".$m."".$d."-".$departments[$dep]."-".$y;
		$bean->consecutivo_automatico = $cons;	
		
	}
    	
	function consecutivo($bean, $event, $arguments){
	   if(strlen($bean->consecutivo_automatico) <= 0){
	       global $db;
    		$d = date("d");
    		$m = date("m");
    		$y = date("Y");
    		
    		$query = "SELECT anio_control AS anio FROM opportunities LIMIT 1";
    		$res = $db->query($query);
    		$data = $db->fetchByAssoc($res);
    		$anio = $data['anio'];
    		
    		if($y != $anio){
    			$query = "UPDATE opportunities SET anio_control = $y, contador_automatico = 0";
    			$res = $db->query($query);
    		}
    		
    		$query = "SELECT max(contador_automatico) as num FROM opportunities";
    		$res = $db->query($query);
    		$data = $db->fetchByAssoc($res);
    		$num = $data['num'];		
    		$cont = $num + 1;
    
    		
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
    
                    $cons = "COT-".$cont."-".$y;
    
    		$bean->contador_automatico = $cont;
    		$bean->consecutivo_automatico = $cons;   
	   }
		
	}

}

?> 
