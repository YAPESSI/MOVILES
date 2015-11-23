<?php
$fn=$_REQUEST['fn'];
switch ($fn) {
#DATOS PARA ELIMINAR#########
case '1': {
	$id=$_REQUEST['nc'];	
	$v="delete from ciudad where id_ciudad='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lciudad.php");exit();
	}
	mysql_close($conexion);
}break;
case '2': {
	$id=$_REQUEST['nc'];	
    $v="delete from clientes where id_clientes='".$id."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lclientes.php");exit();
	}
	mysql_close($conexion);
}break;
case '3': {
	$idco=$_REQUEST['nc'];	
	$v="delete from colonia where id_colonia='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lcolonia.php");exit();
	}
	mysql_close($conexion);
}break;

case '4': {
	$idcol=$_REQUEST['nc'];	
	$v="delete from color where id_color='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lcolor.php");exit();
	}
	mysql_close($conexion);
}break;

case '5': {
	$id=$_REQUEST['nc'];	
	$v="delete from compras where id_compras='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lcompras.php");exit();
	}
	mysql_close($conexion);
}break;

case '6': {
	$id=$_REQUEST['nc'];	
	$v="delete from estados where id_estado='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lestados.php");exit();
	}
	mysql_close($conexion);
}break;
##########################3
case '7': {
	$ide=$_REQUEST['id_estado'];	
    $v="delete from ciudad where id_ciudad='".$id."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lciudad.php");exit();
	}
	mysql_close($conexion);
}break;
case '8': {
	$idv=$_REQUEST['nc'];	
    $v="delete from listaventas where id_ventas='".$id."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lventas.php");exit();
	}
	mysql_close($conexion);
}break;
case '9': {
	$idv=$_REQUEST['nc'];	
    $v="delete from marca where id_marca='".$id."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lmarca.php");exit();
	}
	mysql_close($conexion);
}break;
case '10': {
	$id=$_REQUEST['nc'];	
	$v="delete from modelo where id_modelo='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lmodelo.php");exit();
	}
	mysql_close($conexion);
}break;
case '11': {
	$id=$_REQUEST['nc'];	
	$v="delete from productodos where id_productodos='".$nc."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lproducto2.php");exit();
	}
	mysql_close($conexion);
}break;



#########################

PPPPPPPPPPPPPPEEEEEEEEEEEEEEEEEEEEEEEEE
NNNNNNNNNNNNNNNNNDDDDDDDDDDDDDDDDDDDDDD
IIIIIIIIIIIIIIIIIEEEEEEEEEEEEEEEEEEEEEE
NNNNNNNNNNNNNNNNTTTTTTTTTTTTTTTTTTTTTTT
EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE



















###AUTENTIFICACION DE ALUMNOS########
default:
echo 'NO SE PUDO REALIZAR LA OPERACION';
}	
?>