<?php
class Ciudad_model extends CI_Model {
	public function crear($nombre) {
		// Crea un nuevo bean Ciudad
		$c = R::dispense ( 'ciudad' );
		// Asgina al atributo nombre el valor del parámetro recibido
		$c->nombre = $nombre;
		// Guarda el bean en la BD
		R::store ( $c );
		R::close ();
	}
}
?>