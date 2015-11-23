
<?php 
    require('conexion.php'); 
    $nc=$_REQUEST['nc'];
    $consulta="select * from compras where id_compras='".$nc."'";
    $recordset=mysql_query($consulta);
    $row=mysql_fetch_array($recordset);
    $fecha_compra=$row["fecha_compra"]; 
    $dir=$row["ref_productos"];
    $dir1=$row["ref_proveedores"];
    $dir2=$row["ref_empleados"];
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
    <a href="lcompras.php" data-role="button" data-icon="home" data-iconpos="notext" data-theme="b" data-iconpos="left" data-inline="true">Inicio</a>
    <a href="index2.php#menu" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="b" data-iconpos="right" data-inline="true">Menú</a>   
  </div>


<div data-role="content" data-theme="c">
      <form name="formreg" action="actualizar.php" method="POST">

          <input type="hidden" name="nc" id="basic" value="<?php echo $nc;?>" />
          <label for="basic">fecha compra:</label>
          <input type="text" name="fecha_compra" id="basic" value="<?php echo $fecha_compra;?>"  />
          <label for="basic">ref producto:</label>
          <?php include("conexion.php");
          $consulta="select *from productos where id_productos=$dir";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from productos";
          $recordset=mysql_query($consulta);
          ?> 
        <select name="ref_productos" id="ref_productos">
          <option value="<?php echo $dir;?>" selected>
          <?php echo $row2["precio_mayorista"]?>
          </option>
          <?php 
          while ($row=mysql_fetch_array($recordset)) {?>
            <?php  if ($dir!=$row["ref_productos"]){ ?>
            <option value="<?php echo $row["id_productos"];?>">
              <?php echo $row["precio_mayorista"]?>
            </option><?php  } } ?>
        </select> 

          <label for="basic">ref_proveedores:</label>

          <?php include("conexion.php");
          $consulta="select *from proveedores where id_proveedores=$dir1";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from proveedores";
          $recordset=mysql_query($consulta);
          ?> 
        <select name="ref_proveedores" id="ref_proveedores">
          <option value="<?php echo $dir1;?>" selected>
          <?php echo $row2["nombre"]?>
          </option>
          <?php 
          while ($row=mysql_fetch_array($recordset)) {?>
            <?php  if ($dir1!=$row["ref_proveedores"]){ ?>
            <option value="<?php echo $row["id_proveedores"];?>">
              <?php echo $row["nombre"]?>
            </option><?php  } } ?>
        </select> 
          <label for="basic">ref empleados:</label>

          <?php include("conexion.php");
          $consulta="select *from empleados where id_empleados=$dir2";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from empleados";
          $recordset=mysql_query($consulta);
          ?> 
        <select name="ref_empleados" id="ref_empleados">
          <option value="<?php echo $dir2;?>" selected>
          <?php echo $row2["nombre"]?>
          </option>
          <?php 
          while ($row=mysql_fetch_array($recordset)) {?>
            <?php  if ($dir2!=$row["ref_empleados"]){ ?>
            <option value="<?php echo $row["id_empleados"];?>">
              <?php echo $row["nombre"]?>
            </option><?php  } } ?>
        </select> 
      <input type="submit" name="envio" value="Actualizar" data-theme="b"/>
      <input type="hidden" name="fn" value="5" />      
      </form>

      <form name="formreg" action="eliminar.php" method="POST">
      <input type="hidden" name="nc" id="basic" value="<?php echo $nc;?>" />
      <input type="submit" name="envio" value="Eliminar" data-theme="b"/>          
      <input type="hidden" name="fn" value="5" /> 
      
      </form> 
    </div> 
  <div data-role="footer">
  </div>
</div>
</body>
</html>