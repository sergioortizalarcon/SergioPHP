<?php
class Ciudad extends CI_Controller {
	public function crear() {
		enmarcar ( $this, 'ciudad/crear' );
	}
	public function crearPost() {
		$nombre = $_POST ['nombre'];
		$this->load->model ( 'ciudad_model' );
		$status = $this->ciudad_model->crear ( $nombre );
		
		if ($status >= 0) {
			header ( 'Location:' . base_url () . 'ciudad/crearOK' );
		} else {
			header ( 'Location:' . base_url () . 'ciudad/crearERROR' );
		}
	}
	public function crearOK() {
		enmarcar ( $this, 'ciudad/crearOK' );
	}
	public function crearERROR() {
		enmarcar ( $this, 'ciudad/crearERROR' );
	}
}
?>