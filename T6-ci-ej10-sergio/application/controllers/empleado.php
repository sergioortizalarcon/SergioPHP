<?php
class Empleado extends CI_Controller {
	public function crear() {
		$this->load->model ( 'ciudad_model' );
		$this->load->model ( 'lp_model' );
		
		$datos ['body'] ['ciudades'] = $this->ciudad_model->getTodas ();
		$datos ['body'] ['lps'] = $this->lp_model->getTodos ();
		
		enmarcar ( $this, 'empleado/crear', $datos );
	}
}

?>