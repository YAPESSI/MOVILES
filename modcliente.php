
<?php 
    require('conexion.php'); 
    $nc=$_REQUEST['nc'];
    $consulta="select * from clientes where id_clientes='".$nc."'";
    $recordset=mysql_query($consulta);
    $row=mysql_fetch_array($recordset);
    $nombre=$row["nombre"]; 
    $apaterno=$row["apaterno"];
    $amaterno=$row["amaterno"];
    $tele=$row["telefono"];
    $codigo_postal=$row["codigo_postal"];
    $RFC=$row["RFC"];
    $calle=$row["calle"];
    $numero=$row["numero"];
    $dir=$row["ref_colonia"];

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
    <a href="lestado.php" data-role="button" data-icon="home" data-iconpos="notext" data-theme="b" data-iconpos="left" data-inline="true">Inicio</a>
    <a href="index2.php#menu" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="b" data-iconpos="right" data-inline="true">Menú</a>   
  </div>


<div data-role="content" data-theme="c">
      <form name="formreg" action="actualizar.php" method="POST">      
          <input type="hidden" name="nc" id="basic" value="<?php echo $nc;?>" />
          <label for="basic">nombre:</label>
          <input type="text" name="nombre" id="basic" value="<?php echo $nombre;?>"  />
          <label for="basic">Apellido paterno:</label>
          <input type="text" name="apaterno" id="basic" value="<?php echo $apaterno;?>"  />
          <label for="basic">Apellido materno:</label>
          <input type="text" name="amaterno" id="basic" value="<?php echo $amaterno;?>"  />
          <label for="basic">Telefono:</label>
          <input type="text" name="telefono" id="basic" value="<?php echo $tele;?>"  />
          <label for="basic">Codigo postal:</label>
          <input type="text" name="codigo_postal" id="basic" value="<?php echo $codigo_postal;?>" />
          <label for="basic">RFC:</label>
          <input type="text" name="RFC" id="basic" value="<?php echo $RFC;?>"  />
          <label for="basic">Calle:</label>
          <input type="text" name="calle" id="basic" value="<?php echo $calle;?>"  />
          <label for="basic">Numero:</label>
          <input type="number" name="numero" id="basic" value="<?php echo $numero;?>"  />
          <label for="basic">Ref. Colonia:</label>
          <?php include("conexion.php");
          $consulta="select *from colonia where id_colonia=$dir";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from colonia";
          $recordset=mysql_query($consulta);
          ?> 
        <select name="ref_colonia" id="ref_colonia">
          <option value="<?php echo $dir;?>" selected>
          <?php echo $row2["nombre_colonia"]?>
          </option>
          <?php 
          while ($row=mysql_fetch_array($recordset)) {?>
            <?php  if ($dir!=$row["ref_colonia"]){ ?>
            <option value="<?php echo $row["id_colonia"];?>">
              <?php echo $row["nombre_colonia"]?>
            </option><?php  } } ?>
        </select> 
          <input type="submit" name="envio" value="Actualizar" data-theme="b"/>
          <input type="hidden" name="fn" value="2" /> 
          </form>
          
          <form name="formreg" action="eliminar.php" method="POST">
          <input type="hidden" name="nc" id="basic" value="<?php echo $nc;?>" />
          <input type="submit" name="envio" value="Eliminar" data-theme="b"/>          
          <input type="hidden" name="fn" value="2" /> 
           
     </form>
    </div> 
  <div data-role="footer">
  </div>
</div>
</body>
</html>