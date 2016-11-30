<?php
class Lp_model extends CI_Model {
	public function crear($nombre) {
		$status = 0;
		if (! $this->existeLp ( $nombre )) {
			$l = R::dispense ( 'lp' );
			$l->nombre = $nombre;
			R::store ( $l );
			R::close ();
		} else {
			$status = - 1;
		}
		return $status;
	}
	public function existeLp($nombre) {
		return R::findOne ( 'lp', 'nombre = ?', [ 
				$nombre 
		] ) != null ? true : false;
	}
	public function getTodos() {
		return R::findAll ( 'lp', 'order by nombre' );
	}
}
?>