<?php
require_once 'utilBD.php';
function insertar($productos) {
	$bd = conectarMySql ();
	
	$sentencia = <<< SQL
	insert into producto(nombre,precio)
	values (:n,:p)
SQL;
	$preparada = $bd->prepare ( $sentencia );
	
	foreach ( $productos as $producto ) {
		$nombre = $producto [0];
		$precio = $producto [1];
		$preparada->execute ( [ 
				':p' => $precio,
				':n' => $nombre 
		] );
	}
	$bd = null;
}
function listaProductos() {
	$bd = conectarMySql ();
	$sentencia = <<<SQL
	select * from producto
SQL;
	$productos = $bd->query ( $sentencia );
	$bd = null;
	return $productos;
}
?>