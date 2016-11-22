<?php
require_once 'utilBD.php';
$bd = conectarMySql ();

$consulta = <<<SQL
	insert into cds(titulo,interprete,anyo)
		values (?,?,?)
SQL;

$nFilas = 20;
for($i = 1; $i <= $nFilas; $i ++) {
	$huecos = [ 
			"Titulo$i",
			"Interprete" . ($i * 10),
			'' . (1980 + $i) 
	];
	$preparada->execute ( $huecos );
}

echo 'FILAS INSERTADAS';
?>