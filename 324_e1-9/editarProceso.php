<?php
  /*  print_r($_POST);
    if(!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $edad = $_POST['txtEdad'];
    $signo = $_POST['txtSigno'];

    $sentencia = $bd->prepare("UPDATE persona SET nombre = ?, edad = ?, signo = ? where codigo = ?;");
    $resultado = $sentencia->execute([$nombre, $edad, $signo, $codigo]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
	*/
	
	include 'conexion.php';
	
	$pdo = new Conexion();
	$sql = "UPDATE persona SET nombre_completo=:nombre, departamento=:dept, fecha_de_nacimiento=:fecha WHERE ci=:ci";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':nombre', $_POST['nombre']);
		$stmt->bindValue(':dept', $_POST['dept']);
		$stmt->bindValue(':fecha', $_POST['fecha']);
		$stmt->bindValue(':ci', $_POST['ci']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		//include 'tabla.php';
		header("Location: http://localhost/324_e1-9/index.php");
		exit;
    
?>