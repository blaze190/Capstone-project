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
          <h3 class="text-primary">INSULIN</h3>
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
              <h1 class="text-light">Insulin...</h1>
              <p class="text-light">If you have Type 1 Diabetes, you need to use insulin every day. Insulin is given as an injection – which means inserting a needle just under the skin.<br>There are two main types of insulin: quick acting (QA), and long acting insulin 
				Quick acting insulin is absorbed quickly into the body. It is taken just before or just after a meal so that your body can absorb glucose. It can also be taken when blood sugar is too high. 
				Novorapid is the name used for rapid acting insulin, but yours might have a different name on the box.
				Long acting insulin is absorbed slower. This insulin is used to ensure there is always a small amount of insulin in your system so glucose can be absorbed by your cells. 
				Long acting insulin is also called background insulin (BI).
			  </p>
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
          <h2 class="text-primary">Using insulin...</h2>
          <p class="">When do I use insulin?
			<br>Your doctor will tell you how much insulin to use, what type to use and when to use it.
			<br>Generally, young adults will need multiple injections of insulin every day. These injections are normally given just before or just after a meal. 
			<br>How do I know how much insulin to give?
			<br>Each person has different insulin needs. You will learn to calculate your own requirements with help from your doctor and diabetes educator. 
			<br>Long acting insulin is easy because it’s taken at set times every day. This one is easy. 
			<br>Quick acting insulin is taken with meals, or to correct a blood sugar that is too high or too low. You can work out how much to take with a meal by:
			<br>Counting how much carbohydrate is in the meal. 
			<br>Measuring your current blood sugar. You may need to adjust how much insulin is given if it is too high or low.
           </p>
        </div>
        <div class="col-md-5 align-self-center">
          <img class="img-fluid d-block w-100 img-thumbnail" src="img/m4-1.jpg" alt="person injecting themselves with a fluid"> </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="img/m4-2.jpg" alt="Person holding a blue needle"> </div>
        <div class="col-md-7">
          <h2 class="text-primary pt-3">Measurement and timing</h2>
          <p class="">Do I need to measure my blood sugar before I give insulin?
			<br>Yes, always. Otherwise you won’t know how much to use. 
			<br>You should have the following targets in mind when measuring:
			<br>BSLs need to be measured at least four times per day
			<br>Before meals your BSL should be between 4-7mmol/L or a correction will be needed
			<br>Before bed your BSL should be between 6-7mmol/L or a correction might be needed. 
			<br>Do I need record how much insulin I give?
			<br>Yes, always write this in your log book
			<br>Where do I inject insulin?
			<br>Insulin is injected into the fat layer just under your skin.
			<br>You can inject insulin into your abdomen, buttocks and upper thigh.
			<br>If insulin is injected anywhere else, it gets absorbed too fast.
			<br>It is important you use a different spot each time you inject insulin so your skin doesn’t get lumpy or scarred. 
			</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-primary pt-3">Instructions...</h2>
          <br>Most people inject insulin using a pen or syringe. 
          <br>If you use a pen, you should follow these instructions:
          <br>Wash your hands
          <br>Measure your blood glucose
          <br>Check there is insulin in your pen and it is working properly
          <br>Remove the protective cap
          <br>Dial up the number of insulin units you need to take
          <br>Gently pinch up the skin around where you will give the shot and hold firmly
          <br>Insert the needle using your other hand at a 45-90 degree angle
          <br>While the needle is in your skin press the button all the way returning to zero, and keep pressing for six seconds
          <br>Wipe any blood away with a tissue, and replace the needle cap
          <br>Wash your hands
        </div>
      </div>
    </div>
  </div>
<!--   Link to quiz -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a class="btn btn-primary btn-block" href="quiz4.php">QUIZ ME</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>