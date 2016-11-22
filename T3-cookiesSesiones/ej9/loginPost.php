<?php
session_start ();

$nombre = isset ( $_POST ['nombre'] ) ? $_POST ['nombre'] : null;
$password = isset ( $_POST ['password'] ) ? $_POST ['password'] : null;
$recordar = isset ( $_POST ['recordar'] ) ? true : false;
function loginOk($nombre, $password) {
	return (isset ( $_SESSION ['usuarios'] [$nombre] ) && $_SESSION ['usuarios'] [$nombre] ['pwd'] == $password);
}

if (loginOk ( $nombre, $password )) {
	$_SESSION ['_activo'] = $nombre;
	$_SESSION ['_recordar'] = $recordar;
	header ( 'Location: listaUsuarios.php' );
} else {
	$_SESSION ['_activo'] = null;
	echo '<head>' . PHP_EOL;
	echo '<META HTTP-EQUIV="REFRESH" CONTENT="3; URL=login.php">';
	echo '</head>', PHP_EOL;
	echo '<body>', PHP_EOL;
	echo '<p>Usuario o password incorrectos </p>', PHP_EOL;
	echo '<p>Volviendo a la pantalla de login </p>', PHP_EOL;
	echo '<body>' . PHP_EOL;
}
?>