<?php
ini_set('display_errors','off');
ini_set('display_startup_errors','off');
error_reporting(0);

	$server="localhost:33065";
	$username="root";
	$password="";
	$db='technology_dunk';
	$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysql_select_db($db,$con)or die("la base de datos no existe");
?>
