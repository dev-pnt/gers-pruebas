<?php
// pagina web http://www.sigua.ua.es/web/utils/soap/consumo_php.php

require_once("include/nusoap/nusoap.php");
$ini = ini_set("soap.wsdl_cache_enabled","0");
ini_set('memory_limit', '-1');

class WSClient
{
    //Cliente NuSOAP
    private $_client;

    //Constructor

    //$wsdl es la URL de enlace (string)

    //$user y $password son el usuario y clave de Apache para autentificacion basica (string)
    public function __construct($wsdl, $user, $password)
    {
        //Instancia del cliente NuSOAP
        $this->_client = new nusoap_client($wsdl, "wsdl", "", "", "", "");
        //$this->_client = new nusoap_client($wsdl);
        //$this->_client = new soapClient($wsdl,array( "trace" => 1,"exceptions" => 0, "cache_wsdl" => 0 ), true);
		$this->_client->setDebugLevel(1);
		$this->_client->debug_flag = 1;
		//$this->_client->setEndpoint('WSUNOEESoap');
        $err = $this->_client->getError();
        if ($err)
        {
            throw new Exception("Error al instanciar el cliente NuSOAP: " . $err);
        }

        //Asignacion de credenciales
        //$this->_client->setCredentials($user, $password, "basic");
    }

    //Este metodo trata el DataSet serializado (array asociativo) y recupera el subarray que contiene los datos.

    //$methodname es el nombre del metodo (string)

    //$params es el array de parametros (array asociativo o null)
    function getErrorDMesa(){
        return $this->_client->getError();
    }
    function SOAPRequest($methodname, $params)
    {
        //Invocacion del metodo
		//exit("<pre>". print_r($this->_client->serializeEnvelope($params), true). "</pre>");


        //$result = $this->_client->call($methodname, $params);
		//$message = $this->_client->serializeEnvelope($params, '', array(), 'document', 'literal');
		//echo $message;
		//$result = $this->_client->send($message, 'http://tempuri.org/'.$methodname);
        
        $result = $this->_client->call($methodname, $params,'http://tempuri.org','http://tempuri.org/'.$methodname,false,'document','literal');
		//$result = $this->_client->LeerEsquemaParametros($params);
		//$result = $this->_client->$methodname($params)->$methodname . "Result";
		
		//echo ("<pre>". print_r($this->_client->getDebug(), true). "</pre>");
		//echo ("<pre>RESPONSE: ". print_r($this->_client->response, true). "</pre>");
/*
print "<pre>";
print "Request :\n".htmlspecialchars($this->_client->__getLastRequest()) ."\n";
print "Response:\n".htmlspecialchars($this->_client->__getLastResponse())."\n";
print "</pre>";
*/
        
        
        if ($this->_client->fault)
        {
            throw new Exception("Fallo al invocar el metodo " . $methodname . ":" . var_dump($result));
        }
        else
        {

			//exit("<pre>". print_r($result, true). "</pre>");
            $err = $this->_client->getError();
            if ($err)
            {
                throw new Exception("La llamada al metodo " . $methodname . " genera un error: " . $err);
            }
            else
            {
                //Comprobamos que el elemento "diffgram" es un array, de lo contrario es un conjunto vacio de registros
				//echo $this->_client->getDebug();
                
                if(is_array($result[$methodname . "Result"]["diffgram"]))
                {
                    //Recuperamos el elemento "Resultado", que es el que contiene los datos propiamente dichos
                    
                    return $result[$methodname . "Result"]["diffgram"]["NewDataSet"]["Resultado"];
                }
                else
                {
                    
                    return null;
                }
            }
        }
    }

} //END Class
