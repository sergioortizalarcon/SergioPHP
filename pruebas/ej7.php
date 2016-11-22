<?php
echo 'Introduce línea de texto: ';
fscanf ( STDIN, "%s\n", $linea );

echo 'Introduce n: ';
fscanf ( STDIN, "%d\n", $n );

while ( $n < 1 || $n > 6 ) {
	echo 'Introduce n: ';
	fscanf ( STDIN, "%d\n", $n );
}

for($i = 1; $i <= $n; $i ++) {
	echo "<h$i>$linea<h$i>" . "\n";
}
for($i = $n - 1; $i > 0; $i --) {
	echo "<h$i>$linea<h$i>" . " \n";
}
?>