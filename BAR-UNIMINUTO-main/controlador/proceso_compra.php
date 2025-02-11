<?php
session_start();
include "../modelo/conexion_compras.php";
		$arreglo=$_SESSION['carrito'];
		$numeroventa=0;
		$re=mysql_query("select * from compras order by numeroventa DESC limit 1") or die(mysql_error());	
		while (	$f=mysql_fetch_array($re)) {
					$numeroventa=$f['numeroventa'];	
		}
		if($numeroventa==0){
			$numeroventa=1;
		}else{
			$numeroventa=$numeroventa+1;
		}
		for($i=0; $i<count($arreglo);$i++){
			mysql_query("insert into compras (id_usuario,numeroventa,fecha,hora,id_producto,precio,cantidad,subtotal) values(
				'$_SESSION[codigo]',
				".$numeroventa.",
				CURDATE(),
				NOW(),
				'".$arreglo[$i]['Nombre']."',	
				'".$arreglo[$i]['Precio']."',
				'".$arreglo[$i]['Cantidad']."',
				'".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
				)")or die(mysql_error());
		}
		unset($_SESSION['carrito']);
		header("Location: ../vista/panel_compras.php");

?>