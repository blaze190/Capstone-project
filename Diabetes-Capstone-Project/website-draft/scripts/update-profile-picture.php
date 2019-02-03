<?php
	session_start();
	ob_start();
    include 'dbconnect.php';
    include 'validate-data.php';
    //SET VARIABLES WITH FORM DATA
    $loggedInUser = $_SESSION['username'];
    //CHECK IMAGE IS SELECTED AND VALIDATE FORM INPUT
    if(isset($_POST['image-select'])){
        $image = test_input($_POST['image-select']);
    //UPDATE DATABASE WITH NEW IMAGE CHOICE
        $sql = " UPDATE UserAccounts Set profilePic = '$image' WHERE username='$loggedInUser'";
        mysqli_query($connection, $sql);
        header("Location: ../profile.php"); 
    //CLOSE SQL CONNECTION    
        mysqli_close($connection);
    }
?>