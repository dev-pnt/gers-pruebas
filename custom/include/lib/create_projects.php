<?php
include_once("modules/Project/Projects.php");
global $db;

$query = "SELECT * FROM temporal;";

$res = $db->query($query);

while($data = $db->fetchByAssoc($res)){
$project = new Project();

$project->name = $data['name'];
$project->description = $data['description'];
$project->nit = $data['nit'];
$project->costo_total = $data['costo_total'];
$project->estimated_start_date = $data['estimated_start_date'];
$project->estimated_end_date = $data['estimated_end_date'];
$project->departamento_encargado = $data['departamento_encargado'];

$project->save();
}
?>
