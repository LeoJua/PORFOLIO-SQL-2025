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

    <title>Tabla Platos</title>


    <link href="../css/bootstrap.min.css" rel="stylesheet">

   
    <link href="../css/business-casual.css" rel="stylesheet">

   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head> 

<body >

    <div class="brand">MEATS AND WINES</div>
    <div class="address-bar">Cra. 26 #521, Bogotá</div>

    <?php
    require("cabeceraadmin.php");
    ?>
                    
        <center>              	
    
        <div class="box" style="width:1000px;">
		<h4>Tabla de platos</h4>
        <br>
		<div class="row-fluid">
        <?php

				require("../modelo/connect_db.php");
				include '../controlador/class.platos.php';

				$query=Plato::imprimirPlatos("");

				echo "<table border='2'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Codigo</td>";
						echo "<td>Nombre</td>";
						echo "<td>Descripcion</td>";
						echo "<td>Imagen</td>";
						echo "<td>Precio</td>";
						echo "<td>Categoria</td>";
						echo "<td>Estado</td>";
						echo "<td>Editar</td>";
						echo "<td>Deshabilitar</td>";
						echo "<td>Habilitar</td>";
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
						

						
						
					    //AGREGAR PRODUCTOS//
				    	echo "<td><a href='editarplatos.php?id=$arreglo[0]'><img src='../img/actualizar.gif' class='img-rounded'/></a></td>";


						
						echo "<td><a href='platos.php?codigo=$arreglo[0]&codigoborrar=2'><img src='../img/eliminar.png' class='img-rounded'/></a></td>";
						
						
						echo "<td><a href='platos.php?codigo=$arreglo[0]&codigohabilitar=2'><img src='../img/aceptar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$codigoborrar==2){
						$id=$_REQUEST[codigo];
					Plato::cambiarEstado(0,$id);
				}

				echo "</table>";

					extract($_GET);
					if(@$codigohabilitar==2){

						$id=$_REQUEST[codigo];
					Plato::cambiarEstado(1,$id);
		
					
				}
                      
			?>
            
             <br>
            
            <br>
            
            <input type="submit" value="Agregar Plato" onClick="location.href='agregarplatos.php'" class="btn btn-lg btn-primary btn-block btn-sm" style="width: 220px">           
            
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		
  
      
    
      </center>
      
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

</html></strong>