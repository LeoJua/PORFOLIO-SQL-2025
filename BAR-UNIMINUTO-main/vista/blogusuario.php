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

    <title>MENU</title>
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


    <!-- Navigation -->

    <?php
    require("cabecerausu.php");
    ?>

<div class="container">
<div class="box">
<div class="row">
<hr>
<h2 class="intro-text text-center">Nuestro
<strong>Menu</strong>
</h2>
<hr>
</div>
</h2>

<center>
	<?php
		include '../modelo/connect_db.php';
		$re=$mysql->query("SELECT * FROM `platos` where estado=1")or
 		die($mysql->error);
		while ($f=$re->fetch_array()) {
	?>
		<div class="producto">
			<ul>
			<li>
				<a href="ventanadetalles.php?id=<?php  echo $f['id'];?>">
				<img src="../productos/<?php echo $f['imagen'];?>" width="200">
				</a>
			</li>
			</ul><br>
		</div>
	<?php
		}
	?>
</center>

</div>
                <div class="clearfix"></div>
            </div>
        </div>




    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
