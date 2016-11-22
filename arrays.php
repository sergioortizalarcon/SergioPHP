<?php
$a = [ 
		1,
		2,
		3,
		4,
		5,
		6 
];

foreach ( $a as $i => $e ) {
	echo "$i => $e\n";
}

$b = [ 
		1,
		2,
		3,
		100 => 25 
];
foreach ( $b as $k => $v ) {
	echo "$k -> $v, ";
}
?>