<?php include 'template/header.php' ?>

<?php
include 'conexion.php';
	
	$pdo = new Conexion();
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
			/*$filita = $sql->fetch(PDO::FETCH_OBJ);
			echo $filita;
			*/
			$aci;$anom;$adept;$afecha;
			foreach ($fila as $filita) {
				$aci= $filita['ci'];
				$anom= $filita['nombre_completo'];
				$adept= $filita['departamento'];
				$afecha= $filita['fecha_de_nacimiento'];
			}
			//echo $sql->fbsql_fetch_array[0];
			//exit;				
			
	} 
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">CI: </label>
                        <input type="number" class="form-control" name="ci" required 
                        value="<?php echo $aci; ?>" readonly>
                    </div>
					<div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre" required 
                        value="<?php echo $anom; ?>">
                    </div>
                    <div class="mb-3">
					<?php $depar=$adept;?>
	 <label for="select_1">Departamento:</label>
		<select class="form-control" name="dept">
			<option <?php if($depar=="01") {echo "selected";}?> value="01">CHUQUISACA</option>
			<option <?php if($depar=="02") {echo "selected";}?> value="02">LA PAZ</option>
			<option <?php if($depar=="03") {echo "selected";}?> value="03">COCHABAMBA</option>
			<option <?php if($depar=="04") {echo "selected";}?> value="04">ORURO</option>
			<option <?php if($depar=="05") {echo "selected";}?> value="05">POTOSÍ</option>
			<option <?php if($depar=="06") {echo "selected";}?> value="06">TARIJA</option>
			<option <?php if($depar=="07") {echo "selected";}?> value="07">SANTA CRUZ</option>
			<option <?php if($depar=="08") {echo "selected";}?> value="08">BENI</option>
			<option <?php if($depar=="09") {echo "selected";}?> value="09">PANDO</option>
		</select>
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de Nacimiento: </label>
                        <input type="date" class="form-control" name="fecha" autofocus required
                        value="<?php echo $afecha; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $aci; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>