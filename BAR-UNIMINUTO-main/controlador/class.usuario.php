
<?php

//conexion
include '../modelo/conexionpoo.php';


class Usuario{
  //atributos
  public $codigo;
  public $nombre;
  public $apellido;
  public $documento;
  public $password;
  public $fecha;
  public $genero;
  public $telefono;
  public $pasadmin;
  public $rol;
  public $db;

  //constructor//
  public function __construct ($nom, $ape, $doc, $pass, $fech, $gen, $tel ,$passad, $rol){

      $this->codigo;
      $this->nombre = $nom;
      $this->apellido = $ape;
      $this->documento = $doc;
      $this->password = $pass;
      $this->fecha = $fech;
      $this->genero = $gen;
      $this->telefono = $tel;
      $this->pasadmin = $passad;
      $this->rol = $rol;
      $this->db=new Conexion();
}
      //metodo

      function insertar(){

        $db = new Conexion();

        $sql = "INSERT INTO `registro` (`nombre`, `apellido`, `documento`, `password`, `fecha`, `genero`, `telefono`, `pasadmin`, `rol`) 
                VALUES ('$this->nombre','$this->apellido','$this->documento','$this->password', '$this->fecha', '$this->genero', '$this->telefono',
                 '', '2')";

                 $this->db->query($sql);
                 
                  if($this->db->errno){

                  die('<script language="javascript">alert("NO SE HA PODIDO REGISTRAR");location.href="../vista/login.php" </script>');
                  
                  
                 }else{
            echo '<script language="javascript">alert("SE HA REGISTRADO CORRECTAMENTE");';                
            echo 'location.href ="../vista/login.php"</script>';   
                  

                 }
                 


  }

  static function imprimirUsuarios($where){

          $db= new Conexion(); 
            $sql=("SELECT * FROM registro $where");

              $datos=$db->query($sql);
              return $datos;


  }//FIN FUNCION imprimirUsuarios
  
    static function cambiarEstado($rol, $codigo){


            $db= new Conexion();

            $mensaje="ESTE USUARIO HA QUEDADO DESHABILITADO";
            if($rol==1){
              $mensaje="ESTE USUARIO HA QUEDADO HABILITADO COMO ADMINISTRADOR";  
           }if($rol==2){
              $mensaje="ESTE USUARIO HA QUEDADO HABILITADO COMO USUARIO";
           }

    
          $sqlborrar=("update registro set rol='$rol' where codigo=$codigo");
          $datos=$db->query($sqlborrar);
          
          echo ' <script language="javascript">alert("'.$mensaje.'");</script> ';
            
          echo "<script>location.href='../vista/tablausuarios.php'</script>";
        
}//FIN FUNCION cambiarEstado usuarios

  function actualizarUsuarios($codigo){

    

      $this->db->query("update registro set nombre='$this->nombre', Apellido='$this->apellido', Documento='$this->documento',password='$this->password',fecha='$this->fecha',genero='$this->genero',telefono='$this->telefono',pasadmin='$this->pasadmin' WHERE codigo=$codigo");
          

          if($this->db->errno){
            die ('<script>alert("NO SE HAN ACTUALIZADO LOS DATOS CORRECTAMENTE");location.href="../vista/tablausuarios.php";</script>');
            
  }

  echo '<script>alert("SE HAN ACTUALIZADO LOS DATOS CORRECTAMENTE")</script> ';
  header('Location:../vista/tablausuarios.php');


  
  }





}//FIN CLASE
