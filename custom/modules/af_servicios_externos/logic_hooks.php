<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
$hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'calcula_costo', 'custom/modules/af_servicios_externos/functions.php','functions', 'subtotal');  
$hook_array['before_save'][] = Array(2, 'calcula_cotizacion', 'custom/modules/af_servicios_externos/functions.php','functions', 'valor_cot');  

$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'calcula_costo', 'custom/modules/af_servicios_externos/functions.php','functions', 'subtotal');  
$hook_array['after_save'][] = Array(2, 'calcula_cotizacion', 'custom/modules/af_servicios_externos/functions.php','functions', 'valor_cot');  

$hook_array['after_ui_frame'] = Array(); 

?>
