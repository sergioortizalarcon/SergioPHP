<?php
session_start ();

$de = $_SESSION ['_activo'];
$para = $_GET ['destinatario'];

?>
<form action="escribirPost.php" method="post">
	<label for="de"></label> <input type="text" id="de" name="remitente"
		readonly="readonly" value="<?= $de ?>"><br> <label for="para"></label>
	<input type="text" id="para" readonly="readonly" value="<?= $para ?>"
		name="destinatario"><br>
	<textarea rows="30" cols="30" name="texto"></textarea>
	<input type="submit">
</form>
<a href="listaUsuarios.php">Volver a lista de usuarios</a>