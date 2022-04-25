<?php
include 'header/header.php';
?>

<div id="container">

	<div id="body">
	
	<table>
		
	<div class="card-header">
                    Lista de personas
                </div>
                <div class="p-4">
				 <form class="p-1" method="POST" action="<?php echo base_url()."index.php/lectura/insertar_persona"?>">
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
                                foreach($filas as $fila){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $fila->ci; ?></td>
                                <td><?php echo $fila->nombre_completo; ?></td>
                                <td><?php echo $fila->departamento; ?></td>
                                <td><?php echo $fila->fecha_de_nacimiento; ?></td>
                                <td><a class="text-success" href=<?php echo base_url()."index.php/lectura/modificar_persona?cip=".$fila->ci; ?> ><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href=<?php echo base_url()."index.php/lectura/eliminado_persona?cip=".$fila->ci; ?>><i class="bi bi-trash"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
	<?php
	/*
		//print_r($filas);
		foreach ($filas as $fila)
		{
			//$local=base_url().index.php/lectura/eliminar_persona;
			echo "<tr>";
			echo "<td>$fila->ci</td>";
			echo "<td>$fila->nombre_completo</td>";
			echo "<td>$fila->fecha_de_nacimiento</td>";
			echo "<td>$fila->departamento </td>";
			echo "<td><a href='".base_url()."index.php/lectura/modificar_persona?cip=$fila->ci"."'>Modificar</a> </td>";
			echo "<td><a href='".base_url()."index.php/lectura/eliminar_persona?id=$fila->ci"."'>Eliminar</a> </td>";
			//echo "<td><form action=';$local;' method="post"><input type="submit" class="btn btn-primary" value="Eliminar"></button></form></td>";
			echo "</tr>";
			//echo $fila->id." ".$fila->nombrecompleto."<br>";
		}
	*/ ?>
	</table>
	</div>
</div>

<?php
include 'footer/footer.php';
?>