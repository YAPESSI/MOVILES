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

require('conexion.php'); 
$rs=mysql_query($sql);
$header='RFC\tNOMBRE\tEDAD\tSEXO\n';
while($row=mysql_fetch_array($rs)){
	$value.=$row[0];      $value.="\t".$row[1];
	$value.="\t".$row[2]; $value.="\t".$row[3];
	$value.="\n";
}
$data=$value; $data=str_replace("\r", " ", $data);
	if($data==" "){$data="\n No hay registros \n";}
	header('content-type:application/x-octet-stream');
	header('cache-control:must-revalidate,post-check=0,pre-check=0');
	header('content-disposition;attachment;filename=datos.xls');
    header('Programa:no-cache');header('Expires:0');
    echo utf8_decode($header."\n".$data);
    ob_end_flush(); 
    ?>