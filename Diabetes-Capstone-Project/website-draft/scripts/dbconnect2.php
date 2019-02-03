<?php
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "web-connect";
 $dbpass = "5fsc9vM8s2gy";
 $db = "diabetes_logbook";
 
 
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connection failed");
 
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>