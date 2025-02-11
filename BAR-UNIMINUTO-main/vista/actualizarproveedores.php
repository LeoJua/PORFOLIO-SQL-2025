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

    <title> Actualizar Proveedores</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/business-casual.css" rel="stylesheet">
 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

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
      <img src="../img/actualizaricono.jpg" width="150">
      <br>
      <br>
      <div class="row-fluid">
    
          <?php
          //CONEXION BASE DE DATOS//
		  
          
          require '../controlador/class.proveedor.php';
    
          $proveedores=proveedor::imprimirProveedores("WHERE id=('$_REQUEST[id]')");
          //$proveedores=$mysql->query("SELECT id,nombre,fecha,direccion,telefono,email,estado FROM proveedores WHERE id=('$_REQUEST[id]')") or
          //die($mysql->error);//
          if ($reg=$proveedores->fetch_array())
          {
          ?>
    
          <form method="post" action="../controlador/ejecutaractualizarproveedores.php">
          
          
          <input type="text" name="id" value= "<?php echo $reg['id'];?>" readonly hidden>
          
          
          <STRONG>Nombre: </STRONG><input type="text" name="nombre" value="<?php echo $reg['nombre'];?>">
          
          <br>
          
          <br>
          
          <STRONG>Fecha: </STRONG><input type="text" value="<?php echo $reg['fecha']; ?>" readonly>
          <input type="hidden" name="fecha" value="<?php echo $reg['fecha']; ?>" readonly>

          <br>
          
          <br>
          
          <STRONG>Direccion: </STRONG><input type="text" name="direccion" value="<?php echo $reg['direccion'];?>">
          
          <br>
          
          <br>
          
          <STRONG>Telefono: </STRONG><input type="text" name="telefono" value="<?php echo $reg['telefono'];?>">
          
          <br>
          
          <br>
          
          <STRONG>Email: </STRONG><input type="email" name="email" value="<?php echo $reg['email'];?>">
          
          <br>
          
          <br>
          
          <input type="submit" title="Confirmar" name="submit" button class="btn btn-lg btn-primary btn-block btn-sm"  style="width:110px" required>
             
          <br>
             
          <br>
             
          <input type="submit" value="volver" onClick="location.href='tablaproveedores.php'" class="btn btn-success btn-primary" style="width: 80px">
             
          </form>
     
		  <?php
          }
          else
          echo '<script>alert("ERROR DE PROCESAMIENTO, NO SE HAN ACTUALIZADO LOS DATOS")</script>';
          
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