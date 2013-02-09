<!DOCTYPE html>
<html>
	<head>
		<title>Reporte Detalle</title>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" id="style-css" href="http://necolas.github.com/normalize.css/2.0.1/normalize.css" type="text/css" media="all">
	</head>
	<body>

<div class="cont">
                <div class="filters" style="width:500px;margin: 0 auto;">
                        <form method="POST" action="index.php?module=Project&action=reporte_detalle" id="fo3" name="fo3">
<table><tr>
           <td>                     <p>Codigo Departamento: 
					<select name="dep" id="departamento_encargado" title=''>
<option label="TODOS" value=""></option>
<option label="COMERCIAL BOGOTA" value="000CB">COMERCIAL BOGOTA</option>
<option label="COMERCIAL CARIBE" value="000CC">COMERCIAL CARIBE</option>
<option label="COMERCIAL (VENTA EQUIPOS)" value="000CO">COMERCIAL (VENTA EQUIPOS)</option>
<option label="CALIDAD DE POTENCIA" value="000CP">CALIDAD DE POTENCIA</option>
<option label="COMERCIAL VILLAVICENCIO" value="000CV">COMERCIAL VILLAVICENCIO</option>
<option label="GERENCIA DPTO AUTOMATIZACION" value="000GA">GERENCIA DPTO AUTOMATIZACION</option>
<option label="GERENCIA DPTO DISENOS" value="000GD">GERENCIA DPTO DISENOS</option>
<option label="GERENCIA DPTO ESTUDIOS" value="000GE">GERENCIA DPTO ESTUDIOS</option>
<option label="ADMINISTRACION GERS S.A." value="000GL">ADMINISTRACION GERS S.A.</option>
<option label="GERENCIA PRUEBAS" value="000IC">GERENCIA PRUEBAS</option>
<option label="NEPLAN" value="000NE">NEPLAN</option>
<option label="GERENCIA CENTRO (CONSULTORIA)" value="00GCN">GERENCIA CENTRO (CONSULTORIA)</option>
<option label="GERENCIA CARIBE (CONSULTORIA)" value="000GC">GERENCIA CARIBE (CONSULTORIA)</option>
<option label="GERENCIA LLANOS (CONSULTORIA)|" value="00GLL">GERENCIA LLANOS (CONSULTORIA)|</option>
</select>

</p></td>
         <td>                       <input type="submit" name="consultar" value="Consultar Reporte Detallado"/></td>
                        </form>
                </div>
                <div id="data" style="margin: 0 auto"></div>
        </div>
	</body>
</html>
