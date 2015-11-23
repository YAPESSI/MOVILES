<?php
$fn=$_REQUEST['fn'];
switch ($fn) {
#DATOS PARA INSERTAR#########
case '1': {
	$id=$_REQUEST['id_ciudad'];
	$nom=$_REQUEST['nombre_ciudad'];
	$ref=$_REQUEST['ref_estado'];
	$v="insert into ciudad (id_ciudad,nombre_ciudad,ref_estado)
	values('$id','$nom','$ref')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:lciudad.php");exit();
	}
	mysql_close($conexion);
} break;
case '2': {
	$id=$_REQUEST['id_clientes'];
	$nom=$_REQUEST['nombre'];
	$ap=$_REQUEST['apaterno'];
	$am=$_REQUEST['amaterno'];
	$tel=$_REQUEST['telefono'];
	$codi=$_REQUEST['codigo_postal'];
	$rfc=$_REQUEST['RFC'];
	$cal=$_REQUEST['calle'];
	$num=$_REQUEST['numero'];
	$ref=$_REQUEST['ref_colonia'];
	$v="insert into clientes (id_clientes,nombre,apaterno,amaterno,
		telefono,codigo_postal,RFC,calle,numero,ref_colonia)
	values('$id','$nom','$ap','$am','$tel','$codi','$rfc','$cal','$num','$ref')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:lclientes.php");exit();
	}
	mysql_close($conexion);
}break;
case '3': {
	$idco=$_REQUEST['id_colonia'];
	$nomo=$_REQUEST['nombre_colonia'];
	$refo=$_REQUEST['ref_ciudad'];
	$v="insert into colonia 
	(id_colonia,nombre_colonia,ref_ciudad)
	values('$idco','$nomo','$refo')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:lcolonia.php");exit();
	}
	mysql_close($conexion);
} break;

case '4': {
	$idcol=$_REQUEST['id_color'];
	$nomol=$_REQUEST['nom_color'];
	$v="insert into color 
	(id_color,nom_color)
	values('$idcol','$nomol')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:lcolor.php");exit();
	}
	mysql_close($conexion);
} break;
case '5': {
	$id=$_REQUEST['id_compras'];
	$fec=$_REQUEST['fecha_compra'];
	$rep=$_REQUEST['ref_productos'];
	$repr=$_REQUEST['ref_proveedores'];
	$reem=$_REQUEST['ref_empleados'];
	
	$v="insert into compras (id_compras,fecha_compra,ref_productos,ref_proveedores,ref_empleados)
	values('$id','$fec','$rep','$repr','$reem')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:lcompras.php");exit();
	}
	mysql_close($conexion);
}break;
case '6': {
	$id=$_REQUEST['id_empleados'];
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
	$v="insert into empleados (id_empleados,nombre,apaterno,amaterno,
		telefono,codigo_postal,RFC,puesto,calle,numero,ref_colonia)
	values('$id','$nom','$ap','$am','$tel','$codi','$rfc','$pues','$cal','$num','$ref')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:lempleados.php");exit();
	}
	mysql_close($conexion);
}break;
###DATOS PARA INSERTAR########
case '7': {
	$ide=$_REQUEST['id_estado'];
	$nome=$_REQUEST['nombre_estado'];
	$v="insert into estados (id_estado,nombre_estado)
	values('$ide','$nome')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:lestado.php");exit();
	}
	mysql_close($conexion);
	
}break;
case '8': {
	$idv=$_REQUEST['id_ventas'];
	$canv=$_REQUEST['cantidad'];
	$dev=$_REQUEST['descripcion'];
	$prov=$_REQUEST['ref_productos'];
	$vev=$_REQUEST['ref_ventas'];
	
	$v="insert into listaventas (id_ventas,cantidad,descripcion,ref_productos,ref_ventas)
	values('$idv','$canv','$dev','$prov','$vev')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:lventas.php");exit();
	}
	mysql_close($conexion);
}break;

case '9': {
	$idco=$_REQUEST['id_marca'];
	$nomo=$_REQUEST['nom_marca'];
	$refo=$_REQUEST['ref_modelo'];
	$v="insert into marca 
	(id_marca,nom_marca,ref_modelo)
	values('$idco','$nomo','$refo')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:lmarca.php");exit();
	}
	mysql_close($conexion);
} break;
case '10': {
	$idcol=$_REQUEST['id_modelo'];
	$nomol=$_REQUEST['nom_modelo'];
	$v="insert into modelo (id_modelo,nom_modelo)
	values('$idcol','$nomol')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:lmodelo.php");exit();
	}
	mysql_close($conexion);
} break;
case '11': {
	$idco=$_REQUEST['id_productodos'];
	$nomo=$_REQUEST['numero'];
	$refo=$_REQUEST['existencia'];
	$v="insert into productodos 
	(id_productodos,numero,existencia)
	values('$idco','$nomo','$refo')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:lproducto2.php");exit();
	}
	mysql_close($conexion);
} break;
case '12': {
	$idp=$_REQUEST['id_productos'];
	$prem=$_REQUEST['precio_mayorista'];
	$prep=$_REQUEST['precio_proveedor'];
	$prepu=$_REQUEST['precio_publico'];
	$refp=$_REQUEST['ref_productodos'];
	$refm=$_REQUEST['ref_marca'];
	$reft=$_REQUEST['ref_tipo'];
	$refc=$_REQUEST['ref_color'];

	$v="insert into productos (id_productos,precio_mayorista,precio_proveedor,
		precio_publico,ref_productodos,ref_marca,ref_tipo,ref_color)
	values('$idp','$prem','$prep','$prepu','$refp','$refm','$reft','$refc')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:lproductos.php");exit();
	}
	mysql_close($conexion);
}break;
case '13': {
	$idp=$_REQUEST['id_proveedores'];
	$nomb=$_REQUEST['nombre'];
	$apt=$_REQUEST['apaterno'];
	$amt=$_REQUEST['amaterno'];
	$telf=$_REQUEST['telefono'];
	$cod=$_REQUEST['codigo_postal'];
	$rfc=$_REQUEST['RFC'];
	$call=$_REQUEST['calle'];
	$nume=$_REQUEST['numero'];
	$refco=$_REQUEST['ref_colonia'];

	$v="insert into proveedores (id_proveedores,nombre,apaterno,
		amaterno,telefono,codigo_postal,RFC,calle,numero,ref_colonia)
	values('$idp','$nomb','$apt','$amt','$telf','$cod','$rfc','$call','$nume','$refco')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:lprovedor.php");exit();
	}
	mysql_close($conexion);
}break;
case '14': {
	$idcol=$_REQUEST['id_tipo'];
	$nomol=$_REQUEST['nom_tipo'];
	$v="insert into tipo (id_tipo,nom_tipo)
	values('$idcol','$nomol')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:ltipo.php");exit();
	}
	mysql_close($conexion);
} break;

case '15': {
	$idu=$_REQUEST['id_usuario'];
	$uu=$_REQUEST['usuario'];
    $pu=$_REQUEST['password'];

	$v="insert into usuarios (id_usuario,usuario,password)
	values('$idu','$uu','$pu')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:lusuario.php");exit();
	}
	mysql_close($conexion);
} break;

case '16': {
	$idv=$_REQUEST['id_venta'];
	$fev=$_REQUEST['fecha_venta'];
	$ivav=$_REQUEST['iva'];
	$subv=$_REQUEST['subtotal'];
	$totv=$_REQUEST['total'];
	$recv=$_REQUEST['ref_cliente'];
	
	$v="insert into ventas (id_venta,fecha_venta,iva,subtotal,total,ref_cliente)
	values('$idv','$fev','$ivav','$subv','$totv','$recv')";
	include('conexion.php');
	$rs=mysql_query($v);
	if (!$rs){echo "Error al guardar datos";}
	else{					
		header("Location:lisventas.php");exit();
	}
	mysql_close($conexion);
}break;

###AUTENTIFICACION DE DATOS########
default:
echo 'NO SE PUDO REALIZAR LA OPERACION';
}	
?>