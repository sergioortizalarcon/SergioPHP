<?php
session_start ();

$de = $_POST ['remitente'];
$para = $_POST ['destinatario'];
$texto = $_POST ['texto'];

$mensajes = [ ];
$mensaje ['remitente'] = $de;
$mensaje ['fecha'] = time ();
$mensaje ['texto'] = $texto;

array_push ( $_SESSION ['usuarios'] [$para] ['mensajes'], $mensaje );

?>

<h3>Mensaje enviado</h3>
<a href="listaUsuarios.php">Volver a lista de mensajes</a>
