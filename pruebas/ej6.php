<?php
function pedirNombre() {
	echo "¿Nombre? \n";
	fscanf ( STDIN, "%s\n", $nom );
	return $nom;
}

$nombre = pedirNombre ();

while ( $nombre != 'fin' ) {
	echo "¿Edad de $nombre? \n";
	fscanf ( STDIN, "%d\n", $edad );
	$a [$nombre] = $edad;
	
	$nombre = pedirNombre ();
}

foreach ( $a as $nombre => $edad ) {
	echo ksort ( $a );
}

// ksort($persona); //Para ordenar por nombre de persona
// asort ( $persona ); //Para ordenar por edad
?>