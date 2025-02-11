<!DOCTYPE html>
    <?php
    session_start();
    if (@!$_SESSION['nombre']) {
        header("Location:login.php");
    }elseif ($_SESSION['rol']==1) {
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

    <title> RESERVAR </title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/business-casual.css" rel="stylesheet">

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

    <div class="brand">MEATS AND WINES</div>
    <div class="address-bar">Cra. 26 #52-1, Bogotá</div>

    <?php
    require("cabecerausu.php");
    ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Sobre 
                        <strong>Reservaciones</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="../img/reservacion.jpg" alt="">
                </div>
                <div class="col-md-6">
                
                    <p>
<h1>Meats And Wines</h1>
<font size=3>Tiene la opcion de dar a sus clientes un servicio especial al reservar un salon con una gran mesa, nuestro restaurante cuenta con un comodo salon para eventos especiales, el cliente solo tiene la opcion de poder reservar este salon con una gran mesa para eventos de gran importancia como, cumpleaños, bodas, encuentros familiares, entre otros, por otro lado la reservacion del salon tendra incluida un mejor servicio para los clientes y una mayor atencion en sus pedidos, la reservacion sera exclusiva para un dia.</font>
                    </p>
                    
                    <br>
                    
                    <br>
                    
                    <center><h4>¿Quieres reservar una mesa?</h4></center>
                    
                    <br>
                    
                    <center>
                    <form action="reservacionformulario.php" method="post">
                    <button class="btn btn-lg btn-primary btn-block btn-sm"type="submit" class="botonlg" style="width:180px">Reservar</button> </form>
                    <br>
                    (Revise si su reserva ha sido exitosa en el baton de abajo)
                    <br>
                    <br><form action="tablareservasusu.php" method="post">
                    <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit" class="botonlg" style="width:180px">Consultar reserva</button> 
                    </form>
                    </center>
                    
                </div>
                <div class="clearfix"></div>
            </div>
        </div>


    </div>
    <!-- /.container -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>TECHNOLOGY DUNK</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>