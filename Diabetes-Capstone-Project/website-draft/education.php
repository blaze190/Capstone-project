<?php include 'scripts/authentication.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Education</title>
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
<!-- Call to script that produces navbar is user is logged in -->
  <?php include 'scripts/navbar.php'; ?>
  <div class="py-3 w-100">
    <div class="container">
      <div class="row2">
        <div class="col-md-12">
          <h3 class="text-primary">EDUCATION</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container"> </div>
  </div>
  <div class="py-5 text-center bg-light">
    <div class="container">
      <div class="row2">
        <div class="col-md-12">
          <h1 class="pb-3 text-secondary">choose a module</h1>
        </div>
      </div>
<!-- List of links to education modules -->
      <div class="row2">
        <div class="text-right col-md-6">
          <div class="row my-5">
            <div class="col-2 order-lg-2 col-2 text-center"></div>
            <div class="col-10 text-lg-right text-left order-lg-1"><i class="fa fa-heartbeat fa-3x"></i>
                <h4 class="text-primary"> <a href="module-1.php">the diabetes disease </a></h4>
              <p>understand what diabetes is, and the different types</p>
            </div>
          </div>
			<div class="row my-5" >
            <div class="col-2 order-lg-2 col-2 text-center"></div>
            <div class="col-10 text-lg-right text-left order-lg-1"><i class="fa fa-circle-thin fa-3x"></i>
                <h4 class="text-primary"><a href="module-3.php">problem solving</a></h4>
              <p>don't let diabetes get in the way of what you love</p>
            </div>
          </div>
          <div class="row my-5">
            <div class="col-2 order-lg-2 col-2 text-center"></div>
            <div class="col-10 text-lg-right text-left order-lg-1"><i class="fa fa-tree fa-3x"></i>
              <h4 class="text-primary"><a href="module-5.php">lifestyle</a></h4>
              <p>how to stay healthy and feeling good</p>
            </div>
          </div>
        </div>
        <div class="text-left col-md-6">
          <div class="row my-5">
            <div class="col-2 text-center"></div>
            <div class="col-10"><i class="fa fa-stethoscope fa-3x"></i>
              <h4 class="text-primary"><a href="module-2.php">treatment &amp; monitoring</a></h4>
              <p>how to effectively manage diabetes</p>
            </div>
          </div>
          <div class="row my-5">
            <div class="col-2 text-center"></div>
            <div class="col-10"><i class="fa fa-medkit fa-3x"></i>
              <h4 class="text-primary"><a href="module-4.php">insulin&nbsp;</a></h4>
              <p>meet your new best friend&nbsp;</p>
            </div>
          </div>
          <div class="row my-5">
            <div class="col-2 text-center"></div>
            <div class="col-10"><i class="fa fa-sort fa-3x"></i>
              <h4 class="text-primary"><a href="module-6.php">hypo &amp; hyper</a></h4>
              <p>learn about different glucose levels, and what to do&nbsp;</p>
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