<?php

//conexion
require_once '../modelo/conexionpoo.php';


class Categorias{
  //atributos
  public $codigo;
  public $nombre;
  public $db;

  //constructor//
  public function __construct ($nom){

      
      $this->nombre = $nom;
      $this->db=new Conexion();
	  
}//fin constructor
      //metodo

      function insertar(){

        

        $sql = "INSERT INTO `categorias_productos` (`nombre`) 
                VALUES ('$this->nombre')";
              
                 $this->db->query($sql);
                 
                  if($this->db->errno){

                 	die('<script language="javascript">alert("NO SE PUDO AÑADIR LA CATEGORIA CORRECTAMENTE");location.href="../vista/tablaproductos.php" </script>');
                 	
                 	
                 }else{
  					echo '<script language="javascript">alert("SE HA AÑADIDO LA CATEGORIA CORRECTAMENTE");';		           	
  					echo 'location.href ="../vista/tablaproductos.php"</script>';		
                 	

                 }


  }//FIN FUNCION insertar

  function desplegarCategoria(){

             $sql = "select * from categorias_productos";
              
                 $productos2=$this->db->query($sql);
                 
                      return $productos2;

  }
  }//FIN CLASE
  ?>