<?php

include 'class.productos.php';

$nom = $_POST['nombre'];
$ccp = $_POST['categorias'];
$idpro = $_POST['proveedor'];
$can = $_POST['cantidad'];
$pes = $_POST['peso'];
$med = $_POST['medida'];
$pre = $_POST['precio'];


$productos = new Productos($nom, $ccp, $idpro, $can, $pes, $med, $pre, 1);

$productos->insertar();


  ?>