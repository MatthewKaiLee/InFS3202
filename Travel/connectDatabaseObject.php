<?php
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_name = "infs3202";
	$db_link = @new mysqli($db_host, $db_username, $db_password, $db_name);
	if ($db_link -> connect_error != "") {
		die("Fail to connect database");
	}
?>