<?php

//conexion
include '../modelo/conexionpoo.php';


class Plato{
  //atributos
  public $id;
  public $nombre;
  public $descripcion;
  public $imagen;
  public $precio;
  public $id_categoria;
  public $estado;
  public $db;

  //constructor//
  public function __construct ($nombre, $desc, $rutaDestino, $precio, $categorias, $estado){

      
      $this->nombre = $nombre;
      $this->descripcion = $desc;
      $this->imagen = $rutaDestino;
      $this->precio = $precio;
      $this->id_categoria = $categorias;
      $this->estado = $estado;
      $this->db=new Conexion();
	  
}//fin constructor
      //metodo

      function insertarPlatos(){

        

        $sql = "INSERT INTO `platos` (`nombre`, `descripcion`, `imagen`, `precio`, `id_categoria`, `estado`) 
                VALUES ('$this->nombre','$this->descripcion','$this->imagen','$this->precio', '$this->id_categoria', '$this->estado')";
              
                 $this->db->query($sql);
                 
                  if($this->db->errno){

                 	die('<script language="javascript">alert("NO SE AÑADIO EL PLATO");location.href="../vista/platos.php" </script>');
                 	
                 	
                 }else{
  					echo '<script language="javascript">alert("SE HA AÑADIDO EL PLATO CORRECTAMENTE");';		           	
  					echo 'location.href ="../vista/platos.php"</script>';		
                 	

                 }


  }//FIN FUNCION insertar

  static function imprimirPlatos($where){

          $db= new Conexion(); 
            $sql="SELECT platos.id, platos.nombre, platos.descripcion, platos.imagen, platos.precio, categorias_productos.nombre as categorias, platos.estado
          FROM platos
          INNER JOIN categorias_productos on platos.id_categoria=categorias_productos.codigo $where";

              $datos=$db->query($sql);
              return $datos;
              }//FIN CLASE//

  static function cambiarEstado($estado, $codigo){


            $db= new Conexion();

            $mensaje="ESTE PLATO HA QUEDADO DESHABILITADO";
            if($estado==1){
              $mensaje="ESTE PLATO HA QUEDADO HABILITADO";


            }

    
          $sqlborrar=("update platos set estado='$estado' where id=$codigo");
          $datos=$db->query($sqlborrar);
          
          echo ' <script language="javascript">alert("'.$mensaje.'");</script> ';
            
          echo "<script>location.href='platos.php'</script>";
        


  }//FIn metodo cambiarEstado//
  }
  ?>