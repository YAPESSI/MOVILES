<?php
	$conexion=mysql_connect("localhost","root","") or die("Error de conexion".mysql_error());
	if(!$conexion){
		header("location:verificacion.php?error=Error en la Conexion de la DB");exit();
	}
	$db=mysql_select_db("zapateria") or die ("Error al seleccionar la base de datos".mysql_error());
	if(!$db){
		header("location:verificacion.php?error=Error al Selecionar la DB");exit();
	}
	
?>
