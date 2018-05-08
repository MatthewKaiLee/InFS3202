<?php
	require("connectDatabaseObject.php");
	$username = $_REQUEST["query"];
	$query_ExistUser = "SELECT Username FROM customer WHERE Username = '".$username."'";
	$result_ExistUser = $db_link -> query($query_ExistUser);
	if ($result_ExistUser -> num_rows > 0) {
		echo "Username has existed already!";
	} else {
		echo "Username hasn't used by others!";
	}
?>