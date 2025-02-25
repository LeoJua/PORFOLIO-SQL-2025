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


	<?php
	///// CONEXION A LA BASE DE DATOS /////////
	$usuario='root';
  $contraseña='12345';
  $host='localhost:3306';
  $base='technology_dunk';

	try {
   		$conexion = new PDO('mysql:host='.$host.';dbname='.$base, $usuario, $contraseña);
	}
	catch (PDOException $e)
	{
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
	?>


   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Pedidos </title>


    <link href="../../css/bootstrap.min.css" rel="stylesheet">


    <link href="../../css/business-casual.css" rel="stylesheet">


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
                  <a href="pedidos.php">Pedidos
                  </a>
                </li>

                <li>
                  <a href="../Reportes/reportes.php">
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


      <center>

        <div class="box" style="width:1100px;">
		<h4>Tabla de compras</h4>
        <br>
		<div class="row-fluid">

        <br>



        	<table border='2'; class='table table-hover';>
            <tr class='warning'>
            <td>Id</td>
            <td>Documento</td>
            <td>Venta Numero</td>
			<td>fecha</td>
			<td>hora</td>

			<td>facturar</td>
			</tr>


        	<?php

				$query="SELECT com.Id, re.Documento, com.numeroventa, com.fecha, com.hora, com.id_producto, com.precio, com.cantidad, com.subtotal 
        FROM compras com 
        INNER JOIN registro re ON re.codigo = com.id_usuario 
        GROUP BY numeroventa, com.Id, re.Documento, com.numeroventa, com.fecha, com.hora, com.id_producto, com.precio, com.cantidad, com.subtotal;";
				$consulta=$conexion->query($query);
				$a=1;
				while ($fila=$consulta->fetch(PDO::FETCH_ASSOC))
					{

						echo'
						<tr class=success>
						<td>'.$a++.'</td>
						<td>'.$fila['Documento'].'</td>
						<td>'.$fila['numeroventa'].'</td>
						<td>'.$fila['fecha'].'</td>
						<td>'.$fila['hora'].'</td>


						<td><a href="../facturas/facturas.php?id='.$fila['Documento'].'&& numeroventas='.$fila['numeroventa'].'"><img src="../../img/factura.png" class="img-rounded"/></a></td>

						</tr>
						';
					}


			?>
            </table>


            <br>



            <input type="submit" value="Volver Arriba" onClick="location.href='pedidos.php'" class="btn btn-lg btn-primary btn-block btn-sm" style="width: 220px">

            <br>



		<div class="span8">

		</div>
		</div>
		<br/>


      </center>

      </div>

      </div>

      </div>


      <!-- notas sobre estado -->


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


    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>
