<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
    header("Location:../login.php");
}elseif ($_SESSION['rol']==2) {
    header("Location:../login.php");
}
?>
<html lang="en">

<head>

	<?php
    require("../iconito.php");
    ?>

   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Reportes </title>


    <link href="../../css/bootstrap.min.css" rel="stylesheet">

   
    <link href="../../css/business-casual.css" rel="stylesheet">

   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <style type="text/css">
        #contenedor{
            margin-left: 2%;
            float: left;
            display: inline-block;
            width:15%;
            height:600px; 
        }
        #contenido{
            height: 600px;
            
            margin-left: 18%;
            margin-right: 2%;
        }
        


    </style>


</head> 

<body >

    <div class="brand">MEATS AND WINES</div>
    <div class="address-bar">Cra. 26 #521, Bogotá</div>

    
    <nav class="navbar navbar-default" role="navigation">

    <div class="container-fluid">
           
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
            </button>
                           
            <a class="navbar-brand" href="index.php">MEATS AND WINES</a>
            </div>
                        
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">




    <div class="container-fluid">
           
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
            </button>
                           
            <a class="navbar-brand" href="index.php">MEATS AND WINES</a>
            </div>
                        
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <ul class="nav navbar-nav">
            
                <li>
                  <a href="../tablaproductos.php">Productos
                  </a>
                </li>
                
                <li>
                  <a href="../platos.php">Platos
                  </a>
                </li>
               
                <li>
                  <a href="../tablausuarios.php">Usuarios
                  </a>
                </li>
                
                <li>
                  <a href="../tablareservas.php">Reservas
                  </a>
                </li>
                
                <li>
                  <a href="../tablaproveedores.php">Proveedores
                  </a>
                </li>
                
                <li>
                  <a href="../pedidos/pedidos.php">Pedidos
                  </a>
                </li>
                
                <li>
                  <a href="reportes.php">
                  <span class="glyphicon glyphicon-signal"></a>
                </li>      
                                 
                <li class="nav navbar-navl">
                  <a href=""><?php echo $_SESSION['nombre'];?>
                <span class="glyphicon glyphicon-user"></a>
                </li>
                
                <li class="nav navbar-navl">
                  <a href="../../controlador/desconectar.php">salir
                <span class="glyphicon glyphicon-remove"></a>
                </li>
                    
            </ul>
                                            
        </div>
                    
    </div>
        
</nav>




                                            
        </div>
                    
    </div>
        
</nav>
    
                    
                    	
    
        <div class="box" id="contenedor">
            <center>
		<h4>Reportes</h4>
    </center>
        <br>
		<div class="row-fluid">


<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



            <ul class="nav navbar-nav">
            
                <center>
                  REPORTE PRODUCTOS <br><a href="reportproductos.php"><span class="glyphicon glyphicon-briefcase"></a>
                <br>
                
                
                  REPORTE COMPRAS <br><a href="reportplatos.php"><span class="glyphicon glyphicon-apple"></a>
                <br>
               
                
                 REPORTES USUARIOS <br><a href="reportusuarios.php"><span class="glyphicon glyphicon-education"></a>
                  <br>

                  REPORTE RESERVAS <br><a href="reportreservas.php"><span class="glyphicon glyphicon-file"></a>
                    <br>

                  REPORTE PROVEDORES <br><a href="reportprovedores.php"><span class="glyphicon glyphicon-leaf"></a>

                
                <br>
</center>
            </ul>
        </div>
    </div>
</div>


                   <div class="box" id="contenido">
                    <center>
                   <h4>Reportes proveedores<br>
                    Buscar mediante el codigo<br>
                  (FECHA, ESTADO)</h4>
                   </center>
                   
                    <div class="row-fluid">

                      <center>

                      <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="cdr" >
        
                                    <input name="T1"  type="text" class="list-group-item-danger" size="20">
                                    <br>
                                    <br>
                                  <input  name="buscar" type="submit" id="buscar" value="buscar" class="btn btn-lg btn-primary btn-block btn-sm" style="width: 100px"/>
    
                            </form>

                            <br>
                            <br>
                            


<?php

ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);
     
 
require("../../modelo/connect_db.php");

 $buscar = $_POST['T1'];
 $registros=$mysql->query("SELECT id, nombre, fecha, direccion, telefono, email, estado FROM `proveedores` WHERE fecha like '%$buscar%' or estado like '%$buscar%' ORDER BY `proveedores`.`id`  ASC") 
 or die($mysql->error);

 echo '<table  id="proveedores" border="2"; class="table table-hover">';
 echo'<thead>';

 echo '<tr>
            <th class="center">id</th>
            <th class="center">nombre</th>
            <th class="center">fecha</th>
            <th class="center">direccion</th>
            <th class="center">telefono</th>
            <th class="center">email</th>
            <th class="center">estado</th>
 
            ';
 

 while ($reg=$registros->fetch_array())
 {
 echo '<tr>';
 echo '<td>';
 echo $reg['id'];
 echo '</td>';
  echo '<td>';
 echo $reg['nombre'];
 echo '</td>';
 echo '<td>';
 echo $reg['fecha'];
 echo '</td>';
 echo '<td>';
 echo $reg['direccion'];
 echo '</td>';
 echo '<td>';
 echo $reg['telefono'];
 echo '</td>';
 echo '<td>';
 echo $reg['email'];
 echo '</td>';
 echo '<td>';
 echo $reg['estado'];
 echo '</td>';
 
 
 echo '</tr>';

 }
    
 echo '</table>';
 $mysql->close();
 ?>

                     
                   
           

                
                






















            <div class="span8">
        
        </div>  
        </div>  
        <br/>
      
    
      </center>
      
      </div>
      
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

    
    <script src="../../js/jquery.js"></script>

    <script src="../../js/bootstrap.min.js"></script>

</body>

</html>