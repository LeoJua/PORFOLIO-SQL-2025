
<?php

include 'class.usuario.php';

$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$doc= $_POST['documento'];
$pass = $_POST['password'];
$fech = $_POST['fecha'];
$gen = $_POST['genero'];
$tel = $_POST['telefono'];
/*
// Utilizamos el algoritmo de encriptacion BLOWFISH usando password_hash
que contiene este hash : algoritmo + opciones de algoritmo + sal (sal es el plus o el diferenciador para que ninguna clave quede igual a la otra)
+ hash 
*/
$pass_cifrado = password_hash($pass, PASSWORD_DEFAULT);
$usuario = new Usuario($nom, $ape, $doc, $pass_cifrado, $fech, $gen, $tel,"",2);

$usuario->insertar();
?>
