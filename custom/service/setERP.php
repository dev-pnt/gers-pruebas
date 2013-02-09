<?php
require_once('custom/service/WSClient.php');

class SetErp{
    
    function enviar($parameters){
          $wsdl = "http://10.0.0.102/WSUNOEE/WSUNOEE.asmx?WSDL";
          $res = null;
    	  $connName = 'prueba';	// real
    	  //$connName = 'EJPP';	// prueba
    	  $connUser = 'unoee';
    	  $connPwd = 'unoee';
          $body = array(	'pvstrDatos' => '<Importar><NombreConexion>'.$connName.'</NombreConexion><IdCia>1</IdCia>'.
                                                '<Usuario>'.$connUser.'</Usuario><Clave>'.$connPwd.'</Clave>'.
                                                '<Datos>'.$parameters.'</Datos></Importar>', 
                                'printTipoError' => 1);
                                
          $GLOBALS['log']->fatal(print_r($body,true));
          
          $ws = new WSClient($wsdl,"","");
          //print_r($ws->SOAPRequest("ImportarXML", $body)); die();
          $GLOBALS['log']->fatal($body);
          return $ws->SOAPRequest("ImportarXML", $body);
        
    }  
    
    //===========================================================================
    // Metodo formatea la informacion segun UNOEE
    //===========================================================================
    private function formatedUNOOEE($data,$size,$type,$default=false)
    {
      if((strlen($data)<= 0 || $data == '') && $default)
      {
        $data = $default;
      }
      if( !is_null($data) )
      {
        $_diff = $size - strlen($data);
        
        if( $_diff > 0 )
        {
			$_comodin = " ";
			if( $type=='NUMERICO' )
			{
				$_comodin = "0";

				while( $_diff>0 )
				{
					$data = $_comodin . $data;
					$_diff--;
				}
			} else {
				while( $_diff>0 )
				{
					$data = $data . $_comodin;
					$_diff--;
				}
			}
        }
      }
     // return "/*" .$data."(".strlen($data).")*/";
     return $data;
    }
	

	public function executeQuery($cedula)
	{
		$dbErp = ConexErp::getInstance();

        // $res = $dbErp->query("SELECT t.*, to_char(F200_FECHA_NACIMIENTO, 'YYYY-MM-DD') as NACIMIENTO FROM T201_MM_CLIENTES c, T200_MM_TERCEROS t WHERE t.F200_ROWID = c.f201_rowid_tercero AND t.f200_nit = '$doc'");
		
		$res = $dbErp->query("SELECT con.*, cli.*, ter.*, to_char(F200_FECHA_NACIMIENTO, 'YYYY-MM-DD') as nacimiento FROM T015_MM_CONTACTOS con, T201_MM_CLIENTES cli, T200_MM_TERCEROS ter WHERE con.F015_ROWID = cli.F201_ROWID_CONTACTO AND cli.F201_ROWID_TERCERO = ter.F200_ROWID AND ter.F200_NIT = '$cedula'");
        
        $error = $dbErp->getError();

        $row = $dbErp->fetchByAssoc($res);
		
        return $row;		
	}
	
	public function getApplicantData($idEstudio)
	{
		global $db; 
		
		$query = "SELECT c.id AS idCliente, c.cedula AS cedula, c.first_name AS F200_NOMBRES, c.last_name AS F200_APELLIDO1, c.segundo_apellido AS F200_APELLIDO2 ,c.primary_address_street as F015_DIRECCION1, c.birthdate AS NACIMIENTO, e.vigencia AS vigencia, CAST(e.monto_aprobado AS SIGNED) AS monto
				  FROM jm_estudio_credito_contacts_c rel, contacts c,  jm_estudio_credito e
				  WHERE c.id = rel.jm_estudio_credito_contactscontacts_ida 
                  AND rel.jm_estudio_credito_contactsjm_estudio_credito_idb = e.id
				  AND rel.jm_estudio_credito_contactsjm_estudio_credito_idb = '$idEstudio' 
				  AND rel.deleted = 0";
		
		$resultado = $db->query($query);
		
		$fila= $db->fetchByAssoc($resultado);
		
		return $fila;
	}
	public function getCodeudorData($idEstudio)
        {
                global $db;

                $query = "SELECT c.id AS idCliente, c.cedula AS cedula, c.first_name AS F200_NOMBRES, c.last_name AS F200_APELLIDO1, c.segundo_apellido AS F200_APELLIDO2 ,c.primary_address_street as F015_DIRECCION1, c.birthdate AS NACIMIENTO, e.vigencia AS vigencia, CAST(e.monto_aprobado AS SIGNED) AS monto
                                  FROM jm_estudio_credito_contacts_1_c rel, contacts c,  jm_estudio_credito e
                                  WHERE c.id = rel.jm_estudio_credito_contacts_1contacts_idb
                  AND rel.jm_estudio_credito_contacts_1jm_estudio_credito_ida = e.id
                                  AND rel.jm_estudio_credito_contacts_1jm_estudio_credito_ida = '$idEstudio'
                                  AND rel.deleted = 0";

                $resultado = $db->query($query);

                $fila= $db->fetchByAssoc($resultado);

                return $fila;
        }

    
    public function exportClienteRetail()
    {
    	global $db;
        
        require_once("custom/modules/Project/FunProyectos.php");
        
        $p_id = "bcc42493-08ce-7b43-44b1-50c131be057d";
        
        $data = FunProyectos::getProyERPReales($p_id);
        $proyec_id = "T7-22";
        
        $cif =  $data['costos']; 
        $facturado = $data['facturado'];
        
        $valor = $data['valor'];
        
        $porcentaje = $facturado / $valor;
        
        
                            
        
        $cif_convertido = number_format($cif*$porcentaje,4,".","");
        
        $GLOBALS['log']->fatal("CIF: $cif ## FACTURADO: $facturado ## VALOR FACTURA: $valor ## PORCENTAJE: $porcentaje ## VALOR A OPERAR: $cif_convertido" );
        
        
        $contador = 1;
        $_strImport  = "<Linea>".$this->formatedUNOOEE("$contador",7,'NUMERICO')."00000001001</Linea>";
        $contador++;

        $_strImport .= "<Linea>";
		$_strImport .= $this->formatedUNOOEE("$contador",7,'NUMERICO');			//F_NUMERO_REG consecutivo
		$_strImport .= $this->formatedUNOOEE("350",4,'NUMERICO');		//F_TIPO_REG
		$_strImport .= $this->formatedUNOOEE("00",2,'NUMERICO');			//F_SUBTIPO_REG
		$_strImport .= $this->formatedUNOOEE("01",2,'NUMERICO');		//F_VERSION_REG
		$_strImport .= $this->formatedUNOOEE("001",3,'NUMERICO');			//F_CIA
		$_strImport .= $this->formatedUNOOEE("$contador",1,'NUMERICO');	//F_CONSEC_AUTO_REG
	    	$_strImport .= $this->formatedUNOOEE("001",3,'ALFANUMERICO');		//F350_ID_CO
		$_strImport .= $this->formatedUNOOEE("CPR",3,'ALFANUMERICO');     //F350_ID_TIPO_DOCTO
		$_strImport .= $this->formatedUNOOEE("1",8,'NUMERICO');			//F350_CONSEC_DOCTO
		$_strImport .= $this->formatedUNOOEE("20130130",8,'ALFANUMERICO');		//F350_FECHA
		$_strImport .= $this->formatedUNOOEE("890320064",15,'ALFANUMERICO');			//F350_ID_TERCERO
		$_strImport .= $this->formatedUNOOEE("30",5,'NUMERICO');		//F350_ID_CLASE_DOCTO
		$_strImport .= $this->formatedUNOOEE("0",1,'NUMERICO');    //F350_IND_ESTADO
		$_strImport .= $this->formatedUNOOEE("0",1,'NUMERICO');		//F350_IND_IMPRESION
		$_strImport .= $this->formatedUNOOEE("",255,'ALFANUMERICO');    //F350_NOTAS
		$_strImport .= "</Linea>";
        
        $contador++;
        $_strImport .= "<Linea>";
		$_strImport .= $this->formatedUNOOEE("$contador",7,'NUMERICO');			//F_NUMERO_REG consecutivo
		$_strImport .= $this->formatedUNOOEE("351",4,'NUMERICO');		//F_TIPO_REG
		$_strImport .= $this->formatedUNOOEE("00",2,'NUMERICO');			//F_SUBTIPO_REG
		$_strImport .= $this->formatedUNOOEE("02",2,'NUMERICO');		//F_VERSION_REG
		$_strImport .= $this->formatedUNOOEE("001",3,'NUMERICO');			//F_CIA
		$_strImport .= $this->formatedUNOOEE("001",3,'ALFANUMERICO');	//F350_ID_CO
		$_strImport .= $this->formatedUNOOEE("CPR",3,'ALFANUMERICO');		//F350_ID_TIPO_DOCTO
		$_strImport .= $this->formatedUNOOEE("1",8,'NUMERICO');		//F350_CONSEC_DOCTO
		$_strImport .= $this->formatedUNOOEE("6155500501",20,'ALFANUMERICO');			//F351_ID_AUXILIAR
		$_strImport .= $this->formatedUNOOEE("890320064",15,'ALFANUMERICO');		//F351_ID_TERCERO
		$_strImport .= $this->formatedUNOOEE("001",3,'ALFANUMERICO');		//F351_ID_CO_MOV
		$_strImport .= $this->formatedUNOOEE($proyec_id,20,'ALFANUMERICO');		//F351_ID_UN
		$_strImport .= $this->formatedUNOOEE("100199",15,'ALFANUMERICO');		//F351_ID_CCOSTO
		$_strImport .= $this->formatedUNOOEE("a",10,'ALFANUMERICO');		//F351_ID_FE
		$_strImport .= "+".$this->formatedUNOOEE("$cif_convertido",20,'NUMERICO');			//F351_VALOR_DB
		$_strImport .= "+".$this->formatedUNOOEE("000000000000000.0000",20,'NUMERICO');		//F351_VALOR_CR
		$_strImport .= $this->formatedUNOOEE("+000000000000000.0000",21,'NUMERICO');		//F351_VALOR_DB_ALT
		$_strImport .= $this->formatedUNOOEE("+000000000000000.0000",21,'NUMERICO');		//F351_VALOR_CR_ALT
		$_strImport .= $this->formatedUNOOEE("+000000000000000.0000",21,'NUMERICO');		//F351_BASE_GRAVABLE
		$_strImport .= $this->formatedUNOOEE("",2,'ALFANUMERICO');		//F351_DOCTO_BANCO
		$_strImport .= $this->formatedUNOOEE("0",8,'NUMERICO');		//F351_NRO_DOCTO_BANCO
		$_strImport .= $this->formatedUNOOEE("",255,'ALFANUMERICO');			//F351_NOTAS
		$_strImport .= "</Linea>";
		$contador++;
        
        
        $_strImport .= "<Linea>";
		$_strImport .= $this->formatedUNOOEE("$contador",7,'NUMERICO');			//F_NUMERO_REG consecutivo
		$_strImport .= $this->formatedUNOOEE("351",4,'NUMERICO');		//F_TIPO_REG
		$_strImport .= $this->formatedUNOOEE("00",2,'NUMERICO');			//F_SUBTIPO_REG
		$_strImport .= $this->formatedUNOOEE("02",2,'NUMERICO');		//F_VERSION_REG
		$_strImport .= $this->formatedUNOOEE("001",3,'NUMERICO');			//F_CIA
		$_strImport .= $this->formatedUNOOEE("001",3,'ALFANUMERICO');	//F350_ID_CO
		$_strImport .= $this->formatedUNOOEE("CPR",3,'ALFANUMERICO');		//F350_ID_TIPO_DOCTO
		$_strImport .= $this->formatedUNOOEE("1",8,'NUMERICO');		//F350_CONSEC_DOCTO
		$_strImport .= $this->formatedUNOOEE("142005",20,'ALFANUMERICO');			//F351_ID_AUXILIAR
		$_strImport .= $this->formatedUNOOEE("890320064",15,'ALFANUMERICO');		//F351_ID_TERCERO
		$_strImport .= $this->formatedUNOOEE("001",3,'ALFANUMERICO');		//F351_ID_CO_MOV
		$_strImport .= $this->formatedUNOOEE($proyec_id,20,'ALFANUMERICO');		//F351_ID_UN
		$_strImport .= $this->formatedUNOOEE("100199",15,'ALFANUMERICO');		//F351_ID_CCOSTO
		$_strImport .= $this->formatedUNOOEE("a",10,'ALFANUMERICO');		//F351_ID_FE
		$_strImport .= "+".$this->formatedUNOOEE("000000000000000.0000",20,'NUMERICO');			//F351_VALOR_DB
		$_strImport .= "+".$this->formatedUNOOEE("$cif_convertido",20,'NUMERICO');		//F351_VALOR_CR
		$_strImport .= $this->formatedUNOOEE("+000000000000000.0000",21,'NUMERICO');		//F351_VALOR_DB_ALT
		$_strImport .= $this->formatedUNOOEE("+000000000000000.0000",21,'NUMERICO');		//F351_VALOR_CR_ALT
		$_strImport .= $this->formatedUNOOEE("+000000000000000.0000",21,'NUMERICO');		//F351_BASE_GRAVABLE
		$_strImport .= $this->formatedUNOOEE("",2,'ALFANUMERICO');		//F351_DOCTO_BANCO
		$_strImport .= $this->formatedUNOOEE("0",8,'NUMERICO');		//F351_NRO_DOCTO_BANCO
		$_strImport .= $this->formatedUNOOEE("",255,'ALFANUMERICO');			//F351_NOTAS
		$_strImport .= "</Linea>";
		$contador++;
        
        $_strImport .= "<Linea>".$this->formatedUNOOEE("$contador",7,'NUMERICO')."99990001001</Linea>";

        
      

	$res =  $this->enviar($_strImport);
	return 'si';
	   if($res){
		return 'si';
	    } else {
		return 'no';
	    }
			
			
	}
		
		
}
?>
