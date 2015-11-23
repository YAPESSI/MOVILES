SCRIPT PARA AGREGAR UN REPORTE EN EXCEL

<?php
	ob_star();
	$buscar1=strtoupper($_REQUEST['buscar']);
	$criterios=$_REQUEST['criterios'];
	if($buscar1!=" " or $criterios=='todos'){
		if($criterios=='nombre'){
			$sql="select rfc,nombre,from clientes where nombre like '$buscar%' order by rfc";
		}
		if($criterios=='todos'){
			$sql="select rfc, nombre from clientes order by rfc";
		}
	}