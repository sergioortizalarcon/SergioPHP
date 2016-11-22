<?php
$x = 10;
$x = 20;
function f() {
	$x = 1;
	echo "$x --- ";
	global $x;
	echo $x;
}
f ();
?>