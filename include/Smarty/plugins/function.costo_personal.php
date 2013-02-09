<?php

function smarty_function_costo_personal($params, &$smarty)
{
	$idcot = $params['id'];
    $module = $params['module'];
	global $db;

	$html = "
	<table>
	<tr>
	<td>Escalafon</td>
	<td>Salario</td>
	<td>Hora/Mes</td>
	<td>Factor Multiplicador</td>
	<td>Costo</td>
	</tr>";
	$i = 1;
	$ctotal = 0;
	while($i < 8){
	   if($i == 7){
	      	$var = 'Auxiliar de Ingenieria';
	   } else {
	        $var = $i;
 	   }
		$st = "SELECT SUM(numero_horas) AS suma_horas FROM af_actividadcotizaciones WHERE deleted = 0 AND escalafon = '$var' AND id IN(SELECT opportunit3e39aciones_idb FROM opportunities_af_actividadcotizaciones_1_c WHERE opportunities_af_actividadcotizaciones_1opportunities_ida = '$idcot' AND deleted = 0);";
        
        if($module == 'proyecto'){
            
        		
            	$st = "SELECT SUM(actual_effort) 
            AS suma_horas 
            FROM project_task 
            WHERE project_id = '$idcot' AND escalafon = '$var' OR project_id IN
            (SELECT opportunities_project_1project_idb FROM opportunities_project_1_c WHERE deleted = 0 AND opportunities_project_1opportunities_ida = '$idcot') AND escalafon = '$i' AND deleted = 0";		
        }
        global $sugar_config;
		$res = $db->query($st);
		$data = $db->fetchByAssoc($res);
		$sum = $data['suma_horas'];
		$cant = $sum/$sugar_config['horas_mes'];
	   	$prom = substr($cant,0,4); 
		setlocale(LC_MONETARY, 'es_CO');	


		$st = "SELECT * FROM escalafon WHERE num = $i;";
		$res = $db->query($st);
		$data = $db->fetchByAssoc($res);
		$salario = $data['salario'];
		$fmult = $data['fm'];
		$costo = $salario*$cant*$fmult;
		$cost = money_format('%(#10n', $costo);
		$sala = money_format('%(#10n', $salario);
		$html .= '<tr>';
		$html .= '<td>'.$var."</td>";
		$html .= '<td style="text-align:right;">$ '.number_format($sala,0).'</td>';
		$html .= '<td style="text-align:right;">'.$prom.'</td>';
		$html .= '<td style="text-align:right;">'.$fmult.'</td>';
		$html .= '<td style="text-align:right;">$'.number_format($cost,0).'</td>';
		$html .= '</tr>';
		$i++;
		$ctotal = $ctotal + $costo;
		$total = money_format('%(#10n', $ctotal);
	}
	
	$html .= "</table>";
	$html .= "<br>";
	$html .= '<div style="float:right;"><label>Costo Total:</label><strong>$'.number_format($total,0).'</strong></div>';
	return $html;
}
?>
