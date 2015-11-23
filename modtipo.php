
<?php 
    require('conexion.php'); 
    $nc=$_REQUEST['nc'];
    $consulta="select * from tipo where id_tipo='".$nc."'";
    $recordset=mysql_query($consulta);
    $row=mysql_fetch_array($recordset);
    $nom_tipo=$row["nom_tipo"];

?>
<!--Declaracion del tipo de documento como HTML5-->
<!DOCTYPE html>
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
  <div data-role="page"> 
  <div data-role="header">
    <a href="ltipo.php" data-role="button" data-icon="home" data-iconpos="notext" data-theme="b" data-iconpos="left" data-inline="true">Inicio</a>
    <a href="index2.php#menu" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="b" data-iconpos="right" data-inline="true">Menú</a>   
  </div>


<div data-role="content" data-theme="c">
        <form name="formreg" action="actualizar.php" method="POST">
          <input type="hidden" name="nc" id="basic" value="<?php echo $nc;?>" />
          <label for="basic">Nombre tipo:</label>
          <input type="text" name="nom_tipo" id="basic" value="<?php echo $nom_tipo;?>" required />
          
      <input type="submit" name="envio" value="Actualizar" data-theme="b"/>
      <input type="hidden" name="fn" value="14" />  
      </form>

      <form name="formreg" action="eliminar.php" method="POST">
      <input type="hidden" name="nc" id="basic" value="<?php echo $nc;?>" /> 
      <input type="submit" name="envio" value="Eliminar" data-theme="b"/> 
      <input type="hidden" name="fn" value="14" />
     </form> 
     
      
    </div> 
  <div data-role="footer">
  </div>
</div>
</body>
</html>