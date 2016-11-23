<?php
class Ciudad extends CI_Controller {
	public function crear() {
		enmarcar ( $this, 'ciudad/crear' );
	}
	public function crearOK() {
		enmarcar ( $this, 'ciudad/crearOK' );
	}
	public function crearERROR() {
		enmarcar ( $this, 'ciudad/crearERROR' );
	}
	public function crearPost() {
		// Cargar
		$this->load->model ( 'ciudad_model' );
		// Parámetros
		$nombre = $_POST ['nombre'];
		// Respuesta -> acción del model con parámetros
		$status = $this->ciudad_model->crear ( $nombre );
		
		if ($status >= 0) {
			header ( 'Location:' . base_url () . 'ciudad/crearOK' );
		} else {
			header ( 'Location:' . base_url () . 'ciudad/crearERROR' );
		}
	}
	public function modificar() {
		enmarcar ( $this, 'errors/custom/obras' );
	}
	public function borrar() {
		enmarcar ( $this, 'errors/custom/obras' );
	}
}
?>