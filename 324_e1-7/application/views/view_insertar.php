<?php
include 'header/header.php';
?>

<form action="<?= base_url()?>index.php/lectura/insertado_persona" method="post" >
  <div class="form-group">
    <label >CI</label>
    <input type="number" class="form-control" name="cip" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nombre completo</label>
    <input type="text" class="form-control" name="nomp" >
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">fecha de nacimiento</label>
    <input type="date" class="form-control" name="fechap" >
  </div>
   <div class="form-group">
    <label for="select_1">Departamento:</label>
		<select class="form-control" name="depp" name="thenumbers">
			<option value="01">CHUQUISACA</option>
			<option value="02">LA PAZ</option>
			<option value="03">COCHABAMBA</option>
			<option value="04">ORURO</option>
			<option value="05">POTOSÍ</option>
			<option value="06">TARIJA</option>
			<option value="07">SANTA CRUZ</option>
			<option value="08">BENI</option>
			<option value="09">PANDO</option>
		</select>
  </div>
  <input type="submit" class="btn btn-primary" name="save" value="Insertar"></button>
</form>
<form action="<?php echo base_url()."index.php/lectura"?>" method="post" ><input type="submit" class="btn btn-secundary" value="Pagina Principal"></button></form>
<?php
include 'footer/footer.php';
?>