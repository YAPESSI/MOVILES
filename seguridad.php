
<?php
@session_start();
@$usuario=$_SESSION["autentificado"];
@require('conexion.php');	
@$consulta="select * from usuarios where usuario='$usuario'";
@$rs=mysql_query($consulta);
@$rs=mysql_num_rows($rs); 
if($rs<=0){
    		
	@session_destroy();
	@header("Location:zapateria.php");
	@exit();
}	
?>
