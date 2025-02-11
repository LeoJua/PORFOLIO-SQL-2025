<?php

//conexion
include '../modelo/conexionpoo.php';


class Mesa{
  //atributos
  public $id;
  public $numdepersonas;
  public $ubicacion;
  public $estado;
  public $db;
  

  //constructor//
  public function __construct ($ndp, $ubi, $est){

      
      
      $this->numdepersonas = $ndp;
      $this->ubicacion = $ubi;
      $this->estado = $est;
      $this->db=new Conexion();
      
	  
}//fin constructor
      //metodo

      function insertar(){

        

        $sql = "INSERT INTO `mesa` (`numdepersonas`, `ubicacion`, `estado`) 
                VALUES ('$this->numdepersonas','$this->ubicacion','$this->estado')";
              
                 $this->db->query($sql);
                 
                  if($this->db->errno){

                 	die('<script language="javascript">alert("NO SE PUDO AÑADIR LA MESA CORRECTAMENTE");location.href="../vista/tablamesa.php" </script>');
                 	
                 	
                 }else{
  					echo '<script language="javascript">alert("SE HA AÑADIDO LA MESA CORRECTAMENTE");';		           	
  					echo 'location.href ="../vista/tablamesa.php"</script>';		
                 	

                 }


  }//FIN FUNCION insertar
  
  static function cambiarEstado($estado,$id){

  $db= new Conexion();

            $mensaje="ESTA MESA HA QUEDADO DESHABILITADA";
            if($estado==1){
              $mensaje="ESTA MESA HA QUEDADO HABILITADA";


            }

    
          $sqlborrar=("update mesa set estado='$estado' where id=$id");
          $datos=$db->query($sqlborrar);
          
          echo ' <script language="javascript">alert("'.$mensaje.'");</script> ';
            
          echo "<script>location.href='tablamesa.php'</script>";


}//FIN FUNCION insertar//


static function imprimirMesa($where){

          $db= new Conexion(); 
            $sql=("SELECT * FROM mesa");

              $datos=$db->query($sql);
              return $datos;
			  
  }
  
  }//FIN CLASE//


  ?>