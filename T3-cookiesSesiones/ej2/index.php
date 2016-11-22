<?php
$visitas = isset ( $_COOKIE ['visitas'] ) ? $_COOKIE ['visitas'] : 1;
$primeraVez = ($visitas == 1);

if ($primeraVez) {
	setcookie ( "visitas", 2 );
	echo "BIENVENIDO";
} else {
	setcookie ( "visitas", $visitas + 1 );
	echo "Hola. Es la vez n&uacute;mero $visitas que visitas esta p&aacute;gina";
}
?>