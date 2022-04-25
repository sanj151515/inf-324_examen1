<?php	
	include 'conexion.php';
	
	$pdo = new Conexion();
		$sql = "INSERT INTO persona (ci, nombre_completo, departamento, fecha_de_nacimiento) VALUES(:ci,:nombre, :dept, :fecha)";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':ci', $_POST['ci']);
		$stmt->bindValue(':nombre', $_POST['nombre']);
		$stmt->bindValue(':dept', $_POST['dept']);
		$stmt->bindValue(':fecha', $_POST['fecha']);
		$stmt->execute();
		$idPost = $pdo->lastInsertId(); 
		if($idPost)
		{
			header("HTTP/1.1 200 Ok");
			echo json_encode($idPost);
			//exit;
		}
		header("Location: http://localhost/324_e1-9/index.php");
		//include 'tabla.php';
?>