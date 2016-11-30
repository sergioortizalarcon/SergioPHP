<?php
class Ciudad extends CI_Controller {
	public function crear() {
		// Muestra la vista de crear ciudad
		enmarcar ( $this, 'ciudad/crear' );
	}
	public function crearOK() {
		enmarcar ( $this, 'ciudad/crearOK' );
	}
	public function crearPost() {
		// Recoge los datos del post
		$nombre = $_POST ['nombre'];
		// Carga el modelo
		$this->load->model ( 'ciudad_model' );
		$this->ciudad_model->crear ( $nombre );
		header ( 'Location:' . base_url () . 'ciudad/crearOK' );
	}
}
?>