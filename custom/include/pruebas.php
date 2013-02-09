<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

echo "<pre>";
global $db;
$res = $db->query("UPDATE opportunities SET create_flag = 0 where id = '2e9148b2-8000-5e5f-1feb-50f0528fb2fc'");
$res = $db->query("SELECT * FROM opportunities where id = '2e9148b2-8000-5e5f-1feb-50f0528fb2fc'");

$fila = $db->fetchByAssoc($res);
print_r($fila);

/*
    require_once "custom/modules/Project/FunProyectos.php";
    $p_id = "19ffa962-b90c-b9b4-be44-50ec32563070";
    $coti_info = FunProyectos::getCotizacionInfo($p_id);
    /*
    $coti_info['horas_proyecto'] = FunProyectos::getProyTotalHoras($p_id);
    
    $erpValues = FunProyectos::getProyERPReales($p_id);
    $coti_info['costos_reales'] = $erpValues['costos'];
    $coti_info['facturado'] = $erpValues['facturado'];
    
    $coti_info['anticipos'] = FunProyectos::getProyAnticipos($p_id);
    
    
    
    $coti_info['valor_mano_obra_real'] = FunProyectos::getProyValorManoObra($p_id);
    $coti_info['total_invertido'] = $coti_info['anticipos'] + $coti_info['costos_reales'] + $coti_info['valor_mano_obra_real'];
    
    
    
    */
//print_r($coti_info);
echo "</pre>";

//require_once "custom/modules/Project/FunProyectos.php";

//print_r(FunProyectos::getProyERPReales("19ffa962-b90c-b9b4-be44-50ec32563070"));

?>