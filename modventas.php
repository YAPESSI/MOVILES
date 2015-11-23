
<?php 
    require('conexion.php'); 
    $nc=$_REQUEST['nc'];
    $consulta="select * from ventas where id_venta='".$nc."'";
    $recordset=mysql_query($consulta);
    $row=mysql_fetch_array($recordset);
    $fecha_venta=$row["fecha_venta"];
    $iva=$row["iva"];
    $subtotal=$row["subtotal"];
    $total=$row["total"];
    $dir=$row["ref_cliente"];

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
    <a href="lisventas.php" data-role="button" data-icon="home" data-iconpos="notext" data-theme="b" data-iconpos="left" data-inline="true">Inicio</a>
    <a href="index2.php#menu" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="b" data-iconpos="right" data-inline="true">Menú</a>   
  </div>


<div data-role="content" data-theme="c">
        <form name="formreg" action="actualizar.php" method="POST">
        
          <input type="hidden" name="nc" id="basic" value="<?php echo $nc;?>" />
          <label for="basic">Fecha venta:</label>
          <input type="text" name="fecha_venta" id="basic" value="<?php echo $fecha_venta;?>" required />
          <label for="basic">IVA:</label>
          <input type="text" name="iva" id="basic" value="<?php echo $iva;?>" required />
          <label for="basic">Subtotal:</label>
          <input type="number" name="subtotal" id="basic" value="<?php echo $subtotal;?>" required />
          <label for="basic">Total:</label>
          <input type="number" name="total" id="basic" value="<?php echo $total;?>" required />
          <label for="basic">Ref cliente:</label>
          
          <?php include("conexion.php");
          $consulta="select *from clientes where id_clientes=$dir";
          $recordset1=mysql_query($consulta);
          $row2=mysql_fetch_array($recordset1);
          
          $consulta="select *from clientes";
          $recordset=mysql_query($consulta);
          ?> 
        <select name="ref_cliente" id="ref_cliente">
          <option value="<?php echo $dir;?>" selected>
          <?php echo $row2["nombre"]?>
          </option>
          <?php 
          while ($row=mysql_fetch_array($recordset)) {?>
            <?php  if ($dir!=$row["ref_cliente"]){ ?>
            <option value="<?php echo $row["id_clientes"];?>">
              <?php echo $row["nombre"]?>
            </option><?php  } } ?>
        </select>

      <input type="submit" name="envio" value="Actualizar" data-theme="b"/>
      <input type="hidden" name="fn" value="16" />  
      </form>

      <form name="formreg" action="eliminar.php" method="POST">
      <input type="hidden" name="nc" id="basic" value="<?php echo $nc;?>" />   
      <input type="submit" name="envio" value="Eliminar" data-theme="b"/> 
      <input type="hidden" name="fn" value="16" />      
     </form>
      
    </div> 
  <div data-role="footer">
  </div>
</div>
</body>
</html>