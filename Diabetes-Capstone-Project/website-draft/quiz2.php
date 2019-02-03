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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"/>
	<link rel="stylesheet" href="theme.css" type="text/css"/> 
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
          <h3 class="text-primary">TREATMENT &amp; MONITORING</h3>
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
              <h1 class="text-light">Quiz 2: Treatment &amp; Monitoring</h1>
              <p class="text-light">&nbsp;Diabetes treatments and what can happen if you don't stay on top of things. how can you monitor your health, and prevent complications&nbsp;
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
		  <p class="">What is the normal blood glucose range for most people?</p>
          <p class="">
		  
		  <table>
		  <tr>
			<td>
			<input type="radio" name="question4" value="1" required> 4-7mmol/L<br>
			</td>
		  </tr>
		  <tr>
			<td>
			<input type="radio" name="question4" value="2"> 1-2mmol/L<br>
			</td>
		  </tr>	
		  <tr>
			<td>
			<input type="radio" name="question4" value="3"> 2-5mmol/L<br>
			</td>
		  </tr>	
		  <tr>
			<td>		  
			<input type="radio" name="question4" value="4"> 7-10mmol/L&nbsp;
			</td>
		  </tr>	
		  </table>
		  
		  <h2 class="text-primary">Question 2</h2>
		  <p class="">Which of the following are important in the treatment of diabetes?</p>
          <p class="">
		   <table>
		  <tr>
			<td>
			<input type="radio" name="question5" value="1" required> Exercise<br>
			</td>
		  </tr>
		  <tr>
			<td>
			<input type="radio" name="question5" value="2"> Having a good diet<br>
			</td>
		  </tr>	
		  <tr>
			<td>
			<input type="radio" name="question5" value="3"> Learning to use insulin<br>
			</td>
		  </tr>	
		  <tr>
			<td>		  
			<input type="radio" name="question5" value="4"> All of the above&nbsp;
			</td>
		  </tr>	
		  </table>
		  
        </div>
        <div class="col-md-5 align-self-center">
          <img class="img-fluid d-block w-100 img-thumbnail" src="img/q2-1.jpg" alt="Picture of a cartoon doctor next to cartoon pills and medicine"> </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="img/q2-2.jpg" alt="Three pictures side by side first is a person exercising, second is a diabetes blood tester, Third is pills and medicine"> </div>
        <div class="col-md-7">
          <h2 class="text-primary">Question 3</h2>
		  <p class="">If diabetes isn’t treated, which of the following can happen?</p>
          <p class="">
		   <table>
		  <tr>
			<td>
			<input type="radio" name="question6" value="1" required> A medical emergency due to diabetes<br>
			</td>
		  </tr>
		  <tr>
			<td>
			<input type="radio" name="question6" value="2"> Vision problems<br>
			</td>
		  </tr>	
		  <tr>
			<td>
			<input type="radio" name="question6" value="3"> Kidney problems<br>
			</td>
		  </tr>	
		  <tr>
			<td>		  
			<input type="radio" name="question6" value="4"> All of the above&nbsp;
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
