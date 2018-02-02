<?php
class empleado extends CI_Controller {
	public function crear() {		
		$this->load->model ( 'lp_model' );
		$datos['body']['lps'] = $this->lp_model->getAll();
		$this->load->model ( 'ciudad_model' );
		$datos['body']['ciudades'] = $this->ciudad_model->getAll();
		enmarcar ( $this, 'emple/crearGET', $datos);
	}
	public function crearPost() {
		$this->load->model ( 'emple_model' );		
		$nombre = isset ( $_POST ['nombre'] ) ? $_POST ['nombre'] : null;
		$ape1 = isset ( $_POST ['ape1'] ) ? $_POST ['ape1'] : null;
		$ape2 = isset ( $_POST ['ape2'] ) ? $_POST ['ape2'] : null;
		$pwd = isset ( $_POST ['pwd'] ) ? $_POST ['pwd'] : null;
		$ciudad = isset ( $_POST ['ciudad'] ) ? $_POST ['ciudad'] : null;
		$lenguajes= isset ( $_POST ['lenguaje'] ) ? $_POST ['lenguaje'] : [];
		try {
			$this->emple_model->create_emple ( $nombre, $ape1, $ape2, $pwd, $ciudad, $lenguajes );
			header ( 'Location:' . base_url () . 'emple/crearPOSTok?emple=' . $nombre);
		} catch ( Exception $e ) {
			header ( 'Location:' . base_url () . 'emple/crearPOSTerror?emple=' . $nombre );
		}
	}
	public function crearPOSTok() {
		$datos ['body'] ['emple'] = $_GET ['emple'];
		enmarcar ( $this, 'emple/crearPOSTok', $datos );
	}
	public function crearPOSTerror() {
		$datos ['body'] ['emple'] = $_GET ['emple'];
		enmarcar ( $this, 'emple/crearPOSTerror', $datos );
	}
	public function listar() {
		$this->load->model ( 'emple_model' );
		$datos ['body'] ['emple'] = $this->emple_model->getAll ();
		enmarcar ( $this, 'emple/listar', $datos );
	}
	
}
?>