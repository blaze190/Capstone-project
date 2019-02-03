<?php
  session_start();
  ob_start();
  //Authenticate user by checking salted hash of username against session id
  if(isset($_SESSION['id']) && $_SESSION['id']=hash_hmac('sha512', $_SESSION['username'], '89hv5vE2T802')) { 
  //If user is already logged in redirect to logbook page
  header("Location: ../logbook.php");}       
?>
<!DOCTYPE html>
<html>
<head>
  <title>Diabetes Logbook</title>
  <link rel="icon" href="img/icon.png" type="image/x-icon" />
	<meta charset="utf-8">
<!--Sets the width of the page to follow the screen-width of the device-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Capstone Team 31, 2018">
	<meta name="description" content="Diabetes Logbook Application">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="theme.css" type="text/css"> 
</head>
<body>
<!-- Web responisve Navigation Bar with Javascript function to condense links to 3 bar icon - apart from Logbook - if page width less than 600px -->
  <nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
<!-- Navbar only displays logo until user is logged in  -->
      <a class="navbar-brand" href="index.php">DIABETES LOGBOOK</a>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-6">
          <div class="card text-white p-5 bg-primary">
            <div class="card-body">
              <h2 class="mb-4">welcome</h2>
<!--  Form to allow user to enter credentials and log in -->
              <form class="login-form" action='scripts/logmein.php' method='POST'>
                <div class="form-group"> <label>username</label>
                  <input type="text" class="form-control" name="username" placeholder="" required="required"> 
                </div>
                <div class="form-group"> <label>password</label>
                  <input type="password" class="form-control" name="password" placeholder="" required="required"> 
                </div>
                <button type="submit" class="btn btn-block btn-light">LOGIN</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>