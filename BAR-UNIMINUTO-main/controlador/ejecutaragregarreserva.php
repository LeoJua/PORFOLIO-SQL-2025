<?php

  include 'class.reserva.php';
  
session_start();
  
$iduser = $_SESSION['codigo'];
$fech = $_POST['fecha'];
$hor = $_POST['hora'];
$zonah= $_POST['zonahoraria'];
$idm = $_POST['mesa'];

$reserva = new Reserva($iduser, $fech, $hor, $zonah, $idm, 1);
$reserva->insertarReserva();



?>








