<?php
class emple_model extends CI_Model {
	public function create_emple($nombre, $ape1, $ape2, $pwd, $ciudad, $lenguajes) {
		$empleado = R::findOne('empleado','nombre=?',[$nombre]);
		if ($empleado == null)  {
			$emple = R::dispense ( 'empleado' );
			$emple -> nombre = $nombre;
			$emple -> pwd = $pwd;
			$emple -> ape1 = $ape1;
			$emple -> ape2 = $ape2;
			$c =  R::load('ciudad', $ciudad);
			$emple -> ownCiudadList[] = $c;
			foreach ($lenguajes as $lenguaje){
				$lp = R::load('lp', $lenguaje);
				$emple -> sharedLpList[] = $lp;
			}
			R::store($emple);
		}
		else {
			throw new Exception("empleado duplicada");
		}
		R::close();
	}
	
	public function getAll() {
		return  R::findAll('empleado','order by nombre');
	}
}
?>