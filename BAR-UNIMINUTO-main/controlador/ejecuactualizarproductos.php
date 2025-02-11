<?php

  //CONEXION BASE DE DATOS//
  
  require("../modelo/connect_db.php");
  
  //CODIGO DE MODIFICACION DE PRODUCTOS//
  
    $sql="update productos set nombre='$_REQUEST[nombre]', codigo_categorias_productos='$_REQUEST[categorias]', id_proveedores='$_REQUEST[proveedor]',cantidad='$_REQUEST[cantidad]', peso='$_REQUEST[peso]', precio='$_REQUEST[precio]',  medida='$_REQUEST[medida]'  where codigo=$_REQUEST[codigo] ";
  
   $mysql->query($sql)or
  die($mysql->error);
  
  /*$mysql->query("update productos set nombre='$_REQUEST[nombre]'
  where codigo=$_REQUEST[codigo]") or
  die($mysql->error);
  $mysql->query("update productos set categorias='$_REQUEST[categorias]'
  where codigo=$_REQUEST[codigo]") or
  die($mysql->error);
  $mysql->query("update productos set proveedor='$_REQUEST[proveedor]'
  where codigo=$_REQUEST[codigo]") or
  die($mysql->error);
  $mysql->query("update productos set cantidad='$_REQUEST[cantidad]'
  where codigo=$_REQUEST[codigo]") or
  die($mysql->error);
  $mysql->query("update productos set peso='$_REQUEST[peso]'
  where codigo=$_REQUEST[codigo]") or
  die($mysql->error);
  $mysql->query("update productos set medida='$_REQUEST[medida]'
  where codigo=$_REQUEST[codigo]") or
  die($mysql->error);
  $mysql->query("update productos set precio='$_REQUEST[precio]'
  where codigo=$_REQUEST[codigo]") or
  die($mysql->error);*/ 

  echo '<script>alert("SE HAN ACTUALIZADO LOS DATOS CORRECTAMENTE")</script> ';
  $mysql->close();
  header('Location:../vista/tablaproductos.php');
?>
