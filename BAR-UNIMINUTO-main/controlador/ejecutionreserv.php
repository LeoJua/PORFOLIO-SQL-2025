<?php

class Reservas{

public $fecha;
public $hora;
public $mesa;
	
public function Reservas(){

$this->fecha = $_POST['fecha'];
$this->hora = $_POST['hora'];
$this->mesa = $_POST['mesa'];
}

}



?>
<?php

  require("connect_db.php");
	  
       $checkdocumento=mysqli_query($mysql,"SELECT * FROM 'reservas' WHERE Documento='$documento'");
	$check_Documento=mysqli_num_rows($checkdocumento);
		if($password==$password1)
			if($check_Documento>0){
			echo ' <script language="javascript">alert("Atencion, ya existe el documento designado para un usuario, verifique sus datos");</script> ';
			echo "<script>location.href='login.php'</script>";
			}else{
			echo ' <script language="javascript">alert("TUS CONTRASEÑAS SON CORRECTAS");</script> ';
			}else{
			echo ' <script language="javascript">alert("TUS CONTRASEÑAS NO COINCIDEN");</script> ';
			echo "<script>location.href='login.php'</script>";
			}
			
            mysqli_query($mysql,"INSERT INTO reservas(fecha,hora,mesa) values ('$_REQUEST[fecha]', '$_REQUEST[hora]', '$_REQUEST[mesa]'")
			or die($mysql->error);
			
			if(!$mysql){
				
			echo ' <script language="javascript">alert("reserva  CON EXITO");</script> ';
						
			}
				
			else{
			
			echo ' <script language="javascript">alert("USUARIO REGISTRADO CON EXITO");</script> ';
			
			}	

	$mysql->close();

?>
