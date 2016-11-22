<?php
function siguiente($c) {
	switch ($c) {
		case "+" :
			$sol = "-";
			break;
		case "-" :
			$sol = ".";
			break;
		case "." :
			$sol = "+";
			break;
	}
	return $sol;
}

echo "Introduce n: \n";
fscanf ( STDIN, "%d\n", $n );

$c = "+";

for($i = $n; $i >= 1; $i --) {
	for($j = 0; $j < $i; $j ++) {
		echo $c;
		$c = siguiente ( $c );
	}
	echo "\n";
}
?>