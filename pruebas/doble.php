<?php
function doble($numero) {
	return 2 * $numero;
}

echo "Introduce un número: \n";
fscanf ( STDIN, "%d\n", $n );

echo "El doble de $n es ";
echo doble ( $n );
?>