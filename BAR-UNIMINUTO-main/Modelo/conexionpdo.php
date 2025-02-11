<?php
$usuario='root';
$contraseña='12345';
$host='localhost:3306';
$base='technology_dunk';

try {
		$conexion = new PDO('mysql:host='.$host.';dbname='.$base, $usuario, $contraseña);
	}
	catch (PDOException $e)
	{
		print "!Error¡: " . $e->getMessage() . "<br/>";
		die();
	}
?>
