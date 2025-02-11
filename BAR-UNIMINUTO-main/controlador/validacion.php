<?php
session_start();

require("../modelo/connect_db.php");

$Documento=$_POST['Documento'];
$password=$_POST['password'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	
	//validacion para administradores//
	
	$sql2=mysqli_query($mysql,"SELECT * FROM registro WHERE Documento='$Documento'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($password==$f2['pasadmin']){
			$_SESSION['codigo']=$f2['codigo'];
			$_SESSION['nombre']=$f2['nombre'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='../inicioadmin.php'</script>";
		
		}
	}

    //validacion para usuarios//

	$sql=mysqli_query($mysql,"SELECT * FROM registro WHERE Documento='$Documento'");
	if($f=mysqli_fetch_assoc($sql)){
		    if($password==$f['password']){
			$_SESSION['codigo']=$f['codigo'];
			$_SESSION['nombre']=$f['nombre'];
			$_SESSION['rol']=$f['rol'];
			
			echo '<script>alert("BIENVENIDO USUARIO")</script> ';
			echo "<script>location.href='../iniciousu.php'</script>";		

		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='../vista/login.php'</script>";
		}
		
		}else{
			
			echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
			
			echo "<script>location.href='../vista/login.php'</script>";	

		}
	
?>
