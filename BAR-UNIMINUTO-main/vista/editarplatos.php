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

    <title> Editar Platos </title>

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


      $("#editplatis").validate({
        rules:{
          nombre:{
            required:true,
            letras:true

          },
          descripcion:{
            required:true,
            letras:true
          }
        }
          ,
        messages:{
           nombre:{
            required:requerido
            
          },
          messages:{
            descripcion:{
              required:requerido
            }
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
      <h4>Actualizar Platos</h4>
      <br>
      <img src="../img/66803.png" width="150">
      <br>
      <br>
      <br>
      <div class="row-fluid">
      
          <?php
		        
          require("../modelo/connect_db.php");
    
          $editplatos=$mysql->query("SELECT id,nombre,descripcion,imagen,precio FROM platos WHERE id=('$_REQUEST[id]')") or
          die($mysql->error);
          if ($reg=$editplatos->fetch_array())
          {
          ?>     
    
          <form method="post" action="../controlador/ejecutareditarplatos.php" id="editplatis">
          
          <STRONG></STRONG><input type="text" name="id" value= "<?php echo $reg['id'];?>" hidden readonly>
          
          <STRONG>Nombre: </STRONG><input type="text" name="nombre" value= "<?php echo $reg['nombre'];?>">
          
          <br>
          <br>
          
          <STRONG>Descripcion: </STRONG><input type="text" name="descripcion" value="<?php echo $reg['descripcion'];?>">

          <br>
          <br>
          
          <STRONG>Imagen:<br> <center><form method="post" action="subir_archivo.php" enctype="multipart/form-data">
    <input type="file" name="imagen" /></center><br />
    
</form> <value="<?php echo $reg['imagen'];?>">
          
          <br>
          <br>
          
          <STRONG>Precio: </STRONG><input type="number" name="precio" value="<?php echo $reg['precio'];?>">
          
          <br>
          <br>
          
          <STRONG>Categoria: </STRONG><select name="categorias" value="<?php echo $reg['categorias']; ?>">
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
                   
          <input type="submit" title="Confirmar" name="submit" button class="btn btn-lg btn-primary btn-block btn-sm"  style="width:110px" required>
             
          <br>   
          <br>
             
          <input type="submit" value="volver" onClick="location.href='platos.php'" class="btn btn-success btn-primary" style="width: 80px">
             
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
    
        
        <script src="js/jquery.js"></script>
    
        <script src="js/bootstrap.min.js"></script>

</body>

</html>