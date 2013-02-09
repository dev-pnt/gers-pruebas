<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Total_actividad', 'custom/modules/AF_ActividadCotizaciones/functions.php','functions', 'costo_actividad');  
  
$hook_array['after_save'][] = Array(2, 'suma a valor cotizacion', 'custom/modules/AF_ActividadCotizaciones/functions.php','functions', 'valor_cot');
$hook_array['after_save'][] = Array(1, 'Total_actividad', 'custom/modules/AF_ActividadCotizaciones/functions.php','functions', 'costo_actividad');  
$hook_array['after_save'][] = Array(2, 'suma a valor cotizacion', 'custom/modules/AF_ActividadCotizaciones/functions.php','functions', 'valor_cot');  
$hook_array['after_ui_frame'] = Array(); 



?>
