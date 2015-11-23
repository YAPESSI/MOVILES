<?php
$fn=$_REQUEST['fn'];
switch ($fn) {
###DATOS DE ACTUALIZACIÓN########
case '1': {
	$id=$_REQUEST['nc'];
	$nom=$_REQUEST['nombre_ciudad'];
	$ref=$_REQUEST['ref_estado'];
	 
    $v="update  ciudad set nombre_ciudad='".$nom."',
    ref_estado='".$ref."' where id_ciudad='".$id."'";
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
	$nom=$_REQUEST['nombre'];
	$ap=$_REQUEST['apaterno'];
	$am=$_REQUEST['amaterno'];
	$tel=$_REQUEST['telefono'];
	$codi=$_REQUEST['codigo_postal'];
	$rfc=$_REQUEST['RFC'];
	$cal=$_REQUEST['calle'];
	$num=$_REQUEST['numero'];
	$ref=$_REQUEST['ref_colonia'];
	 
    $v="update  clientes set nombre='".$nom."',apaterno='".$ap."',
    amaterno='".$am."',telefono='".$tel."',codigo_postal='".$codi."',
    RFC='".$rfc."',calle='".$cal."',numero='".$num."',
    ref_colonia='".$ref."' where id_clientes='".$id."'";
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
	$id=$_REQUEST['nc'];
	$nom=$_REQUEST['nombre_colonia'];
	$ref=$_REQUEST['ref_ciudad'];
	 
    $v="update  colonia set nombre_colonia='".$nom."',
    ref_ciudad='".$ref."' where id_colonia='".$id."'";
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
	$id=$_REQUEST['nc'];
	$nom=$_REQUEST['nom_color'];
	 
    $v="update  color set nom_color='".$nom."' where id_color='".$id."'";
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
	$fc=$_REQUEST['fecha_compra'];
	$ap=$_REQUEST['ref_productos'];
	$ac=$_REQUEST['ref_proveedores'];
	$te=$_REQUEST['ref_empleados'];
	 
    $v="update compras set fecha_compra='".$fc."',ref_productos='".$ap."',
    ref_proveedores='".$ac."',ref_empleados='".$te."' where id_compras='".$id."'";
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
	$nom=$_REQUEST['nombre'];
	$ap=$_REQUEST['apaterno'];
	$am=$_REQUEST['amaterno'];
	$tel=$_REQUEST['telefono'];
	$codi=$_REQUEST['codigo_postal'];
	$rfc=$_REQUEST['RFC'];
	$pues=$_REQUEST['puesto'];
	$cal=$_REQUEST['calle'];
	$num=$_REQUEST['numero'];
	$ref=$_REQUEST['ref_colonia'];
	 
    $v="update  empleados set nombre='".$nom."',apaterno='".$ap."',
    amaterno='".$am."',telefono='".$tel."',codigo_postal='".$codi."',
    RFC='".$rfc."',puesto='".$pues."',calle='".$cal."',numero='".$num."',
    ref_colonia='".$ref."' where id_empleados='".$id."'";
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
	$ide=$_REQUEST['nc'];
	$nome=$_REQUEST['nombre_estado'];	 
    $v="update  estados set nombre_estado='".$nome."' where id_estado='".$ide."'";
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
	$id=$_REQUEST['nc'];
	$fc=$_REQUEST['cantidad'];
	$ap=$_REQUEST['descripcion'];
	$ac=$_REQUEST['ref_productos'];
	$te=$_REQUEST['ref_ventas'];
	 
    $v="update listaventas set cantidad='".$fc."',descripcion='".$ap."',
    ref_productos='".$ac."',ref_ventas='".$te."' where id_ventas='".$id."'";
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
	$id=$_REQUEST['nc'];
	$nomar=$_REQUEST['nom_marca'];
	$refr=$_REQUEST['ref_modelo'];
	 
    $v="update  marca set nom_marca='".$nomar."',ref_modelo='".$refr."' where id_marca='".$id."'";
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
	$nomm=$_REQUEST['nom_modelo'];
	 
    $v="update  modelo set nom_modelo='".$nomm."'where id_modelo='".$id."'";
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
	$nom=$_REQUEST['numero'];
	$exs=$_REQUEST['existencia'];
	 
    $v="update  productodos set numero='".$nom."',
    existencia='".$exs."' where id_productodos='".$id."'";
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
	$id=$_REQUEST['nc'];
	$nom=$_REQUEST['precio_mayorista'];
	$ap=$_REQUEST['precio_proveedor'];
	$am=$_REQUEST['precio_publico'];
	$tel=$_REQUEST['ref_productodos'];
	$codi=$_REQUEST['ref_marca'];
	$rfc=$_REQUEST['ref_tipo'];
	$pues=$_REQUEST['ref_color'];
	 
    $v="update  productos set precio_mayorista='".$nom."',precio_proveedor='".$ap."',
    precio_publico='".$am."',ref_productodos='".$tel."',ref_marca='".$codi."',ref_tipo='".$rfc."',
    ref_color='".$pues."' where id_productos='".$id."'";
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
	$id=$_REQUEST['nc'];
	$nom=$_REQUEST['nombre'];
	$ap=$_REQUEST['apaterno'];
	$am=$_REQUEST['amaterno'];
	$tel=$_REQUEST['telefono'];
	$codi=$_REQUEST['codigo_postal'];
	$rfc=$_REQUEST['RFC'];
	$call=$_REQUEST['calle'];
	$numr=$_REQUEST['numero'];
	$refc=$_REQUEST['ref_colonia'];
	 
    $v="update  proveedores set nombre='".$nom."',apaterno='".$ap."',amaterno='".$am."',
    telefono='".$tel."',codigo_postal='".$codi."',RFC='".$rfc."',calle='".$call."',
    numero='".$numr."', ref_colonia='".$refc."' where id_proveedores='".$id."'";
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
	$id=$_REQUEST['nc'];
	$nomt=$_REQUEST['nom_tipo'];
	 
    $v="update  tipo set nom_tipo='".$nomt."'where id_tipo='".$id."'";
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
	$id=$_REQUEST['nc'];
	$user=$_REQUEST['usuario'];
	$pass=$_REQUEST['password'];
	 
    $v="update usuarios set usuario='".$user."',password='".$pass."' where id_usuario='".$id."'";
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
	$id=$_REQUEST['nc'];
	$nom=$_REQUEST['fecha_venta'];
	$ap=$_REQUEST['iva'];
	$am=$_REQUEST['subtotal'];
	$tel=$_REQUEST['total'];
	$codi=$_REQUEST['ref_cliente'];
	 
    $v="update  ventas set fecha_venta='".$nom."',iva='".$ap."',subtotal='".$am."',
    total='".$tel."',ref_cliente='".$codi."' where id_venta='".$id."'";
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