<?php

//conexion
require_once '../modelo/conexionpoo.php';


class Productos{
  //atributos
  public $codigo;
  public $nombre;
  public $codigo_categorias_productos;
  public $id_proveedores;
  public $cantidad;
  public $peso;
  public $medida;
  public $precio;
  public $estado;
  public $db;

  //constructor//
  public function __construct ($nom, $ccp, $idpro, $can, $pes, $med, $pre, $est){

      $this->codigo;
      $this->nombre = $nom;
      $this->codigo_categorias_productos = $ccp;
      $this->id_proveedores = $idpro;
      $this->cantidad = $can;
      $this->peso = $pes;
      $this->medida = $med;
      $this->precio = $pre;
      $this->estado = $est;
      $this->db=new Conexion();
	  
}//fin constructor
      //metodo

      function insertar(){

        

        $sql = "INSERT INTO `productos` (`nombre`, `codigo_categorias_productos`, `id_proveedores`, `cantidad`, `peso`, `medida`, `precio`, `estado`) 
                VALUES ('$this->nombre','$this->codigo_categorias_productos','$this->id_proveedores','$this->cantidad', '$this->peso', '$this->medida', '$this->precio', '$this->estado')";
              
                 $this->db->query($sql);
                 
                  if($this->db->errno){

                 	die('<script language="javascript">alert("NO SE PUDO AÑADIR EL PRODUCTO CORRECTAMENTE");location.href="../vista/tablaproductos.php" </script>');
                 	
                 	
                 }else{
  					echo '<script language="javascript">alert("SE HA AÑADIDO EL PRODUCTO CORRECTAMENTE");';		           	
  					echo 'location.href ="../vista/tablaproductos.php"</script>';		
                 	

                 }


  }//FIN FUNCION insertar

        static function imprimirProductos($where){

          $db= new Conexion(); 
            $sql="SELECT productos.codigo, productos.nombre,categorias_productos.nombre as nombrecategoria, 
              proveedores.nombre as nombreproveedor, productos.cantidad, productos.peso,
              productos.medida, productos.precio, productos.estado 

          FROM productos
          INNER JOIN categorias_productos on productos.codigo_categorias_productos=categorias_productos.codigo              
          INNER JOIN proveedores on productos.id_proveedores=proveedores.id $where";

              $datos=$db->query($sql);
              return $datos;


  }//FIN FUNCION imprimirProveedores

  static function cambiarEstado($estado, $codigo){


            $db= new Conexion();

            $mensaje="ESTE PRODUCTO HA QUEDADO DESHABILITADO";
            if($estado==1){
              $mensaje="ESTE PRODUCTO HA QUEDADO HABILITADO";


            }

    
          $sqlborrar=("update productos set estado='$estado' where codigo=$codigo");
          $datos=$db->query($sqlborrar);
          
          echo ' <script language="javascript">alert("'.$mensaje.'");</script> ';
            
          echo "<script>location.href='tablaproductos.php'</script>";
        


  }//FIn metodo cambiarEstado//

  public function actualizarProductos($codigo){

    

      $this->db->query("update productos set nombre='$this->nombre',codigo_categorias_productos='$this->codigo_categorias_productos',id_proveedores='$this->id_proveedores',cantidad='$this->cantidad',peso='$this->peso',medida='$this->medida',precio='$this->precio' WHERE codigo=$codigo");
          

          if($this->db->errno){
            die ('<script>alert("NO SE HAN ACTUALIZADO LOS DATOS CORRECTAMENTE");location.href="../vista/actualizarproductos.php";</script>');
            
  }

  echo '<script>alert("SE HAN ACTUALIZADO LOS DATOS CORRECTAMENTE")</script> ';
  header('Location:../vista/actualizarproductos.php');


  
  }//FIN METODO//

  static function actualizaejeProductos($codigo){



    $db= new Conexion(); 
            $sql=("SELECT * FROM productos WHERE codigo=('$_REQUEST[id]')");

              $datos=$db->query($sql);
              return $datos;


  }//FIN METODO//

}//fin clase