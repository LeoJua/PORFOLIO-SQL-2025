<!doctype html>

<?php
session_start();
if (@!$_SESSION['nombre']) {
    header("Location:login.php");
}elseif ($_SESSION['rol']==2) {
    header("Location:login.php");
}
?>

<html lang="en">

<head>

<?php
    require("iconito.php");
    ?>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Actualizar </title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/business-casual.css" rel="stylesheet">
 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <script  src="../js/jquery-3.2.1.js"></script>

    <script  src="../js/jquery.validate.js"></script>
    <script>
      $(document).ready(function(){

        var requerido="es obligatorio";



      jQuery.validator.addMethod("letras", function(value, element) {
  return this.optional( element ) || /^[a-záéóóúàèìòùäëïöüñ\s]+$/i.test( value );
  }, 'Solo se permiten letras.');


      $("#actualizapruductos").validate({
        rules:{
          nombre:{
            required:true,
            letras:true

          }
        }
          ,
        messages:{
           nombre:{
            required:requerido
            
          }

        }

        
      });
  });

    </script>
    <style type="text/css">
      .error{
        display: block;
      }
    </style>

</head> 


<body >

    <div class="brand">MEATS AND WINES</div>
    
    <div class="address-bar">Cra. 26 #521, Bogotá</div>

    <?php
    require("cabeceraadmin.php");
    ?>    
                      
    <center>              
      <div class="box" style="width:390px">
      <h4>Edición de Productos</h4>
      <img src="../img/productos_imagen.jpg" width="150">
      <br>
      <br>
      <div class="row-fluid">
    
          <?php
          //CONEXION BASE DE DATOS//
		  
          require("../modelo/connect_db.php");
    
          $productos=$mysql->query("SELECT codigo,nombre,codigo_categorias_productos,id_proveedores,cantidad,peso,medida,precio FROM productos WHERE codigo=('$_REQUEST[id]')") or
          die($mysql->error);
          if ($reg=$productos->fetch_array())
          {
          ?>
    
          <form method="post" action="../controlador/ejecuactualizarproductos.php" id="actualizapruductos">

            <input type="hidden" name="codigo" value= "<?php echo $reg['codigo'];?>" readonly>
         
          <br>
          
          <br>
          
          

          
          <STRONG>Nombre: </STRONG><br><input type="text" name="nombre" value="<?php echo $reg['nombre'];?>">
          
          <br>
          
          <br>



          
          <STRONG>Categoria: </STRONG><br><select name="categorias" value="<?php echo $reg['categorias'];?>">
			 <?php
             
             $productos2=$mysql->query("select codigo,nombre from categorias_productos") or
             die($mysql->error);
             while ($reg2=$productos2->fetch_array())
             {
             if ($reg2['codigo']==$reg['categorias'])
             echo "<option value=\"".$reg2['codigo']."\" selected>".$reg2['nombre']."</option>";
             else
             echo "<option value=\"".$reg2['codigo']."\">".$reg2['nombre']."</option>";
             }
             ?>
             </select>
          
          <br>
          
          <br>


          
          <STRONG>Proveedor: </STRONG><br><select name="proveedor" value="<?php echo $reg['proveedor'];?>">
			 <?php
             
             $productos3=$mysql->query("select id,nombre from proveedores") or
             die($mysql->error);
             while ($reg2=$productos3->fetch_array())
             {
             if ($reg2['id']==$reg['proveedor'])
             echo "<option value=\"".$reg2['id']."\" selected>".$reg2['nombre']."</option>";
             else
             echo "<option value=\"".$reg2['id']."\">".$reg2['nombre']."</option>";
             }
             ?>
             </select>
          
          <br>
          
          <br>




          
          <STRONG>Cantidad: </STRONG><br><input type="number" name="cantidad" value="<?php echo $reg['cantidad'];?>">
          
          <br>
          
          <br>



          
          <STRONG>Peso: </STRONG><br><input type="number" name="peso" value="<?php echo $reg['peso'];?>">
          
          <br>
          
          <br>




          <STRONG>Medida: </STRONG><br><select name="medida" value="<?php echo $reg['medida'];?>">


          <option>Lb</option>
          <option>Lt</option>
          <option>Ml</option>
          <option>Gr</option>
            

          
          </select>

          <br>
          
          <br>




          
          <STRONG>Precio: </STRONG><br><input type="number" name="precio" value="<?php echo $reg['precio'];?>">
          
          <br>
          
          <br>


          
          <input type="submit" title="Confirmar" name="submit" button class="btn btn-lg btn-primary btn-block btn-sm"  style="width:110px" required>
             
          <br>
             
          <br>
             
          <input type="submit" value="volver" onClick="location.href='tablaproductos.php'" class="btn btn-success btn-primary" style="width: 80px">
             
          </form>
     
		  <?php
          }
          else
          echo '<script>alert("ERROR DE PROCESAMIENTO, NO SE HAN ACTUALIZADO LOS DATOS")</script>';
          $mysql->close();
          ?>          
          
      <div class="span8">
      
          </div>
          
          </div>
          
          </div>                  
                                        
              <footer>
                
                <div class="container">
                        
                  <div class="row">
                                
                     <div class="col-lg-12 text-center">
                                        
                        <p>TECHNOLOGY DUNK</p>
                                    
                     </div>
                            
                  </div>
                    
                </div>
            
              </footer>
    
    
        
        <script src="../js/jquery.js"></script>
    
        <script src="../js/bootstrap.min.js"></script>

</body>

</html>