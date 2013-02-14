<?php
function smarty_function_costo_cotizacion($params, &$smarty)
{
    global $db;
    $html = "";
    $id = $params['id'];
    
    //Actividades Cotizacion
    $sql = "SELECT SUM(costo_actividad) as total_actividades_cotizacion FROM af_actividadcotizaciones WHERE id in (SELECT opportunit3e39aciones_idb FROM opportunities_af_actividadcotizaciones_1_c WHERE opportunities_af_actividadcotizaciones_1opportunities_ida = '$id' and deleted = 0) AND deleted = 0";
    $res = $db->query($sql);
    $data = $db->fetchByAssoc($res);
    $ac = $data['total_actividades_cotizacion'];
    //$ac_fixed = $ac * 0.02;

    //Costos Directos
    $sql = "SELECT SUM(subtotal) as total_costos_directos FROM af_costos_directos WHERE id in (SELECT opportunities_af_costos_directos_1af_costos_directos_idb FROM opportunities_af_costos_directos_1_c WHERE opportunities_af_costos_directos_1opportunities_ida = '$id' AND deleted = 0) AND deleted = 0";
    $res = $db->query($sql);
    $data = $db->fetchByAssoc($res);
    $cd = $data['total_costos_directos'];
    //$cd_fixed = $cd * 0.02;
    
    //Servicios Externos
    $sql = "SELECT SUM(subtotal) as total_servicios_exteros FROM af_servicios_externos WHERE id in (SELECT opportunities_af_servicios_externos_1af_servicios_externos_idb FROM  opportunities_af_servicios_externos_1_c WHERE  opportunities_af_servicios_externos_1opportunities_ida =  '$id' AND deleted =0) AND deleted = 0";
    $res = $db->query($sql);
    $data = $db->fetchByAssoc($res);
    $se = $data['total_servicios_exteros'];
    //$se_fixed = $se * 0.02;

    
    $sum = $ac + $cd + $se;
    $percent = $sum * 0.02;
    $total = $sum + $percent;
    $result = number_format($total,0);
    
    $sql = "UPDATE opportunities SET amount = $sum WHERE id = '$id' AND deleted = 0";
    $db->query($sql);
    return $result;
}
?>
