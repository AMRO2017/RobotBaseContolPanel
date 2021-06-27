<?php
	include 'connect.php';
	// insertion
	$sqlF = "INSERT INTO base(timestamp, direction) 
	VALUES(CURRENT_TIME(), 'forward')";
	$sqlL = "INSERT INTO base(timestamp, direction) 
	VALUES(CURRENT_TIME(), 'left')";
	$sqlB = "INSERT INTO base(timestamp, direction) 
	VALUES(CURRENT_TIME(), 'backward')";
	$sqlR = "INSERT INTO base(timestamp, direction) 
	VALUES(CURRENT_TIME(), 'right')";
	$sqlS = "INSERT INTO base(timestamp, direction) 
	VALUES(CURRENT_TIME(), 'stop')";
	if(isset($_POST['forward'])){
		if(mysqli_query($conn, $sqlF))
			echo "new record created successfully";
		else
			echo "ERROR: " . $sqlF . "<br>" .mysqli_error($conn);
	}else if(isset($_POST['left'])){
		if(mysqli_query($conn, $sqlL))
			echo "new record created successfully";
		else
			echo "ERROR: " . $sqlL . "<br>" .mysqli_error($conn);
	}else if(isset($_POST['backward'])){
		if(mysqli_query($conn, $sqlB))
			echo "new record created successfully";
		else
			echo "ERROR: " . $sqlB . "<br>" .mysqli_error($conn);
	}else if(isset($_POST['right'])){
		if(mysqli_query($conn, $sqlR))
			echo "new record created successfully";
		else
			echo "ERROR: " . $sqlR . "<br>" .mysqli_error($conn);
	}else if(isset($_POST['stop'])){
		if(mysqli_query($conn, $sqlS))
			echo "new record created successfully";
		else
			echo "ERROR: " . $sqlS . "<br>" .mysqli_error($conn);
	}
		//merging arm engines and options table for insertion
		$engine1 = $_POST['value1'];
		$engine2 = $_POST['value2'];
		$engine3 = $_POST['value3'];
		$engine4 = $_POST['value4'];
		$engine5 = $_POST['value5'];
		$engine6 = $_POST['value6'];
		$start 	 = $_POST['start'];

		$sql = "INSERT INTO engines VALUES(CURRENT_TIME(), '$engine1', '$engine2', '$engine3', '$engine4', '$engine5', '$engine6')";
	if(isset($_POST['save'])) {
	 if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\nEngine1: $engine1\nEngine2: $engine2\nEngine3:  "
                ."$engine3\nEngine4: $engine4\nEngine5: $engine5\nEngine6: $engine6");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }

		$sql1 = "INSERT INTO options VALUES(CURRENT_TIME(), '$start')";
	
	 if(mysqli_query($conn, $sql1)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\nStatus: $start");
        } else{
            echo "ERROR: Hush! Sorry $sql1. " 
                . mysqli_error($conn);
        }
		}
	//close connection
	mysqli_close($conn);
	
	header("Location: http://localhost/RobotBaseControlPanel-Task2/index.html");
	exit();
?>