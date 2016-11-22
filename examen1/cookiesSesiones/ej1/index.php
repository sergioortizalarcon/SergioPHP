<?php
include ('util.php');
$uid = isset ( $_COOKIE ['uid'] ) ? $_COOKIE ['uid'] : null;
$primeraVez = ($uid == null);

if ($primeraVez) {
	$mensaje = "Hola desconocido. La pr&oacute;xima vez te recordar&eacute;";
	$cadena = generaCadenaAleatoria ();
	setcookie ( 'uid', $cadena );
} else {
	$mensaje = 'Hola de nuevo. Te conozco como UID=' . $uid;
}
echo $mensaje;
?>