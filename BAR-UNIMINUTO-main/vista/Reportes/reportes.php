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
                   <h4>Reportes</h4>
                   </center>
                   <br>
                   <br>
                    <div class="row-fluid">

                     
                   
           

                
                






















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