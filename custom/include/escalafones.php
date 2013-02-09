<head>
<link rel="stylesheet" type="text/css" href="cache/themes/Sugar5/css/yui.css?v=RKT-kIe5EBcBLcc_2IwHhQ" />
<link rel="stylesheet" type="text/css" href="include/javascript/jquery/themes/base/jquery.ui.all.css" />
<link rel="stylesheet" type="text/css" href="cache/themes/Sugar5/css/deprecated.css?v=RKT-kIe5EBcBLcc_2IwHhQ" />
<link rel="stylesheet" type="text/css" href="cache/themes/Sugar5/css/style.css?v=RKT-kIe5EBcBLcc_2IwHhQ" />
<script type="text/javascript" src="cache/include/javascript/sugar_grp1_jquery.js?v=RKT-kIe5EBcBLcc_2IwHhQ"></script>
<script type="text/javascript" src="cache/include/javascript/sugar_grp1_yui.js?v=RKT-kIe5EBcBLcc_2IwHhQ"></script>
<script type="text/javascript" src="cache/include/javascript/sugar_grp1.js?v=RKT-kIe5EBcBLcc_2IwHhQ"></script>


<script type="text/javascript" src="include/javascript/calendar.js?v=RKT-kIe5EBcBLcc_2IwHhQ"></script>

</head>

<div class="detail view  detail508 ">
<?php
global $db;
$id = $_POST['id'];
$sal = $_POST['sal'];
$fac = $_POST['fac'];
$dat = str_replace("-","",$_POST['fecha']);
if ($sal){
	$q = "UPDATE escalafon SET salario = $sal  WHERE id = $id";
	$db->query($q);
}
if ($fac){
	$q = "UPDATE escalafon SET fm = $fac WHERE id = $id";
	$db->query($q);
}
if ($dat){
	$q = "UPDATE escalafon SET vigente_desde = $dat WHERE id = $id";
	$db->query($q);
}
$sql = "SELECT * FROM escalafon;";
$res = $db->query($sql);
echo '
<table>
	<thead>
		<th>ID</th>
		<th>Nombre Escalafon</th>
		<th>Salario</th>
		<th>Numero Escalafon</th>
		<th>Factor Multiplicador</th>
		<th>Vigente</th>
	</thead>
	<tbody>
';
while($row = $db->fetchByAssoc($res)) {
	echo "<tr>
		<td>".$row['id']."</td>
		<td>".$row['nombre']."</td>
		<td>$ ".number_format($row['salario'], 0)."</td>
		<td>".$row['num']."</td>
		<td>".$row['fm']."</td>
		<td>".$row['vigente_desde']."</td>
	      </tr>	
	     ";
}
echo "</tbody></table>";

require_once("custom/include/utiles.php"); 
?>

<form method="POST" action="index.php?entryPoint=escalafon">
	<p>Escalafon a modificar:
	<select type="text" name="id" required>
		<option value=""></option>
<?php 
$sql = "SELECT * FROM escalafon;";
$res = $db->query($sql);
$i = 1;
while($row = $db->fetchByAssoc($res)) {
	echo "<option value=".$i.">
		".$row['nombre']."
	      </option>";	
	$i++;
}
?>
        </select> </p>
	<p>Nuevo Salario: 
	<input type="text" name="sal"></p>
	<p>Factor multiplicador:
	<input type="text" name="fac" ></p>
	<p>Fecha de Vigencia:<?php echo calendarioDB('fecha','');?></p>
	<input type="submit" name="enviar" value="enviar">
</form>
</div>
