<?php

include 'class.usuario.php';

$codigo=$_POST["codigo"];
$nom=$_POST["nombre"];
$ape=$_POST["Apellido"];
$doc=$_POST["Documento"];
$pass=$_POST["password"];
$fech=$_POST["fecha"];
$gen=$_POST["genero"];
$tel=$_POST["telefono"];
$passad=$_POST["pasadmin"];


  //CONEXION BASE DE DATOS//
  
  $usuario= new Usuario($nom, $ape, $doc, $pass, $fech, $gen, $tel, $passad, 2);

  $usuario->actualizarUsuarios($codigo);


  
?>
