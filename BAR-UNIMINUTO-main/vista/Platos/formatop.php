<!DOCTYPE html>

<?php
    session_start();
    if (@!$_SESSION['nombre']) {
        header("Location:../login.php");
    }if ($_SESSION['rol']==1) {
        header("Location:../../iniciousu.php");
    }if ($_SESSION['rol']==0) {
        header("location:../login.php");
    }
    ?>
    
<html lang="en">

<head>
    
    



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/business-casual.css" rel="stylesheet">

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

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">MEATS AND WINES</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" >   
                             
                    <li>
                        <a href="../../iniciousu.php">Inicio</a>
                    </li>
                    
                    <li>
                       <a href="../blogusuario.php">Menu</a>
                    </li>
                
                    <li>
                        <a href="../reservacionusu.php">Reservar</a>
                    </li>
                 
                    
                    </span>
                    
                    <li class="nav navbar-navl">
                        <a href="../desconectar.php">salir
                    <span class="glyphicon glyphicon-remove"></a>
                    </li>
                    
                    </span>  
                </ul>
            </div>
           
        </div>
        
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        

                       

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        
                     <!-- SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS LUGAR DONDE SE COLOCARA LOS PLATOSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS -->
                    

                    <center>                
    
        <div class="box" style="width:1000px;">
        <h4>PLATOS A TU GUSTO</h4>
        <br>
        <div class="row-fluid">

        <?php

                require("../connect_db.php");
                $sql=("SELECT * FROM platos");
    
                //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                $query=mysqli_query($mysql,$sql);

                
            ?>
                        <?php   
                 while($arreglo=mysqli_fetch_array($query)){
                    
                       
                        
                        echo "$arreglo[1]";
                        echo "<br>";
                        echo "<br>";

                        echo "$arreglo[2]";
                        echo "<br>";
                        echo "<br>";


                        echo "$arreglo[3]";
                        echo "<br>";
                        echo "<br>";


                        echo "$arreglo[4])";
                        echo "<br>";
                        echo "<br>";


              
                
                }

                echo "</table>";

                    extract($_GET);
                    if(@$codigoborrar==2){
        
                        $sqlborrar="DELETE FROM platos WHERE codigo=$codigo";
                        $resborrar=mysqli_query($mysql,$sqlborrar);
                        echo ' <script language="javascript">alert("PRODUCTO ELIMINADO CORRECTAMENTE");</script> ';
                        
                        echo "<script>location.href='platos.php'</script>";
                    }
                      
            ?>
 <input type="submit" value="Agregar" onClick="location.href:='platos.php'" class="btn btn-success btn-primary" style="width: 80px">




                    </h2>
                </div>
            

        

              </div>
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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>