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

    <title> Sobre Nosotros </title>

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
    <div class="address-bar">Cra. 26 #521, Bogotá</div>

    <?php
    require("cabecerausu.php");
    ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Acerca De
                        <strong>Meats And Wines</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="../img/untitled.png" alt="">
                </div>
                <div class="col-md-6">
                    <p>
<h1>Vision</h1>
Estamos en un agresivo plan de expansión, con restaurantes en Bogotá, Medellín, Cali, Armenia, Ibagué, Palmira, Villavicencio, Barranquilla, Santa Marta y Cartagena. Nuestras carnes, ademas de diferentes platos exoticos colombianos, asi como extrnangeros, ademas de la amplia carta de vinos que tenemos por ofrecer. Son entre muchos otros, los favoritos del público Colombiano.
                    </p>
                    <p>
<h1>Mison</h1>
Somos una compañía líder, que busca satisfacer las necesidades para cada uno de los miembros de la familia, brindando un alto nivel de servicio, basados en productos de calidad, variedad y precios razonables. Contamos con un equipo humano altamente calificado y profesional, generando así fidelidad del consumidor y posicionamiento en todos los mercados. .</p>
                    <p>
<h1>Estructura</h1>
Nuestra empresa cuenta con una estructura corporativa organizada, además de una infraestructura propia, donde se encuentra nuestra sede principal, que abarca las áreas administrativa y de producción; y una serie de xrestaurantes con locales acogedores. Conformamos un equipo humano altamente comprometido y capacitado para ofrecer un amplio portafolio de productos a nuestros clientes, garantizando respaldo, servicio y cumplimiento; elementos fundamentales para ser una empresa proyectada hacia el futuro.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Nuestro
                      <strong>Equipo</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 text-center">
                    <img src="../img/3344493_249px.jpg" alt="" width="268" height="192" class="img-responsive"/750x450>
                    
                  <h3>serguio Aguilar
                  <br>
                    <small>cocinero</small>
                  </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img src="../img/mesero-2.jpg" alt="" width="296" height="210" class="img-responsive"  /750x450>
                    <h3>John Smith
                    <br>
                        <small>Mesero</small>
                    </h3>
                </div>
                <div class="col-sm-4 text-center"><center><img src="../img/images.jpeg.jpg" alt="" width="158" height="198" class="img-responsive"></center>
                    
                    <h3>VALERIA CARDONA
                    <br>
                        <small>Cajera</small>
                    </h3>
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
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
