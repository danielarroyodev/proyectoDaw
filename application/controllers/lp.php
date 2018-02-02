<?php
class lp extends CI_Controller {
	public function crear() {
		enmarcar($this, 'lp/crearGET');
	}
	
	public function crearPost() {
		$this->load->model('lp_model');
		
		$nombre_lp = isset($_POST['lp']) ? $_POST['lp'] : null;
		
		try {
			$this -> lp_model -> create_lp($nombre_lp);
			$datos['mensaje']['texto'] = "Lenguaje $nombre_lp creado correctamente";
			$datos['mensaje']['nivel'] = 'ok';
		}
		catch (Exception $e) {
			$datos['mensaje']['texto'] = "Lenguaje $nombre_lp duplicado";
			$datos['mensaje']['nivel'] = 'error';
		}
		$this->load->view('lp/mostrar_mensaje',$datos);
	}
	
	public function listar() {
		$this->load->model('lp_model');
		$datos['body']['lp'] = $this->lp_model->getAll();
		enmarcar($this, 'lp/listar',$datos);
	}
	public function borrar(){
		$id = $_POST['idlp'];
		$this->load->model('lp_model');
		$this->lp_model->borrar($id);
		$this->listar();
	}
	public function editar(){
		$id['id'] = $_POST['idlp'];
		enmarcar($this, "lp/editar", $id);
	}
	public function editarPost(){
		$id = $_POST['idlp'];
		$nombre = $_POST['nombre'];
		$this ->load->model('lp_model');
		$this->lp_model->editar($id,$nombre);
		$this->listar();
	}
}
?>