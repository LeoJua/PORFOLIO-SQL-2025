<?php
//conexion
include_once '../modelo/conexionpoo.php';

class Reserva{
//atributos
	public $id;
  public $id_usuario;
	public $fecha;
	public $hora;
	public $zonahoraria;
	public $id_mesa;
	public $estado;
  public $db;


//constructor
	public function __construct($iduser, $fech, $hor, $zonah, $idm, $est){

$this->id;
$this->id_usuario = $iduser;
$this->fecha = $fech;
$this->hora = $hor;
$this->zonahoraria = $zonah;
$this->id_mesa = $idm;
$this->estado = $est;
$this->db=new Conexion();


	}

	function insertarReserva(){

		$sql = "INSERT INTO `reservas` (`id_usuario`, `fecha`, `hora`, `zonahoraria`, `id_mesa`, `estado`) 
                VALUES ('$this->id_usuario','$this->fecha','$this->hora','$this->zonahoraria', '$this->id_mesa', '$this->estado')";
              
                 $this->db->query($sql);
                 
                  if($this->db->errno){

                 	die('<script language="javascript">alert("NO SE PUDO RESERVAR");location.href="../vista/reservacionformulario.php" </script>');
                 	
                 	
                 }else{
  					echo '<script language="javascript">alert("SE RESERVO CORRECTAMENTE");';		           	
  					echo 'location.href ="../vista/reservacionusu.php"</script>';		
                 	

                 }
               
	}//FIN METODO INSERTAR RESERVA

  static function imprimirReservas($where){

          $db= new Conexion(); 
            $sql=("SELECT reservas.id,registro.Documento as id_usuario,reservas.fecha,reservas.hora,reservas.zonahoraria,mesa.numdepersonas as mesa,reservas.estado 
          FROM reservas
                    inner join registro on reservas.id_usuario=registro.codigo
                    INNER JOIN mesa on reservas.id_mesa=mesa.id $where");

              $datos=$db->query($sql);
              return $datos;


  }//FIN FUNCION imprimirProveedores


static function eliminarReserva($id){

  $db= new Conexion();


            $mensaje="RESERVA ELIMINADA CORRECTAMENTE";
            
          $borrar=("DELETE FROM reservas WHERE id=$id");
            $resborrar=$db->query($borrar);

          echo ' <script language="javascript">alert("'.$mensaje.'");</script> ';
            
          echo "<script>location.href='../vista/tablareservas.php'</script>";
        
}//FIN FUNCION eliminarReserva//

static function cambiarEstado($estado,$id){

  $db= new Conexion();

            $mensaje="ESTA RESERVA HA QUEDADO DESHABILITADA";
            if($estado==1){
              $mensaje="ESTA RESERVA HA QUEDADO HABILITADA";


            }

    
          $sqlborrar=("update reservas set estado='$estado' where id=$id");
          $datos=$db->query($sqlborrar);
          
          echo ' <script language="javascript">alert("'.$mensaje.'");</script> ';
            
          echo "<script>location.href='tablareservas.php'</script>";


}//FIN FUNCION CAMBIARESTADO//


}//cierre de clase




?>