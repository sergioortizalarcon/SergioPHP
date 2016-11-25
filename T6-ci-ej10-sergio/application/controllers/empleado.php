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
	public function editar() {
		$id_empleado = $_POST['id_empleado'];
		
		$this->load->model ( 'ciudad_model' );
		$this->load->model ( 'lp_model' );
		$this->load->model ('empleado_model');
		
		$datos ['body'] ['ciudades'] = $this->ciudad_model->getTodas ();
		$datos ['body'] ['lps'] = $this->lp_model->getTodos ();
		$datos['body']['empleado'] = $this->empleado_model->getEmpleadoPorId($id_empleado);
		$datos['body']['id_lps'] = [];
		
		foreach ($datos['body']['empleado']->sharedLpList as $lp) {
			array_push($datos['body']['id_lps'],$lp->id);
		}
		enmarcar($this, 'empleado/editar',$datos);
	}
	
	public function editarPost() {
		$this->load->model ( 'empleado_model' );
		$id_empleado = $_POST['id_empleado'];
		$nombre = $_POST ['nombre'];
		$ape1 = $_POST ['ape1'];
		$ape2 = $_POST ['ape2'];
		$tlf = $_POST ['tlf'];
		$id_ciudad = $_POST ['idCiudad'];
		$ids_lp = isset ( $_POST ['idLP'] ) ? $_POST ['idLP'] : [ ];
		
		$this->empleado_model->editar( $id_empleado, $nombre, $ape1, $ape2, $tlf, $id_ciudad, $ids_lp );
		
		enmarcar ( $this, 'empleado/editarPost' );
	}
	
	public function listar() {
		$this->load->model ( 'empleado_model' );
		$datos['body']['empleados'] = $this->empleado_model->getTodos();
		enmarcar($this, 'empleado/listar',$datos);
	}
	public function borrar() {
		
	}
	public function borrarPost() {
		$id_empleado = $_POST['id_empleado'];
		$this->load->model('empleado_model');
		$this->empleado_model->borrarEmpleadoPorId($id_empleado);
		header('Location:'.base_url().'empleado/listar');
	}
}
?>