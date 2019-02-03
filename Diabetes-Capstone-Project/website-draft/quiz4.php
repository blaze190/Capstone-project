<?php include 'scripts/authentication.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--Sets the width of the page to follow the screen-width of the device-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Capstone Team 31, 2018">
	<meta name="description" content="Diabetes Logbook Application">
  	<link rel="icon" href="img/icon.png" type="image/x-icon" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="theme.css" type="text/css"> 
	<title>Education</title>	
</head>
<body>
<!-- Web responisve Navigation Bar with Javascript function to condense links to 3 bar icon - apart from Logbook - if page width less than 600px -->
<!-- Call to script that produces navbar is user is logged in -->
  <?php include 'scripts/navbar.php'; ?>
  <div class="py-3 w-100">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-primary">INSULIN</h3>
        </div>
      </div>
    </div>
  </div>
<!-- Quiz heading and description -->
  <div class="py-5 text-center bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-light">Quiz 4 - Insulin</h1>
              <p class="text-light">&nbsp;Meet your new best friend&nbsp;
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Form to submit quiz answers to database -->
  <form action="quiz-result.php" method="post">
  <div class="py-2">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-7">
          <h2 class="text-primary">Question 1</h2>
		  <p class="">Which type of insulin do most people with diabetes take right before eating?</p>
          <p class="">
		  
		  <table>
		  <tr>
			<td>
			<input type="radio" name="question10" value="1" required> Background Insulin<br>
			</td>
		  </tr>
		  <tr>
			<td>
			<input type="radio" name="question10" value="2"> Long acting insulin<br>
			</td>
		  </tr>	
		  <tr>
			<td>
			<input type="radio" name="question10" value="3"> Quick acting insulin<br>
			</td>
		  </tr>	
		  <tr>
			<td>		  
			<input type="radio" name="question10" value="4"> Nightime insulin&nbsp;
			</td>
		  </tr>	
		  </table>
		  
		  <h2 class="text-primary">Question 2</h2>
		  <p class="">What are carbohydrates broken down to in the digestive system?</p>
          <p class="">
		   <table>
		  <tr>
			<td>
			<input type="radio" name="question11" value="1" required> Ketones<br>
			</td>
		  </tr>
		  <tr>
			<td>
			<input type="radio" name="question11" value="2"> Insulin<br>
			</td>
		  </tr>	
		  <tr>
			<td>
			<input type="radio" name="question11" value="3"> Enzymes<br>
			</td>
		  </tr>	
		  <tr>
			<td>		  
			<input type="radio" name="question11" value="4"> Glucose&nbsp;
			</td>
		  </tr>	
		  </table>
		  
        </div>
        <div class="col-md-5 align-self-center">
          <img class="img-fluid d-block w-100 img-thumbnail" src="img/q4-1.jpg" alt="Picture of a cartoon needle and vial"> </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="img/q4-2.jpg" alt="Picture of a cartoon person testing their blood in a diabetes blood tester"> </div>
        <div class="col-md-7">
          <h2 class="text-primary">Question 3</h2>
		  <p class="">Where can I find out how much insulin to use?</p>
          <p class="">
		   <table>
		  <tr>
			<td>
			<input type="radio" name="question12" value="1" required> Asking my doctor and reading the information they gave me<br>
			</td>
		  </tr>
		  <tr>
			<td>
			<input type="radio" name="question12" value="2"> Searching the internet<br>
			</td>
		  </tr>	
		  <tr>
			<td>
			<input type="radio" name="question12" value="3"> Reading a book<br>
			</td>
		  </tr>	
		  <tr>
			<td>		  
			<input type="radio" name="question12" value="4"> Asking my friends&nbsp;
			</td>
		  </tr>	
		  </table>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <input class="btn btn-primary btn-block" type="submit" name="submit" value="SUBMIT"/>
        </div>
      </div>
    </div>
  </div>
  </form>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
