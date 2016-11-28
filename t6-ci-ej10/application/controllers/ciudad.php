<?php
class Ciudad extends CI_Controller {
	public function crear() {
		enmarcar($this,'ciudad/crear');
	}

	public function crearOK() {
		enmarcar($this,'ciudad/crearOK');
	}
	
	public function crearERROR() {
		enmarcar($this,'ciudad/crearERROR');
	}
	
	public function crearPost() {
		$nombre = $_POST['nombre'];
		$this->load->model('ciudad_model');
		$status = $this->ciudad_model->crear($nombre);
		if ($status>=0) {
			header('Location:'.base_url().'ciudad/crearOK');
		}
		else {
			header('Location:'.base_url().'ciudad/crearERROR');
		}
	}
	public function modificar() {
		enmarcar ( $this, 'errors/custom/obras' );
	}
	
	public function editar() {
		$this->load->model('ciudad_model');
		$id_ciudad = $_POST['id_ciudad'];
		$datos['body']['ciudad'] = $this->ciudad_model->getCiudadPorId($id_ciudad);
		enmarcar($this, 'ciudad/editar',$datos);
	}
	
	public function editarPost() {
		$nombre = $_POST['nombre'];
		$id_ciudad = $_POST['id_ciudad'];
	
		$this->load->model('ciudad_model');
		$this->ciudad_model->editar($id_ciudad,$nombre);
	
		header('Location:'.base_url('ciudad/listar'));
	}
	
	public function listar() {
		$this->load->model('ciudad_model');
		$datos['body']['ciudades'] = $this->ciudad_model->getTodas();
		enmarcar($this, 'ciudad/listar',$datos);
	}
	public function borrar() {
		enmarcar ( $this, 'errors/custom/obras' );
	}
	
	public function borrarPost() {
		$this->load->model('ciudad_model');
		$id_ciudad = $_POST['id_ciudad'];
		$this->ciudad_model->borrar($id_ciudad);
		header('Location:'.base_url().'ciudad/listar');
	}
}
?>