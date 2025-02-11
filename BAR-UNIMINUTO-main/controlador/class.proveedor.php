<?php

//conexion
require_once '../modelo/conexionpoo.php';


class proveedor{
  //atributos
  public $id;
  public $nombre;
  public $fecha;
  public $direccion;
  public $telefono;
  public $email;
  public $estado;
  public $db;

  //constructor//
  public function __construct ($nom, $fech, $direc, $tele, $ema, $esta){

      
      $this->nombre = $nom;
      $this->fecha = $fech;
      $this->direccion = $direc;
      $this->telefono = $tele;
      $this->email = $ema;
      $this->estado = $esta;
      $this->db=new Conexion();
	  
}//fin constructor
      //metodo

      function insertar(){

        

        $sql = "INSERT INTO `proveedores` (`nombre`, `fecha`, `direccion`, `telefono`, `email`, `estado`) 
                VALUES ('$this->nombre','$this->fecha','$this->direccion','$this->telefono', '$this->email', '$this->estado')";
              
                 $this->db->query($sql);
                 
                  if($this->db->errno){

                 	die('<script language="javascript">alert("NO SE PUDO AÑADIR EL PROVEEDOR CORRECTAMENTE");location.href="../vista/tablaproveedores.php" </script>');
                 	
                 	
                 }else{
  					echo '<script language="javascript">alert("SE HA AÑADIDO EL PROVEEDOR CORRECTAMENTE");';		           	
  					echo 'location.href ="../vista/tablaproveedores.php"</script>';		
                 	

                 }


  }//FIN FUNCION insertar

  static function imprimirProveedores($where){

          $db= new Conexion(); 
            $sql=("SELECT * FROM proveedores $where");

              $datos=$db->query($sql);
              return $datos;


  }//FIN FUNCION imprimirProveedores

  static function cambiarEstado($estado, $codigo){


            $db= new Conexion();

            $mensaje="ESTE PROVEEDOR HA QUEDADO DESHABILITADO";
            if($estado==1){
              $mensaje="ESTE PROVEEDOR HA QUEDADO HABILITADO";


            }

    
          $sqlborrar=("update proveedores set estado='$estado' where id=$codigo");
          $datos=$db->query($sqlborrar);
          
          echo ' <script language="javascript">alert("'.$mensaje.'");</script> ';
            
          echo "<script>location.href='tablaproveedores.php'</script>";
        





  }//FIn metodo cambiarEstado//

  function actualizarProveedor($id){

    

      $this->db->query("update proveedores set nombre='$this->nombre',direccion='$this->direccion',telefono='$this->telefono',email='$this->email' WHERE id=$id");
          

          if($this->db->errno){
            die ('<script>alert("NO SE HAN ACTUALIZADO LOS DATOS CORRECTAMENTE");location.href="../vista/tablaproveedores.php";</script>');
            
  }

  echo '<script>alert("SE HAN ACTUALIZADO LOS DATOS CORRECTAMENTE")</script> ';
  header('Location:../vista/tablaproveedores.php');


  
  }//FIN METODO//

  function desplegarProveedor(){


             $sql = "select id,nombre from proveedores";
              
                 $productos3=$this->db->query($sql);
                 
                      return $productos3;



  }//FIN METODO//

  }//FIN CLASE