<?php
session_start ();
$recordar = isset ( $_SESSION ['_recordar'] ) && $_SESSION ['_recordar'];
$nombre = $recordar ? $_GET ['ultimoActivo'] : '';
?>

<h2>LOGIN</h2>
<form action="loginPost.php" method="post">
	<label for="idNombre">Nombre </label> <input type="text" name="nombre"
		id="idNombre" value="<?= $nombre?>"> <br /> <label for="idPwd">Contrase&ntilde;a
	</label> <input type="text" name="password" id="idPwd"> <br /> <label
		for="idRecordar">Recordar </label> <input type="checkbox"
		name="recordar" id="idRecordar" <?= $recordar?'checked="checked"':''?>>
	<br> <input type="submit">

</form>
<a href="registrar.php">Registrar nuevo usuario</a>