<?php
function resaltar($texto) {
	return '<h1>' . $texto . '</h1>';
}
function vaiven($texto) {
	$html = '';
	for($i = 4; $i >= 1; $i --) {
		$html .= "<h$i>$texto</h$i>\n";
	}
	for($i = 2; $i <= 4; $i ++) {
		$html .= "<h$i>$texto</h$i>\n";
	}
	return $html;
}
function pintarRadio($name, $valores) {
	$html = '';
	foreach ( $valores as $k => $v ) {
		$html .= '<input type="radio" name="' . $name . '" value="' . $k . '"';
	}
	return $html;
}

?>