<?php
class ConexErp{
    
    static $instances = array();
    

    /*function __construct(){
        echo "<br/>Soy Nuevo<br/>";die();
    }*/ 
    public static function getInstance($instanceName = 'PRODUCCION'){
        
        
        if(!isset(self::$instances[$instanceName])){
            require_once("custom/include/OracleManager.php");
            
            self::$instances[$instanceName] = new OracleManager();
        }else{
            
        }
                
        return self::$instances[$instanceName];
    }
    
    
    public static function disconnectAll()
    {
        foreach(self::$instances as $instance) {
            $instance->disconnect();
        }
        self::$instances = array();
    }
    
    
    
}
?>