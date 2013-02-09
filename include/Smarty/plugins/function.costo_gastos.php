<?php

function smarty_function_costo_gastos($params, &$smarty)
{
	$id = $params['id'];
    	$module = $params['module'];
	global $db;
	$cat = $GLOBALS['app_list_strings']['tipo_costo_list'];
	unset($cat['']);
	$html = "
	<table>
	<tr>
	<td>Tipo de costo</td>
	<td>Costo</td>
	</tr>";
	$query = "SELECT SUM(c.subtotal) 
AS TOTAL_GENERAL 
FROM af_costos_directos c, opportunities_af_costos_directos_1_c r 
WHERE r.opportunities_af_costos_directos_1opportunities_ida = '$id'
AND r.deleted = 0
AND c.id = r.opportunities_af_costos_directos_1af_costos_directos_idb
AND c.deleted = 0";
	
	foreach($cat as $k => $v){
		$qdisc = "SELECT SUM(c.subtotal) 
AS TOTAL_DISCRIMINADO 
FROM af_costos_directos c, opportunities_af_costos_directos_1_c r 
WHERE r.opportunities_af_costos_directos_1opportunities_ida = '$id'
AND r.deleted = 0
AND c.id = r.opportunities_af_costos_directos_1af_costos_directos_idb
AND c.tipo_costo = '$k'
AND c.deleted = 0";	
	        if($module == 'proyecto'){
            		$query = "SELECT SUM(c.subtotal) 
AS TOTAL_GENERAL 
FROM af_costos_directos c, project_af_costos_directos_1_c r 
WHERE r.project_af_costos_directos_1project_ida = '$id'
AND r.deleted = 0
AND c.id = r.project_af_costos_directos_1af_costos_directos_idb
AND c.deleted = 0";
			$qdisc = "SELECT SUM(c.subtotal) 
AS TOTAL_DISCRIMINADO 
FROM af_costos_directos c, project_af_costos_directos_1_c r 
WHERE r.project_af_costos_directos_1project_ida = '$id'
AND r.deleted = 0
AND c.id = r.project_af_costos_directos_1af_costos_directos_idb
AND c.tipo_costo = '$k'
AND c.deleted = 0";	
        
        	}
		$result = $db->query($query);
		$resdisc = $db->query($qdisc);
		$data = $db->fetchByAssoc($result);
		$datadisc = $db->fetchByAssoc($resdisc);
		$total = $data['TOTAL_GENERAL'];
		$totaldisc = $datadisc['TOTAL_DISCRIMINADO'];
		setlocale(LC_MONETARY, 'es_CO');	
		$total = money_format('%(#10n', $total);
		$totaldisc = money_format('%(#10n', $totaldisc);

		$html .= "<tr>";
		$html .= "<td>".$v."</td>";
		$html .= "<td style='text-align: right;'>$".number_format($totaldisc,0)."</td>";
		$html .= "</tr>";
		$i++;
	}
	
	$html .= "</table>";
	$html .= "<br>";
	$html .= '<div style="float:left;"><label>Costo Total:</label><strong>$ '.number_format($total,0).'</strong></div>';
    


    $res_servicios = $db->query("SELECT SUM( valor ) AS total
                                    FROM af_servicios_externos s, opportunities_af_servicios_externos_1_c rel
                                    WHERE rel.opportunities_af_servicios_externos_1opportunities_ida =  '$id'
                                        AND rel.opportunities_af_servicios_externos_1af_servicios_externos_idb = s.id
                                        AND rel.deleted =0
                                        AND s.deleted =0");
    
    $servicios = 0;
    if($fila = $db->fetchByAssoc($res_servicios)){
        $servicios = $fila['total'];
    }

    $html .= "<br>";
	$html .= '<div style="float:left;"><label>Servicios Externos:</label><strong>$ '.number_format($servicios,0).'</strong></div>';    

	return $html;
}
?>
