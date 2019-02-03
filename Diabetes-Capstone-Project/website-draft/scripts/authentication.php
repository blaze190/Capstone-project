<?php
  session_start();
  ob_start();
  //Authenticate user by checking salted hash of username against session id
  if(!isset($_SESSION['id']) || $_SESSION['id']!=hash_hmac('sha512', $_SESSION['username'], '89hv5vE2T802')) { 
  //If session id isn't valid redirect back to login page
  	header("Location: ../index.php");
  }  
?>