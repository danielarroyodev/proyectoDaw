<div class="container">
	<table class="table table-striped">
		<tr>
			<th>Lenguaje de programacion</th>
			<th>Accion</th>
		</tr>
		
		<?php foreach ($body['lp'] as $lenguaje): ?>
			<tr>
				<td><?= $lenguaje->nombre ?></td>
				<td>
					<form action="<?=base_url() ?>lp/editar" method="post">
					<input type="hidden" name="idlp" id="id" value="<?= $lenguaje->id ?>">
					<button class="glyphicon glyphicon-pencil" type="submit"></button></form>
					<form action="<?=base_url() ?>lp/borrar" method="post">
					<input type="hidden" name="idlp" id="id" value="<?= $lenguaje->id ?>">
					<button class="glyphicon glyphicon-remove" type="submit"></button></form>
				</td>
			</tr>
		<?php endforeach;?>
	</table>
</div>