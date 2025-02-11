<?php
class Conexion extends mysqli{
	private $DB_HOST = 'localhost:3306';
	private $DB_USER = 'root';
	private $DB_PASS = '12345';
	private $DB_NAME = 'technology_dunk';
	public function __construct(){
		parent:: __construct($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);
		$this->set_charset('utf-8');
		$this->connect_errno ? die('Error en la conexion'. mysqli_connect_errno()) : $m = 'Conectado ;D';
		//echo $m;
	}
}
?>
