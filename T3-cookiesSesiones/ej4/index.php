<?php
$usuario = isset ( $_REQUEST ['usuario'] ) ? $_REQUEST ['usuario'] : null;
$bandera = isset ( $_REQUEST ['bandera'] ) ? $_REQUEST ['bandera'] : null;
$nVisitas = isset ( $_REQUEST ['nVisitas'] ) ? $_REQUEST ['nVisitas'] : null;

$primeraVez = ($usuario == null && $bandera == null && $nVisitas == null);

if ($primeraVez) {
	$mensaje = 'Primera vez';
} else {
	setcookie ( $usuario, ($nVisitas + 1) . '#' . $bandera );
	$mensaje = "Adi&oacute;s <b>$usuario</b>";
}

echo <<<FORM
<h2>Tratamiento de cookies</h2>
$mensaje. Usted no est&aacute; conectado.
<br />
<form action="./bienvenida.php">
	<label for="lblUsuario">Usuario </label> <input type="text"
		id="usuario" name="usuario"> <br /> <label for="lblClave">Clave </label>
	<input type="password" id="clave" name="clave"> <br /> <input
		type="submit" value="Autenticar">
</form>
FORM;
?>