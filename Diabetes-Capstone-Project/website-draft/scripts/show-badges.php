<?php
include 'scripts/dbconnect2.php';
	$conn = OpenCon();
	if(!isset($_SESSION['username'])) { //Check if user is logged in 
	header("Location: ../index.php");}  //If not redirect back to login page  
    $username = $_SESSION['username'];    
	$badges = "SELECT DISTINCT quiz_id FROM quiz_results WHERE username='$username' AND score=3"; //Determines unique badges earned
	$collection=array(); // Array to store which badges were earned
	foreach (mysqli_query($conn, $badges) as $badge) {
		array_push($collection, $badge['quiz_id']);
	}
	
	//Debugging tool
	function console_log( $data ){
	  echo '<script>';
	  echo 'console.log('. json_encode( $data ) .')';
	  echo '</script>';
	}
	
	// Check the console against the expected results
	function test( $data ) {
	console_log("PHP Badges Earned: ");
	console_log(array_values($data));
	}

	test($collection);
?>

