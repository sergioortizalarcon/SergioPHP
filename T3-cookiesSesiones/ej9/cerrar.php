<?php
session_start ();
$nombre = $_SESSION ['_activo'];
$_SESSION ['_activo'] = null;
header ( 'Location:login.php?ultimoActivo=' . $nombre );
?>