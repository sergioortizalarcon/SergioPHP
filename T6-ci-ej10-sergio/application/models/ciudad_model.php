<?php
class Ciudad_model extends CI_Model {
	public function crear($nombre) {
		$status = 0;
		if (! $this->existeCiudad ( $nombre )) {
			$c = R::dispense ( 'ciudad' );
			$c->nombre = $nombre;
			R::store ( $c );
			R::close ();
		} else {
			$status = - 1;
		}
		return $status;
	}
	public function existeCiudad($nombre) {
		return R::findOne ( 'ciudad', 'nombre = ?', [ 
				$nombre 
		] ) != null ? true : false;
	}
	public function getTodas() {
		return R::findAll ( 'ciudad', 'order by nombre' );
	}
}
?>