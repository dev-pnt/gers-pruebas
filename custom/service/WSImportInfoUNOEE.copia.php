<?php
require_once('include/nusoap/nusoap.php');

if( ! defined('sugarEntry') ||  ! sugarEntry)
   die('No es un Punto de Entrada Valido ...');

class WSImportInfoUNOEE
{

   public $_soapUrl = null;
   public $_soapClient = null;
   public $_methodeCall = null;
   public $_parameters = array();
   public $_messageError = null;
   public $_result = null;

   public function WSImportInfoUNOEE($urlWsdl = null)
   {
      if( ! is_null($urlWsdl))
      {
         $this->setUrl($urlWsdl);
      }
      else
      {
         $this->setUrl('http://190.85.13.90/sugarcrm/soap.php?wsdl');
         //$this->setUrl('http://www.peopleandtools.com/ejcrm/soap.php?wsdl');
         //$this->setUrl("http://172.16.3.60/WSUNOEE/WSUNOEE.wsdl");
         //$this->setUrl("http://190.85.13.90/WSUNOEE/WFConexion.aspx");
         //$this->setUrl("http://190.85.13.90/WSUNOEE/WFPruebaImportar.aspx");
      }

      if( ! is_null($this->getUrl()))
      {
         //$this->_soapCliente(new nusoapclient(getUrl(), true));
         $this->setSoapCliente(new soapclient($this->getUrl(), true));
         $this->_soapClient->debug_flag = 1;
         /*
         $cache = new wsdlcache('C:\temp', 12000);
         $wsdl = $cache->get($soapurl );

         if (is_null($wsdl)) {
         $wsdl = new wsdl($soapurl );
         $cache->put($wsdl);
         }
         */
      }
      else
      {
         //===========================================================================
         // ERROR DE LA COMUNICACION
         //===========================================================================
         $this->setMessageError($soapClient->getError());
      }

   }

   public function setUrl($urlWsdl)
   {
      $this->_soapUrl = $urlWsdl;
   }

   public function getUrl()
   {
      return $this->_soapUrl;
   }

   public function setSoapCliente($soapCliente)
   {
      $this->_soapClient = $soapCliente;
   }

   public function getSoapCliente()
   {
      return $this->_soapClient;
   }

   public function setParameters($parameters)
   {
      $this->_parameters = $parameters;
   }

   public function getParameters()
   {
      return $this->_parameters;
   }

   public function setResult($result)
   {
      $this->_result = $result;
   }

   public function getResult()
   {
      return $this->_result;
   }

   public function setMessageError($messageError)
   {
      $this->_messageError = $messageError;
   }

   public function getMessageError()
   {
      return $this->_messageError;
   }

   //===========================================================================
   // CONEXION CON UNOEE
   //===========================================================================
   public function runLogin($parameter = null)
   {
      if( ! is_null($parameter) && is_array($parameter))
      {
         $this->setParameters($parameter);
      }
      else
      {
         $this->setParameters(array('user_auth'=>
                                    array('user_name'=>'admin',
                                          'password'=>'admin',
                                          'version'=>'.01'),
                                          'application_name'=>'SoapTest')
         );
      }

      $this->setResult($this->_soapClient->call('login', $this->getParameters()));
   }
   //===========================================================================
   // CONEXION CON UNOEE
   //===========================================================================
   public function runCrearConexionUNOEE($parameter = null)
   {
      if( ! is_null($parameter) && is_array($parameter))
      {
         $this->setParameters($parameter);
      }
      else
      {
         $this->setParameters(array('Conexion'=>
                                    array('NombreConexion'=>'LNR',
                                          'TipoBD'=>'SQL',
                                          'NombreBD'=>'unoee',
                                          'NombreServidorBD'=>'TRINITY',
                                          'UsuarioBD'=>'user',
                                          'ClaveBD'=>'1234',
                                          'NumConexionImpo'=>'1', )
                                          )
         );
      }
      $this->setResult($this->_soapClient->call('CrearConexionXML', $this->getParameters()));
   }
   //===========================================================================
   // EJECUTAR CONSULTA EN UNOEE
   //===========================================================================
   public function runEjecutarConsultaUNOEE($parameter = null)
   {
      if( ! is_null($parameter) && is_array($parameter))
      {
         $this->setParameters($parameter);
      }
      else
      {
         $this->setParameters(array('Consulta'=>
                                    array('NombreConexion'=>'LNR',
                                          'IdCia'=>'1',
                                          'IdProveedor'=>'SUGAR',
                                          'IdConsulta'=>'Referencia',
                                          'Usuario'=>'user',
                                          'Clave'=>'password',
                                          'Parametros'=>array()
                                          )
                                    )
         );
      }
      /*
      array(  'p_cia' => '1',
      'p_id_co' => '01',
      'p_id_tipo_docto' => 'NI',
      'p_consec_docto' => '10'
      )
      */
      $this->setResult($this->_soapClient->call('EjecutarConsultaXML', $this->getParameters()));
   }
   //===========================================================================
   // LEER ESQUEMA PARAMETROS EN UNOEE
   //===========================================================================
   public function runLeerEsquemaParametrosUNOEE($parameter = null)
   {
      if( ! is_null($parameter) && is_array($parameter))
      {
         $this->setParameters($parameter);
      }
      else
      {
         $this->setParameters(array('Consulta'=>
                                    array('NombreConexion'=>'conexionUNOEE',
                                          'IdProveedor'=>'SIESA',
                                          'IdConsulta'=>''
                                          )
                                    )
         );
      }
      $this->setResult($this->_soapClient->call('LeerEsquemaParametros', $this->getParameters()));
   }
   //===========================================================================
   // EXPORTAR LOS DATOS DE TERCERO A UNOEE
   //===========================================================================
   public function runLeerImportarTerceroXMLUNOEE($parameter = null)
   {
      if( ! is_null($parameter) && is_array($parameter))
      {
         $this->setParameters($parameter);
      }
      else
      {
         $this->setParameters(array('Importar'=>
                                    array('NombreConexion'=>'LNR',
                                          'IdCia'=>'1',
                                          'Usuario'=>'paola',
                                          'Clave'=>'paola',
                                          'Datos'=>'<Linea>000000100000001001</Linea> <Linea>000000200460001001116786088       00100101    </Linea> <Linea>000000300460001001180431764       09900101    </Linea> <Linea>000000400460001001100000          00100201    </Linea> <Linea>000000500460001001180431764       00100101    </Linea> <Linea>000000600460001001180431764       00500201    </Linea> <Linea>000000700460001001120040129       00100101    </Linea> <Linea>000000800460001001180431764       01100201    </Linea> <Linea>000000900460001001114890621       00100101    </Linea> <Linea>000001000460001001114890621       00200101    </Linea> <Linea>000001199990001001</Linea>'
                                          )
                                          )

         );
         //array(  'Linea' => '0000001020000020010            UNO       999999991 0                                                     000010                                            PEPITO                              DIRECCION1                              DIRECCION2                              DIRECCION3                                          BARRIO            TELEFONO                 FAX                                           CORREOELECTRONICO19000101    ')
      }
      $this->setResult($this->_soapClient->call('ImportarXML', $this->getParameters()));
   }
   //===========================================================================
   // CONEXION CON UNOEE
   //===========================================================================
   public function run($action=null, $parameter=null)
   {

      if( is_null($action) ){
        $this->setMessageError("No se ha definido un metodo a ejecutar.");
      } else if( is_null($parameter) || ! is_array($parameter))
      {
         $this->setMessageError("No se ha definido parametros para el metodo a ejecutar.");
      } else
      {
        $this->setParameters($parameter);
        $this->setResult($this->_soapClient->call($action, $this->getParameters()));
      }

   }
   //===========================================================================
   // RESPUESTA DEL Web Service
   //===========================================================================
   //*
   public function enviarCorreo()
   {
      require_once("C:\Program Files\sugarcrm-6.5.0\apps\sugarcrm\htdocs\include/SugarPHPMailer.php");
      $mail = new SugarPHPMailer();
      $mail->Subject = 'Nuevo mensaje de correo electronico';
      $mail->prepForOutbound();
      $mail->setMailerForSystem();
      $mail->Body = 'Aqui va el mensaje del correo electronico';
      $mail->From = 'ricaherr@gmail.com';
      $mail->FromName = 'Sistema de envio de correos';
      $mail->AddAddress('ricaherr@gmail.com');
      if( ! $mail->Send())
      {
         $GLOBALS['log']->info("No se ha podido enviar el correo electronico:  " . $mail->ErrorInfo);
      }
   }

   public function showResult($showDebug = false)
   {
      if($showDebug)
      {
         echo '<h2>Request</h2>';
         echo '<pre>' . htmlspecialchars($this->_soapClient->request, ENT_QUOTES) . '</pre>';
         echo '<h2>Response</h2>';
         echo '<pre>' . htmlspecialchars($this->_soapClient->response, ENT_QUOTES) . '</pre>';
         echo '<h2>Debug</h2>';
         echo '<pre>' . htmlspecialchars($this->_soapClient->debug_str, ENT_QUOTES) . '</pre>';
      }

      if($this->_soapClient->fault)
      {
         echo "Error al llamar el metodo " . $this->_soapClient->getError();
      }
      elseif( ! $this->getResult() )
      {
         echo "<BR>ERROR:<BR>";print_r($this->getResult());
         var_dump('SOAP Error (' . $this->_soapClient->faultcode . '): ' .
         $this->_soapClient->faultstring . ': ' . $this->_soapClient->faultdetail .
         ' HTTP Response: ' . $this->_soapClient->response);
      }
      else
      {
         print_r("<pre>RESULT:<BR>");print_r($this->getResult());print_r("</pre>");
         //var_dump('SOAP Error ('.$this->_soapClient->faultcode.'): ' .
         //          $this->_soapClient->faultstring.': '.$this->_soapClient->faultdetail .
         //          ' HTTP Response: '.$this->_soapClient->response);
      }
      //print_r("<pre>RESULT:<BR>"); print_r($this->getResult()); print_r("</pre>");
      //===========================================================================
      //mail("ricaherr@gmail.com","prueba sugarcrm","prueba de correo","From: ricaherr@gmail.com");
   }

}//End class

?>
