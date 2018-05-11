<?php
	require("connectDatabaseObject.php");
	header("Content-type: text/xml");
	echo "<html>";
	if(isset($_GET["username"]) && isset($_GET["page"])) {
		$username = $_GET["username"];
		//$username = "admin";
		$sql_query = "SELECT Firstname, LastName, Username, Email FROM customer WHERE Username = ?";
		$stmt_object = $db_link -> prepare($sql_query);
		$stmt_object -> bind_param("s", $username);
		$stmt_object -> execute();
		$result = $stmt_object -> get_result();
		$row_result = $result -> fetch_row();
		
		echo "<page>";
		if($_GET["page"] == "userprofile") {
			echo "<div class=\"row\">
					<div class=\"col-md-3 col-xs-3\" style=\"background-color:black;\">
						<div>
							<a href=\"profile.php?profile=true\" class=\"col-md-12\">User Profile</a>
							<a href=\"profile.php?profile=true\" class=\"col-md-12\">Edit Profile</a>
							<a href=\"profile.php?changepassword=true\" class=\"col-md-12\">Change Password</a>
						</div>
					</div>
					<div class=\"col-md-9 col-xs-9\">
						<h3>User Profile</h3>
						<div class=\"col-md-12\">
							<h4 class=\"col-md-4\">First Name:</h4>
							<div class=\"col-md-4\">".$row_result[0]."</div>
						</div>
						<div class=\"col-md-12\">
							<h4 class=\"col-md-4\">Last Name:</h4>
							<div class=\"col-md-4\">".$row_result[1]."</div>
						</div>
						<div class=\"col-md-12\">
							<h4 class=\"col-md-4\">Userame:</h4>
							<div class=\"col-md-4\">".$row_result[2]."</div>
						</div>
						<div class=\"col-md-12\">
							<h4 class=\"col-md-4\">Email:</h4>
							<div class=\"col-md-4\">".$row_result[3]."</div>
						</div>
					</div>
				</div>";
		} else if($_GET["page"] == "editprofile") {
			echo "<div class=\"row\">
					<div class=\"col-md-3 col-xs-3\" style=\"background-color:black;\">
						<div >
							<a href=\"profile.php?profile=true\" class=\"col-md-12\">User Profile</a>
							<a href=\"profile.php?profile=true\" class=\"col-md-12\">Edit Profile</a>
							<a href=\"profile.php?changepassword=true\" class=\"col-md-12\">Change Password</a>
						</div>
					</div>
					<form class=\"col-md-9 col-xs-9\">
						<h3>Edit Profile</h3>
						<div class=\"col-md-12\">
							<h4 class=\"col-md-4\">First Name:</h4>
							<input class=\"col-md-4\" name=\"fname\" placeholder=\"".$row_result[0]."\">
						</div>
						<div class=\"col-md-12\">
							<h4 class=\"col-md-4\">Last Name:</h4>
							<input class=\"col-md-4\" name=\"lname\" placeholder=\"".$row_result[1]."\">
						</div>
						<div class=\"col-md-12\">
							<h4 class=\"col-md-4\">Userame:</h4>
							<div class=\"col-md-4\">".$row_result[2]."</div>
						</div>
						<div class=\"col-md-12\">
							<h4 class=\"col-md-4\">Email:</h4>
							<input class=\"col-md-4\" name=\"email\" placeholder=\"".$row_result[3]."\">
						</div>
						<div class=\"col-md-12\">
							<button>Submit</button>
						</div>
					</form>
				</div>";
		} else if($_GET["page"] == "changepassword") {
			echo "<div class=\"row\">
					<div class=\"col-md-3 col-xs-3\" style=\"background-color:black;\">
						<div >
							<a href=\"profile.php?profile=true\" class=\"col-md-12\">User Profile</a>
							<a href=\"profile.php?profile=true\" class=\"col-md-12\">Edit Profile</a>
							<a href=\"profile.php?changepassword=true\" class=\"col-md-12\">Change Password</a>
						</div>
					</div>
					<form class=\"col-md-9 col-xs-9\">
						<h3>Change Password</h3>
						<div class=\"col-md-12\">
							<h4 class=\"col-md-4\">Old Password:</h4>
							<input class=\"col-md-4\" placeholder=\"Old Password\">
						</div>
						<div class=\"col-md-12\">
							<h4 class=\"col-md-4\">New Password:</h4>
							<input class=\"col-md-4\" placeholder=\"New Password\">
						</div>
						<div class=\"col-md-12\">
							<h4 class=\"col-md-4\">New Confirm Password:</h4>
							<input class=\"col-md-4\" placeholder=\"Password\">
						</div>
						<div class=\"col-md-12\">
							<button>Submit</button>
						</div>
					</form>
				</div>";
		}
		echo "</page>";
		
	} else {

	}
	echo "</html>";
?>