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
	private function existeCiudad($nombre) {
		$res = R::findOne ( 'ciudad', 'nombre = ?', [ 
				$nombre 
		] ) != null ? true : false;
		return $res;
	}
}
?>