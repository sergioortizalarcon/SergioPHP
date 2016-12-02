<?php
class Lp_model extends CI_Model {
	public function crear($nombre) {
		$status = 0;
		if (! $this->existeLp ( $nombre )) {
			$lp = R::dispense ( 'lp' );
			$lp->nombre = $nombre;
			R::store ( $lp );
			R::close ();
		} else {
			$status = - 1;
		}
		return $status;
	}
	private function existeLp($nombre) {
		$res = R::findOne ( 'lp', 'nombre = ?', [ 
				$nombre 
		] );
		return $res;
	}
}
?>