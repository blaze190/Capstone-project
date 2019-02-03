<?php
  //CONNECT TO DATABASE
  include 'dbconnect.php'; 
  //SET VARIABLES
  $loggedInUser = $_SESSION['username'];
  //CHECK IF START/END DATE IS SET AND VALIDATE IF SO
  $startDate = isset($_POST['startDate']) ? test_input($_POST['startDate']) : ''; 
  $endDate =  isset($_POST['endDate']) ? test_input($_POST['endDate']) : '';  
  //CURRENT DATE
  date_default_timezone_set("Australia/Brisbane"); //Set Brisbane as default timezone
  $currentDate = date("Y/m/d"); //return date in yyyy-mm-dd format

  //IF DATES ARE SET ONLY GET LOG ENTRIES WITHIN THIS DATE RANGE OTHERWISE GET LAST 30 LOGS
  if(isset($_POST['endDate'])) {
      $sql = "SELECT * FROM Logs WHERE username='$loggedInUser' AND logDate BETWEEN '$startDate' AND '$endDate' ORDER BY logDate DESC, logTime DESC";
    } else {
      $sql = "SELECT * FROM Logs WHERE username='$loggedInUser' AND logDate <= '$currentDate' ORDER BY logDate DESC, logTime DESC LIMIT 30";
    }
  $result = mysqli_query($connection, $sql);
  
  //BUILD TABLE WITH DATA RETRIEVED FROM QUERY
  echo '<table class="table table-striped table-sm ml-auto px-0">';
  echo  '<thead class="mx-auto">';
  echo  '<tr class="ml-auto">';
  echo   '<th class="px-2">DATE</th>';
  echo   '<th>TIME</th>';
  echo   '<th>BSL</th>';
  echo   '<th>CE</th>';
  echo  '</tr>';
  echo  '</thead>';
  echo  '<tbody>';
  while($row = mysqli_fetch_array($result)) {
    echo  "<tr>";
    echo    "<td>" . date('d-M-Y', strtotime($row['logDate'])) . "</td>"; //Convert date to dd-mon-yyyy format 
    echo    "<td>" . date('h:ia', strtotime($row['logTime']))  . "</td>"; //Convert time to hh:mm am/pm format
    echo    "<td>" . $row['bloodGlucose'] . "</td>";
    echo    "<td>" . $row['carbExchange'] . "</td>";
    echo  "</tr>";
  }
  echo  "</tbody>";
  echo "</table>";  
  mysqli_close($connection);

  // Create function to validate and sanitize input data
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>