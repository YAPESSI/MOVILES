<?php
@session_start();
if (@$_SESSION["autentificado"] == "admin") {
	header("Location:index2.php");
	exit();}	
?>

<!DOCTYPE html>
<html> 
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile: Autentificación</title>
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.2.1.css" />
	<link rel="stylesheet" href="docs/_assets/css/jqm-docs.css" />
    <script src="js/jquery.js"></script>
	<script src="docs/_assets/js/jqm-docs.js"></script>
	<script src="js/jquery.mobile-1.2.1.js"></script>
	
</head> 
<body> 
	<div data-role="page"> 
	<div data-role="header">
		<h1>Autentificación</h1>
		<a href="index.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		 <form name="form1" action="index.php" method="POST">
          <label for="basic"/>Usuario:</label>
          <input type="text" name="usuario"  value="" required />
    	  <label for="basic"/>Password:</label>
          <input type="password"  name="password"  value="" required />
		  <input type="hidden" name="fn" value="20" />
		  <input type="submit" value="Autentificación" />
		 </form>	</div>
		  <?php
			@$usuario=$_REQUEST['usuario'];
			@$password=md5($_REQUEST['password']);
			if (isset($usuario)and isset($password)){
    			require('conexion.php');	
    			$consulta="select * from usuarios where  usuario='$usuario' and password='$password'";
    			@$rs=mysql_query($consulta);
    			@$rs=mysql_num_rows($rs); 
    			if($rs>0)
    			{	session_start();
    				$_SESSION["autentificado"]= $usuario;
					header("Location:index2.php");
					exit();
				}else {
    				echo '<h3>Cuenta o Password incorrecto</h3>';					
    			}
			}		
		?>
	<div data-role="footer">
	</div>
</div>
</body>
</html>