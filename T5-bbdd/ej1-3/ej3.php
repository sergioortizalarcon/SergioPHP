<?php
require_once 'ej1.php';
session_start ();

if (isset ( $_POST ['accion'] )) {
	if ($_POST ['accion'] == 'Preparar') {
		// Guardar lo que viene vía POST en una variable de sesión
		if (isset ( $_POST ['nombre'] ) && isset ( $_POST ['precio'] )) {
			$nombre = $_POST ['nombre'];
			$precio = $_POST ['precio'];
			array_push ( $_SESSION ['preparados'], [ 
					$nombre,
					$precio 
			] );
		} else {
			$_SESSION ['preparados'] = [ 
					[ 
							$nombre,
							$precio 
					] 
			];
		}
	} elseif ($_POST ['accion'] == 'Guardar') {
		$preparados = isset ( $_SESSION ['preparados'] ) ? $_SESSION ['preparados'] : null;
		insertar ( $preparados );
		$_SESSION ['preparados'] = [ ];
	}
}

echo <<<HTML
<form action="ej3.php" method="post">
	Nombre<input type="text" name="nombre"><br/>
	Precio<input type="text" name="precio"><br/>
	<input type="submit" value="Guardar" name="accion"><input type="submit" value="Preparar" name="accion"><br/>
</form>

<h3>Productos en stock</h3>
<table>
<tr><th>PRODUCTO</th><th>PRECIO</th></tr>

HTML;

$productos = listaProductos ();
foreach ( $productos as $producto ) {
	echo " <tr><td>{$producto['nombre']}</td><td>{$producto['precio']}</td></tr>" . PHP_EOL;
}

echo '</table>';

echo <<<HTML

<h3>Productos PREPARADOS</h3>
<table>
<tr><th>PRODUCTO</th><th>PRECIO</th></tr>

HTML;

$productos = isset ( $_SESSION ['preparados'] ) ? $_SESSION ['preparados'] : [ ];
foreach ( $productos as $producto ) {
	echo " <tr><td>{$producto[0]}</td><td>{$producto[1]}</td></tr>" . PHP_EOL;
}

echo '</table>';

?>