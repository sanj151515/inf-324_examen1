<?php
include 'header/header.php';
?>

<form action="<?= base_url()?>index.php/lectura/eliminado_persona" method="post" >
  <div class="form-group">
    <label >CI</label>
    <input type="number" class="form-control" name="cip" aria-describedby="emailHelp" value=<?php isset($_GET["id"]) ? print $_GET["id"] : ""; ?>>
  </div>
  
  <input type="submit" class="btn btn-primary" value="Eliminar"></button>
</form>
<form action="<?php echo base_url()."index.php/lectura"?>" method="post" ><input type="submit" class="btn btn-secundary" value="Pagina Principal"></button></form>
<?php
include 'footer/footer.php';
?>