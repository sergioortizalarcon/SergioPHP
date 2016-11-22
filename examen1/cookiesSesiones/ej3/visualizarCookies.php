Listado de cookies de nivel
<b>SergioPHP/examen1/cookiesSesiones/ej3</b>
<br>
<table border="1">
	<tr>
		<th>Nombre cookie</th>
		<th>Contenido cookie</th>
	</tr>
<?php
foreach ( $_COOKIE as $k => $v ) {
	echo "<tr><td>$k</td><td>$v</td></tr>";
}
?>
</table>
<a href="index.php">Volver</a>