<?php
  include 'validate-data.php';
  //If date search values are set then validate them and set variables for search
  if (isset($_POST['from']) and isset($_POST['to'])){
    echo '<input type="hidden" name="foo" value="';
    echo test_input($_POST['from']);
    echo '" />';
    
    echo '<input type="hidden" name="foo" value="';
    echo test_input($_POST['to']);
    echo '" />';
  }
?>