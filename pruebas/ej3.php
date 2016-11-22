<?php
function p() {
	echo "Introduce p: \n";
	fscanf ( STDIN, "%d\n", $a );
	return $a;
}

echo "Introduce n: \n";
fscanf ( STDIN, "%d\n", $n );

$p = p ();
while ( $p > 10 || $p < 1 ) {
	$p = p ();
}

for($i = 0; $i < $n; $i ++) {
	for($j = 0; $j < $p; $j ++) {
		echo "$j ";
	}
}
?>