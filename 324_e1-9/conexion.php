<?php
	/*
		Clase de conexión a MySQL con PDO
		Marko Robles
		Códigos de Programación
	*/
	class Conexion extends PDO
	{
		private $hostBd = 'localhost';
		private $nombreBd = 'mydb_alvaronogales';
		private $usuarioBd = 'alvaro';
		private $passwordBd = '123456';
		
		public function __construct()
		{
			try{
				parent::__construct('mysql:host=' . $this->hostBd . ';port=3307;dbname=' . $this->nombreBd . ';charset=utf8', $this->usuarioBd, $this->passwordBd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				
				} catch(PDOException $e){
				echo 'Error: ' . $e->getMessage();
				exit;
			}
		}
	}
?>