<?php
$server = "sigers.gerscali.local";
if(!mssql_pconnect($server, "consultaws", "unoee")){
    //die("Error conectando MS-SQL");
    
    $GLOBALS['log']->fatal("Error conectando MS-SQL");   
}
mssql_select_db ("unoee");
?>