<?php
echo "Introduce un n�mero: \n";
fscanf ( STDIN, "%d\n", $n );

$i = 0;
$resultado = 0;

while ( $n != 0 ) {
	$a [$i] = $n;
	$i ++;
	
	echo "Introduce un n�mero: \n";
	fscanf ( STDIN, "%d\n", $n );
}

echo "Operaci�n: ";
fscanf ( STDIN, "%s\n", $operacion );

switch ($operacion) {
	case "sumar" :
		$resultado = 0;
		foreach ( $a as $i ) {
			$resultado += $i;
		}
		echo $resultado;
		break;
	case "multiplicar" :
		$resultado = 1;
		foreach ( $a as $i ) {
			$resultado *= $i;
		}
		echo $resultado;
		break;
	default :
		echo "operaci�n no v�lida";
}
?>