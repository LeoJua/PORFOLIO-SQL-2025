<!doctype html>
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

    <title> Actualizar </title>


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
    
		<div class="box" style="width:700px;">	
		<h4>Edición de usuarios</h4>
        <br>
		<div class="row-fluid">



		<?php
		//CONEXION BASE DE DATOS//
        require("../modelo/connect_db.php");

        $registro=$mysql->query("SELECT codigo,nombre,Apellido,Documento,password,fecha,genero,telefono,pasadmin FROM registro WHERE codigo=('$_REQUEST[id]')") or
        die($mysql->error);
        if ($reg=$registro->fetch_array())
        {
        ?>



		<form method="post" action="../controlador/ejecutaactualizar.php">
				<input type="text" name="codigo" value= "<?php echo $reg['codigo'];
?>" hidden readonly >
				<input type="hidden" name="nombre" value="<?php echo $reg['nombre'];
?>">
				<input type="hidden" name="Apellido" value="<?php echo $reg['Apellido'];
?>"><br><br>
				<STRONG>Documento: <br></STRONG><input type="text" name="Documento" value="<?php echo $reg['Documento'];
?>"><br><br>
				<STRONG>Password: <br></STRONG><input type="text" name="password" value="<?php echo $reg['password'];
?>"><br><br>
                <legend><b>Fecha de Nacimiento :<br></b></strong></legend><input type="date" name="fecha" value="<?php echo $reg['fecha'];
?>"><br><br>
                <STRONG>Genero: <br></STRONG><select name="genero" value="<?php echo $reg['genero'];               
?>">
      <option  value="Mujer" >Mujer</option>
      <option  value="Hombre" >Hombre</option>
      </select> 
    <br><br>
                <STRONG>Telefono: <br></STRONG><input type="telefono" id="telefono" name="telefono" max="10" min="10" value="<?php echo $reg['telefono'];
?>"><br><br>
                <STRONG>Password Admin: <br></STRONG><input type="text" name="pasadmin" value="<?php echo $reg['pasadmin'];
?>" ><br><br>
				

     </select>
 <input type="submit" title="Confirmar" name="submit" button class="btn btn-lg btn-primary btn-block btn-sm"  style="width:110px" required>
 <br>
 <br>
 <input type="submit" value="volver" onClick="location.href='tablausuarios.php'" class="btn btn-success btn-primary" style="width: 80px">
 </form>
 <?php
 }
 else
 echo 'ERROR DE PROCESAMIENTO, NO SE HAN ACTUALIZADO LOS DATOS';
 $mysql->close();
 ?>

		
		
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

    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>    


</body>

</html>