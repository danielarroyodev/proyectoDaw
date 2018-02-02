<div class="container">
	<form action="<?= base_url() ?>empleado/crearPost" method="post">
		<fieldset>
			<legend>Datos del Empleado</legend>
			<label for="idNombre">Nombre</label>
			<input class="form-control" type="text" id="idNombre" name="nombre" />
			<label for="idNombre">Apellido 1</label>
			<input class="form-control" type="text" id="ape1" name="ape1" />
			<label for="idNombre">Apellido 2</label>
			<input class="form-control" type="text" id="ape2" name="ape2" />
			<label for="idNombre">Contraseña</label>
			<input class="form-control" type="password" id="pwd" name="pwd" />
			
			<label for="idNombre">Ciudad nacimiento</label>
			<select class="">
			<?php foreach ($body['ciudades'] as $ciudad): ?>
  				<option value="<?= $ciudad->id ?>" name="ciudad" id="ciudad"><?= $ciudad->nombre ?></option>
				<?php endforeach;?>
			</select><br/>
			<?php foreach ($body['lps'] as $lenguaje):?>
				<input type="checkbox" name="lenguajes[]" value="<?=$lenguaje->id ?>"> <?=$lenguaje->nombre ?><br>
				<?php endforeach;?>
			<input class="btn btn-default" type="submit">
		</fieldset>
	</form>
</div>