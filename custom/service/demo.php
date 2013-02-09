<?php
include_once('custom/service/setERP.php');

$ws = new SetErp();

$res = $ws->exportClienteRetail();

print_r($res);

?>
