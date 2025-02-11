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

    <title> Agregar Mesas</title>

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
      <h4>Agregar Mesa</h4>
      <img src="../img/ico_descarga_prestashop.jpg" width="150">
      <br>
      <br>
      <div class="row-fluid">
    
          <form method="post" action="../controlador/ejecutaragregarmesa.php">
          
          <STRONG>Numero De Personas: </STRONG><br><input type="text" name="numdepersonas" required>
          
          <br>
          
          <br>
          
          <STRONG>Ubicacion: </STRONG><br><input type "text" name="ubicacion" required>

          <br>

          <br>

          
          
          <input type="submit" title="Confirmar" name="submit" button class="btn btn-lg btn-primary btn-block btn-sm"  style="width:110px" required>
             
          <br>
             
          
             
          <input type="submit" value="volver" onClick="location.href='tablareservas.php'" class="btn btn-success btn-primary" style="width: 80px">
             
          </form>   

           <center>
            <br>
            <div class="row-fluid">
            
            <font size=3>Si el Estado de la mesa es igual a "0" esta <font color="#FF0000">DESHABILITADO</font></font>
            
            <br>
            
            <br>
            
            <font size=3>Si el Estado de la mesa es igual a "1" esta <font color="#00CC00">HABILITADO</font></font>
            
            <br>
            
            <div class="span8">  
            </div>
            </div>
            </div>  

    
    <script src="../js/jquery.js"></script>

    <script src="../js/bootstrap.min.js"></script>
</center>       
          
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