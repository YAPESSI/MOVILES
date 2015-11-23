<?php
$fn=$_REQUEST['fn'];
switch ($fn) {
#DATOS PARA ELIMINAR#########
case '1': {
	$id_ciudad=$_REQUEST['nc'];	
	$v="delete from ciudad where id_ciudad='".$id_ciudad."'";
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
	$id_clientes=$_REQUEST['nc'];	
    $v="delete from clientes where id_clientes='".$id_clientes."'";
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
	$id_colonia=$_REQUEST['nc'];	
	$v="delete from colonia where id_colonia='".$id_colonia."'";
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
	$id_color=$_REQUEST['nc'];	
	$v="delete from color where id_color='".$id_color."'";
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
	$id_compras=$_REQUEST['nc'];	
	$v="delete from compras where id_compras='".$id_compras."'";
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
	$id_empleados=$_REQUEST['nc'];	
	$v="delete from empleados where id_empleados='".$id_empleados."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lempleados.php");exit();
	}
	mysql_close($conexion);
}break;
case '7': {
	$id_estado=$_REQUEST['nc'];	
	$v="delete from estados where id_estado='".$id_estado."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lestado.php");exit();
	}
	mysql_close($conexion);
}break;
case '8': {
	$id_ventas=$_REQUEST['nc'];	
    $v="delete from listaventas where id_ventas='".$id_ventas."'";
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
	$id_marca=$_REQUEST['nc'];	
    $v="delete from marca where id_marca='".$id_marca."'";
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
	$id_modelo=$_REQUEST['nc'];	
	$v="delete from modelo where id_modelo='".$id_modelo."'";
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
	$id_productodos=$_REQUEST['nc'];	
	$v="delete from productodos where id_productodos='".$id_productodos."'";
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

case '12': {
	$id_productos=$_REQUEST['nc'];	
	$v="delete from productos where id_productos='".$id_productos."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lproductos.php");exit();
	}
	mysql_close($conexion);
}break;

case '13': {
	$id_prveedores=$_REQUEST['nc'];	
	$v="delete from proveedores where id_proveedores='".$id_prveedores."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lprovedor.php");exit();
	}
	mysql_close($conexion);
}break;

case '14': {
	$id_tipo=$_REQUEST['nc'];	
	$v="delete from tipo where id_tipo='".$id_tipo."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:ltipo.php");exit();
	}
	mysql_close($conexion);
}break;

case '15': {
	$id_usuario=$_REQUEST['nc'];	
	$v="delete from usuarios where id_usuario='".$id_usuario."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lusuario.php");exit();
	}
	mysql_close($conexion);
}break;

case '16': {
	$id_venta=$_REQUEST['nc'];	
	$v="delete from ventas where id_venta='".$id_venta."'";
	include('conexion.php');	
	$rs=mysql_query($v);
	if ($rs==0){
		echo "Error al guardar";
	}
	else{
		header("Location:lisventas.php");exit();
	}
	mysql_close($conexion);
}break;

###AUTENTIFICACION DE ALUMNOS########
default:
echo 'NO SE PUDO REALIZAR LA OPERACION';
}	
?>