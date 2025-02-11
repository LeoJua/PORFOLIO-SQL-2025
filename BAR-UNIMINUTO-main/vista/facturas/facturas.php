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

<title>Facturas</title>

	<?php
    require("../iconito.php");
    ?>

  <?php
	///// CONEXION A LA BASE DE DATOS /////////
	$usuario='root';
  $contraseña='';
  $host='localhost:33065';
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






    <link href="../../css/bootstrap.min.css" rel="stylesheet">


    <link href="../../css/business-casual.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head>

<body >

    <div class="brand">MEATS AND WINES</div>
    <div class="address-bar">Cra. 26 #521, Bogotá</div>


    <nav class="navbar navbar-default" role="navigation">

    <div class="container-fluid">
     <center>




		<div class="row-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
            </button>

            <a class="navbar-brand" href="index.php">MEATS AND WINES</a>
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
                  <a href="../pedidos/pedidos.php">Pedidos
                  </a>
                </li>

                <li>
                  <a href="../Reportes/reportes">
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
    <h4>Factura</h4>

    <div class="row-fluid">


          <?php


			$id=$_GET["id"];
      $numeroventass=$_GET['numeroventas'];


			$query=" SELECT com.Id,re.Documento, com.numeroventa, com.fecha, com.hora, com.id_producto, com.precio, com.cantidad, com.subtotal, com.id_usuario

					   FROM compras  com
					   INNER JOIN registro  re ON re.codigo= com.id_usuario WHERE re.Documento=$id and com.numeroventa=$numeroventass
					   ";
				$consulta=$conexion->query($query);
				$a=1;
				$documento="";
				$total=0;




			$idUsuario="";
      $numeroventas="";
				while ($fila=$consulta->fetch(PDO::FETCH_ASSOC))
					{
            $idUsuario=$fila['id_usuario'];
						$numeroventas=$fila['numeroventa'];

						$documento=$fila['Documento'];
						echo'
						<tr class=success>


						<br>
						NUMERO DE VENTA: <td>'.$fila['numeroventa'].'</td>
						<br>
						FECHA: <td>'.$fila['fecha'].'</td>
						<br>
						 HORA: <td>'.$fila['hora'].'</td>
						<br>
						------PRODUCTO PEDIDO------ <br><td>'.$fila['id_producto'].'</td>
						<br>
						PRECIO:<br> <td>'.$fila['precio'].'</td>
						<br>
						CANTIDAD:<br> <td>'.$fila['cantidad'].'</td>
						<br>
						SUBTOTAL: <td>'.$fila['subtotal'].'</td>
						<br>

						';
						$precio=$fila['subtotal'];


						$total+=$fila['subtotal'];
					}
					echo "<br>";

					echo "DOCUMENTO: <td>".$documento."</td></tr><BR>
							TOTAL: <td>".$total."</td></tr>";



          ?>
          <br>
          <br>

		  <a href="creaPDF1.php?id=<?php echo $idUsuario; ?>&&ventas=<?php echo $numeroventas; ?>" > <button>GENERAR FACTURA PDF</button></a>
            <br>

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


    <script src="../../js/jquery.js"></script>

    <script src="../../js/bootstrap.min.js"></script>

</body>

</html>
