<?php
session_start();
// Terminate session
session_destroy();
// Redirect to log in page
header("Location: ../index.php");
?>