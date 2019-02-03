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
          <h3 class="text-primary">HYPO &amp; HYPER</h3>
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
              <h1 class="text-light">Quiz 6: Hypo &amp; Hyper</h1>
              <p class="text-light">&nbsp;Learn about different glucose levels, and what to do&nbsp;
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
		  <p class="">Which of the following actions might cause you to have a hypo? </p>
          <p class="">
		  
		  <table>
		  <tr>
			<td>
			<input type="radio" name="question16" value="1" required> Not having your insulin with breakfast<br>
			</td>
		  </tr>
		  <tr>
			<td>
			<input type="radio" name="question16" value="2"> Skipping lunch<br>
			</td>
		  </tr>	
		  <tr>
			<td>
			<input type="radio" name="question16" value="3"> Eating too much<br>
			</td>
		  </tr>	
		  <tr>
			<td>		  
			<input type="radio" name="question16" value="4"> Not having enough insulin with dinner&nbsp;
			</td>
		  </tr>	
		  </table>
		  
		  <h2 class="text-primary">Question 2</h2>
		  <p class="">Which of the following is an example of someone having a hypo?</p>
          <p class="">
		   <table>
		  <tr>
			<td>
			<input type="radio" name="question17" value="1" required> Somebody who is tired after exercising with a BSL of 5.3<br>
			</td>
		  </tr>
		  <tr>
			<td>
			<input type="radio" name="question17" value="2"> Somebody who is at home sick with the flu with a BSL of 8.1<br>
			</td>
		  </tr>	
		  <tr>
			<td>
			<input type="radio" name="question17" value="3"> Somebody who forgot to take their night-time insulin with a BSL of 12.0 in the morning<br>
			</td>
		  </tr>	
		  <tr>
			<td>		  
			<input type="radio" name="question17" value="4"> Somebody who feels emotional with a BSL of 3.1&nbsp;
			</td>
		  </tr>	
		  </table>
		  
        </div>
        <div class="col-md-5 align-self-center">
          <img class="img-fluid d-block w-100 img-thumbnail" src="img/q6-1.jpg" alt="Cartoon picture of different types of meals ie Breakfast,lunch and Dinner "> </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="img/q6-2.jpg" alt="Cartoon picture of two people having coffee"> </div>
        <div class="col-md-7">
          <h2 class="text-primary">Question 3</h2>
		  <p class="">What should you do first when you think you are having a hypo?</p>
          <p class="">
		   <table>
		  <tr>
			<td>
			<input type="radio" name="question18" value="1" required> Have a banana<br>
			</td>
		  </tr>
		  <tr>
			<td>
			<input type="radio" name="question18" value="2"> Drink some softdrink<br>
			</td>
		  </tr>	
		  <tr>
			<td>
			<input type="radio" name="question18" value="3"> Inject short acting insulin<br>
			</td>
		  </tr>	
		  <tr>
			<td>		  
			<input type="radio" name="question18" value="4"> Drink water&nbsp;
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
