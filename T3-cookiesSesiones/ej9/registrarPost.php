<?php
session_start ();

$nombre = isset ( $_POST ['nombre'] ) ? $_POST ['nombre'] : null;
$password = isset ( $_POST ['password'] ) ? $_POST ['password'] : null;

// echo "$nombre / $password"; //DEBUG

if (isset ( $_SESSION ['usuarios'] [$nombre] )) {
	echo <<<HTML
	<h3>USUARIO EXISTENTE</h3>
	<a href="registrar.php">Volver a la p&aacute;gina de registro</a>
HTML;
} else {
	$_SESSION ['usuarios'] [$nombre] = [ 
			'pwd' => $password,
			'mensajes' => [ ] 
	];
	echo <<<HTML
	<h3>Usuario $nombre creado</h3>
	<a href="login.php">Volver a la p&aacute;gina de login</a>
HTML;
}
?>

