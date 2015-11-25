<?php
	ob_start();
	//$buscar1=strtoupper($_REQUEST['buscar']);
	//$criterios=$_REQUEST['criterios'];
	//if($buscar1!=" " or $criterios=='todos'){
	//	if($criterios=='nombre'){
	//		$sql="select rfc,nombre,from clientes where nombre like '$buscar%' order by rfc";
	//	}
	//	if($criterios=='todos')
	//{
			$sql="select nom_color from color order by id_color";
	//	}
	//}
	require('conexion.php');
	$rs=mysql_query($sql);
	$header="NOMBRE\n";
	while($row=mysql_fetch_array($rs)){
		$value.=$row[0];
		//$value.="\t".$row[1];
		//$value.="\t".$row[2];
		//$value.="\t".$row[3];
		$value.="\n";
	}
	$data=$value;
	$data=str_replace("\r","rcolor.php",$data);
	if($data=="rcolor.php"){
		$data="\n No hay Registros\n";
	}
	header('Content-Type:application/x-octet-stream');
	header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
	header('Content-Disposition:attachment;filename=dcolor.xls');
	header('Progma:no-cache');
	header('Expire:0');
	echo utf8_decode($header."\n".$data);
	ob_end_flush();
	?>