<?php

   include 'class.categorias.php';

  $nom=$_POST['nombre'];

  	$categorias = new Categorias($nom);

	$categorias->insertar();



?>