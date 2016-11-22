<?php
require_once 'ej1.php';

if (isset ( $_POST ['nombre'] )) {
	$nombre = $_POST ['nombre'];
	$precio = $_POST ['precio'];
	
	insertar ( [ 
			[ 
					$nombre,
					$precio 
			] 
	] );
}

echo <<<HTML
<form action="ej2.php" method="post">
	Nombre<input type="text" name="nombre"><br/>
	Precio<input type="text" name="precio"><br/>
	<input type="submit"><br/>
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

?>

