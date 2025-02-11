<?php

  //CONEXION BASE DE DATOS//
  
  require("connect_db.php");
  
  //CODIGO DE MODIFICACION DE RESERVAS//
  
  $mysql->query("update productos set nombre='$_REQUEST[nombre]'
  where codigo=$_REQUEST[id]") or
  die($mysql->error);
  $mysql->query("update productos set categorias='$_REQUEST[mesa]'
  where codigo=$_REQUEST[id]") or
  die($mysql->error);
  $mysql->query("update productos set cantidad='$_REQUEST[plato]'
  where codigo=$_REQUEST[id]") or
  die($mysql->error);
  $mysql->query("update productos set peso='$_REQUEST[fecha]'
  where codigo=$_REQUEST[id]") or
  die($mysql->error);
  $mysql->query("update productos set precio='$_REQUEST[hora]'
  where codigo=$_REQUEST[id]") or
  die($mysql->error); 

  echo '<script>alert("SE HAN ACTUALIZADO LOS DATOS CORRECTAMENTE")</script> ';
  $mysql->close();
  header('Location:reservacionusu.php');
?>
