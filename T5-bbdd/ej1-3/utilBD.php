<?php
function conectarMySql($schema = 'test', $usu = 'root', $pwd = '', $host = 'localhost') {
	try {
		$dsn = "mysql:host=$host;dbname=$schema";
		$db = new PDO ( $dsn, $usu, $pwd );
		return $db;
	} catch ( PDOException $e ) {
		echo 'Error de conexi�n' . PHP_EOL;
		echo $e;
		die ();
	}
}

?>