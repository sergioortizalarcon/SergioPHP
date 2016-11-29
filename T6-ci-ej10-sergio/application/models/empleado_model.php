<?php
class Empleado_model extends CI_Model {
	public function crear($nombre, $ape1, $ape2, $tlf, $id_ciudad, $ids_lp) {
		$empleado = R::dispense ( 'empleado' );
		$empleado->nombre = $nombre;
		$empleado->ape1 = $ape1;
		$empleado->ape2 = $ape2;
		$empleado->tlf = $tlf;
		
		$ciudad = R::load ( 'ciudad', $id_ciudad );
		
		$ciudad->xownEmpleadolist [] = $empleado;
		
		foreach ( $ids_lp as $id_lp ) {
			$empleado->sharedLpList [] = R::load ( 'lp', $id_lp );
		}
		R::store ( $ciudad );
		R::close ();
	}
}

?>