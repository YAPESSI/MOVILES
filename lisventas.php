<?php require('seguridad.php'); ?>
<!DOCTYPE html>
<!--aqui se combina php y -->
<html>
   <head>
   	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile: Demos and Documentation</title>
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.2.1.css" />
	<link rel="stylesheet" href="docs/_assets/css/jqm-docs.css" />
	<script src="js/jquery.js"></script>
	<script src="docs/_assets/js/jqm-docs.js"></script>
	<script src="js/jquery.mobile-1.2.1.js"></script>
</head> 
<body>
     
     <div data-role="page" class="type-interior" id="album-list">
          <div data-role="header" data-time="f">
          <h1>Lista de ventas</h1>
          <a href="index2.php#menu" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
	   	<a href="lventas.php" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	   	</div><!--/header-->
	   	<div data-role="content">
	   	<div class="content-primary">
	   	<?php
	   	include('conexion.php');
	   	$consulta="select * from ventas";
	   	$recordset=mysql_query($consulta);
	   	?>
	   	   <ul data-role="listview" data-split-icon="gear" data-split-theme="d">
	   	   <?php while ($row=mysql_fetch_array($recordset)){?>
	   	   <li><?php echo '<a href="modventas.php?nc='.$row["id_venta"].'">';?>
	   	      <img src="<?php if($row["foto"]==NULL){echo 'images/kate.jpg';}
	   	      else {echo 'mostrarfoto.php?nc='.$row["id_venta"];}?>" width="50" heigth="55"/>
	   	      <h3><?php echo $row["fecha_venta"];?></h3>
	   	      <p><?php echo $row["fecha_venta"];?></p>
	   	      </a>
	   	      <a ref="#purchase" data-rel="popup" data-position-to="window"
	   	      data-transition="pop"><?php echo $row["fecha_venta"]?></a>
	   	      </li>

	   	      <?php } ?>
	   	      </ul>
	   	      <div data-role="popup" id="purchase" data-theme="d" data-overlay-theme="b"
	   	      class="ui-content" style="max-width:340px;">
	   	         <h3>Purchase Album?</h3>
	   	         <p>Your download will begin inmediately on your mobile device when you purchase.</p>
	   	         <a href="index.html" data-role="button" data-rel="back" data-theme="b" data-icon="check" data-inline="true" data-mini="true">Buy:$10.99</a>
	   	         <a href="index.html" data-role="button" data-rel="back" data-inline="true" data-mini="true">Cancel</a>
	   	         </div>
	   	         </div><!--/content-primary-->
	   	    </div><!--/content-->
	   	    <div data-role="footer" class="footer-docs" data-theme="c">
	   	         <p class="jqm-version"></p>
	   	         <p>Copyrigth 2010,2013 jQuery Foundation, Inc. and other contributors</p>
	   	    </div>
	   	    </div><!--/page-->
	   	    </body>
	   	    </html>