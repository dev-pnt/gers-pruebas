<?php

function get_department($cod){
	$departments = array(
							'' => 'NO DEFINIDO',
							'000CB' => 'COMERCIAL BOGOTÁ',
							'000CC' => 'COMERCIAL CARIBE',
							'000CO' => 'COMERCIAL (VENTA EQUIPOS)',
							'000CP' => 'CALIDAD DE POTENCIA',
							'000CV' => 'COMERCIAL VILLAVICENCIO',
							'000GA' => 'GERENCIA DPTO AUTOMATIZACION',
							'000GD' => 'GERENCIA DPTO DISEÑOS',
							'000GE' => 'GERENCIA DPTO ESTUDIOS',
							'000GL' => 'ADMINISTRACIÓN GERS S.A.',
							'000IC' => 'GERENCIA PRUEBAS',
							'000NE' => 'NEPLAN',
							'00GCN' => 'GERENCIA CENTRO (CONSULTORIA)',
							'000GC' => 'GERENCIA CARIBE (CONSULTORIA)',
							'00GLL' => 'GERENCIA LLANOS (CONSULTORIA)',
						);
	return $departments[$cod];
}

function get_empresa($id){
	global $db;
	//Selecciono id oportunidad
	$sql = "SELECT opportunities_project_1opportunities_ida AS ido FROM opportunities_project_1_c WHERE opportunities_project_1project_idb = '$id' AND deleted = 0";

	$res = $db->query($sql);
	$row = $db->fetchByAssoc($res);

	$ido = $row['ido'];

	//Selecciono id cuenta
	$sql = "SELECT account_id AS ida FROM accounts_opportunities WHERE opportunity_id = '$ido' AND deleted = 0";

	$res = $db->query($sql);
	$row = $db->fetchByAssoc($res);

	$ida = $row['ida'];

	//Selecciono datos de cliente
	$sql = "SELECT * FROM accounts WHERE id = '$ida' AND deleted = 0";

	$res = $db->query($sql);
	$row = $db->fetchByAssoc($res);

	$aname = $row['name'];

	return $aname;

}

function get_mes($n) {
			$mes = array(
							'1' => 'ene',
							'2' => 'feb',
							'3' => 'mar',
							'4' => 'abr',
							'5' => 'may',
							'6' => 'jun',
							'7' => 'jul',
							'8' => 'ago',
							'9' => 'sep',
							'10' => 'oct',
							'11' => 'nov',
							'12' => 'dic',
						);
			return $mes[$n];
}

function get_user($id) {
	global $db;
	
	$sql = "SELECT * FROM users WHERE id = '$id'";

	$res = $db->query($sql);
	$row = $db->fetchByAssoc($res);

	$user = $row['first_name']." ".$row['last_name'];

	return $user;
}

function get_proyecciones($id, $m) {
	global $db;
	$y = date("Y");
	$sql = "SELECT pr.* FROM af_royeccion_facturacion pr, af_royeccion_facturacion_project_c rel WHERE rel.af_royeccion_facturacion_projectproject_ida = '$id' AND pr.id = rel.af_royeccion_facturacion_projectaf_royeccion_facturacion_idb AND pr.deleted = 0 AND rel.deleted = 0 AND MONTH(pr.fecha_proyectada) = $m AND YEAR(pr.fecha_proyectada) = $y";
	$res = $db->query($sql);
	$dat = $db->fetchByAssoc($res);
	return $dat;
}

function get_cotizaciones($id, $m){
	global $db;
	$y = date("Y");
	$sql = "SELECT * FROM opportunities WHERE id = '$id' AND MONTH(date_award) = $m AND YEAR(date_award) = $y and deleted = 0";
	$res = $db->query($sql);
	$dat = $db->fetchByAssoc($res);
	return $dat;

}

/*
$lista = get_proyecciones('c8ccdd7c-7c6e-22b0-829a-50edf7f29905', 1);
print_r($lista);exit();
*/

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Reporte Detalle</title>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" id="style-css" href="http://necolas.github.com/normalize.css/2.0.1/normalize.css" type="text/css" media="all">
	<style>
		
		body {
			background: #f5f5f5;
			font-size: 12px;
			text-align: center;
		}

		table {
			border-color: #A9D0F5;
			border-width: 2px;
		}

		th {
			min-width: 100px;
			height: 30px;
		}		

		.container {
			margin: 0 auto;
			width: 100%;
		}

		.titulo {
			margin: 5px auto;
			color: blue;
			font-size: 20px;
			font-weight: bold;
		}

		.division {
			border-top: 1px solid #ccc;
			
		}
	</style>
	<head>
	<body>
		<div class="excel">
           <form method="POST" action="index.php?entryPoint=excel">
                <input type="hidden" name="name" value="PROY-FACT-TOT" />
                <input type="submit" name="exportar" value="Exportar a Excel" />
           </form>
        </div>

		<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
		<div class="container">
		<div class="titulo">Informe Detallado</div>
		<br><br>
		<?php 
			$dep = "Todos";
			if($_REQUEST['dep']){
				$dep = get_department(@$_REQUEST['dep']);
			}
		?>	
		<div class="titulo"><?php echo $dep; ?></div>
								<table border="1" id="Exportar_a_Excel">
				<thead>
					<tr>
						<th>EMPRESA</th>
						<th>CTO</th>
						<th>OBJETO</th>
						<th>ESTADO</th>
						<th>DEPARTAMENTO</th>
						<th>RESPONSABLE</th>
					
					<?php
							$m = date("m");
									$m += 0;
									while($m <= 12){
										echo '<th>
											<table>
												<thead>
													<tr>
														<th>'.get_mes($m).'-'.date("Y").'</th>
													<tr>
												</thead>
												<tbody>
													<tr>
														<td>Proyectado</td>
														<td>Corregido</td>
													<tr>
												</tbody>
											</table>
										      </th>
										';
										$m++;
									}
					?>	
					</tr>
				</thead>
				<tbody>

						<?php 
						global $db;
						$dep = $_POST['dep'];
						$f = "";
						if($dep){
							$f = "AND p.departamento_encargado = '$dep'";
						}
						$sql = "select p.*, rel.af_royeccion_facturacion_projectaf_royeccion_facturacion_idb AS idp from project p, af_royeccion_facturacion_project_c rel where p.status = 'Ejecucion' $f AND p.deleted = 0 AND p.id = rel.af_royeccion_facturacion_projectproject_ida AND rel.deleted = 0";
						$res = $db->query($sql);
						while($row = $db->fetchByAssoc($res)) {
							echo '
								<tr>
									<td>'.get_empresa($row['id']).'</td>
									<td>'.$row['name'].'</td>
									<td>'.$row['description'].'</td>
									<td>'.$row['status'].'</td>
									<td>'.get_department($row['departamento_encargado']).'</td>	
									<td>'.get_user($row['assigned_user_id']).'</td>	
							';
							$excel['EMPRESA'] = get_empresa($row['id']);
							$excel['CTO'] = $row['name'];
							$excel['OBJETO'] = $row['description'];
							$excel['ESTADO'] = $row['status'];
							$excel['DEPARTAMENTO'] = get_department($row['departamento_encargado']);
							$excel['RESPONSABLE'] = get_user($row['assigned_user_id']);
							$m = date("m");
							$m += 0;	
							while($m <= 12){
								$proyeccion = get_proyecciones($row['id'], $m);
								$mes = get_mes($m).'-'.date("Y")."Proyectado	Corregido";
								$pro =' $'.number_format($proyeccion['valor_proyectado'], 0).'  -  $'.number_format($proyeccion['valor_corregido'], 0);
								echo '				
									<td>
										$'.number_format($proyeccion['valor_proyectado'], 0).'  -  $'.number_format($proyeccion['valor_corregido'], 0).'	
									</td>
								';
								$excel[$mes] = $pro;
								$m++;
							}
							echo '
								</tr>
							';
							session_start();
							$dataSet[] = $excel;
							$_SESSION['data'] = $dataSet;

						}
						?>
				
								</tbody>
			</table>
			<br>
			<br>
			<br>
			<br>
			<br>






			<table border="1" id="Exportar_a_Excel">
				<thead>
					<tr>
						<th>EMPRESA</th>
						<th>COTIZACION</th>
						<th>OBJETO</th>
						<th>ESTADO</th>
						<th>DEPARTAMENTO</th>
						<th>RESPONSABLE</th>
					
					<?php
							$m = date("m");
									$m += 0;
									while($m <= 12){
										echo '<th>
											<table>
												<thead>
													<tr>
														<th>'.get_mes($m).'-'.date("Y").'</th>
													<tr>
												</thead>
												<tbody>
													<tr>
														<td>Proyectado</td>
														<td>Corregido</td>
													<tr>
												</tbody>
											</table>
										      </th>
										';
										$m++;
									}
					?>	
					</tr>
				</thead>
				<tbody>

						<?php 
						global $db;
						$dep = $_POST['dep'];
						$f = "";
						if($dep){
							$f = "AND departamento_encargado = '$dep'";
						}
						$sql = "select * from opportunities where deleted = 0 $f";
						$res = $db->query($sql);
						while($row = $db->fetchByAssoc($res)) {
							echo '
								<tr>
									<td>'.get_empresa($row['id']).'</td>
									<td>'.$row['consecutivo_automatico'].'</td>
									<td>'.$row['description'].'</td>
									<td>'.$row['etapas'].'</td>
									<td>'.get_department($row['departamento_encargado']).'</td>	
									<td>'.get_user($row['assigned_user_id']).'</td>	
							';
							/*
							$excel['EMPRESA'] = get_empresa($row['id']);
							$excel['CTO'] = $row['name'];
							$excel['OBJETO'] = $row['description'];
							$excel['ESTADO'] = $row['status'];
							$excel['DEPARTAMENTO'] = get_department($row['departamento_encargado']);
							$excel['RESPONSABLE'] = get_user($row['assigned_user_id']);
							*/
							$m = date("m");
							$m += 0;	
							while($m <= 12){
								$proyeccion = get_cotizaciones($row['id'], $m);
								$mes = get_mes($m).'-'.date("Y")."Proyectado	Corregido";
								$pro =' $'.number_format($proyeccion['amount'], 0).'  -  $'.number_format($proyeccion['valor_real'], 0);
								echo '				
									<td>
										
										$'.number_format($proyeccion['amount'], 0).'  -  $'.number_format($proyeccion['valor_real'], 0).'	
									</td>
								';
								$excel[$mes] = $pro;
								$m++;
							}
							echo '
								</tr>
							';
							/*
							session_start();
							$dataSet[] = $excel;
							$_SESSION['data'] = $dataSet;
							*/

						}
						?>
				
								</tbody>
			</table>
		</div>
	</body>
<html>
