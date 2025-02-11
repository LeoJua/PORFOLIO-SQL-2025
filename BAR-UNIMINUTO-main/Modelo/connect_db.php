<?php
  //conectamos con el servidor
	 $mysql=new MySQLi("localhost:3306","root","12345","technology_dunk");
	 if ($mysql->connect_error)
	 die("Problemas con la conexión a la base de datos");
?>
