<html lang="en">

    <?php
    session_start();
    if (@!$_SESSION['nombre']) {
        header("Location:login.php");
    }elseif ($_SESSION['rol']==1) {
        header("Location:login.php");
    }
    ?>

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
	<script type="text/javascript" src="../js/jquery.js"></script>

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

        <div class="row-fluid">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Nuestro
                        <strong>Menu</strong>
                    </h2>
                    <hr>
                </div>

	<?php
		include '../modelo/connect_db.php';

			$re=$mysql->query("SELECT * FROM `platos` WHERE id=".$_GET ['id'])
				or die($mysql->error);
		while ($f=$re->fetch_array()) {


		?>

			<center>
				<table>
					<td><img src="../productos/<?php echo $f['imagen'];?>" width="450"></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td><span><h1><?php echo $f['nombre'] ;?></h1></span>
                    <br>
					<span><h4>Descripcion: <?php echo $f['descripcion'] ;?></h4></span>

                    <!--<span><h4>Categoria: <?php //echo $f['categorias'] ;?></h4></span>-->

					<span><h3>Precio: $<?php echo $f['precio'];?></h3></span>
					Añardir a el carrito - <a href="carritodecompras.php?id=<?php  echo $f['id'];?>">  <span class="glyphicon glyphicon-shopping-cart"></a>
                    <br>
                    <br>
                    <center>
                    <input type="submit" value="volver" onClick="location.href='blogusuario.php'" class="btn btn-success btn-primary" style="width: 80px">
                    </center>
					</td>
				</table>
			</center>
            <br>
            <br>

	<?php
		}
	?>
    <div class="span8">
