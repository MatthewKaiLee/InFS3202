<?php
	require("connectDatabaseObject.php");
	$username = $_REQUEST["query"];
	$query_ExistUser = "SELECT Username FROM customer WHERE Username = '".$username."'";
	$result_ExistUser = $db_link -> query($query_ExistUser);
	header("Content-type: text/xml");
	echo '<responses>';
	echo '<response ';
	if ($result_ExistUser -> num_rows > 0) {
		echo "text=\"Username has existed already\"";
	} else {
		echo "text=\"Username hasn't used by others\"";
	}
	echo "/>";
	echo '</responses>';
?>