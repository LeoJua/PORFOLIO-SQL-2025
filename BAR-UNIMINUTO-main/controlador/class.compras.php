<?php

//conexion
require_once '../modelo/conexionpoo.php';


class Compras{
  //atributos
  public $id;
  public $id_usuario;
  public $numeroventa;
  public $fecha;
  public $hora;
  public $id_producto;
  public $precio;
  public $cantidad;
  public $subtotal;
  public $db;

  //constructor//
  public function __construct ($idusu,$numventa,$fech,$hor, $idpro,$pre,$can,$subt){

      $this->id;
      $this->id_usuario = $idusu;
      $this->numeroventa = $numventa;
      $this->fecha = $fech;
      $this->hora = $hor;
      $this->id_producto = $idpro;
      $this->precio = $pre;
      $this->cantidad = $can;
      $this->subtotal = $subt;
      $this->db=new Conexion();
	  
}//fin constructor

        function insertar(){

          $sql = "INSERT INTO `compras` (`id_usuario`, `numeroventa`, `fecha`, `hora`, `id_producto`, `precio`, `cantidad`, `subtotal`) 
                VALUES ('$this->id_usuario','$this->numeroventa','$this->fecha','$this->hora', '$this->id_producto', '$this->precio', '$this->cantidad', '$this->subtotal')";
              
                 $this->db->query($sql);
                 
                  if($this->db->errno){

                  die('<script language="javascript">alert("NO SE PUDO AÑADIRLA COMPRA CORRECTAMENTE");location.href="../vista/blogusuario.php" </script>');
                  
                  
                 }else{
            echo '<script language="javascript">alert("SE HA AÑADIDO LA COMPRA CORRECTAMENTE");';               
            echo 'location.href ="../vista/blogusuario.php"</script>';   
                  

                 }

    }
}//fin clase