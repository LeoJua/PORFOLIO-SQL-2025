<!DOCTYPE html>
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

    <title>Consultar Reservas</title>


    <link href="../css/bootstrap.min.css" rel="stylesheet">

   
    <link href="../css/business-casual.css" rel="stylesheet">

   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head> 

<body >

    <div class="brand">MEATS AND WINES</div>
    <div class="address-bar">Cra. 26 #521, Bogotá</div>

        <?php
		require("cabecerausu.php");
		?>
                    
        <center>              	
    
        <div class="box" style="width:1100px;">
		<h4>Tabla de reservas</h4>
        <br>
		<div class="row-fluid">
        
        
        <?php
                //conexion base de datos//
				///// CONEXION A LA BASE DE DATOS /////////
	$usuario='root';
	$contraseña='';
	$host='localhost';
	$base='technology_dunk';

	try {
   		$conexion = new PDO('mysql:host='.$host.';dbname='.$base, $usuario, $contraseña);
	} 
	catch (PDOException $e) 
	{
	    print "¡Error!: " . $e->getMessage() . "<br/>";
	    die();
	}

	////////////////////////////////////////////////




	if(isset($_GET["id"])){
		$id=$_GET["id"];
		


		$del =$conexion->prepare('DELETE FROM reservas WHERE id='.$id);
	$del->execute();


/* Devolver el número de filas que fueron eliminadas */
	if($del->rowCount()>0){
			echo ' <script language="javascript">alert("ESTA RESERVA SE HA CANCELADO CORRECTAMENTE");</script> ';
			echo "<script>location.href='tablareservasusu.php'</script>";
		}else{
			echo ' <script language="javascript">alert("ESTA RESERVA NO SE HA CANCELADO CORRECTAMENTE");</script> ';
			echo "<script>location.href='tablareservasusu.php'</script>";
		}








	}

	////////////////////////////////////////////////////////////////////////
				
				$query="SELECT re.id,reg.Documento, re.fecha, re.hora, re.zonahoraria, mesa.numdepersonas as mesa
							  
					   FROM reservas re
					   INNER JOIN registro  reg ON reg.codigo= re.id_usuario
					   INNER JOIN mesa on re.id_mesa=mesa.id
					    WHERE nombre='$_SESSION[nombre]'
					   ";
				$consulta=$conexion->query($query);
				
				while ($fila=$consulta->fetch(PDO::FETCH_ASSOC))
					{

						
						echo "<table border='2'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Documento</td>";
						echo "<td>Fecha</td>";
						echo "<td>Hora</td>";
						echo "<td>Zonahoraria</td>";
						echo "<td>Mesa</td>";
						echo "<td>cancelar</td>";
						
					echo "</tr>";

						echo'
						<tr class=success>
						<td>'.$fila['id'].'</td>
						<td>'.$fila['Documento'].'</td>
						<td>'.$fila['fecha'].'</td>
						<td>'.$fila['hora'].'</td>
						<td>'.$fila['zonahoraria'].'</td>
						<td>'.$fila['mesa'].'</td>
						
						
						<td><a href="tablareservasusu.php?id='.$fila['id'].'"><img src="../img/eliminar.png" class="img-rounded"/></a></td>
						
						</tr>
						</table>
						';
					}
			

				    	//CODIGO PARA ELIMINACION MEDIANTE IMAGEN//
						




			?>
			

			
            
            <br>
            <br>
             <input type="button" value="volver" onClick="location.href='reservacionusu.php'" class="btn btn-success btn-primary" style="width: 80px">
				
           
            
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

</html>