<?php
$visitas = isset ( $_COOKIE ['visitas'] ) ? $_COOKIE ['visitas'] : 0;
$primeraVez = ($visitas == 0);

if ($primeraVez) {
	$mensaje = "<h1>BIENVENIDO</h1>";
	setcookie ( 'visitas', 1 );
} else {
	setcookie ( 'visitas', $visitas + 1 );
	$mensaje = "Hola. Es la vez n&uacute;mero $visitas que visitas la p&aacute;gina";
}
echo $mensaje;
?>