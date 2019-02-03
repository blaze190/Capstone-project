<?php
session_start();
ob_start();
include 'dbconnect.php';
include 'validate-data.php';

//SET VARIABLES WITH FORM DATA
//$username = isset($_SESSION['id']); //get username from session id 
$username = $_SESSION['username'];
$date = test_input($_POST['date']); //validate all form data with test_input function
$time = test_input($_POST['time']);  
$qaCorrection = test_input($_POST['qa-correction']);
$carbExchange = test_input($_POST['carb-exchange']);
$ceCorrection = test_input($_POST['carb-exchange-correction']);
$qaInsulin = test_input($_POST['qa-insulin']);
$bInsulin = test_input($_POST['b-insulin']);
$bloodGlucose = test_input($_POST['blood-glucose']);
//$mealPeriod = $_POST['meal-period'];  //Meal period is missing from form

//INSERT VARIABLES INTO MYSQL DATABASE  - MEAL PERIOD CURRENTLY MISSING
$sql = "INSERT INTO Logs (username, logDate, logTime, carbExchange, bloodGlucose, qaInsulin, backgroundInsulin, qaCorrection, ceCorrection)
	VALUES ('$username', '$date', '$time', '$carbExchange', '$bloodGlucose', '$qaInsulin', '$bInsulin', '$qaCorrection', '$ceCorrection')";
$result = mysqli_query($connection, $sql);

//REDIRECT BACK TO LOGBOOK
header("Location: ../logbook.php"); 
exit;

?>

