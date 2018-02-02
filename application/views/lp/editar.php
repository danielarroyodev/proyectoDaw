<div class="container">
<form action="<?=base_url() ?>lp/editarPost" method="post">
	<input type="text" name="nombre">
	<input type="hidden" name="idlp" id="id" value="<?= $id?>">
	<input type="submit">
</form>
</div>