<?php
  include 'dbconnect.php';
  //SET VARIABLES
  $loggedInUser = $_SESSION['username'];
  
  //COUNT THE AMOUNT OF ENTRIES IN THE LOGS TABLE FOR THE LOGGED IN USER
  $noLogsQuery = " SELECT COUNT(logID) FROM Logs WHERE username='$loggedInUser'";
  $noLogsResult = mysqli_query($connection, $noLogsQuery);
  $noLogs = mysqli_fetch_array($noLogsResult)['COUNT(logID)']; 
  
  //Determine which badges were earned by the user
  $Badges = mysqli_query($connection, "SELECT DISTINCT quiz_id FROM quiz_results WHERE username='$loggedInUser' AND score=3");
  $BadgesArray = array();
  foreach ($Badges as $badge) {
		array_push($BadgesArray, $badge['quiz_id']);
	}
  test_array("The Badges Earned are: ", $BadgesArray);
  
  //Array storing the titles of each module
  $ModuleName = array("Module One - The Diabetes Disease", "Module Two - Treatment &amp; Monitoring", "Module Three - Problem Solving", "Module Four - Insulin ", "Module Five - Lifestyle", "Module Six - Hypo & Hyper");
  
  //Amount of badges currently earned
  $noBadges = count($BadgesArray);
  console_log("The amount of badges are: $noBadges");

  //COUNT THE AMOUNT OF ENTRIES IN THE LOGS TABLE FOR THE LOGGED IN USER
  $lastLogQuery = " SELECT logDate, logTime FROM Logs WHERE username='$loggedInUser' ORDER BY logDate DESC";
  $lastLogResult = mysqli_query($connection, $lastLogQuery);
  $logDate = mysqli_fetch_array($lastLogResult)['logDate'];
  $logTime = mysqli_fetch_array($lastLogResult)['logTime']; 

  //FILL IN LIST FIELDS WITH DATA RETRIEVED FROM QUERY
  echo '<ul class="list-group list-group-flush">';
  echo '  <li class="list-group-item">Badges:&nbsp;';  
  echo $noBadges ;
  echo '  <a href="../badges.php">View</a> </li>';
  echo '  <li class="list-group-item">Total Logs:&nbsp;';  
  echo $noLogs . '</li>';
  echo '  <li class="list-group-item">Last Log:&nbsp;';
  echo date('h:ia', strtotime($logTime))  . '&nbsp;&nbsp;' . date('l d F Y', strtotime($logDate)) . '</li>';
  echo '  <li class="list-group-item">Your Education Modules';
  echo '   <ul class="list-group">';
  console_log("Matching the Badge with module title: ");
  foreach ($BadgesArray as $row) {
	console_log("Badge $row");
	console_log($ModuleName[$row-1]);
	echo '      <li class="list-group-item d-flex justify-content-between align-items-center">'.$ModuleName[$row-1].'&nbsp;';
	echo '      <span class="badge badge-primary badge-pill">Completed!</span> </li>'; 
  }
  echo '    </ul>';
  echo '  </li>';
  echo '</ul>';
 
 //Debugging Tool
 function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

function test_array ( $message, $data ) {
	console_log($message);
	console_log($data);
}
  mysqli_close($connection);
?>