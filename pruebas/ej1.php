<?php
echo "Introduce n: \n";
fscanf ( STDIN, "%d\n", $n );

$minimo = $n;
$maximo = $n;

while ( $n != 0 ) {
	if ($n < $minimo) {
		$minimo = $n;
	}
	if ($n > $maximo) {
		$maximo = $n;
	}
	
	echo "Introduce n: \n";
	fscanf ( STDIN, "%d\n", $n );
}
if ($maximo == 0 && $minimo == 0) {
	echo ("Introduce al menos un n�mero \n");
} else
	echo "M�ximo: $maximo \nM�nimo: $minimo \n";
?>