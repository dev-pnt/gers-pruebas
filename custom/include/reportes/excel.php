<?php
require_once("php-excel/excel.php");
require_once("php-excel/excel-ext.php");
$name = $_REQUEST['name'];
$data = $_SESSION['data'];
createExcel($name.".xls", $data);
unset($_SESSION['data']);
exit;
?>
