<?php
error_reporting(E_ALL ^ E_STRICT);

require_once('/var/www/html/sugarcrm/include/nusoap/nusoap.php');

if( ! defined('sugarEntry') ||  ! sugarEntry) die('No es un Punto de Entrada Valido ...');

class WSImportInfoUNOEE
{

   public $_soapUrl = null;
   public $_soapClient = null;
   public $_methodeCall = null;
   public $_parameters = array();
   public $_messageError = null;
   public $_result = null;

   //public function WSImportInfoUNOEE($urlWsdl = null)
   public function __construct($urlWsdl, $user, $password)
   {
      if( ! is_null($urlWsdl))
      {
         $this->setUrl($urlWsdl);
      }
      else
      {
         $this->setUrl('http://192.168.0.250/WSUNOEE/WSUNOEE.asmx?WSDL');
         //$this->setUrl('http://crm.peopleandtools.com/soap.php?wsdl');
         //$this->setUrl('http://www.peopleandtools.com/ejcrm/soap.php?wsdl');
         //$this->setUrl("http://172.16.3.60/WSUNOEE/WSUNOEE.wsdl");
         //$this->setUrl("http://190.85.13.90/WSUNOEE/WFConexion.aspx");
         //$this->setUrl("http://190.85.13.90/WSUNOEE/WFPruebaImportar.aspx");
      }

      if( ! is_null($this->getUrl()))
      {
         //$this->_soapCliente(new nusoapclient(getUrl(), true));
         $this->setSoapCliente(new SoapClient($this->getUrl(), true));
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
   public function run($action=null, $parameter=null)
   {
	  $this->setParameters($parameter);
	  
      if( is_null($action) ){
        $this->setMessageError("No se ha definido un metodo a ejecutar.");
      } else if( is_null($parameter) || ! is_array($parameter))
      {
         $this->setMessageError("No se ha definido parametros para el metodo a ejecutar.");
      } else
      {
		echo "ejecutando metodo ...";
        $this->setParameters($parameter);
        $this->setResult($this->_soapClient->call($action, array($this->getParameters()) ));
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
      print_r("<pre>RESULT:<BR>"); print_r($this->getResult()); print_r("</pre>");
      echo '<pre>' . htmlspecialchars($this->_soapClient->debug_str, ENT_QUOTES) . '</pre>';
      //===========================================================================
      //mail("ricaherr@gmail.com","prueba sugarcrm","prueba de correo","From: ricaherr@gmail.com");
   }

}//End class

?>
