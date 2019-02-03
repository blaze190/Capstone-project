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
<!-- Education module content -->
  <div class="py-5 text-center bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-light">What is Diabetes?</h1>
              <p class="text-light">&nbsp;Diabetes is when your body cannot manage the levels of sugar in your blood.
                <br>&nbsp;When someone has Type 1 diabetes, the body’s immune system attacks the pancreas until it cannot make enough insulin. Scientists still don’t know why this happens. This makes your blood sugar high and your cells very hungry. Your
                cells then have to make ketones, as another way of getting energy.&nbsp;
                <br>Ketones make you feel sick. So, we must make sure diabetics get insulin in a different way.&nbsp;
                <br>
                <br>Type 2 Diabetes is the other type of diabetes. &nbsp;It is more common in older people and people who eat unhealthy foods or do not exercise.&nbsp;</p>
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
          <h2 class="text-primary">Insulin &amp; blood sugar</h2>
          <p class="">Insulin is made by the pancreas. Insulin helps sugar get from your blood into your cells. &nbsp;Your cells then use the sugar for energy that your body needs. It lowers your blood sugar.
            <br>
            <br>Sugar, also called Glucose, is absorbed by your body from the food you eat.&nbsp;
            <br>Glucose is like fuel for the body because the body needs glucose for energy.&nbsp;
            <br>It gets around the body in the blood and too much or too little sugar in the blood is unhealthy. The amount of sugar in your blood is referred to as your “blood sugar” level.&nbsp;</p>
        </div>
        <div class="col-md-5 align-self-center">
          <img class="img-fluid d-block w-100 img-thumbnail" src="img/m1-1.jpg" alt=" Person pricking their finger with pen like object"> </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="img/m1-2.jpg" alt="Diagram on the two different types of diabetes and the difference"> </div>
        <div class="col-md-7">
          <h2 class="text-primary pt-3">Diagnosing diabetes</h2>
          <p class="">Being diagnosed with diabetes can come as a shock.&nbsp;
            <br>
            <br>&nbsp;However, as you start to learn more about diabetes, you should feel better.
            <br>
            <br>&nbsp;Different people cope differently, and how long it takes for those feelings to resolve is different for each person. </p>
        </div>
      </div>
    </div>
  </div>
<!--   Link to quiz -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a class="btn btn-primary btn-block" href="quiz1.php">QUIZ ME</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>