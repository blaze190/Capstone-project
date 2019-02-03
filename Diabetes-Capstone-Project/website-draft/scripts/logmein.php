<?php
session_start();
ob_start();
include 'dbconnect.php';
include 'validate-data.php';
//Validate form data before SQL query
$username = test_input($_POST['username']); 
$password = test_input($_POST['password']);
//Find salt used to hash entered password with
$salt_sql= "SELECT salt FROM UserAccounts WHERE username='$username'"; 
$salt_result = mysqli_query($connection, $salt_sql); 
$salt = mysqli_fetch_array($salt_result)['salt'];
//Hash the entered password with the user's salt
$password=hash_hmac('sha512', $password, $salt); 
$password_sql = "SELECT * FROM UserAccounts WHERE username='$username' AND password='$password'";
//Search database for user's login credentials
$result = mysqli_query($connection, $password_sql); 
//Check that supplied login credentials match database result 
if(!$row = mysqli_fetch_assoc($result)) {  
//If not redirect back to login page
	header("Location: ../index.php");  
} else {
//If authentication successful hash session id with salt                                                    
	$_SESSION['id'] = hash_hmac('sha512', $row['username'], '89hv5vE2T802');
//Set username session variable 
	$_SESSION['username'] = $row['username'];
//Redirect to logbook page  
	header("Location: ../logbook.php"); 
}

?>
