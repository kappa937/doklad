<?php
	include_once "comma.php";
	
	if (Comma::update('Hello, world, world, Hello, world, Hello')) {
		echo 'Check OK.';
	} else {
		echo 'Check ERROR.';
	}
?>