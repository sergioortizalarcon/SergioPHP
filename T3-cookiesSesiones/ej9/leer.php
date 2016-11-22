<?php
session_start ();

$de = $_GET ['remitente'];
$para = $_SESSION ['_activo'];

?>
Usuario actual <?= $para?>
<h3>Lista de mensajes de <?= $de ?></h3>
<table>
	<tr>
		<th>Fecha</th>
		<th>texto</th>
	</tr>
<?php
foreach ( $_SESSION ['usuarios'] [$para] ['mensajes'] as $mensaje ) {
	if ($de == $mensaje ['remitente']) {
		echo '<tr>';
		// Fecha
		echo '<td>';
		echo date ( 'd/m/Y (H:i)', $mensaje ['fecha'] );
		echo '</td>';
		// Texto
		echo '<td>';
		echo $mensaje ['texto'];
		echo '</td>';
		
		echo '</tr>' . PHP_EOL;
	}
}
?>
</table>
<a href="listaUsuarios.php">Volver a lista de usuarios</a>