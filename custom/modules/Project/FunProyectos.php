<?php

class FunProyectos{
    
    /**
     * Las horas totales de un proyecto
     * Si no hay $p_id, saca las horas totales de todos los proyectos.
     * @author DMesa
     */
    static function getProyTotalHoras($p_id = false){
        global $db;
        $query = "SELECT project_id, SUM( actual_effort ) AS total
                    FROM project_task
                    WHERE deleted =0
                    GROUP BY project_id";
        if($p_id){
            $query = "SELECT project_id, sum(actual_effort) as total 
                        FROM project_task 
                        WHERE project_id ='$p_id' AND deleted = 0";    
        }
        $resultSet = $db->query($query);
        $res = array();
        while($fila = $db->fetchByAssoc($resultSet)){
            $res[$fila['project_id']] = $fila['total'];
        }
        if($p_id){
            
                if( isset($res[$p_id]) ){
                    return  $res[$p_id];
                }else return 0;
            
                
        
        }else return $res;
        
    }
    /**
     * @author DMesa
     *  Calcula el valor Hora de un usuario, en una fecha
     */ 
    static function valorHora($usuario, $fecha ,$tipo = 'id'){
        global $db;
        if($tipo == 'id'){
            $result_user = $db->query("SELECT user_name FROM users where id = '$usuario'");
            if($fila = $db->fetchByAssoc($result_user)){
                $usuario = $fila['user_name'];
            }else $usuario = '';
        }
        
        $sql = " SELECT s.usuario, s.valor_hora as valor, s.fm FROM salarios s
            INNER JOIN (SELECT usuario, MAX(vigente_desde) AS vige 
                            FROM salarios WHERE vigente_desde <= '$fecha' 
                            GROUP BY  usuario) maximo ON maximo.usuario = s.usuario AND maximo.vige = s.vigente_desde
            WHERE s.usuario = '$usuario'";
        
        $result_valor = $db->query($sql);
        if($fila = $db->fetchByAssoc($result_valor)){
            return $fila['valor'];
        }else return 0;
        
    }
    
    
    /**
     * Va al ERP y trae el total facturado y los costos de un proyecto(Contrato)
     * Y los guarda en el CRM, en el caso de no haber conexion utiliza los del CRM
     * @author DMesa
     */
    
    static function getProyERPReales($p_id){
        global $db;
        $contrato = false;
        $total_facturado = 0;
        $total_cif = 0;
        $valor = 0;
        $query = "SELECT name as contrato, total_facturado, total_cif, valor FROM project WHERE id = '$p_id'";
        $rtmp = $db->query($query);
        
        if($fila = $db->fetchByAssoc($rtmp)){
            $contrato = $fila['contrato'];
            if($fila['total_facturado'] > 0){
                $total_facturado  = $fila['total_facturado'];    
            }
            if($fila['total_cif'] > 0){
                $total_cif  = $fila['total_cif'];    
            }
            
            $valor = $fila['valor'];
            
        }
                
        /** 
             *VA AL ERP Y HACER CALCULOS */
        if($contrato){
            
            
            
             require_once("custom/include/lib/conMSSQL.php");
             $p_id_cuenta = '4';
             require_once("custom/include/lib/consultaERPMvtos.php");
             
             /** FACTURACION */
             $result_fact = mssql_query(queryERP::getERPMtos($contrato,'4'));
             $valor_col = 'f_valor_credito';
             if(mssql_num_rows($result_fact) > 0){
                $total_facturado = 0;
                while($fila = mssql_fetch_assoc($result_fact)){
                    if($fila[$valor_col] > 0){
                        $total_facturado += $fila[$valor_col];
                    }
                      
                } 
             }
             
                     
             
             /** COSTOS */
             $result_costos = mssql_query(queryERP::getERPMtos($contrato,'7'));
             $valor_col = 'f_valor_debito';
             if(mssql_num_rows($result_costos) > 0){
                $total_cif = 0;
                 while($fila = mssql_fetch_assoc($result_costos)){
                    if($fila[$valor_col] > 0){
                        $total_cif += $fila[$valor_col];
                    }
                      
                 }
             }
             $db->query("UPDATE project SET total_facturado = ".$total_facturado.", total_cif = ".$total_cif." WHERE id = '$p_id'");
             
        }
        $res = array(
                'costos' => $total_cif,
                'facturado' => $total_facturado,
                'valor' => $valor,
        );
        return $res;
        
    }
    
    
    /**
     * Calcula el valor de la mano de obra de un proyecto,
     * o todos los proyectos si no hay $p_id
     * @author DMesa
     */
    static function getProyValorManoObra($p_id = false){
        $sql = "SELECT id_proyecto, SUM(valor) AS costos FROM horas_causadas WHERE deleted = 0 GROUP BY id_proyecto";
        if($p_id){
            $sql = "SELECT id_proyecto, SUM(valor) AS costos FROM horas_causadas WHERE deleted = 0 AND id_proyecto = '$p_id'";    
        }
        global $db;
        $result = $db->query($sql);
        $res = array();
        while($fila = $db->fetchByAssoc($result)){
            $res[$fila['id_proyecto']] = $fila['costos'];
        }
        
        if($p_id){
            if(isset($res[$p_id]) && $res[$p_id] > 0){
                return $res[$p_id];
            }else return 0;
            
        }else return $res;
    }
    
    /**
     * Calcula los anticipos de un proyecto, o todos si no hay $p_id
     * @author DMesa
     */
    static function getProyAnticipos($p_id = false){
        global $db;
        $query = "SELECT project_id, SUM( anticipos ) AS anticipos
                    FROM project_task
                    WHERE deleted =0
                    GROUP BY project_id";
        if($p_id){
            $query = "SELECT project_id, sum(anticipos) as anticipos 
                        FROM project_task 
                        WHERE project_id ='$p_id' AND deleted = 0";    
        }
        $resultSet = $db->query($query);
        $res = array();
        while($fila = $db->fetchByAssoc($resultSet)){
            $res[$fila['project_id']] = $fila['anticipos'];
        }
        if($p_id){
            if( isset($res[$p_id]) && $res[$p_id]> 0 ){
                return  $res[$p_id];
            }else return 0;
        }else return $res;
    }
    
    
    /**
     * Saca de la COTIZACION asociada a un proyecto o a todos los proyectos
     * la siguiente informacion:
     * horas : numero de horas cotizadas
     * valor_mano_obra : valor de la mano de obra cotizadas
     * costos_cotizados: Costos directos cotizados
     * gastos_cotizados: Servicios externos cotizados.
     * @author DMesa
     */
    static function getCotizacionInfo($p_id = false){
        global $db;
        $query = "SELECT rel.project_id as project_id, op.* 
                    FROM projects_opportunities rel, opportunities op 
                    WHERE op.id = rel.opportunity_id 
                        AND rel.deleted = 0";
        if($p_id){
            $query = "SELECT rel.project_id as project_id, op.* 
                    FROM projects_opportunities rel, opportunities op 
                    WHERE op.id = rel.opportunity_id 
                        AND rel.project_id = '$p_id' 
                        AND rel.deleted = 0";    
        }
        
        $resultSet = $db->query($query);
        $res = array();
        while($fila = $db->fetchByAssoc($resultSet)){
            
            /** Para las horas y el valor total de mano de obra */
            $tmp_horas_valor = FunProyectos::getCotiHorasValor($fila['id']);
            $fila['horas'] = $tmp_horas_valor['horas'];
            $fila['valor_mano_obra'] = $tmp_horas_valor['valor_total']; 
            
            
            /** Para costos y gastos cotizados */
            $tmp_costos_gastos = FunProyectos::getCotiCostosGastos($fila['id']);
            $fila['costos_cotizados'] = $tmp_costos_gastos['costos'];
            $fila['gastos_cotizados'] = $tmp_costos_gastos['gastos'];
            
            $res[$fila['project_id']] = $fila;
        }
        if($p_id){
           if( isset($res[$p_id]) ){
                    return  $res[$p_id];
           }else return array();
        }else return $res;
        
    }
    
    /**
     * Calcula los valores de manos de obra de una COTIZACION
     * los q retorna es lo siguiente
     * horas: Numero de horas cotizadas
     * valor_total: Valor de la manos obra cotizada
     * @author DMesa
     */
    static function getCotiHorasValor($cot_id){
        $sql_escalafon_de_coti = "SELECT escalafon, SUM( numero_horas ) AS suma_horas
                                    FROM af_actividadcotizaciones
                                    WHERE id
                                    IN (
                                        SELECT opportunit3e39aciones_idb
                                        FROM opportunities_af_actividadcotizaciones_1_c
                                        WHERE opportunities_af_actividadcotizaciones_1opportunities_ida =  '$cot_id' AND deleted = 0
                                    )
                                    AND deleted = 0
                                    GROUP BY escalafon";
        global $db;
        
        $result = $db->query($sql_escalafon_de_coti);
        $res = array(
            'horas' => 0,
            'valor_total' => 0,
        );
        
        $escalafones = FunProyectos::getEscalafones();
        global $sugar_config;
        
        
        while($fila = $db->fetchByAssoc($result)){
            
            $res['horas'] += $fila['suma_horas'];
            $escalafon_tmp = $escalafones[$fila['escalafon']];
            
            
            
            $tmp_val = (($fila['suma_horas'] * $escalafon_tmp['salario'] * $escalafon_tmp['fm'])/$sugar_config['horas_mes']);
            $res['valor_total'] += $tmp_val;
            
        
        }
        return $res;
    }
    
    
    /** Retorna arreglo con el escalafon vigente (mas reciente)
     * @author DMesa
     */
    static function getEscalafones(){
        $sql_escalafones = "SELECT e.* FROM escalafon e 
                    INNER JOIN ( 
                        SELECT nombre, MAX(vigente_desde) as vige 
                            FROM escalafon  GROUP BY nombre) top_es 
                    ON top_es.nombre = e.nombre 
                        AND top_es.vige = e.vigente_desde ORDER BY e.nombre";
        global $db;
        
        $result = $db->query($sql_escalafones);
        $res = array();
        while($fila = $db->fetchByAssoc($result)){
               $res[$fila['nombre']] = $fila;
        }
        
        return $res;
    }
    
    /**
     * Calcula los servicios externos y costos directos de una COTIZACION
     * las llaves son las siguientes
     * costos: costos directos cotizados
     * gastos: Servicios externos cotizados
     * @author DMesa
     */
    static function getCotiCostosGastos($cot_id){
        $sql_costos_de_coti = "SELECT SUM(c.subtotal) AS total 
                                FROM af_costos_directos c, opportunities_af_costos_directos_1_c r 
                                WHERE r.opportunities_af_costos_directos_1opportunities_ida = '$cot_id'
                                    AND r.deleted = 0
                                    AND c.id = r.opportunities_af_costos_directos_1af_costos_directos_idb
                                    AND c.deleted = 0";
        
        $sql_servicios_externos_de_coti = "SELECT SUM(c.valor * c.cantidad) AS total 
            FROM af_servicios_externos c, opportunities_af_servicios_externos_1_c r 
            WHERE r.opportunities_af_servicios_externos_1opportunities_ida = '$cot_id'
                AND r.deleted = 0
                AND c.id = r.opportunities_af_servicios_externos_1af_servicios_externos_idb
                AND c.deleted = 0";
        
        $res = array(
            'costos' => 0,
            'gastos' => 0,
        );
        
        global $db;
        
        $res_tmo = $db->query($sql_costos_de_coti);
        if($fila = $db->fetchByAssoc($res_tmo)){
            $res['costos'] = $fila['total'];
        }
        $res_tmo = $db->query($sql_servicios_externos_de_coti);
        if($fila = $db->fetchByAssoc($res_tmo)){
            $res['gastos'] = $fila['total'];
        }
        
        return $res;
        
        
    }
    
    static function actualizarTotalCoti($cot_id){
        $cif = FunProyectos::getCotiCostosGastos($cot_id);
        $mano_obra = FunProyectos::getCotiHorasValor($cot_id);
        
        
        
        
        
    }
    
    
    
}
?>