
<?php 
    require('conexion.php'); 
    $nc=$_REQUEST['nc'];
    $consulta="select * from productos where id_productos='".$nc."'";
    $recordset=mysql_query($consulta);
    $row=mysql_fetch_array($recordset);
    $precio_mayorista=$row["precio_mayorista"]; 
    $precio_proveedor=$row["precio_proveedor"];
    $precio_publico=$row["precio_publico"];
    $dir=$row["ref_productodos"];
    $dir1=$row["ref_marca"];
    $dir2=$row["ref_tipo"];
    $dir3=$row["ref_color"];

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
          <label for="basic">Precio mayorista:</label>
          <input type="text" name="precio_mayorista" id="basic" value="<?php echo $precio_mayorista;?>"  />
          <label for="basic">Precio proveedor:</label>
          <input type="text" name="precio_proveedor" id="basic" value="<?php echo $precio_proveedor;?>"  />
          <label for="basic">Precio publico:</label>
          <input type="text" name="precio_publico" id="basic" value="<?php echo $precio_publico;?>"  />
          <label for="basic">Ref productodos:</label>
          
          <?php include("conexion.php");
          $consulta="select *from productodos where id_productodos=$dir";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from productodos";
          $recordset=mysql_query($consulta);
          ?> 
        <select name="ref_productodos" id="ref_productodos">
          <option value="<?php echo $dir;?>" selected>
          <?php echo $row2["numero"]?>
          </option>
          <?php 
          while ($row=mysql_fetch_array($recordset)) {?>
            <?php  if ($dir!=$row["ref_productodos"]){ ?>
            <option value="<?php echo $row["id_productodos"];?>">
              <?php echo $row["numero"]?>
            </option><?php  } } ?>
        </select>

          <label for="basic">Ref marca:</label>

          <?php include("conexion.php");
          $consulta="select *from marca where id_marca=$dir1";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from marca";
          $recordset=mysql_query($consulta);
          ?> 
        <select name="ref_marca" id="ref_marca">
          <option value="<?php echo $dir1;?>" selected>
          <?php echo $row2["nom_marca"]?>
          </option>
          <?php 
          while ($row=mysql_fetch_array($recordset)) {?>
            <?php  if ($dir!=$row["ref_marca"]){ ?>
            <option value="<?php echo $row["id_marca"];?>">
              <?php echo $row["nom_marca"]?>
            </option><?php  } } ?>
        </select>
          
          <label for="basic">Ref tipo:</label>

          <?php include("conexion.php");
          $consulta="select *from tipo where id_tipo=$dir2";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from tipo";
          $recordset=mysql_query($consulta);
          ?> 
        <select name="ref_tipo" id="ref_tipo">
          <option value="<?php echo $dir2;?>" selected>
          <?php echo $row2["nom_tipo"]?>
          </option>
          <?php 
          while ($row=mysql_fetch_array($recordset)) {?>
            <?php  if ($dir2!=$row["ref_tipo"]){ ?>
            <option value="<?php echo $row["id_tipo"];?>">
              <?php echo $row["nom_tipo"]?>
            </option><?php  } } ?>
        </select>
          
          <label for="basic">Ref color:</label>

          <?php include("conexion.php");
          $consulta="select *from color where id_color=$dir3";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from color";
          $recordset=mysql_query($consulta);
          ?> 
        <select name="ref_color" id="ref_color">
          <option value="<?php echo $dir3;?>" selected>
          <?php echo $row2["nom_color"]?>
          </option>
          <?php 
          while ($row=mysql_fetch_array($recordset)) {?>
            <?php  if ($dir3!=$row["ref_color"]){ ?>
            <option value="<?php echo $row["id_color"];?>">
              <?php echo $row["nom_color"]?>
            </option><?php  } } ?>
        </select>
      
      <input type="submit" name="envio" value="Actualizar" data-theme="b"/>
      <input type="hidden" name="fn" value="12" /> 
      </form>

      <form name="formreg" action="eliminar.php" method="POST">
      <input type="hidden" name="nc" id="basic" value="<?php echo $nc;?>" />
      <input type="submit" name="envio" value="Eliminar" data-theme="b"/>          
      <input type="hidden" name="fn" value="12" /> 
     </form>      
     
    </div> 
  <div data-role="footer">
  </div>
</div>
</body>
</html>