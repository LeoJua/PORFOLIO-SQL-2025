<?php

include 'class.mesa.php';

$ndp = $_POST['numdepersonas'];
$ubi= $_POST['ubicacion'];



$mesa = new Mesa($ndp, $ubi, 1);

$mesa->insertar();
 

?>
