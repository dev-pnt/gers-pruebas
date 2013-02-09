<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Opportunities push feed', 'modules/Opportunities/SugarFeeds/OppFeed.php','OppFeed', 'pushFeed');

$hook_array['before_save'][] = Array(2, 'consecutivo', 'custom/modules/Opportunities/functions.php','functions', 'consecutivo');  


$hook_array['after_save'][] = Array(1, 'Cotizaciones proyectos', 'custom/modules/Opportunities/create_project.php','create_project', 'createProject');  
$hook_array['after_save'][] = Array(2, 'Tareas_Cotizaciones Tareas_Proyectos', 'custom/modules/Opportunities/create_task.php','create_task', 'createTask');  
//$hook_array['after_save'][] = Array(3, 'costos directos', 'custom/modules/Opportunities/create_costos.php','create_costos', 'createCostos');  
//$hook_array['after_save'][] = Array(4, 'servicios externos', 'custom/modules/Opportunities/create_servicios.php','create_servicios', 'create');  
$hook_array['after_ui_frame'] = Array(); 



?>
