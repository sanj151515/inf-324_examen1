<?php
include 'header/header.php';
?>

<form action="<?= base_url()?>index.php/lectura/modificando_persona" method="post" >
  <div class="form-group">
    <label for="exampleInputPassword1">CI</label>
    <input type="text" class="form-control" name="cip" value="<?php echo $fila[0]->ci;?>" readonly>	
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nombre completo</label>
    <input type="text" class="form-control" name="nomp" value="<?php echo $fila[0]->nombre_completo;?>">	
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">fecha de nacimiento</label>
    <input type="date" class="form-control" name="fechap" value="<?php echo $fila[0]->fecha_de_nacimiento;?>">
  </div>
   <div class="form-group">
     <label for="select_1">Departamento:</label>
	 <?php $depar=$fila[0]->departamento;?>
	 
		<select class="form-control" name="depp">
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
  <input type="submit" class="btn btn-primary" name="save" value="Guardar cambios"></button>
</form>
<form action="<?php echo base_url()."index.php/lectura"?>" method="post" ><input type="submit" class="btn btn-secundary" value="Pagina Principal"></button></form>

<?php
include 'footer/footer.php';
?>
