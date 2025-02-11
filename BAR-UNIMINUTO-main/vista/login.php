<!DOCTYPE html>
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

    <title>LOGIN</title>


    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <link href="../css/business-casual.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head>

<body >



    <?php
    include("cabecera.php");
    ?>

    <div class="container">
<center>
        <div class="row">
            <div class="box" style="width:500px;height:590px">


            <img src="../img/1448784664user-icon.png" width="150">
            <p id="profile-name" class="profile-name-card"></p>

               <br>
            <form method="POST" action="../controlador/validacion.php" class="form-signin">

                <span id="reauth-email" class="reauth-email"></span>

                 <i class="glyphicon glyphicon-user"></i> <label for="nombreusuario"><b> Numero de Documento</b></label>

            <input type="text" style="width:400px; height:40px" name="Documento"
               class="form-control" placeholder="Documento" required autofocus  >

               <br>

                 <i class="glyphicon glyphicon-lock"></i> <label for="nombreusuario"><b> Contraseña del Usuario</b></label>

            <input type="password" style="width:400px; height:40px" name="password" class="form-control" placeholder="Contraseña" required>

               <br>

               <div id="remember" class="checkbox">

                </div>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-sm" type="submit" class="botonlg" style="width:180px">Ingresar</button>
            </form>


            </a>

            <br>
            <a href="resgistrar.php"<button class="btn btn-lg btn-primary btn-block btn-sm" type="button" style="width:180px">Registrarse</button></a>

            </center>
            </div>
           </div>
          </div>
         </div>
        </div><!-- /card-container -->
    </div><!-- /container -->
  </center>


    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>


</body>

</html>
