<?php
	$parts = explode('/', $_SERVER['REQUEST_URI']);

	header('Location:'.$parts[1].'/login/show');
?>
