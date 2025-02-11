<?php

  //CONEXION BASE DE DATOS//
  
  require("../modelo/connect_db.php");
  
  //CODIGO DE MODIFICACION DE PRODUCTOS//
  
  $mysql->query("update platos set nombre='$_REQUEST[nombre]'
  where id=$_REQUEST[id]") or
  die($mysql->error);
  $mysql->query("update platos set descripcion='$_REQUEST[descripcion]'
  where id=$_REQUEST[id]") or
  die($mysql->error);
  $mysql->query("update platos set imagen='$_REQUEST[imagen]'
  where id=$_REQUEST[id]") or
  die($mysql->error);
  $mysql->query("update platos set precio='$_REQUEST[precio]'
  where id=$_REQUEST[id]") or
  die($mysql->error); 
  $mysql->query("update platos set id_categoria='$_REQUEST[categorias]'
  where id=$_REQUEST[id]") or
  die($mysql->error);

  echo '<script>alert("SE HAN ACTUALIZADO LOS DATOS CORRECTAMENTE")</script> ';
  $mysql->close();
  header('Location:../vista/platos.php');
?>
