<?php if ($mensaje['nivel']=='ok'):?>
<span class="alert alert-success">
<?php else: ?>
<span class="alert alert-danger">
<?php endif;?>
<?= $mensaje['texto'] ?>
</span>