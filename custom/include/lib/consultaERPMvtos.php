<?php


class queryERP{
    static function getERPMtos($contrato, $p_id_cuenta, $p_fecha_inicial ='', $p_fecha_final=''){
        
        $x=  "SELECT t281.f281_id f_un_movto, t281.f281_descripcion f_desc_un_movto, t281.f281_id contrato, 
	t284.f284_id f_ccosto_movto, t284.f284_descripcion f_desc_ccosto_movto, 
	t351.f351_fecha f_fecha,
	RTRIM(t350.f350_id_tipo_docto) + '-' + dbo.lpad(t350.f350_consec_docto, 8, '0') f_nrodocto, 
	SUM(t351.f351_valor_cr) f_valor_credito, SUM(t351.f351_valor_db) f_valor_debito 

FROM t351_co_mov_docto t351 
	INNER JOIN t350_co_docto_contable t350 ON t350.f350_rowid = t351.f351_rowid_docto 
	INNER JOIN t254_co_mayores_auxiliares t254 ON t254.f254_rowid_auxiliar = t351.f351_rowid_auxiliar 
	INNER JOIN t253_co_auxiliares t253 ON t253.f253_rowid = t351.f351_rowid_auxiliar 
	INNER JOIN t281_co_unidades_negocio t281 ON t281.f281_id_cia = t351.f351_id_cia AND t281.f281_id = t351.f351_id_un 
	AND t281.f281_id = '$contrato' 
	LEFT JOIN t284_co_ccosto t284 ON t284.f284_rowid = t351.f351_rowid_ccosto 
WHERE t351.f351_id_cia = 1 
     AND t350.f350_ind_estado = 1 
    -- AND t351.f351_fecha BETWEEN '$p_fecha_inicial' AND '$p_fecha_final' 
	AND t254.f254_id_cia = t351.f351_id_cia 
	AND t254.f254_id_plan = 'PUC' 
	 AND t254.f254_id_mayor like '$p_id_cuenta' + '%' 

GROUP BY t281.f281_id, t281.f281_descripcion, 
	t284.f284_id, t284.f284_descripcion, t351.f351_fecha, 
	RTRIM(t350.f350_id_tipo_docto) + '-' + dbo.lpad(t350.f350_consec_docto, 8, '0')";
    
    //$GLOBALS['log']->fatal($x);
    
    return $x;
    
    }
    
    
}
?>