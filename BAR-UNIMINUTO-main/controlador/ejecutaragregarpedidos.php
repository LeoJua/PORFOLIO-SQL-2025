<?php
session_start();

  require("connect_db.php");

class pedidos{

public $id;
public $fecha;
public $hora;
public $plato; 
public $vino;
public $mesa;
public $cantidad_platos;
public $cantidad_vinos;
public $costo; 


	public function pedidos(){
		

$this->id =  $_POST ['item_name_'];		
$this->fecha = $_POST['item_name_'];
$this->hora = $_POST ['int $timestamp = time()'];
$this->plato = $_POST ['item_name_= "SELECT nombre FROM pedidos WHERE "'];
$this->vino =  $_POST ['item_name_= "SELECT nombre FROM pedidos WHERE" '];
$this->mesa =  $_POST ['item_name_'];
$this->cantidad_platos = $_POST['quantity_'];
$this->cantidad_vinos = $_POST['quantity_'];
$this->costo = $_POST['amount_'];




	}
}
            mysqli_query($mysql,"INSERT INTO pedidos(id, fecha, hora, plato, vino, mesa, cantidad_platos, cantidad_vinos, costo) values ('', '$_REQUEST[fecha]','$_REQUEST[hora]','$_REQUEST[plato]','$_REQUEST[vino]','$_REQUEST[mesa]','$_REQUEST[cantidad_platos]','$_REQUEST[cantidad_vinos]','$_REQUEST[costo]')")
			or die($mysql->error);
			
			if(!$mysql){
				
			  echo '<script>alert("SE HA PEDIDO SU COMIDA CORRECTAMENTE")</script> ';
			  header ('Location:carritodecompras.php');
			  
			
			}else{
			  
			  echo '<script>alert("NO SE PUDO ADQUIRIR SU PEDIDO")</script> ';
			  header ('Location:carritodecompras.php');
			  
			}
			  	
            $mysql->close();
			?>