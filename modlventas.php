
<?php 
    require('conexion.php'); 
    $nc=$_REQUEST['nc'];
    $consulta="select * from listaventas where id_ventas='".$nc."'";
    $recordset=mysql_query($consulta);
    $row=mysql_fetch_array($recordset);
    $cantidad=$row["cantidad"]; 
    $descripcion=$row["descripcion"];
    $dir=$row["ref_productos"];
    $dir1=$row["ref_ventas"];
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
          <label for="basic">Cantidad:</label>
          <input type="number" name="cantidad" id="basic" value="<?php echo $cantidad;?>"  />
          <label for="basic">Descripcion:</label>
          <input type="text" name="descripcion" id="basic" value="<?php echo $descripcion;?>"  />
          <label for="basic">Ref. productos:</label>
          
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
          <label for="basic">Ref. ventas:</label>
          
          <?php include("conexion.php");
          $consulta="select *from ventas where id_venta=$dir1";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from ventas";
          $recordset=mysql_query($consulta);
          ?> 
        <select name="ref_ventas" id="ref_ventas">
          <option value="<?php echo $dir1;?>" selected>
          <?php echo $row2["fecha_venta"]?>
          </option>
          <?php 
          while ($row=mysql_fetch_array($recordset)) {?>
            <?php  if ($dir1!=$row["ref_ventas"]){ ?>
            <option value="<?php echo $row["id_venta"];?>">
              <?php echo $row["fecha_venta"]?>
            </option><?php  } } ?>
        </select>

      <input type="submit" name="envio" value="Actualizar" data-theme="b"/>
      <input type="hidden" name="fn" value="8" /> 
      </form>
      <form name="formreg" action="eliminar.php" method="POST">
      <input type="hidden" name="nc" id="basic" value="<?php echo $nc;?>" />
      <input type="submit" name="envio" value="Eliminar" data-theme="b"/>          
      <input type="hidden" name="fn" value="8" /> 
      </form>   

    </div> 
  <div data-role="footer">
  </div>
</div>
</body>
</html>