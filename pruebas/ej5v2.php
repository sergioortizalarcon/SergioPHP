<?php
$cartas = [ 
		'as',
		'dos',
		'tres',
		'cuatro',
		'cinco',
		'seis',
		'siete',
		'ocho',
		'nueve',
		'diez',
		'sota',
		'caballo',
		'rey' 
];
echo "Introduce n: \n";
fscanf ( STDIN, "%d\n", $n );

for($i = 0; $i < $n; $i ++) {
	echo $cartas [$i % sizeof ( $cartas )] . ' ';
}
?>