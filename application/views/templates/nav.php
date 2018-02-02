<nav class="container navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="<?=base_url()?>">CRUD emple</a>
	</div>
	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Acciones<span class="caret"></span></a>

				<ul class="dropdown-menu">
					<li class="dropdown-header">CIUDAD</li>
					<li><a href="<?=base_url()?>ciudad/crear">Nueva</a></li>
					<li><a href="<?=base_url()?>ciudad/listar">Listar</a></li>

					<li role="separator" class="divider"></li>

					<li class="dropdown-header">Leng.prog.</li>
					<li><a href="<?=base_url()?>lp/crear">Nuevo</a></li>
					<li><a href="<?=base_url()?>lp/listar">Listar</a></li>
					
					<li role="separator" class="divider"></li>

					<li class="dropdown-header">Empleado</li>
					<li><a href="<?=base_url()?>empleado/crear">Nuevo</a></li>
					<li><a href="<?=base_url()?>empleado/listar">Listar</a></li>


				</ul>
				
			</li>

			<!-- M�s men�s -->

		</ul>
	</div>
</nav>
