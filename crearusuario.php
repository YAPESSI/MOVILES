
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
		<h1>Crear usuario</h1>
		<a href="index2.php" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
		<a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>		
	</div>	
	<div data-role="content">
		 <form name="formreg" action="insertar.php" method="POST">

          <label for="basic">Crear usuario:</label>
          <input type="text" name="usuario"  value="" required />

    	  <label for="basic">Crear password:</label>
          <input type="password"  name="password"  value="" required />

		  <input type="hidden" name="fn" value="17" />
		  <input type="submit" value="Crear Usuario" />
		  </form>	
		  </div>
		  
	<div data-role="footer">
	</div>
</div>
</body>
</html>