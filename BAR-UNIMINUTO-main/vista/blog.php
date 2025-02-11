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

    <title> MENU </title>

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
    include("cabecera.php");
    ?>   

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Nuestro
                        <strong>Menu</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                <h2>carnes
                        <br>
                        <small>platos</small>
                    </h2>

   <style type="text/css">
        
        ul{

            margin: 0 auto;

            margin-top: 20px;

        }

        ul li{
    

            list-style: none;

  
        }

        ul li img{

            float: left;
            
            opacity: .7;

            width: 205px;

            height: 205px;

            -webkit-transition:all .6s ease;

        }

        ul li img:hover{

            opacity: 1;

            border-radius: 200px;

            -webkit-transform:scale(1.25) rotate(360deg);

        }
    </style>

<center>
    <ul>

      <li><a href="iniciousu.php">  <img src="../img/1fa918e5637c9edcff44f1c354237cec.jpg"></a></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><a href="tablausuarios.php"> <img src="../img/461-940x400.jpg"></li></a>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><a href="tablausuarios.php"> <img src="../img/600x6001352383195_lavedette2.jpg"></li></a>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/673x6731352383207_lavedette1.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/015800920_30300.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/carnes-ternera-ecologica-de-extremadura-a-la-parrilla.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/curso-de-cocina-carne-aves-caza.jpg"></li>
        
<li><img src="../img/pDlDyLf7.png"></li>
    
        <li><img src="../img/imgheader_petalo.jpg"></li>
        
<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/lasolera_platos_0654_4.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/list_640px.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/Och_10039_Platos-3842-Fg3.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/Och_11751_3254-04-Goulash.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/PlatoDeBocas.jpg"></li>

        
    </ul>

</center>



<div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Nuestro
                        <strong>Menu</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                <h2>vinos
                        <br>
                        <small>botellas</small>
                    </h2>


<center>
                <ul>

        <li><img src="../img/vino1.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/vino2.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/vino3.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/vino4.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/vino5.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/vino6.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/vino7.jpg"></li>
        
<li><img src="../img/pDlDyLf7.png"></li>
    
        <li><img src="../img/vino8.jpg"></li>
        
<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/vino9.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/vino10.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/vino11"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/vino12.jpg"></li>

<li><img src="../img/pDlDyLf7.png"></li>

        <li><img src="../img/vino13.jpg"></li>

        
    </ul>




</center>

            </div>
        </div>

    </div>
    <!-- /.container -->

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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

