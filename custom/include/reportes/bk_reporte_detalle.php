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

function get_proyeccion() {
	global $db;

	$dep = $_REQUEST['dep'];
	$f = '';
	if($dep){
		$f = "AND departamento_encargado = '$dep'";
	}

	$m = date('m');
	$a = date('Y');
	$m += 0;

	$result = array();
	$data = array();

	while($m <= 12) {
		
		//selecciono datos de proyecciones
		$sql = "SELECT * FROM af_royeccion_facturacion WHERE MONTH(fecha_proyectada) = '$m' AND YEAR(fecha_proyectada) = '$a' AND id IN (SELECT af_royeccion_facturacion_projectaf_royeccion_facturacion_idb FROM af_royeccion_facturacion_project_c WHERE af_royeccion_facturacion_projectproject_ida IN (SELECT id FROM project WHERE status = 'Ejecucion' $f AND deleted = 0) AND deleted = 0 )
		AND deleted = 0";
		
		return $sql;		

		$res = $db->query($sql);

		$row = $db->fetchByAssoc($res);
		$proy = $row['id'];


		//Selecciono datos de proyecto
		$sql = "SELECT * FROM project WHERE id IN (SELECT af_royeccion_facturacion_projectproject_ida FROM af_royeccion_facturacion_project_c WHERE af_royeccion_facturacion_projectaf_royeccion_facturacion_idb = '$proy' AND deleted = 0) AND deleted = 0";
		$res = $db->query($sql);
		$row = $db->fetchByAssoc($res);
		if($row['name']) {
			$data['proyecto'] = $row['name'];
			$data['id'] = $row['id'];
			$data['departamento'] = get_department($row['departamento_encargado']);
			$data['empresa'] = get_empresa($row['id']);
			$data['estado'] = $row['status'];
			$data['objeto'] = $row['description'];
			$data['responsable'] = get_user($row['assigned_user_id']);
			$data['proyeccion'] = $proydata;
			

			$result[$row['name']] = $data;
		} else {
			//nothing
		}
		$m++;
	}
	return $result;	
}

function data_proyeccion($id) {
	global $db;

	$m = date('m');
	$a = date('Y');
	$m += 0;

	$result = array();
	$data = array();


		
		//selecciono datos de proyecciones
		$sql = "SELECT *, MONTH(fecha_proyectada) as mes FROM af_royeccion_facturacion WHERE id IN (SELECT af_royeccion_facturacion_projectaf_royeccion_facturacion_idb FROM af_royeccion_facturacion_project_c WHERE af_royeccion_facturacion_projectproject_ida = '$id' AND deleted = 0) AND deleted = 0";

		$res = $db->query($sql);

		while($row = $db->fetchByAssoc($res)){
			$result[] = $row;
		}

	return $result;	

}


$lista = get_proyeccion();
print_r($lista);exit();
setlocale(LC_MONETARY, 'es_CO');


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Reporte Detalle</title>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" id="style-css" href="http://necolas.github.com/normalize.css/2.0.1/normalize.css" type="text/css" media="all">
		<script type="text/javascript" src="http://webintenta.com/uploads/Files/Images/v10/jQueryExcel/jquery-1.3.2.min.js"></script>
		<script language="javascript">
$(document).ready(function() {
	$(".botonExcel").click(function(event) {
		$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
		$("#FormularioExportacion").submit();
});
});
</script>
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
			width: 700px;
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
		<form action="index.php?entryPoint=excel" method="POST" id="FormularioExportacion">
<p>Exportar a Excel  <img src="http://webintenta.com/uploads/Files/Images/v10/jQueryExcel/export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>
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
					
						<?php 
						
						foreach ($lista as $key => $value) {
							echo '
							<table border="1" id="Exportar_a_Excel">
				<thead>
					<tr>
						<th>EMPRESA</th>
						<th>CTO</th>
						<th>OBJETO</th>
						<th>ESTADO</th>
						<th>DEPARTAMENTO</th>
						<th>RESPONSABLE</th>
					</tr>
				</thead>
				<tbody>
								<tr>
									<td>'.$lista[$key]['empresa'].'</td>
									<td>'.$lista[$key]['proyecto'].'</td>
									<td>'.$lista[$key]['objeto'].'</td>
									<td>'.$lista[$key]['estado'].'</td>
									<td>'.$lista[$key]['departamento'].'</td>
									<td>'.$lista[$key]['responsable'].'</td>
								</tr>
								</tbody>

			</table>
			<br>
			<br>

							';

										$lista2 = data_proyeccion($lista[$key]['id']);
							echo '
									<table border="1">
				<thead>
					<tr>
						<th>MES</th>
						<th>PROYECTADO</th>
						<th>CORREGIDO</th>
						<th>REMANENTE</th>
					</tr>
				</thead>
				<tbody>';
				foreach ($lista2 as $key => $value) {
					echo'
								<tr>
									<td>'.get_mes($lista2[$key]['mes']).'- '.date("Y").'</td>
									<td>$'.number_format($lista2[$key]['valor_proyectado'],0).'</td>
									<td>$'.number_format($lista2[$key]['valor_corregido'],0).'</td>
									<td>$'.number_format($lista2[$key]['valor_remanente'],0).'</td>
								</tr>
					';
				}
				echo '
								</tbody>

			</table>
			<br>
			<div class="division"></div>
			<br>


							';

						}
						?>
				
			
		</div>
	</body>
<html>
