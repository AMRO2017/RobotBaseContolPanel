<?php
	//database connection
	$dbhost = "localhost"; //default
	$dbuser = "root"; //default
	$dbpass = "";// default
	$dbname = "robot_arm_control_panel";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		//check connection
		if($conn === false){
			die("ERROR: Connection Faild. " . mysqli_connect_error());
		}
?>