<?php 
	header("Content-Type: text/html; charset=utf-8");
	$db_username = "root";
	$db_password = "1234";
	$db_link = @mysqli_connect("localhost", $db_username, $db_password);
	if (!$db_link) {
		die("connect database fail");
	}
?>