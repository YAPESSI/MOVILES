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
<!--Inicio de Pagina-->
<div data-role="page" id="inicio"  data-theme="c">
<!--header-->
	<div data-role="header" data-theme="a">
	<a href="#inicio"  data-icon="home">Inicio</a>
	<h1><img src="img/logo.png"></h1>
<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>
		<div data-role="navbar" >
			<ul>
			<li><a href="#" data-icon="edit" data-theme="b" data-transition="slide">Productos</a></li>
			<li><a href="#contacto" data-icon="info" data-theme="b">Contacto</a></li>
			<li><a href="#acerca" data-icon="bars"  data-theme="b">Acerca de...</a></li>
			<li><a href="#menu" data-icon="arrow-r"data-theme="b">Iniciar Sesion</a></li>
			</ul>
		</div> 
	</div>
<!--/header-->

<!--Contenido-->
	<div data-role="content" data-theme="c">
	<img src="img/log.png" style="height:550px;width:100%">
<ul data-role="listview" data-split-icon="gear" data-split-theme="d" data-inset="true">
    <li><a href="#">
        <img src="../../_assets/img/album-bb.jpg">
        <h2>Broken Bells</h2>
        <p>Broken Bells</p></a>
        <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
    </li>
    <li><a href="#">
        <img src="../../_assets/img/album-hc.jpg">
        <h2>Warning</h2>
        <p>Hot Chip</p></a>
        <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
    </li>
    <li><a href="#">
        <img src="../../_assets/img/album-p.jpg">
        <h2>Wolfgang Amadeus Phoenix</h2>
        <p>Phoenix</p></a>
        <a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
    </li>
</ul>
<div data-role="popup" id="purchase" data-theme="d" data-overlay-theme="b" class="ui-content" style="max-width:340px; padding-bottom:2em;">
    <h3>Purchase Album?</h3>
    <p>Your download will begin immediately on your mobile device when you purchase.</p>
    <a href="index.html" data-role="button" data-rel="back" data-theme="b" data-icon="check" data-inline="true" data-mini="true">Buy: $10.99</a>
    <a href="index.html" data-role="button" data-rel="back" data-inline="true" data-mini="true">Cancel</a>
</div>
	</div>

<!--Pie de Pagina-->
	<div data-role="footer" data-theme="a" data-position="fixed">
		<h4>Pie de Pagina</h4>
	</div>
</div><!--/fin pagnina-->

<div data-role="page" id="menu"  data-theme="c"> <!--Menu Inicio-->
	<div data-role="header">
		<h1>Eugenio Admintrador de zapateria Eugenio</h1>
		<a href="#" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
<!--Contenido-->
	<div data-role="content" id="administrador" data-theme="c">
<ul data-role="listview" data-inset="true" data-divider-theme="d">
    <li data-role="list-divider"><h1>Registrar datos</h1></li>
    
    <li><a href="#estado*">Estado Ciudad Colonia</a></li>

    <li><a href="#cliente">Clientes</a></li>

    <li><a href="#color*">Color</a></li>
    <li><a href="#compra">Compras</a></li>    
    <li><a href="#empleado">Empleados</a></li>

    
    <li><a href="#lista*">Lista ventas</a></li>     
    <li><a href="#marca*">Marca</a></li>
    <li><a href="#modelo*">Modelo</a></li>
    <li><a href="#producto2">Producto2</a></li>    
    <li><a href="#producto">Productos Y Marcas</a></li>   
    
    <li><a href="#proveedor">Proveedor</a></li> 
    <li><a href="#tipo">Tipo</a></li>
    <li><a href="#datos">Usuarios</a></li>  
    <li><a href="#venta">Ventas</a></li>    
    <li><a href="#detalle">Detalles ventas</a></li>
    <!--li><a href="#direccion">Direccion</a></li-->
	<li data-role="list-divider"><h1>Historial y Modificacion</h1></li>
    <li><a href="#">Bitacora 1</a></li>
    <li><a href="#menu2">Modificacion</a></li>
</ul>
	</div><!--Fin COntenido-->
	<div data-role="footer" data-theme="a" data-position="fixed">
		<h4>Pie de Pagina</h4>
	</div>
</div><!--Menu2-->

<div data-role="page" id="menu2"  data-theme="c"> <!--Menu Modificacion-->
	<div data-role="header">
		<h1>Admintrador de base de datos</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
<!--Contenido-->
	<div data-role="content" data-theme="c">
<ul data-role="listview" data-inset="true" data-divider-theme="d">
    <li data-role="list-divider"><h1>Registrar base de Datos</h1></li>
    <li><a href="#dato">Datos Generales</a></li>
    <li><a href="#">Cliente</a></li>
    <li><a href="#">Proveedor</a></li>
    <li><a href="#">Ventas</a></li>
    <li><a href="#">Compras</a></li>
    <li><a href="#">Detalles ventas</a></li>
    <li><a href="#">Productos</a></li>
    <li><a href="#">Marcas</a></li>
    <li><a href="#">Estado</a></li>
    <li><a href="#">Ciudad</a></li>
    <li><a href="#">Colonia</a></li>
    <li><a href="#">Direccion</a></li>
</ul>
	</div><!--Fin menu2-->
	<div data-role="footer" data-theme="a" data-position="fixed">
		<h4>Pie de Pagina</h4>
	</div>
</div><!--Menu1 Codificacion-->

<div data-role="page" id="datos"  data-theme="c"> 
	<div data-role="header">
		<h1>Registro de estudiantes</h1>
		<a href="menu.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
<!--Contenido-->
	<div data-role="content" data-theme="c">
		<form name="formreg" action="consultas.php" method="POST">
          <label for="basic">Nombre:</label>
          <input type="text" name="nombre" id="basic" value="" required />
    	  <label for="basic">Apellido Paterno:</label>
          <input type="text" name="a_paterno" id="basic" value="" required />
          <label for="basic">Apellido Materno:</label>
          <input type="text" name="a_materno" id="basic" value="" required />
    	  <label for="basic">Sexo:</label>
          <select name="sexo" id="select-choice-a" data-native-menu="false">
           <option>Sexo</option>
           <option value="standard">H</option>
           <option value="rush">M</option>
           </select> 
          <label for="basic">Edad:</label>
          <input type="number" name="edad" id="basic" value="" required />
		   <input type="hidden" name="fn" value="1" />
		  <input type="submit" name="envio" value="Guardar"/>
		 </form> 

	</div><!--Fin COntenido-->
	<div data-role="footer" data-theme="a" data-position="fixed">
		<h4>Pie de Pagina</h4>
	</div>
</div>

<div data-role="page" id="cliente"  data-theme="c" > 
	<div data-role="header">
		<h1>Registro de Clientes</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" 
		data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		 <form name="formreg" action="insertar.php" method="POST">
          <label for="basic">Ref_direccion:</label>
          <input type="number" name="ref_direccion" id="basic" value="" required >
    	  <label for="basic">Ref_datos:</label>
          <input type="number" name="ref_datos" id="basic" value="" required >
    	  <input type="hidden" name="fn" value="4" >
		  <input type="submit" name="envio" value="Guardar" >
		 </form> 
	</div> 
	<div data-role="footer" data-theme="a" data-position="fixed">
	</div>
</div><!--/Fin Cliente-->

<div data-role="page" id="proveedor"  data-theme="c" > 
	<div data-role="header">
		<h1>Registro de Proveedor</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" 
		data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		 <form name="formreg" action="insertar.php" method="POST">
          <label for="basic">Ref_direccion:</label>
          <input type="number" name="ref_direccion" id="basic" value="" required >
    	  <label for="basic">Ref_datos:</label>
          <input type="number" name="ref_datos" id="basic" value="" required >
    	  <input type="hidden" name="fn" value="4" >
		  <input type="submit" name="envio" value="Guardar" >
		 </form> 
	</div> 
	<div data-role="footer" data-theme="a" data-position="fixed">
	</div>
</div><!--/Fin Cliente-->

<div data-role="page" id="empleado"  data-theme="c" > 
	<div data-role="header">
		<h1>Registro de Empleado</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" 
		data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		 <form name="formreg" action="insertar.php" method="POST">
          <label for="basic">Ref_direccion:</label>
          <input type="number" name="ref_direccion" id="basic" value="" required >
    	  <label for="basic">Ref_datos:</label>
          <input type="number" name="ref_datos" id="basic" value="" required >
    	  <input type="hidden" name="fn" value="4" >
		  <input type="submit" name="envio" value="Guardar" >
		 </form> 
	</div> 
	<div data-role="footer" data-theme="a" data-position="fixed">
	</div>
</div><!--/Fin Cliente-->

<div data-role="page" id="producto"> 
	<div data-role="header">
		<h1>Registro de productos</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
<!--Contenido-->
	<div data-role="content"  data-theme="c">
		<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-collapsed-icon="arrow-r"data-expanded-icon="arrow-d">
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
		<h1>Registro Productos</h1>
		<form id="form1" action="#" method="post">
		<label for="basic">Nombre Estado:</label>
		<input type="text" name="nom_producto" placeholder="Nombre producto">
		<label for="basic">Precio:</label>
		<input type="number" name="precio" placeholder="Nombre producto">
		<label for="basic">Cantidad:</label>
		<input type="number" name="cantida" placeholder="Nombre producto">
		<label for="basic">REF marca:</label>
		<input type="number" name="ref_marca" placeholder="Nombre producto">
		<label for="basic">REF Proveedor:</label>
		<input type="number" name="ref_proveedor" placeholder="Nombre producto">
	      <input type="hidden" name="fn" value="1">
		  <input type="submit" name="envio" value="Guardar" data-theme="e">
		</form>
		</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
		<h1>Registro Marca</h1>
		<form id="form1" action="#" method="post">
		<label for="basic">Nombre Colonia:</label>
		<input type="text" name="nom_marca" id="basic" value="" placeholder="Marca">
	      <input type="hidden" name="fn" value="2" >
		  <input type="submit" name="envio" value="Guardar"data-theme="e" >
		</form>
		</div>	
		</div>

	</div><!--Fin COntenido-->
	<div data-role="footer" data-theme="a" data-position="fixed">
		<h4>Pie de Pagina</h4>
	</div>
</div>
<!--Inicio Direccion-->
	<div data-role="page" id="direccion"> 
	<div data-role="header">
		<h1>Registro de Direccion</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		 <form name="formreg" action="insertar.php" method="POST">
          <label for="basic">Calle:</label>
          <input type="text" name="calle" id="basic" value="" required />
    	  <label for="basic">Numero:</label>
          <input type="number" name="numero" id="basic" value="" required />
    	  <label for="basic">Ref_colonia:</label>
    	  <input type="number" name="ref_colonia" id="basic" value="" required />
    	  <input type="hidden" name="fn" value="1">
		  <input type="submit" name="envio" value="Guardar">
		 </form> 
	</div> 
	<div data-role="footer" data-theme="a" data-position="fixed">
	</div>
</div><!--Fin Direccion-->

<div data-role="page" id="estado"><!--Inicio estado--> 
	<div data-role="header">
		<h1>Registro de Estado...</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
<!--Contenido-->
	<div data-role="content" data-theme="c">
		<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-collapsed-icon="arrow-r"data-expanded-icon="arrow-d">
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
		<h1>Registro Estado</h1>
		<form id="form1" action="#" method="post">
		<label for="basic"/>Nombre Estado:</label>
		<input type="text" placeholder="Nombre del Estado">
	      <input type="hidden" name="fn" value="1" />
		  <input type="submit" name="envio" value="Guardar" data-theme="e"/>
		</form>
		</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
			<h1>Registro Ciudad</h1>
		<form id="form1" action="#" method="post">
		<label for="basic"/>Nombre Ciudad:</label>
		<input type="text" name="nombre_ciudad" id="basic" value="" placeholder="Nombre Ciudad">
		<label for="basic"/>Codigo Postal:</label>
		<input type="number" name="codigo_postal" id="basic" value="" ="Codigo Postal">
		<label for="basic"/>REF Estado:</label>
		<input type="number" name="ref_estado" id="basic" value="" placeholder="">
	      <input type="hidden" name="fn" value="2" />
		  <input type="submit" name="envio" value="Guardar" data-theme="e"/>
		</form>
		</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
		<h1>Registro Colonia</h1>
		<form id="form1" action="#" method="post">
		<label for="basic"/>Nombre Colonia:</label>
		<input type="text" name="nombre_colonia" id="basic" value="" placeholder="Nombre del Estado">
		<label for="basic"/>REF Ciudad:</label>
		<input type="number" name="ref_ciudad" id="basic" value="" ="Codigo Postal">
	      <input type="hidden" name="fn" value="2" />
		  <input type="submit" name="envio" value="Guardar"data-theme="e" />
		</form>
		</div>	
		</div>

	</div><!--Fin COntenido-->
	<div data-role="footer" data-theme="a" data-position="fixed">
		<h4>Pie de Pagina</h4>
	</div>
</div><!--Fin Estado-->

	<div data-role="page" id="compra"> 
	<div data-role="header">
		<h1>Registro de Compras</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		 <form name="formreg" action="insertar.php" method="POST">
          <label for="basic">Fecha de la compra:</label>
          <input type="date" name="fecha_compra" id="basic" value="" required />
    	  <label for="basic">Cantidad:</label>
          <input type="number" name="cantidad" id="basic" value="" required />
          <label for="basic">Subtotal:</label>
          <input type="number" name="subtotal" id="basic" value="" required />
          <label for="basic">Total:</label>
          <input type="number" name="total" id="basic" value="" required />
          <label for="basic">Referencia a producto:</label>
          <input type="number" name="ref_producto" id="basic" value="" required />
    	  <input type="hidden" name="fn" value="6" />
		  <input type="submit" name="envio" value="Guardar" />
		 </form> 
	</div> 
	<div data-role="footer" data-theme="a" data-position="fixed">
	</div>
</div>
	<div data-role="page" id="venta"> 
	<div data-role="header">
		<h1>Registro de Ventas</h1>
		<a href="#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		 <form name="formreg" action="insertar.php" method="POST">
          <label for="basic">Fecha de la Venta:</label>
          <input type="date" name="fecha_venta" id="basic" value="" required />
          <label for="basic">Referencia a Cliente:</label>
          <input type="number" name="ref_cliente" id="basic" value="" required />
    	  <input type="hidden" name="fn" value="6" />
		  <input type="submit" name="envio" value="Guardar" />
		 </form> 
	</div> 
	<div data-role="footer" data-theme="a" data-position="fixed">
	</div>
</div>

<div data-role="page" id="contacto"  data-theme="c">
	<div data-role="header" data-theme="a" data-position="fixed">
		<a href="#inicio"  data-icon="home" data-rel="back">Inicio</a>
		<h1>Contacto</h1>
		<a href="#" data-transition="Pop" data-icon="grid">Productos</a>
	</div>
<!--/header-->

<!--Contenido-->
	<div data-role="content" data-theme="c">
		<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-collapsed-icon="arrow-r"data-expanded-icon="arrow-d">
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
		<h1>Formulario de Contanctos</h1>
		<form id="form1" action="#" method="post">
		<input type="text" placeholder="Escribe tu Nombre">
		<input type="email" placeholder="Escribe tu Email">
		<select>
		 <option>Comentario</option>
		 <option>Sugerencia</option>
		 <option>Pregunta</option>
		</select>
		<textarea placeholder="Escribe tu Comentario"></textarea>
		<input type="submit" value="Enviar" >
		</form>
		</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
			<h1>Informacion de Contacto</h1>
			<p>Email: egenio.21@gmail.com</p>
			<p>telefono: 953 137 9322</p>
			<p>Direccion: Claudio Cruz #33</p>
			<p>Redes Socilaes</p>
		</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
		<h1>Mapa de Ubicacion</h1>
	
		</div>	
		</div>

	</div><!--Fin COntenido-->

<!--Pie de Pagina-->
	<div data-role="footer" data-theme="a" data-position="fixed">
		<h4>Pie de Pagina</h4>
	</div>
</div><!--/fin pagnina-->

<!--Inicio Acerca-->
<div data-role="page" id="acerca"  data-theme="c">
<!--header-->
	<div data-role="header" data-theme="a" data-position="fixed">
		<a href="#inicio"  data-icon="home" data-rel="back">Inicio</a>
		<h1>Contacto</h1>
		<a href="#" data-transition="Pop" data-icon="grid">Productos</a>
	</div>
	<div data-role="content" data-theme="c">
		<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-collapsed-icon="arrow-r"data-expanded-icon="arrow-d">
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
		<h1>Vision Empresarial</h1>
		</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
			<h1>Mision Empresarial</h1>

			</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
			<h1>Historia</h1>
	
		</div>
		<div data-role="collapsible" data-theme="b" data-content-theme="b">
			<h1>Galeria/Multimedia</h1>
	
		</div>	
	</div>

	</div><!--Fin COntenido-->

<!--Pie de Pagina-->
	<div data-role="footer" data-theme="a" data-position="fixed">
		<h4>Pie de Pagina</h4>
	</div>
</div><!--/fin pagnina-->
</body>
</html>