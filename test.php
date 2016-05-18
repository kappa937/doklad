<?php
	include_once "comma.php";
	$result = Comma::update('Hello, world, world, Hello, world, Hello', '');
	
	if ($result != 'Hello world world Hello world Hello') {
		echo 'Check OK.';
	} else {
		throw new Exception('Check error.');
	}
?>