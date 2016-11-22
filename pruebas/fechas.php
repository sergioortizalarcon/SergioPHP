<?php
// $t=strtotime('30 1 2000');
// $t= strtotime('05/02/1985');
$t = mktime ( 23, 45, 30, 9, 21, 1986 );
echo date ( "d m Y", $t );
$hoy = time ();
$naci = mktime ( 0, 0, 0, 8, 19, 1980 );
$proxPilar = strtotime ( "10/12/14" );
$proxPilar = strtotime ( "2014/10/12" );
$proxPilar = strtotime ( "12-10-14" );

/*
 * echo "Fecha de hoy: ", date ( "d m Y", $hoy ), "\n";
 * echo "Son las ", date ( "H:i", $hoy ), "\n";
 * echo "Nací el ", date ( "d M Y", $naci ), "\n";
 * echo "El Pilar es en el mes de ", date ( "F", $proxPilar ), "\n";
 * setlocale ( LC_ALL, "es_ES" );
 * echo "En España es en ", strftime ( "%B", $proxPilar ), "\n";
 */
?>