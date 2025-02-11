<?php

include 'class.proveedor.php';

$nom = $_POST['nombre'];
$fech= date("y-m-d", time());
$direc= $_POST['direccion'];
$tele = $_POST['telefono'];
$ema = $_POST['email'];




$proveedor = new proveedor($nom, $fech, $direc, $tele, $ema,1);

$proveedor->insertar();
 

?>
