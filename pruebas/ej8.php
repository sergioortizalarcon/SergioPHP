<?php
$ahora = time ();
echo "D�a: \n";
fscanf ( STDIN, "%d\n", $dia );
echo "Mes: \n";
fscanf ( STDIN, "%d\n", $mes );
echo "A�o: \n";
fscanf ( STDIN, "%d\n", $year );

$fecha = strtotime ( "$year/$mes/$dia" );

?>