<?php include 'template/header.php' ?>
<?php
    include 'conexion.php';
	
	$pdo = new Conexion();
	$sql = $pdo->prepare("select ci, nombre_completo, (
			case departamento  
			when '01' then 'Chuquisaca'
			when '02' then 'La Paz'
        when '03' then 'Cochabamba'
        when '04' then 'Oruro'
        when '05' then 'Potosi'
        when '06' then 'Tarija'
        when '07' then 'Santa Cruz'
		when '08' then 'Beni'
		when '09' then 'Pando'
        else 'otro'
        end)as departamento, fecha_de_nacimiento from persona");
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			$fila=$sql->fetchAll();
			header("HTTP/1.1 200 hay datos");
	
?>

			<div class="card-header">
                    Lista de personas
                </div>
                <div class="p-4">
				 <form class="p-1" method="POST" action="ingresar.php">
				<input type="submit" class="btn btn-success" value="Registrar"></form>
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">ci</th>
                                <th scope="col">Nombre completo</th>
                                <th scope="col">Departamento</th>
                                <th scope="col">Fecha de nacimiento</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($fila as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato['ci']; ?></td>
                                <td><?php echo $dato['nombre_completo']; ?></td>
                                <td><?php echo $dato['departamento']; ?></td>
                                <td><?php echo $dato['fecha_de_nacimiento']; ?></td>
                                <td><a class="text-success" href="modificar.php?ci=<?php echo $dato['ci']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?ci=<?php echo $dato['ci']; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
<?php include 'template/footer.php' ?>