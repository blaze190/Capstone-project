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
          <h3 class="text-primary">PROBLEM SOLVING</h3>
        </div>
      </div>
    </div>
  </div>
<!--   Education module content -->
  <div class="py-5 text-center bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-light">No Problem...</h1>
              <p class="text-light">Everyone who has diabetes eventually has some problems with their BSLs. <br>In this topic, we will consider some examples of how common diabetes problems. </p>
		   </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-7">
          <h2 class="text-primary">Andrew's story...</h2>
          <p class="">Andrew has type one diabetes and lives in Logan. Unfortunately, Andrew’s BSLs have not been well controlled this month. His blood sugar is sometimes too high and sometimes too low. 
			<br>When Andrew looks at his logbook he sees that his BSLs are often too high in the morning and then too low around dinner time. This makes it very difficult for him to calculate the correct insulin dose. 
			<br>At his next doctor’s appointment, Andrew asked the doctor what might be happening. After looking at his logbook the doctor told Andrew his insulin dose with meals might be too high for him! 
			<br>The doctor explained that if too much short-acting insulin is taken, you are most likely to have a hypo around 6 hours later (but as long as 12 hours later). The doctor was also able to adjust Andrew’s insulin to carb ratio and night time insulin, and now his control is much better. Because of this, he is at a much lower risk from having a hypo or being at risk from other serious diseases. 

           </p>
        </div>
        <div class="col-md-5 align-self-center">
          <img class="img-fluid d-block w-100 img-thumbnail" src="img/m3-1.jpg" alt="Boy being tested by a doctor by taking blood"> </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="img/m3-2.jpg" alt="Young people partying and drinking"> </div>
        <div class="col-md-7">
          <h2 class="text-primary pt-3">Katie's story...</h2>
          <p class="">Katie has type one diabetes and lives in Brisbane. Usually, her blood glucose is fairly well controlled. However, she sometimes has problems with low blood sugar. 
				<br>For example, she recently went on a weekend trip with friends. While she was away, her blood sugar went so low that she felt like she was going to pass out. When she drank some cordial, she felt better and her blood sugar rose from 2.4 to 6.2mmol/L. 
				<br>There are many possible causes of low blood sugar. When you are trying to figure out which cause applies to you, it helps to have good records of your monitoring results. This is why you need to use a logbook, or an app like this one, to record your blood sugar readings. 
				<br>The day after Katie's hypo, she thought about what could have led to her very low blood sugar.. 
				<br>Katie knows that she has high stress when she travels, and that often raises her blood glucose, so gave herself a little extra insulin.
				<br>Then she had gone swimming with her friends, and walked more than usual.
				<br>She drunk some alcohol at dinner, which can lower blood sugar.
				<br>And she thinks she may have used too much insulin before dinner, as she didn’t end up finishing her whole meal.
				<br>Any one of these alone might have caused a mild hypo for her. But all together these events caused severe hypoglycaemia.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-primary pt-3">Let's get creative...</h2>
          <p>Most diabetes problems have possible solutions. Good solutions need to fit each person, and that may require some creativity.
          <br>Fortunately, effective problem-solving can be helped by:
          <br>Keeping an accurate logbook, recording BSLs, insulin doses and time spent exercising
          <br>Checking your BSL if you feel sick, skip a meal, or before you take any insulin</p>
        </div>
      </div>
    </div>
  </div>
<!--   Link to Quiz -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a class="btn btn-primary btn-block" href="quiz3.php">QUIZ ME</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>