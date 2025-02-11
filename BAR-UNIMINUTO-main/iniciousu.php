<!DOCTYPE html>
    <?php
    session_start();
    if (@!$_SESSION['nombre']) {
        header("Location:vista/login.php");
    }if ($_SESSION['rol']==1) {
        header("Location:iniciousu.php");
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

    <title>Business Casual</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>



    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">

    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
            </button>


            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">

                    <li>
                        <a href="iniciousu.php">Inicio</a>
                    </li>

                    <li>
                       <a href="vista/blogusuario.php">Menu
                       </a>
                    </li>


                    <li>
                        <a href="">Tus Compras
                        </a>
                    </li>

                    <li>

                        <a href="vista/carritodecompras.php">
                         <span class="glyphicon glyphicon-shopping-cart"></a>
                    </li>

                    <li>
                        <a href=""></a>
                    </li>

                    <li class="nav navbar-navl" >
                         <a href=""><?php echo $_SESSION['nombre'];?>
                    <span class="glyphicon glyphicon-user"></a>
                    </li>
                    </span>

                    <li class="nav navbar-navl">
                        <a href="controlador/desconectar.php">salir
                    <span class="glyphicon glyphicon-remove"></a>
                    </li>

                    </span>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <!-- /.container -->



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
