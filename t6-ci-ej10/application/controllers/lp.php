<?php
class Lp extends CI_Controller {
	public function crear() {
		enmarcar($this,'lp/crear');
	}

	public function crearOK() {
		enmarcar($this,'lp/crearOK');
	}
	
	public function crearERROR() {
		enmarcar($this,'lp/crearERROR');
	}
	
	public function crearPost() {
		$nombre = $_POST['nombre'];
		$this->load->model('lp_model');
		$status = $this->lp_model->crear($nombre);
		if ($status>=0) {
			header('Location:'.base_url().'lp/crearOK');
		}
		else {
			header('Location:'.base_url().'lp/crearERROR');
		}
	}
	public function editar() {
		$this->load->model('lp_model');
		$id_lp = $_POST['id_lp'];
		$datos['body']['lp'] = $this->lp_model->getLpPorId($id_lp);
		enmarcar($this, 'lp/editar',$datos);
	}
	
	public function editarPost() {
		$nombre = $_POST['nombre'];
		$id_lp = $_POST['id_lp'];
		
		$this->load->model('lp_model');
		$this->lp_model->editar($id_lp,$nombre);
		
	// 		enmarcar($this, 'lp/editarOK');
		header('Location:'.base_url('lp/listar'));
	}
	
	public function listar() {
		$this->load->model('lp_model');
		$datos['body']['lps'] = $this->lp_model->getTodos();
		enmarcar($this, 'lp/listar',$datos);
	}
	public function borrar() {
		enmarcar ( $this, 'errors/custom/obras' );
	}
}
?>