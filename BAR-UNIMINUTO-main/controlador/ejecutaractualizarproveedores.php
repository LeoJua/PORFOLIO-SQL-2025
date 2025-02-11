<?php

require_once 'class.proveedor.php';

$nom=$_POST["nombre"];
$fech=$_POST["fecha"];
$direc=$_POST["direccion"];
$tele=$_POST["telefono"];
$ema=$_POST["email"];
$id=$_POST["id"];
  //CONEXION BASE DE DATOS//
  
  $proveedor= new proveedor($nom, $fech, $direc, $tele, $ema, 1);

  $proveedor->actualizarProveedor($id);


  
?>
