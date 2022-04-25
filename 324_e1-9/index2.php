<?php
	/*
		Web Service RESTful en PHP con MySQL (CRUD)
		Marko Robles
		Códigos de Programación
	*/
	include 'conexion.php';
	
	$pdo = new Conexion();
	
	//Listar registros y consultar registro
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		if(isset($_GET['ci']))
		{
			$sql = $pdo->prepare("SELECT * FROM persona WHERE ci=:ci");
			//$sql = $pdo->prepare("SELECT * FROM persona");
			$sql->bindValue(':ci', $_GET['ci']);
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 hay datos");
			$fila =$sql->fetchAll();
			//echo $fila->ci;
			foreach ($fila as $filita) {
				echo $filita['ci'] . '<br>';
				echo $filita['nombre_completo'] . '<br>';
				echo $filita['departamento'] . '<br>';
				echo $filita['fecha_de_nacimiento'] . '<br>';
			}
			//echo $sql->fbsql_fetch_array[0];
			exit;				
			
			} else {
			
			$sql = $pdo->prepare("SELECT * FROM persona");
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 hay datos");
//$fila=json_encode($sql->fetchAll());
			$fila=$sql->fetchAll();
			include 'tabla.php';
			/*
			foreach ($fila as $filita) {
				echo $filita['ci'] . '<br>';
				echo $filita['nombre_completo'] . '<br>';
				echo $filita['departamento'] . '<br>';
				echo $filita['fecha_de_nacimiento'] . '<br>';
			}*/
			exit;		
		}
	}
	
	//Insertar registro
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$sql = "INSERT INTO contactos (nombre, telefono, email) VALUES(:nombre, :telefono, :email)";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':nombre', $_POST['nombre']);
		$stmt->bindValue(':telefono', $_POST['telefono']);
		$stmt->bindValue(':email', $_POST['email']);
		$stmt->execute();
		$idPost = $pdo->lastInsertId(); 
		if($idPost)
		{
			header("HTTP/1.1 200 Ok");
			echo json_encode($idPost);
			exit;
		}
	}
	
	//Actualizar registro
	if($_SERVER['REQUEST_METHOD'] == 'PUT')
	{		
		$sql = "UPDATE contactos SET nombre=:nombre, telefono=:telefono, email=:email WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':nombre', $_GET['nombre']);
		$stmt->bindValue(':telefono', $_GET['telefono']);
		$stmt->bindValue(':email', $_GET['email']);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
	}
	
	//Eliminar registro
	if($_SERVER['REQUEST_METHOD'] == 'DELETE')
	{
		$sql = "DELETE FROM contactos WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
	}
	
	//Si no corresponde a ninguna opción anterior
	header("HTTP/1.1 400 Bad Request");
?>