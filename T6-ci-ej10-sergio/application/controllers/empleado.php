<?php
class Empleado extends CI_Controller {
	public function crear() {
		$this->load->model ( 'ciudad_model' );
		$this->load->model ( 'lp_model' );
		
		$datos ['body'] ['ciudades'] = $this->ciudad_model->getTodas ();
		$datos ['body'] ['lps'] = $this->lp_model->getTodos ();
		
		enmarcar ( $this, 'empleado/crear', $datos );
	}
	public function crearPost() {
		$this->load->model ( 'empleado_model' );
		$nombre = $_POST ['nombre'];
		$ape1 = $_POST ['ape1'];
		$ape2 = $_POST ['ape2'];
		$tlf = $_POST ['tlf'];
		$id_ciudad = $_POST ['idCiudad'];
		$ids_lp = isset ( $_POST ['idLP'] ) ? $_POST ['idLP'] : [ ];
		
		$this->empleado_model->crear ( $nombre, $ape1, $ape2, $tlf, $id_ciudad, $ids_lp );
		
		enmarcar ( $this, 'empleado/crearPost' );
	}
}

?>