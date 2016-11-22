<?php
$ahora = time ();
echo "Día: \n";
fscanf ( STDIN, "%d\n", $dia );
echo "Mes: \n";
fscanf ( STDIN, "%d\n", $mes );
echo "Año: \n";
fscanf ( STDIN, "%d\n", $year );

$fecha = strtotime ( "$year/$mes/$dia" );

?>