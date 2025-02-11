<?php

  require("connect_db.php");
	  
            mysqli_query($mysql,"INSERT INTO platos(nombre,descripcion,precio,categorias,estado) values ('$_REQUEST[nombre]', '$_REQUEST[descripcion]', '$_REQUEST[precio]', '$_REQUEST[categorias]', '$_REQUEST[estado]' )")
			or die($mysql->error);
			
			if(!$mysql){
				
			  echo '<script>alert("SE HA AÑADIDO EL PLATO CORRECTAMENTE")</script> ';
			  header('Location:platos.php');
			
			}else{
			  
			  echo '<script>alert("NO SE PUDO AÑADIR EL PLATO CORRECTAMENTE")</script> ';
			  header('Location:platos.php');
			  
			}
			  	
            $mysql->close();
?>