<?php include 'scripts/authentication.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--Sets the width of the page to follow the screen-width of the device-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Capstone Team 31, 2018">
	<meta name="description" content="Diabetes Logbook Application">
  	<title>Education</title>
  	<link rel="icon" href="img/icon.png" type="image/x-icon" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="theme.css" type="text/css"> 
</head>
<body>
<!-- Web responisve Navigation Bar with Javascript function to condense links to 3 bar icon - apart from Logbook - if page width less than 600px -->
<!-- Call to script that produces navbar is user is logged in -->
  <?php include 'scripts/navbar.php'; ?>
  <div class="py-3 w-100">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-primary">THE DIABETES DISEASE</h3>
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
              <h1 class="text-light">Quiz 1: Understanding Diabetes</h1>
              <p class="text-light">&nbsp;Testing your understanding of the fundamentals surrounding diabetes&nbsp;
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
		  <p class="">What organ makes insulin?</p>
          <p class="">
		  
		  <table>
		  <tr>
			<td>
			<input type="radio" name="question1" value="1" required> The Kidneys<br>
			</td>
		  </tr>
		  <tr>
			<td>
			<input type="radio" name="question1" value="2"> The Pancreas<br>
			</td>
		  </tr>	
		  <tr>
			<td>
			<input type="radio" name="question1" value="3"> The Brain<br>
			</td>
		  </tr>	
		  <tr>
			<td>		  
			<input type="radio" name="question1" value="4"> The Liver&nbsp;
			</td>
		  </tr>	
		  </table>
		  
		  <h2 class="text-primary">Question 2</h2>
		  <p class="">What is the most common type of diabetes that affects young adults?</p>
          <p class="">
		   <table>
		  <tr>
			<td>
			<input type="radio" name="question2" value="1" required> Type 1 Diabetes<br>
			</td>
		  </tr>
		  <tr>
			<td>
			<input type="radio" name="question2" value="2"> Type 2 Diabetes<br>
			</td>
		  </tr>	
		  <tr>
			<td>
			<input type="radio" name="question2" value="3"> Gestational Diabetes<br>
			</td>
		  </tr>	
		  <tr>
			<td>		  
			<input type="radio" name="question2" value="4"> Sugar Diabetes&nbsp;
			</td>
		  </tr>	
		  </table>
		  
        </div>
        <div class="col-md-5 align-self-center">
          <img class="img-fluid d-block w-100 img-thumbnail" src="img/q1-1.jpg" alt="Picture of a happy cartoon pancreas"> </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="img/q1-2.jpg" alt=" Picture of a cartoon packet of sugar and blood on a medical device"> </div>
        <div class="col-md-7">
          <h2 class="text-primary">Question 3</h2>
		  <p class="">Having type one diabetes means:</p>
          <p class="">
		   <table>
		  <tr>
			<td>
			<input type="radio" name="question3" value="1" required> You eat too much<br>
			</td>
		  </tr>
		  <tr>
			<td>
			<input type="radio" name="question3" value="2"> You don't do enough exercise<br>
			</td>
		  </tr>	
		  <tr>
			<td>
			<input type="radio" name="question3" value="3"> You don't eat enough sugar<br>
			</td>
		  </tr>	
		  <tr>
			<td>		  
			<input type="radio" name="question3" value="4"> Your pancreas does not make enough insulin&nbsp;
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
