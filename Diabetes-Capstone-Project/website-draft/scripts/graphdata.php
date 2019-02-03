<?php
  if(!isset($_SESSION['id'])) { //Check if user is logged in 
  header("Location: ../index.php");}  //If not redirect back to login page      

  include './scripts/dbconnect.php';
  $loggedInUser = $_SESSION['username'];

  //CURRENT DATE
  date_default_timezone_set("Australia/Brisbane"); //Set Brisbane as default timezone
  $currentDate = date("Y/m/d"); //return date in yyyy-mm-dd format

  //query to get data from the table
  $query = "SELECT * FROM Logs WHERE username ='$loggedInUser' AND logDate <= '$currentDate' ORDER BY logDate ASC, logTime ASC";

  //execute query
  $result = mysqli_query($connection, $query);

  //loop through the returned data
  $data = array();
  $finalDtata = array();

  foreach ($result as $row) {
    $data[] = $row;
  }

  //free memory associated with result
  #$result->close();
  $test1 =  json_encode($data);
  //close connection
  $connection->close();
  
  
 //echo $_GET['from'];
 
?>