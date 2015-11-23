<?php require('seguridad.php') ?>
<!DOCTYPE html> 
<html>
<head>
	<title>Sistema de Zapateria</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.3.2.css" />
	<link rel="stylesheet" href="docs/_assets/css/jqm-docs.css" />
	<link rel="stylesheet" href="css/jquery.mobile-1.3.2.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mobile-1.3.2.js"></script>
</head>
<body>


<div data-role="page" id="menu"  data-theme="c"> <!--Menu Inicio-->
	<div data-role="header">
		<h1>Administrador de zapateria</h1>
		<a href="index2.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
<!--Contenido-->
	<div data-role="content" id="administrador" data-theme="c">
<ul data-role="listview" data-inset="true" data-divider-theme="d">
    <li data-role="list-divider"><h1>Registrar datos</h1></li>
    <li><a href="#ciudad">Ciudad</a></li>
    <li><a href="#clientes">Clientes</a></li>
    <li><a href="#colonia">Colonia</a></li>
    <li><a href="#color">Color</a></li>
    <li><a href="#compras">Compras</a></li>    
    <li><a href="#empleado">Empleados</a></li>
    <li><a href="#estados">Estados</a></li>   
    <li><a href="#lista">Lista ventas</a></li>     
    <li><a href="#marca">Marca</a></li>
    <li><a href="#modelo">Modelo</a></li>
    <li><a href="#producto2">Producto2</a></li>    
    <li><a href="#productos">Productos</a></li>    
    <li><a href="#proveedor">Proveedor</a></li> 
    <li><a href="#tipo">Tipo</a></li>  
    <li><a href="#ventas">Ventas</a></li>
    <li><a href="cerrarsesion.php">Cerrar Sesion</a></li>    
	<li data-role="list-divider" data-theme="b"><h1>Modificacion</h1></li>
    <li><a href="#menu2">Actualizacion, Eliminacion</a></li>
</ul>
	</div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div><!--Menu2-->

<div data-role="page" id="menu2"  data-theme="c"> <!--Menu Modificacion-->
    <div data-role="header">
        <h1>Administrador de base de datos zapateria</h1>
        <a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
<ul data-role="listview" data-inset="true" data-divider-theme="d">
    <li data-role="list-divider"><h1>Modificar datos</h1></li>
    <li><a href="lciudad.php">ciudad</a></li>
    <li><a href="lclientes.php">Clientes</a></li>
    <li><a href="lcolonia.php">Colonia</a></li>
    <li><a href="lcolor.php">Color</a></li>
    <li><a href="lcompras.php">Compras</a></li>
    <li><a href="lempleados.php">Empleados</a></li>
    <li><a href="lestado.php">Estados</a></li>
    <li><a href="lventas.php">Lista ventas</a></li>
    <li><a href="lmarca.php">Marca</a></li>
    <li><a href="lmodelo.php">Modelo</a></li>
    <li><a href="lproducto2.php">Producto2</a></li>
    <li><a href="lproductos.php">Productos</a></li>
    <li><a href="lprovedor.php">Proveedor</a></li>
    <li><a href="ltipo.php">Tipo</a></li>
    <li><a href="lisventas.php">Ventas</a></li>
</ul>
    </div><!--Fin menu2-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div><!--Menu1 Codificacion-->

<div data-role="page" id="ciudad"  data-theme="c"> 
    <div data-role="header">
        <h1>Registro de ciudades</h1>
        <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
        <form name="formreg" action="insertar.php" method="POST">

          <label for="basic">Id Ciudad:</label>
          <input type="number" name="id_ciudad" id="basic" value="" required />
          <label for="basic">Nombre_ciudad:</label>
          <input type="text" name="nombre_ciudad" id="basic" value="" required />
          <label for="basic">Ref_estado:</label>
          <?php require('conexion.php');
          $result=mysql_query("select * from estados");
          $row=mysql_fetch_array($result);?>
          <select name="ref_estado">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_estado']?>"><?php echo $row['nombre_estado']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
        </select>
          
          <input type="hidden" name="fn" value="1" />
          <input type="submit" name="envio" value="Guardar" data-theme="b"/>
         </form> 

    </div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div>

<div data-role="page" id="clientes"  data-theme="c"> 
    <div data-role="header">
        <h1>Registro de clientes</h1>
        <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
        <form name="formreg" action="insertar.php" method="POST">


          <label for="basic">Id clientes:</label>
          <input type="number" name="id_clientes" id="basic" value="" required/>
          <label for="basic">nombre:</label>
          <input type="text" name="nombre" id="basic" value=""  required/>
          <label for="basic">Apellido paterno:</label>
          <input type="text" name="apaterno" id="basic" value=""  required/>
          <label for="basic">Apellido materno:</label>
          <input type="text" name="amaterno" id="basic" value=""  required/>
          <label for="basic">Telefono:</label>
          <input type="number" name="teleno" id="basic" value=""  required/>
          <label for="basic">Codigo postal:</label>
          <input type="text" name="codigo_postal" id="basic" value="" required/>
          <label for="basic">RFC:</label>
          <input type="text" name="RFC" id="basic" value=""  required/>
          <label for="basic">Calle:</label>
          <input type="text" name="calle" id="basic" value=""  required/>
          <label for="basic">Numero:</label>
          <input type="number" name="numero" id="basic" value=""  required/>
          <label for="basic">Ref. Colonia:</label>
          <!--lista desplegable-->
          <?php require('conexion.php');
          $result=mysql_query("select * from colonia");
          $row=mysql_fetch_array($result);?>
          <select name="ref_colonia">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_colonia']?>"><?php echo $row['nombre_colonia']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
          		</select>
           <input type="hidden" name="fn" value="2" />
          <input type="submit" name="envio" value="Guardar" data-theme="b"/>
         </form> 

    </div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div>

<div data-role="page" id="colonia"  data-theme="c"> 
    <div data-role="header">
        <h1>Registro de colonia</h1>
        <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
        <form name="formreg" action="insertar.php" method="POST">

          
          <label for="basic">Id colonia:</label>
          <input type="number" name="id_colonia" id="basic" value="" required/>
          <label for="basic">Nombre_colonia:</label>
          <input type="text" name="nombre_colonia" id="basic" value="" required/>
          <label for="basic">Ref_ciudad:</label>
          <!--lista desplegable-->
          <?php require('conexion.php');
          $result=mysql_query("select * from ciudad");
          $row=mysql_fetch_array($result);?>
          <select name="ref_ciudad">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_ciudad']?>"><?php echo $row['nombre_ciudad']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
          		</select>        
          <input type="hidden" name="fn" value="3" />
          <input type="submit" name="envio" value="Guardar" data-theme="b"/>     
          </form> 

    </div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div>

<div data-role="page" id="color"  data-theme="c"> 
    <div data-role="header">
        <h1>Registro de color</h1>
        <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
        <form name="formreg" action="insertar.php" method="POST">

          <label for="basic">Id color:</label>
          <input type="number" name="id_color" id="basic" value="" required/>
          <label for="basic">Nombre color:</label>
          <input type="text" name="nom_color" id="basic" value="" required/> 

          <input type="hidden" name="fn" value="4" />
          <input type="submit" name="envio" value="Guardar" data-theme="b"/>
         </form>

    </div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div>

<div data-role="page" id="compras"  data-theme="c"> 
    <div data-role="header">
        <h1>Registro de compras</h1>
        <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
        <form name="formreg" action="insertar.php" method="POST">

          <label for="basic">Id compras:</label>
          <input type="number" name="id_compras" id="basic" value="" required/>
          <label for="basic">Fecha compra:</label>

          <input type="date" name="fecha_compra" id="basic" value="aaaa-mm-dd" required/>
          <label for="basic">Ref. Productos:</label>
          <?php require('conexion.php');
          $result=mysql_query("select * from productos");
          $row=mysql_fetch_array($result);?>
          <select name="ref_productos">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_productos']?>"><?php echo $row['precio_mayorista']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
          		</select>
          <label for="basic">Ref. Proveedores:</label>
          <?php require('conexion.php');
          $result=mysql_query("select * from proveedores");
          $row=mysql_fetch_array($result);?>
          <select name="ref_proveedores">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_proveedores']?>"><?php echo $row['nombre']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
          		</select>
          <label for="basic">Ref. Empleados:</label>
          <?php require('conexion.php');
          $result=mysql_query("select * from empleados");
          $row=mysql_fetch_array($result);?>
          <select name="ref_empleados">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_empleados']?>"><?php echo $row['nombre']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
          		</select>

          <input type="hidden" name="fn" value="5" />
          <input type="submit" name="envio" value="Guardar" data-theme="b"/>
         </form> 

    </div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div>

<div data-role="page" id="empleado"  data-theme="c"> 
    <div data-role="header">
        <h1>Registro de empleados</h1>
        <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
        <form name="formreg" action="insertar.php" method="POST">

          <label for="basic">Id empleados:</label>
          <input type="number" name="id_empleados" id="basic" value="" required/>
          <label for="basic">nombre:</label>
          <input type="text" name="nombre" id="basic" value=""  required/>
          <label for="basic">Apellido paterno:</label>
          <input type="text" name="apaterno" id="basic" value=""  required/>
          <label for="basic">Apellido materno:</label>
          <input type="text" name="amaterno" id="basic" value=""  required/>
          <label for="basic">Telefono:</label>
          <input type="number" name="teleno" id="basic" value=""  required/>
          <label for="basic">Codigo postal:</label>
          <input type="text" name="codigo_postal" id="basic" value="" required/>
          <label for="basic">RFC:</label>
          <input type="text" name="RFC" id="basic" value=""  required/>
          <label for="basic">Pesto:</label>
          <input type="text" name="puesto" id="basic" value=""  required/>
          <label for="basic">Calle:</label>
          <input type="text" name="calle" id="basic" value=""  required/>
          <label for="basic">Numero:</label>
          <input type="number" name="numero" id="basic" value=""  required/>
          <label for="basic">Ref. Colonia:</label>
          <?php require('conexion.php');
          $result=mysql_query("select * from colonia");
          $row=mysql_fetch_array($result);?>
          <select name="ref_colonia">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_colonia']?>"><?php echo $row['nombre_colonia']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
           </select>

          <input type="hidden" name="fn" value="6" />
          <input type="submit" name="envio" value="Guardar" data-theme="b"/>
         </form> 

    </div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div>

<div data-role="page" id="estados"  data-theme="c"> 
    <div data-role="header">
        <h1>Registro de estados</h1>
        <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
        <form name="formreg" action="insertar.php" method="POST">
         
          <label for="basic">Id Estado:</label>
          <input type="number" name="id_estado" id="basic" value="" required/>
          <label for="basic">Nombre_estado:</label>
          <input type="text" name="nombre_estado" id="basic" value="" required/>
                  
          <input type="hidden" name="fn" value="7" />
          <input type="submit" name="envio" value="Guardar" data-theme="b"/>
         </form> 

    </div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div>

<div data-role="page" id="lista"  data-theme="c"> 
    <div data-role="header">
        <h1>Registro de ventas</h1>
        <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
        <form name="formreg" action="insertar.php" method="POST">
          
          <label for="basic">Id ventas:</label>
          <input type="number" name="id_ventas" id="basic" value="" required/>
          <label for="basic">Cantidad:</label>
          <input type="number" name="cantidad" id="basic" value=""  required/>
          <label for="basic">Descripcion:</label>
          <input type="text" name="descripcion" id="basic" value=""  required/>
          <label for="basic">Ref. Productos:</label>
          <?php require('conexion.php');
          $result=mysql_query("select * from productos");
          $row=mysql_fetch_array($result);?>
          <select name="ref_productos">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_productos']?>"><?php echo $row['precio_mayorista']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
           </select>
          <label for="basic">Ref. Ventas:</label>
          <?php require('conexion.php');
          $result=mysql_query("select * from ventas");
          $row=mysql_fetch_array($result);?>
          <select name="ref_ventas">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_venta']?>"><?php echo $row['fecha_venta']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
           </select>

          <input type="hidden" name="fn" value="8" />
          <input type="submit" name="envio" value="Guardar" data-theme="b"/>
         </form> 

    </div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div>

<div data-role="page" id="marca"  data-theme="c"> 
    <div data-role="header">
        <h1>Registro de marcas</h1>
        <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
        <form name="formreg" action="insertar.php" method="POST">

          <label for="basic">Id Marca:</label>
          <input type="number" name="id_marca" id="basic" value="" required />
          <label for="basic">Nombre marca:</label>
          <input type="text" name="nom_marca" id="basic" value="" required />
          <label for="basic">Ref_modelo:</label>
          <?php require('conexion.php');
          $result=mysql_query("select * from modelo");
          $row=mysql_fetch_array($result);?>
          <select name="ref_modelo">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_modelo']?>"><?php echo $row['nom_modelo']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
        </select>
          <input type="hidden" name="fn" value="9" />
          <input type="submit" name="envio" value="Guardar" data-theme="b"/>
         </form> 

    </div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div>

<div data-role="page" id="modelo"  data-theme="c"> 
    <div data-role="header">
        <h1>Registro de modelo</h1>
        <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
        <form name="formreg" action="insertar.php" method="POST">

          <label for="basic">Id modelo:</label>
          <input type="number" name="id_modelo" id="basic" value="" required/>
          <label for="basic">Nom modelo:</label>
          <input type="text" name="nom_modelo" id="basic" value="" required/> 

          <input type="hidden" name="fn" value="10" />
          <input type="submit" name="envio" value="Guardar" data-theme="b"/>
         </form>

    </div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div>

<div data-role="page" id="producto2"  data-theme="c"> 
    <div data-role="header">
        <h1>Registro de producto dos</h1>
        <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
        <form name="formreg" action="insertar.php" method="POST">

          <label for="basic">Id productodos:</label>
          <input type="number" name="id_productodos" id="basic" value="" required/>
          <label for="basic">Numero:</label>
          <input type="number" name="numero" id="basic" value="" required/>
          <label for="basic">Existencia:</label>
          <input type="number" name="existencia" id="basic" value="" required/> 

          <input type="hidden" name="fn" value="11" />
          <input type="submit" name="envio" value="Guardar" data-theme="b"/>
         </form>

    </div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div>

<div data-role="page" id="productos"  data-theme="c"> 
    <div data-role="header">
        <h1>Registro de productos</h1>
        <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
        <form name="formreg" action="insertar.php" method="POST">

          <label for="basic">Id productos:</label>
          <input type="number" name="id_productos" id="basic" value="" required/>
          <label for="basic">Precio mayorista:</label>
          <input type="number" name="precio_mayorista" id="basic" value=""  required/>
          <label for="basic">Precio proveedor:</label>
          <input type="number" name="precio_proveedor" id="basic" value=""  required/>
          <label for="basic">Precio publico:</label>
          <input type="number" name="precio_publico" id="basic" value=""  required/>
          <label for="basic">Ref. productodos:</label>
          <?php require('conexion.php');
          $result=mysql_query("select * from productodos");
          $row=mysql_fetch_array($result);?>
          <select name="ref_productodos">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_productodos']?>"><?php echo $row['numero']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
        </select>
          <label for="basic">Ref. marca:</label>
          <?php require('conexion.php');
          $result=mysql_query("select * from marca");
          $row=mysql_fetch_array($result);?>
          <select name="ref_marca">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_marca']?>"><?php echo $row['nom_marca']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
        </select>
          <label for="basic">Ref. tipo:</label>
          <?php require('conexion.php');
          $result=mysql_query("select * from tipo");
          $row=mysql_fetch_array($result);?>
          <select name="ref_tipo">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_tipo']?>"><?php echo $row['nom_tipo']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
        </select>
          <label for="basic">Ref. color:</label>
          <?php require('conexion.php');
          $result=mysql_query("select * from color");
          $row=mysql_fetch_array($result);?>
          <select name="ref_color">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_color']?>"><?php echo $row['nom_color']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
        </select>
          
           <input type="hidden" name="fn" value="12" />
          <input type="submit" name="envio" value="Guardar" data-theme="b"/>
         </form> 

    </div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div>

<div data-role="page" id="proveedor"  data-theme="c"> 
    <div data-role="header">
        <h1>Registro de proveedores</h1>
        <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
        <form name="formreg" action="insertar.php" method="POST">

          <label for="basic">Id proveedores:</label>
          <input type="number" name="id_proveedores" id="basic" value="" required/>
          <label for="basic">Nombre:</label>
          <input type="text" name="nombre" id="basic" value=""  required/>
          <label for="basic">A. paterno:</label>
          <input type="text" name="apaterno" id="basic" value=""  required/>
          <label for="basic">A. materno:</label>
          <input type="text" name="amaterno" id="basic" value=""  required/>
          <label for="basic">Telefono:</label>
          <input type="text" name="telefono" id="basic" value=""  required/>
          <label for="basic">Codigo postal:</label>
          <input type="text" name="codigo_postal" id="basic" value="" required/>
          <label for="basic">RFC:</label>
          <input type="text" name="RFC" id="basic" value=""  required/>
          <label for="basic">Calle:</label>
          <input type="text" name="calle" id="basic" value=""  required/>
          <label for="basic">Numero:</label>
          <input type="number" name="numero" id="basic" value=""  required/>
          <label for="basic">Ref. colonia:</label>
          <?php require('conexion.php');
          $result=mysql_query("select * from colonia");
          $row=mysql_fetch_array($result);?>
          <select name="ref_colonia">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_colonia']?>"><?php echo $row['nombre_colonia']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
        </select>
          
           <input type="hidden" name="fn" value="13" />
          <input type="submit" name="envio" value="Guardar" data-theme="b"/>
         </form> 

    </div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div>

<div data-role="page" id="tipo"  data-theme="c"> 
    <div data-role="header">
        <h1>Registro de tipo</h1>
        <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
        <form name="formreg" action="insertar.php" method="POST">

          <label for="basic">Id tipo:</label>
          <input type="number" name="id_tipo" id="basic" value="" required/>
          <label for="basic">Nom tipo:</label>
          <input type="text" name="nom_tipo" id="basic" value="" required/> 

          <input type="hidden" name="fn" value="14" />
          <input type="submit" name="envio" value="Guardar" data-theme="b"/>
         </form>

    </div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div>


<div data-role="page" id="ventas"  data-theme="c"> 
    <div data-role="header">
        <h1>Registro de ventas</h1>
        <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>      
    </div>  
<!--Contenido-->
    <div data-role="content" data-theme="c">
        <form name="formreg" action="insertar.php" method="POST">

          <label for="basic">Id ventas:</label>
          <input type="number" name="id_venta" id="basic" value="" required/>
          <label for="basic">Fecha venta:</label>
          <input type="text" name="fecha_venta" id="basic" value="aaaa-mm-dd"  required/>
          <label for="basic">IVA:</label>
          <input type="text" name="iva" id="basic" value=""  required/>
          <label for="basic">Subtotal:</label>
          <input type="number" name="subtotal" id="basic" value=""  required/>
          <label for="basic">Total:</label>
          <input type="number" name="total" id="basic" value=""  required/>
          <label for="basic">Ref. Cliente:</label>
          <?php require('conexion.php');
          $result=mysql_query("select * from clientes");
          $row=mysql_fetch_array($result);?>
          <select name="ref_clientes">
          <?php
          		do{
          			?>
          			<option value="<?php echo $row['id_clientes']?>"><?php echo $row['nombre']?></option>
          		<?php
          		}while ($row=mysql_fetch_assoc($result)); 
          		?>
        </select>

          <input type="hidden" name="fn" value="16" />
          <input type="submit" name="envio" value="Guardar" data-theme="b"/>
         </form> 

    </div><!--Fin COntenido-->
    <div data-role="footer" data-theme="a" data-position="fixed">
        <h4>Pie de Pagina</h4>
    </div>
</div>

<div data-role="footer">
  </div>
</body>
</html>