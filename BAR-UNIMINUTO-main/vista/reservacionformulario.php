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

    <title>Formulario Reservacion</title>

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
    

    <center>              
      <div class="box" style="width:390px">
      <h4>Hacer Una Reservacion</h4>
      <br>
      <center>
      <img src="../img/reservar2.png" width="150">
      </center>
      <br>
      <br>
      <div class="row-fluid">
    
          <form method="post" action="../controlador/ejecutaragregarreserva.php">
         <?php
          //------------ CODIGO PARA COLOCAR UNA TABLA DE FECHAS SELECCIONABLES ------------//
          ?>
           
          <STRONG>Fecha<br></STRONG>
          
        
          <input type="date" name="fecha" id="fecha" min=<?php $hoy=date("Y-m-d"); echo $hoy;?> required><br>
          (Fecha que quiera reservar)
          
          <br>



          <?php

          //------------ CODIGO PARA COLOCAR UNA TABLA DE HORAS SELECCIONABLES ------------//
          ?>
          
          
          <STRONG>Hora<br></STRONG>
          
      
          
           <input type="time" name="hora" id="hora" value="00:00:00" max="12:00:00"  step="1" required><br>
           (hora que desea reservar)

          <br>



          <?php
          //------------ CODIGO PARA UNA ZONA HORARIA ------------//
          ?>


          <STRONG>Zona Horaria</STRONG><br>

          <select name="zonahoraria" id="zonahoraria" >

            <option value="AM"> AM </option>
            <option value="PM"> PM </option>


          </select>

          <br>
          (Horario que desea reservar)
          <br>



          
          
          <STRONG>Mesa </STRONG><br><select name="mesa" id="mesa" >
			 <?php
             //CONEXION BASE DE DATOS//
			 
			 require("../modelo/connect_db.php");

             $productos=$mysql->query("select id,numdepersonas from mesa") or
             die($mysql->error);
             while ($reg=$productos->fetch_array())
             {
             echo "<option value=\"".$reg['id']."\">".$reg['numdepersonas']."</option>";
             }
             ?>
          </select>
          <br>
          
          (mesa para numero de personas)
          
          
          <br>
          
          <br>
         
          
          <input type="submit" title="enviar" name="submit" onClick="location.href='reservacionformulario.php'" button class="btn btn-lg btn-primary btn-block btn-sm" style="width:110px" required>
             	
          <br>
             
         
             
          <input type="submit" value="volver" onClick="location.href='reservacionusu.php'" class="btn btn-success btn-primary" style="width: 80px">
             
          </form>         
          
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
    
        
        <script src="../js/jquery.js"></script>
    
        <script src="../js/bootstrap.min.js"></script>

</body>

</html>