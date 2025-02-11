<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
    header("Location:login.php");
}elseif ($_SESSION['rol']==2) {
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

    <title> Tabla Reservas </title>


    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <link href="../css/business-casual.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head>

<body >


    <?php
    require("cabeceraadmin.php");
    ?>

        <center>

        <div class="box" style="width:1100px;">
		<h4>Tabla de reservas</h4>
        <br>
		<div class="row-fluid">
        <?php

				require("../modelo/connect_db.php");

				include '../controlador/class.reserva.php';

				$query=Reserva::imprimirReservas("");



				echo "<table border='2'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>id</td>";
						echo "<td>documento</td>";
						echo "<td>fecha</td>";
						echo "<td>hora</td>";
						echo "<td>zonahoraria</td>";
						echo "<td>numero de personas mesa</td>";
						echo "<td>estado</td>";
						echo "<td>cancelar</td>";
						echo "<td>deshabilitar</td>";
						echo "<td>habilitar</td>";

					echo "</tr>";

			?>

            			<?php

				 while($arreglo=mysqli_fetch_array($query)){
				  	    echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
						echo "<td>$arreglo[3]</td>";
						echo "<td>$arreglo[4]</td>";
						echo "<td>$arreglo[5]</td>";
						echo "<td>$arreglo[6]</td>";





						echo "<td><a href='tablareservas.php?codigo=$arreglo[0]&codigoborrar=1'><img src='../img/eliminar.png' class='img-rounded'/></a></td>";

						echo "<td><a href='tablareservas.php?codigo=$arreglo[0]&codigoborrar=2'><img src='../img/habilitar.png' class='img-rounded'/></a></td>";


						echo "<td><a href='tablareservas.php?codigo=$arreglo[0]&codigohabilitar=2'><img src='../img/aceptar.png' class='img-rounded'/></a></td>";



					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$codigoborrar==1){
						$id=$_REQUEST[codigo];
					Reserva::eliminarReserva($id);

				}
					echo "</table>";

					extract($_GET);
					if(@$codigoborrar==2){
						$id=$_REQUEST[codigo];
					Reserva::cambiarEstado(0,$id);
				}

				echo "</table>";

					extract($_GET);
					if(@$codigohabilitar==2){

						$id=$_REQUEST[codigo];
					Reserva::cambiarEstado(1,$id);


				}


			?>


            <input type="submit" value="Ver tabla de mesas" onClick="location.href='tablamesa.php'" class="btn btn-lg btn-primary btn-block btn-sm" style="width: 220px">

		<div class="span8">

		</div>
		</div>
		<br/>

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




    <script src="../js/jquery.js"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
