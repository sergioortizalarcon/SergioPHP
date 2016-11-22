<?php
$c = '   123456789   ';
$otrac = 'xxxx';
echo substr ( $c, 4, 7 ) . "\n";
echo $otrac . trim ( $c ) . $otrac . "\n";

$a = 'Hola qué tal estás muy bien gracias';
$palabras = explode ( ' ', $a );
$contador = 1;
foreach ( $palabras as $palabra ) {
	echo "Palabra " . $contador ++ . ": $palabra\n";
}

$b = '1:sergio:*:/usr/sbin/bash||2:pepe:*:/usr/sbin/bash||3:marta:*:/usr/sbin/bash';
$bdUsuarios = explode ( '||', $b );
foreach ( $bdUsuarios as $usuario ) {
	$datos = explode ( ':', $usuario );
	echo "UID: $datos[0]" . PHP_EOL;
	echo "User: $datos[1]" . PHP_EOL;
	echo "Password: $datos[2]" . PHP_EOL;
	echo "Shell: $datos[3]" . PHP_EOL;
	echo "==============================\n";
}

?>