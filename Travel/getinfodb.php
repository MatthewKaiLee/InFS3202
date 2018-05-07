<?php
	require("connectdatabase.php");
	$seldb = @mysqli_select_db($db_link, "infs3202");
	$username = "admin";
	$sql_query = "SELECT username, password FROM customer Where username = '".$username."'";
	echo $sql_query;
	$result = mysqli_query($db_link, $sql_query);
	echo "<br>";
	while($row_result = mysqli_fetch_row($result)) {
		echo $row_result[0];
		echo $row_result[1];
		echo "<br>";
		foreach ($row_result as $item => $value) {
			echo $item."=".$value."<br>";
		}
		echo "<hr />";
	}
?>