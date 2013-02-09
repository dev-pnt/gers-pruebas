<?php

function smarty_function_costo_categorias($params, &$smarty)
{
	$id = $params['id'];
    	$module = $params['module'];
	global $db;
	$cat = $GLOBALS['app_list_strings']['categoria_list'];
	unset($cat['']);
	$html = "
	<table>
	<tr>
	<td>Categoria</td>
	<td>Costo</td>
	</tr>";
	
	foreach($cat as $k => $v){
		$qdisc = "SELECT SUM(c.subtotal) 
AS TOTAL_DISCRIMINADO 
FROM af_costos_directos c, opportunities_af_costos_directos_1_c r 
WHERE r.opportunities_af_costos_directos_1opportunities_ida = '$id'
AND r.deleted = 0
AND c.id = r.opportunities_af_costos_directos_1af_costos_directos_idb
AND c.categoria = '$k'
AND c.deleted = 0";	
	        if($module == 'proyecto'){
       			$qdisc = "SELECT SUM(c.subtotal) 
AS TOTAL_DISCRIMINADO 
FROM af_costos_directos c, project_af_costos_directos_1_c r 
WHERE r.project_af_costos_directos_1project_ida = '$id'
AND r.deleted = 0
AND c.id = r.project_af_costos_directos_1af_costos_directos_idb
AND c.categoria = '$k'
AND c.deleted = 0";	
        
        	}
		$resdisc = $db->query($qdisc);
		$datadisc = $db->fetchByAssoc($resdisc);
		$totaldisc = $datadisc['TOTAL_DISCRIMINADO'];
		setlocale(LC_MONETARY, 'es_CO');	
		$totaldisc = money_format('%(#10n', $totaldisc);

		$html .= "<tr>";
		$html .= "<td>".$v."</td>";
		$html .= "<td style='text-align: right;'>$ ".number_format($totaldisc,0)."</td>";
		$html .= "</tr>";
		$i++;
	}
	
	$html .= "</table>";
	$html .= "<br>";
	return $html;
}
?>