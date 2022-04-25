<?php include 'template/header.php' ?>
<div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <form class="p-4" method="POST" action="registrar.php">
					<div class="mb-3">
                        <label class="form-label">ci: </label>
                        <input type="number" class="form-control" name="ci" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre Completo: </label>
                        <input type="text" class="form-control" name="nombre" autofocus required>
                    </div>
                    <div class="mb-3">
<label for="select_1">Departamento:</label>
		<select class="form-control" name="dept" >
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
                    <div class="mb-3">
                        <label class="form-label">Fecha de Nacimiento: </label>
                        <input type="date" class="form-control" name="fecha" autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>

<?php include 'template/footer.php' ?>