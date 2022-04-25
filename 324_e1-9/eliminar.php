<?php /*
    if(!isset($_GET['codigo'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("DELETE FROM persona where codigo = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
  */
  
	include 'conexion.php';
	
	$pdo = new Conexion();
	$sql = "DELETE FROM persona WHERE ci=:ci";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':ci', $_GET['ci']);
		$stmt->execute();
		header("Location: http://localhost/324_e1-9/index.php");
?>