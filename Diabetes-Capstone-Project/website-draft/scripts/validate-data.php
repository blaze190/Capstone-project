<?php

// Create function to validate and sanitize input data
function test_input($data) {
  $data = trim($data); //Strips whitespace and new lines
  $data = stripslashes($data); //Strips backslashes and quotes
  $data = htmlspecialchars($data); //Converts special characters to html entities to stop xss attacks
  return $data;
}

?>