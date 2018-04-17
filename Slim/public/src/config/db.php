<?php

class db 
{
		
	private $servidor = "localhost";
	private $usuario = "root";
	private $password = "";
	private $bd = "tienda";

	public function conectar() {
		
		try {
			$conexion = new PDO("mysql:host=$this->servidor;dbname=$this->bd",$this->usuario,$this->password);
//			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$conexion->exec("set name utf8");
			
			return $conexion;
			
		}
		catch (PDOException $e)
		{
			echo $e->getMessage();
			
		}
		
	}
	
}
	
?>
