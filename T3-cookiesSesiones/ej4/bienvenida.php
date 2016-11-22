<?php
include 'bdUsuarios.php';
include 'util.php';

$usuario = isset ( $_REQUEST ['usuario'] ) ? $_REQUEST ['usuario'] : null;
$clave = isset ( $_REQUEST ['clave'] ) ? $_REQUEST ['clave'] : null;

$correcto = isset ( $bdUsuarios [$usuario] ) && $bdUsuarios [$usuario] == $clave;

if ($correcto) {
	if (isset ( $_COOKIE [$usuario] )) {
		$datosCookie = explode ( '#', $_COOKIE [$usuario] );
		$nVisitas = $datosCookie [0];
		$bandera = $datosCookie [1];
	} else {
		$nVisitas = 1;
		$bandera = 'es';
	}
	
	echo <<<HTML
	Conectado como <b>$usuario</b><br/>
	N&uacute;mero de visitas: $nVisitas<br/>
	<form action="index.php" >
HTML;
	pintarBanderas ( $bandera );
	echo <<<HTML
	<input type="submit" value="Desconectar">
	<input type="hidden" name="usuario" value="$usuario">
	<input type="hidden" name="nVisitas" value="$nVisitas">
	</form>
HTML;
} else {
	echo 'USUARIO INCORRECTO';
}
?>
