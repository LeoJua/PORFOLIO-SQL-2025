<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
    header("Location:vista/login.php");
}if ($_SESSION['rol']==2) {
    header("Location:admin.php");
}if ($_SESSION['rol']==0) {
	header("location:vista/login.php");
}
?>
<html lang="en">

<head>

<?php
    require("vista/iconito.php");
    ?>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMINISTRADOR</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/business-casual.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head>

<body >


    <nav class="navbar navbar-default" role="navigation">

    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
            </button>

            <a class="navbar-brand" href="index.php"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">

                <li>
                  <a href="vista/tablaproductos.php">Productos
                  </a>
                </li>

                

                <li>
                  <a href="vista/tablausuarios.php">Usuarios
                  </a>
                </li>

                <li>
                  <a href="vista/tablareservas.php">Reservas
                  </a>
                </li>

                <li>
                  <a href="vista/tablaproveedores.php">proveedores
                  </a>
                </li>

                <li>
                  <a href="vista/pedidos/pedidos.php">Pedidos
                  </a>
                </li>

                <li>
                  <a href="vista/Reportes/reportes.php">
                  <span class="glyphicon glyphicon-signal"></a>
                </li>

                <li class="nav navbar-navl">
                  <a href=""><?php echo $_SESSION['nombre'];?>
                <span class="glyphicon glyphicon-user"></a>
                </li>

                <li class="nav navbar-navl">
                  <a href="controlador/desconectar.php">salir
                <span class="glyphicon glyphicon-remove"></a>
                </li>

            </ul>

        </div>

    </div>

</nav>


	<center>
    <div class="box" style="width:900px;">
        <div class="row-fluid">

      	<img src="img/letrero bienvenidos.jpg" height="403" width="843">

   	</head>
    <body>



        <div class="span8">

        </div>
        </div>
        </div>
        </center>
        <br>

    <div class="container">
    <center>

            </center>
            </div>
           </div>
          </div>
         </div>
        </div><!-- /card-container -->
    </div><!-- /container -->
  </center>



    <script src="js/jquery.js"></script>


    <script src="js/bootstrap.min.js"></script>


</body>

</html>
