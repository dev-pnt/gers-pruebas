<?php

function smarty_modifier_datos_proyecto($p_id){
    require_once("custom/modules/Project/FunProyectos.php");
    
    
    $erpValues = FunProyectos::getProyERPReales($p_id);
    
    $coti_info = FunProyectos::getCotizacionInfo($p_id);
    
    
    
    $coti_info['costos_reales'] = $erpValues['costos'];
    $coti_info['facturado'] = $erpValues['facturado'];
    
    
    
    $coti_info['horas_proyecto'] = FunProyectos::getProyTotalHoras($p_id);
    $coti_info['anticipos'] = FunProyectos::getProyAnticipos($p_id);
    
    //valor_mano_obra_cotizado
    //valor_mano_obra
    
    $coti_info['valor_mano_obra_real'] = FunProyectos::getProyValorManoObra($p_id);
    $coti_info['total_invertido'] = $coti_info['anticipos'] + $coti_info['costos_reales'] + $coti_info['valor_mano_obra_real'];
    
    $coti_info['diferencia'] = $coti_info['facturado'] - $coti_info['total_invertido'];
    
    
    $rent = ($coti_info['diferencia']/$coti_info['facturado'])*100;
    $coti_info['rentabilidad'] = $rent;
    
    $coti_info['imagen'] = 'mal.jpg';
    if($rent >= 15 ){
        $coti_info['imagen'] = 'bien.jpg';
    }elseif($rent > 0){
        $coti_info['imagen'] = 'regular.jpg';
    }
    
    
    
    
    //$coti_info['anticipos'] = FunProyectos::getProyAnticipos($p_id);
    //$coti_info['anticipos'] = FunProyectos::getProyAnticipos($p_id);
    
    return $coti_info;
    
    
    
}
?>