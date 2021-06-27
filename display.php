<!DOCTYPE html>
<html lang="en-us">
<head>
	<title> Database Recently Added Values</title>
	<meta http-equiv="refresh" content="2" >
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link Content-Type= "text/CSS" rel="stylesheet" href="style1.css">
</head>
<body>
	<center>
	<h1>Database Recent Values</h1>
	<h2>
	<?php

	//database connection
    include 'connect.php';
	// retreive recent values from table engines and options
		//engines table
		$table1 = "engines";
		$recent_row = mysqli_query($conn, "SELECT * FROM $table1 ORDER BY timestamp DESC LIMIT 1"); // recent value is at the top of the table
		$get_recent_row = mysqli_fetch_array($recent_row);
		for($i=1; $i<=6; $i++){
	  	echo "Engine$i: $get_recent_row[$i] <br>";		
		}
		
		//options table
		$table2 = "options";
		$recent_row2 = mysqli_query($conn, "SELECT * FROM $table2 ORDER BY timestamp DESC LIMIT 1"); // recent value is at the top of the table
		$get_recent2_row = mysqli_fetch_array($recent_row2);
		echo "<br>Status: $get_recent2_row[1] <br>";

		//base table
    $table3 = "base";
    $table3_recent_row = mysqli_query($conn, "SELECT * FROM $table3 ORDER BY timestamp DESC LIMIT 1");
    $get_table3_recentRow = mysqli_fetch_array($table3_recent_row);
    echo "<br>Direction: $get_table3_recentRow[1] <br>";

    //close connection
		mysqli_close($conn);
	?>
	</h2>
	</center>
</body>
</html>