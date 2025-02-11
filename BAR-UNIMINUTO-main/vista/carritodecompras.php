<?php

	session_start();
	if (@!$_SESSION['nombre']) {
        header("Location:login.php");
    }elseif ($_SESSION['rol']==1) {
        header("Location:login.php");
    }

	include '../modelo/connect_db.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
					$arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$nombre="";
						$precio=0;
						$imagen="";
					$re=$mysql->query("SELECT * FROM `platos` WHERE id=".$_GET ['id'])
				or die($mysql->error);
		while ($f=$re->fetch_array()) {
							$nombre=$f['nombre'];
							$precio=$f['precio'];
							$imagen=$f['imagen'];
						}
						$datosNuevos=array('Id'=>$_GET['id'],
										'Nombre'=>$nombre,
										'Precio'=>$precio,
										'Imagen'=>$imagen,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

					}
		}

	}else{
		if(isset($_GET['id'])){
			$nombre="";
			$precio=0;
			$imagen="";

				$re=$mysql->query("SELECT * FROM `platos` WHERE id=".$_GET ['id'])
				or die($mysql->error);
		while ($f=$re->fetch_array()) {

				$nombre=$f['nombre'];
				$precio=$f['precio'];
				$imagen=$f['imagen'];
			}
			$arreglo[]=array('Id'=>$_GET['id'],
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Imagen'=>$imagen,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
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

    <title>CARRITO DE COMPRAS</title>
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
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">CARRITO de
                        <strong>COMPRAS</strong>
                    </h2>
                    <hr>
                </div>
		<?php
			$total=0;
			if(isset($_SESSION['carrito'])){
			$datos=$_SESSION['carrito'];

			$total=0;
			for($i=0;$i<count($datos);$i++){
		?>

				<div class="producto">
					<center>
						<jo>
						<ji>
            			<img src="../productos/<?php echo $datos[$i]['Imagen'];?>" width="300"><br></jo>
						</ji>
						<span><?php echo $datos[$i]['Nombre'];?></span><br>
						<span>Precio: $<?php echo $datos[$i]['Precio'];?></span><br>
						<span>Cantidad:
							<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
							data-precio="<?php echo $datos[$i]['Precio'];?>"
							data-id="<?php echo $datos[$i]['Id'];?>"
							class="cantidad">
						</span><br>
						<span class="subtotal">Subtotal: $<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>
						<a href="#" class="Eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a>
					</center>
				</div>

			<?php
				$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
			}

			}else{
				echo '<center><h2>No has añadido ningun producto</h2></center>';
			}
			echo '<center><h2 id="total">Total: $'.$total.'</h2></center>';
			if($total!=0){
					//echo '<center><a href="./compras/compras.php" class="aceptar">Comprar</a></center>';
			?>

				<form action="imprimecompra.php" method="post">

					<center><input type="submit" value="comprar" class="aceptar" style="width:200px"></center>

				</form>

			<?php
			}
			?>

                    <br>
                    <center>
                    <input type="submit" value="añadir mas productos" onClick="location.href='blogusuario.php'" class="btn btn-success btn-primary" style="width: 170px">
                    </center>



	</section>

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
