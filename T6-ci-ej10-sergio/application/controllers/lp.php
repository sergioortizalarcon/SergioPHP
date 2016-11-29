<?php
class Lp extends CI_Controller {
	public function crear() {
		enmarcar ( $this, 'lp/crear' );
	}
	public function crearPost() {
		$nombre = $_POST ['nombre'];
		$this->load->model ( 'lp_model' );
		$status = $this->lp_model->crear ( $nombre );
		
		if ($status >= 0) {
			header ( 'Location:' . base_url () . 'lp/crearOK' );
		} else {
			header ( 'Location:' . base_url () . 'lp/crearERROR;¡' );
		}
	}
	public function crearOK() {
		enmarcar ( $this, 'lp/crearOK' );
	}
	public function crearERROR() {
		enmarcar ( $this, 'lp/crearERROR' );
	}
	public function listar() {
		$this->load->model ( 'lp_model' );
		$datos ['body'] ['lp'] = $this->lp_model->getTodos ();
		enmarcar ( $this, 'lp/listar', $datos );
	}
}
?>