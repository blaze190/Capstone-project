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
          <h3 class="text-primary">TREATMENT &amp; MONITORING</h3>
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
              <h1 class="text-light">What Is Key To Diabetes Treatment?</h1>
              <p class="text-light">&nbsp;The key to taking care of your diabetes is to keep your blood glucose as close to normal as possible.
                <br>&nbsp;For most people a blood glucose between 4 and 7 is normal, but your doctor will tell you what blood glucose level is right for you.&nbsp;
                <br>Your goal is to keep your blood glucose as close to this level as you can.&nbsp;
                <br>&nbsp;A blood sugar that is too high is bad, and so is having a blood sugar too low. Both are potentially dangerous. &nbsp;</p>
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
          <h2 class="text-primary">Checking your blood glucose</h2>
          <p class="">Your doctor or diabetes educator will teach you how to check your blood sugar with a glucose meter (glucometer) at home. Most people have to do this a few times every day.
            <br>
            <br>In Type 1 Diabetes, insulin injections are needed to control your blood sugar levels. Insulin helps glucose get from your blood into your cells. This is good because it lowers your blood sugar, and gives your cells energy. You will also need
            to learn how to use other diabetes medications if you experience a diabetes emergency!&nbsp;
            <br>
            <br>Diabetes is monitored by checking blood sugar levels. This is done both by you at home, and by the doctor when you visit them. &nbsp;The term Blood Glucose Level (or Blood Sugar Level) is often abbreviated to BSL or BGL. These terms all mean
            the same thing. Recording other factors such as exercise, carbs and insulin also play a role in monitoring.&nbsp;</p>
        </div>
        <div class="col-md-5 align-self-center">
          <img class="img-fluid d-block w-100 img-thumbnail" src="img/m2-1.jpg" alt="Group of pills, needles and other types of medical instruments"> </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="img/m2-2.jpg" alt="Doctor and paitent talking"> </div>
        <div class="col-md-7">
          <h2 class="text-primary pt-3">Using a glucometer</h2>
          <p class="">1. Wash hands with soap and water, and dry them well&nbsp;
            <br>2. Get the glucometer, strips and finger prick ready&nbsp;
            <br>3. Prick the side of your finger, and gently squeeze your finger to form a drop of blood to put on the strip&nbsp;
            <br>4. Use a tissue to dry the blood on your finger&nbsp;
            <br>5. Record your BSL reading on the glucometer in your diabetes logbook or this app 6. Wash hands with soap and water again&nbsp;
            <br>It is best to measure your BSL 6 times per day. You should do this before meals and before you go to bed. You should perform additional readings after you exercise or if you feel sick. &nbsp;</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-primary pt-3">Why treat diabetes?</h2>
          <p>&nbsp;When you go to the doctor they will measure your blood sugar just like you do. However, they will also test for your glycosylated haemoglobin level - hbA1c for short. This tells them what your average blood sugar has been over the last
            10 weeks – so you can’t cheat on this test!&nbsp;
            <br>
            <br>When blood glucose is too high too often, it can harm blood vessels and cause heart attacks. &nbsp;It can also damage organs in the body and cause blindness, kidney failure, or loss of toes or feet. The good news is that when you take care
            of your diabetes, you can reduce your chance by having these problems by a lot. &nbsp;Do not let diabetes stop you! You can still do all the things your friends do and live a long and healthy life. </p>
        </div>
      </div>
    </div>
  </div>
<!--   Link to quiz -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a class="btn btn-primary btn-block" href="quiz2.php">QUIZ ME</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>