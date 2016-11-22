<?php
ini_set ( 'session.use_trans_sid', '1' );
ini_set ( 'session.use_cookies', '0' );
ini_set ( 'session.use_only_cookies', '0' );

session_start ();

if (isset ( $_SESSION ['visitas'] )) {
	$_SESSION ['visitas'] = $_SESSION ['visitas'] + 1;
} else {
	$_SESSION ['visitas'] = 1;
}

echo <<<FORM
	<h2>N&uacute;mero de visitas: {$_SESSION['visitas']} </h2>
	<form action="contador.php" method="post">
	<input type="submit">
	</form>
FORM;
?>