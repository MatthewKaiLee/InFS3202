<?php
	if(isset($_GET["logout"]) && ($_GET["logout"] == "true")) {
		unset($_SESSION["username"]);
		header("Location: index.php");
	}
?>