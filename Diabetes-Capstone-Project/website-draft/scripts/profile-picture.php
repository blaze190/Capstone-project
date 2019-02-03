<?php
  include 'dbconnect.php';
  //SET VARIABLES
  $loggedInUser = $_SESSION['username'];
  
  //SEARCH THE DATABASE TO FIND OUT USERS PROFILE PICTURE
  $sql = " SELECT profilePic FROM UserAccounts WHERE username='$loggedInUser'";
  $query = mysqli_query($connection, $sql);
  $result = mysqli_fetch_array($query)['profilePic']; 

  //DISPLAY CORRECT PROFILE PICTURE BASED ON DATABASE QUERY
    if($result=='boy1'){
    echo '<img class="card-img-top rounded my-2 p-1" src="img/boy1.svg" alt="Card image cap" width="200px" height="200px">';
  } elseif($result=='boy2'){
    echo '<img class="card-img-top rounded my-2 p-1" src="img/boy2.svg" alt="Card image cap" width="200px" height="200px">';
  } elseif($result=='boy3'){
    echo '<img class="card-img-top rounded my-2 p-1" src="img/boy3.svg" alt="Card image cap" width="200px" height="200px">';
  } elseif($result=='girl1'){
    echo '<img class="card-img-top rounded my-2 p-1" src="img/girl1.svg" alt="Card image cap" width="200px" height="200px">';
  } elseif($result=='girl2'){
    echo '<img class="card-img-top rounded my-2 p-1" src="img/girl2.svg" alt="Card image cap" width="200px" height="200px">';
  } elseif($result=='girl3'){
    echo '<img class="card-img-top rounded my-2 p-1" src="img/girl3.svg" alt="Card image cap" width="200px" height="200px">';
  } else {
    echo '<img class="card-img-top rounded my-2 p-1" src="img/girl2.svg" alt="Card image cap" width="200px" height="200px">';    
  }

  mysqli_close($connection);
?>