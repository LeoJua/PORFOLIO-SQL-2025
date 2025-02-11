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

    <title>Tabla Usuarios</title>

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

        <div class="box" style="width:1200px;">
		<h4>Tabla de Usuarios</h4>
        <br>
		<div class="row-fluid">
        <?php

				require("../modelo/connect_db.php");

				include '../controlador/class.usuario.php';

				$query=Usuario::imprimirUsuarios("");

				echo "<table border='2'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Codigo</td>";
						echo "<td>Nombre</td>";
						echo "<td>Apellido</td>";
						echo "<td>Documento</td>";
						echo "<td>Password</td>";

						echo "<td>Fecha de Nacimiento</td>";
						echo "<td>Genero</td>";
						echo "<td>Telefono</td>";
						echo "<td>Password Admin</td>";
						echo "<td>Rol</td>";
						echo "<td>Editar</td>";
						echo "<td>Deshabilitar</td>";
						echo "<td>Administrador</td>";
						echo "<td>Usuario</td>";
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
						echo "<td>$arreglo[7]</td>";
						echo "<td>$arreglo[8]</td>";
						echo "<td>$arreglo[9]</td>";


				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='../img/actualizar.gif' class='img-rounded'/></a></td>";

						echo "<td><a href='tablausuarios.php?codigo=$arreglo[0]&codigoborrar=2'><img src='../img/eliminar.png' class='img-rounded'/></a></td>";
						echo "<td><a href='tablausuarios.php?codigo=$arreglo[0]&codigoadmin=2'><img src='../img/administrador.png' class='img-rounded'/></a></td>";
						echo "<td><a href='tablausuarios.php?codigo=$arreglo[0]&codigousu=2'><img src='../img/usuario.png' class='img-rounded'/></a></td>";

					echo "</tr>";

				}

				echo "</table>";

					extract($_GET);
					if(@$codigoborrar==2){
						$id=$_REQUEST[codigo];
					Usuario::cambiarEstado(0,$id);

				}

				echo "</table>";

					extract($_GET);
					if(@$codigoadmin==2){
						$id=$_REQUEST[codigo];
					Usuario::cambiarEstado(1,$id);

				}

				echo "</table>";

					extract($_GET);
					if(@$codigousu==2){
						$id=$_REQUEST[codigo];
					Usuario::cambiarEstado(2,$id);

				}

		?>

        <br>

		<div class="span8">

		</div>
		</div>
        </div>
        </center>
		<br>

            <!-- notas sobre roles -->

            <center>
            <div class="box" style="width:1200px;">
            <div class="row-fluid">

            <font size=3>Si el Rol de la persona es igual a "1" es un <font color="#00CC00">ADMINISTRADOR</font></font>

            <br>

            <br>

            <font size=3>Si el Rol de la persona es igual a "2" es un <font color="#0066FF">USUARIO</font></font>

            <br>

            <br>

            <font size=3>Si el Rol de la persona es igual a "0" esta <font color="#FF0000">DESHABILITADO</font></font>

            <br>

            <div class="span8">
            </div>
            </div>
            </div>



      </center>

      </div>

      </div>

      </div>

  


    <script src="../js/jquery.js"></script>

    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
