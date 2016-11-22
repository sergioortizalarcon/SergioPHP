<?php
function siguiente($carta) {
	$sol = '';
	switch ($carta) {
		case 'as' :
			$sol = 'dos';
			break;
		case 'dos' :
			$sol = 'tres';
			break;
		case 'tres' :
			$sol = 'cuatro';
			break;
		case 'cuatro' :
			$sol = 'cinco';
			break;
		case 'cinco' :
			$sol = 'seis';
			break;
		case 'seis' :
			$sol = 'siete';
			break;
		case 'siete' :
			$sol = 'sota';
			break;
		case 'sota' :
			$sol = 'caballo';
			break;
		case 'caballo' :
			$sol = 'rey';
			break;
		case 'rey' :
			$sol = 'as';
			break;
	}
	return $sol;
}

echo ("Introduce n: \n");
fscanf ( STDIN, "%d\n", $n );

$c = "as";

for($i = 0; $i < $n; $i ++) {
	echo "$c ";
	$c = siguiente ( $c );
}

?>