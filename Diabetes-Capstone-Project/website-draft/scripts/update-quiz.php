<?php
include 'dbconnect2.php';
include 'validate-data.php';
$conn = OpenCon();
//Get username from session username variable 
$username = $_SESSION['username'];

// Radio buttons are only set to true if they are selected
$a1 = (empty($_POST['question1'])) ? FALSE : test_input($_POST['question1']);
$a2 = (empty($_POST['question2'])) ? FALSE : test_input($_POST['question2']);
$a3 = (empty($_POST['question3'])) ? FALSE : test_input($_POST['question3']);
$a4 = (empty($_POST['question4'])) ? FALSE : test_input($_POST['question4']);
$a5 = (empty($_POST['question5'])) ? FALSE : test_input($_POST['question5']);
$a6 = (empty($_POST['question6'])) ? FALSE : test_input($_POST['question6']);
$a7 = (empty($_POST['question7'])) ? FALSE : test_input($_POST['question7']);
$a8 = (empty($_POST['question8'])) ? FALSE : test_input($_POST['question8']);
$a9 = (empty($_POST['question9'])) ? FALSE : test_input($_POST['question9']);
$a10 = (empty($_POST['question10'])) ? FALSE : test_input($_POST['question10']);
$a11 = (empty($_POST['question11'])) ? FALSE : test_input($_POST['question11']);
$a12 = (empty($_POST['question12'])) ? FALSE : test_input($_POST['question12']);
$a13 = (empty($_POST['question13'])) ? FALSE : test_input($_POST['question13']);
$a14 = (empty($_POST['question14'])) ? FALSE : test_input($_POST['question14']);
$a15 = (empty($_POST['question15'])) ? FALSE : test_input($_POST['question15']);
$a16 = (empty($_POST['question16'])) ? FALSE : test_input($_POST['question16']);
$a17 = (empty($_POST['question17'])) ? FALSE : test_input($_POST['question17']);
$a18 = (empty($_POST['question18'])) ? FALSE : test_input($_POST['question18']);


// For recording the result
$counter = 0;

// Compare user answer with correct answer
function compare($question, $input) {
	$quiz_answer = mysqli_query($GLOBALS['conn'], "SELECT quiz_answer FROM quiz_answers WHERE quiz_question_id=$question");
	$answer = mysqli_fetch_assoc($quiz_answer);
	if ($answer["quiz_answer"] === $input) {
		
		$GLOBALS['counter'] = $GLOBALS['counter'] + 1;
	}
	return $GLOBALS['counter'];
}

// Debugging tool
function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

//Runs the comparing function for each question and writes to the database if all radio buttons are selected. Inserts into the database the users result
function quiz_var($v1, $v2, $v3, $q1, $q2, $q3) {
	if ($v1 && $v2 && $v3){
		$counter = $GLOBALS['counter'];
		$counter = compare($q1, $v1);
		$counter = compare($q2, $v2);
		$counter = compare($q3, $v3);
		$username = $GLOBALS['username'];
		$wq = ($q3 / 3);
		$sql_user_result = "INSERT INTO quiz_results (quiz_id, username, score) VALUES ('$wq', '$username', '$counter')";
		write($v1, $v2, $v3, $q1, $q2, $q3);
		mysqli_query($GLOBALS['conn'], $sql_user_result);
	}
}

//Inserts into the database the users answers for each question
function write($v1, $v2, $v3, $q1, $q2, $q3) {
	$username = $GLOBALS['username'];
	$sql_user_answer = "INSERT INTO quiz_user_answer (quiz_question_id, username, user_answer) VALUES('$q1', '$username', '$v1'), ('$q2', '$username', '$v2'), ('$q3', '$username', '$v3')";
	if (mysqli_query($GLOBALS['conn'], $sql_user_answer)){
	}
	else {
		echo "ERROR: Could not able to execute $sql_user_answer. " . mysqli_error($conn);
	}
}

//Calls the comparitive function for each quiz
$sql_user_result = quiz_var($a1, $a2, $a3, 1, 2, 3);
$sql_user_result = quiz_var($a4, $a5, $a6, 4, 5, 6);
$sql_user_result = quiz_var($a7, $a8, $a9, 7, 8, 9);
$sql_user_result = quiz_var($a10, $a11, $a12, 10, 11, 12);
$sql_user_result = quiz_var($a13, $a14, $a15, 13, 14, 15);
$sql_user_result = quiz_var($a16, $a17, $a18, 16, 17, 18);

// Creates an array containing which bagdges have been earnt 
$badges = "SELECT DISTINCT quiz_id FROM quiz_results WHERE username='$username' AND score=3";
$collection=array();
foreach (mysqli_query($conn, $badges) as $badge) {
	array_push($collection, $badge['quiz_id']);
}

// Check the console against the expected results
function test( $data ) {
	console_log("PHP Badges Earned: ");
	console_log(array_values($data));
}

test($collection);
CloseCon($conn);

?>

