<?php
$anho = date('Y');
$mes =  date('m');
require_once("custom/include/utiles.php");       
$dias = cal_days_in_month(CAL_GREGORIAN, $mes, $anho);
    
    
    
$fi = $anho."-".$mes."-01";
if(isset($_REQUEST['estimated_start_date'])){
    $fi = $_REQUEST['estimated_start_date'];
}

$ff = $anho."-".$mes."-".$dias;
if(isset($_REQUEST['estimated_end_date'])){
    $ff = $_REQUEST['estimated_end_date'];
}

$dpto = "";
if(isset($_REQUEST['dpto'])){
    $dpto = $_REQUEST['dpto'];
}    
$estado = '';
if(isset($_REQUEST['estado'])){
    $estado = $_REQUEST['estado'];
}
?>
<form action="index.php?module=Project&action=rentabilidadProyectos" method="POST">
<table>
    <tr>
        <td>Inicia:</td>
        <td>
            <?php echo calendarioDB('estimated_start_date',$fi); ?>
        </td>
        <td>Termina:</td>
        <td>
            <?php echo calendarioDB('estimated_end_date',$ff); ?>
        </td>
        <td>Departamento</td>
        <td><?php echo html_select('dpto',$GLOBALS['app_list_strings']['contacto_area_list'],$dpto) ?></td>
        <td>Estado</td>
        <td><?php echo html_select('estado',$GLOBALS['app_list_strings']['project_status_dom'],$estado,false,'',true) ?></td>
        <td><input type="submit" class="button" name="Filtrar" value="Filtrar" /></td>
    </tr>

</table>
<br />
<hr />
</form>
<?php

require_once("custom/modules/Project/FunProyectos.php");
require_once("custom/include/utiles.php");
global $db;

$sql_proyectos = "SELECT p.id project_id, p.name contrato, p.status estado,  
                   p.description descripcion, p.departamento_encargado dpto, p.valor valor    
                   FROM project p  
                   WHERE p.deleted = 0 AND p.estimated_start_date BETWEEN '$fi' AND '$ff'";
                   if(strlen($dpto) > 0){
                    $sql_proyectos .= " AND departamento_encargado = '$dpto' ";
                   }


$result_proy = $db->query($sql_proyectos);
$datos = array();
while($fila = $db->fetchByAssoc($result_proy)){
    $p_id = $fila['project_id'];
    $coti_info = FunProyectos::getCotizacionInfo($p_id);
    $erpValues = FunProyectos::getProyERPReales($p_id);
    
    /** Mano Obra Causado */
    $fila['valor_mano_obra'] = round(FunProyectos::getProyValorManoObra($p_id),0);
    /** Costos Directos Cotizados */
    $fila['costos_cotizados'] = round($coti_info['costos_cotizados'],0);
    /** Costos Directos Causados */
    $fila['costos_reales'] = round($erpValues['costos'],0);
    /** Anticipos */
    $fila['anticipos'] = round(FunProyectos::getProyAnticipos($p_id),0);
    /** Tiempo Cotizado */
    $fila['horas_cotizadas'] = number_format($coti_info['horas'],2,",","");
    /** Tiempo Causado */
    $fila['horas_proyecto'] = number_format(FunProyectos::getProyTotalHoras($p_id),2,",","");
    /** Facturacion */
    $fila['facturado'] = round($erpValues['facturado'],0);
    
    $total_invertido = round($fila['anticipos'] + $fila['costos_reales'] + $fila['valor_mano_obra'],0);
    /** Rentabilidad $ */
    $fila['rentabilidad_pesos'] = round($fila['facturado'] - $total_invertido,0);
    /** Rentabilidad % */
    $rent = ($fila['facturado'] / $total_invertido)*100;
    $fila['rentabilidad'] = round($rent,2);
    unset($fila['project_id']);
    $datos[] = $fila;
}

$cabeceras = array(
    'contrato' => 'Contrato',
    'estado' => 'Estado',
    'descripcion' => 'Descripci&oacute;n',
    'dpto' => 'Dpto',
    'valor' => 'Valor Contratado',
    'valor_mano_obra' => 'Mano Obra Causado',
    'costos_cotizados' => 'Costos Directos Cotizados',
    'costos_reales' => 'Costos Directos Causados',
    'anticipos' => 'Anticipos',
    'horas_cotizadas' => 'Tiempo Cotizado',
    'horas_proyecto' => 'Tiempo Causado',
    'facturado' => 'Facturaci&oacute;n',
    'rentabilidad_pesos' => 'Rentabilidad $',
    'rentabilidad' => 'Rentabilidad %',

);
/*
echo "<strong>$sql_proyectos</strong><br/>";
echo "<pre>";

print_r($datos);
echo "</pre>";*/
echo printArray($datos, $cabeceras, '');

?>
