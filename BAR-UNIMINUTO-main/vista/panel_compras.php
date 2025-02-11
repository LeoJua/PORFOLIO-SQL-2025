 <?php
include "../modelo/conexion_compras.php";
?>
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

    <title>PANEL DE COMPRAS</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/scripts.js"></script>

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


    <?php
    require("cabecerausu.php");
    ?>

    <div class="container">

        <div class="row">
            <div class="box" style="width:1300px;">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">ULTIMAS
                        <strong>COMPRAS</strong>
                    </h2>
                    <hr>
                    <br>
                    <br>
                </div>

	<table border='2' class='table table-hover'>
		<tr class='warning'>
            <td>Tu ID De Usuario</td>
            <td>Fecha</td>
            <td>Hora</td>
			<td>Nombre Del Producto</td>
			<td>Precio</td>
			<td>Cantidad</td>
			<td>Subtotal</td>
		</tr>

		<?php
			$re=mysql_query("select * from compras where id_usuario='$_SESSION[codigo]'" );
			$numeroventa=0;
			while ($f=mysql_fetch_array($re)) {
					if($numeroventa	!=$f['numeroventa']){
						echo '<tr class="success"><td>Compra Número: '.$f['numeroventa'].' </td></tr>';
					}
					$numeroventa=$f['numeroventa'];
					echo '<tr class="success">
						<td>'.$f['id_usuario'].'</td>
						<td>'.$f['fecha'].'</td>
						<td>'.$f['hora'].'</td>
						<td>'.$f['id_producto'].'</td>
						<td>$ '.$f['precio'].'</td>
						<td>'.$f['cantidad'].'</td>
						<td>$ '.$f['subtotal'].'</td>

					</tr>';
			}
		?>
	</table>

</section>

</center>

</div>
                <div class="clearfix"></div>
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
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>
