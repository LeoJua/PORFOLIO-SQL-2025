<!DOCTYPE html>

    <?php
    session_start();
    if (@!$_SESSION['nombre']) {
        header("Location:login.php");
    }elseif ($_SESSION['rol']==1) {
        header("Location:login.php");
    }
    ?>

<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<img src="./imagenes/logo.png" id="logo">
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
		
	<?php	
		include 'connect_db.php';
			
			$re=$mysql->query("SELECT * FROM `productos` WHERE id=".$_GET ['id'])
				or die($mysql->error);
		while ($f=$re->fetch_array()) {
			
			
		?>
			 
			<center>
				<img src="./productos/<?php echo $f['imagen'];?>" width="400"><br>
				<span><?php echo $f['nombre'];?></span><br>
				<span>Precio: <?php echo $f['precio'];?></span><br>
				<a href="carritodecompras.php?id=<?php  echo $f['id'];?>">Añadir al carrito de compras</a>
			</center>
		
	<?php
		}
	?>
		
		

		
	</section>
</body>
</html>