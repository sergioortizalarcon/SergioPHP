<?php
session_start ();
function numMensajes($remitente, $destinatario) {
	$nm = 0;
	$mensajes = $_SESSION ['usuarios'] [$destinatario] ['mensajes'];
	foreach ( $mensajes as $mensaje ) {
		if ($mensaje ['remitente'] == $remitente) {
			$nm ++;
		}
	}
	return $nm;
}

if (isset ( $_SESSION ['_activo'] ) && $_SESSION ['_activo'] != null) {
	echo <<<HTML
Usuario activo {$_SESSION['_activo']}
<h3>LISTA de USUARIOS / MENSAJES</h3>
<table>
HTML;
	foreach ( $_SESSION ['usuarios'] as $nomUsu => $infoUsu ) {
		if ($nomUsu != $_SESSION ['_activo']) {
			echo '<tr>';
			// Nombre de los usuarios
			echo '<td>';
			echo $nomUsu;
			echo '</td>';
			// Número de mensajes que me ha enviado cada usuario
			echo '<td>(';
			$numMensajes = numMensajes ( $nomUsu, $_SESSION ['_activo'] );
			echo $numMensajes;
			echo ')</td>';
			// Link para leer
			echo '<td>';
			if ($numMensajes > 0) {
				echo '<a href="leer.php?remitente=' . $nomUsu . '">Leer</a>';
			}
			echo '</td>';
			// Link para escribir
			echo '<td>';
			echo '<a href="escribir.php?destinatario=' . $nomUsu . '">Escribir</a>';
			echo '</td>';
			
			echo '</tr>' . PHP_EOL;
		}
	}
} else {
	echo 'No has hecho login. So listo';
}
?>
<a href="login.php">Volver a la pantalla de login</a>
