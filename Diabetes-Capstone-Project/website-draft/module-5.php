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
          <h3 class="text-primary">LIFESTYLE</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container"> </div>
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
          <h2 class="text-primary">You are what you eat...</h2>
          <p class="">Managing diabetes however is not simply about insulin and blood sugars. Diet is also a very important part. 
		<br>Young people with diabetes are told again and again – manage your diabetes or else you will have complications like kidney damage. It’s really hard to wrap your head around this logic, since these long-term problems feel like they are too far off to matter.
		<br>However, there are good reasons that you should maintain good control in the short term that are often forgotten about – for many people maintaining good blood sugars makes them happier and more energetic. 
		<br>Diet plays a big role as well, especially for maximising these short-term benefits. The next few pages will answer some common questions about food and diet asked by young people with diabetes. 
           </p>
        </div>
        <div class="col-md-5 align-self-center">
          <img class="img-fluid d-block w-100 img-thumbnail" src="img/m5-1.jpg" alt="Group of various fruits and vegetables all together"> </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="img/m5-2.jpg" alt="Group of people walking/speedwalking"> </div>
        <div class="col-md-7">
          <h2 class="text-primary pt-3">Get active...</h2>
          <p class="">We all know that physical activity is good for us. But many young people with type 1 find it makes managing their sugars difficult. As a result, many young people lose confidence and stop playing sport or exercising.
			<br>It is sometimes easy to forget that if you don’t exercise it can make it harder to control your blood sugars. It also stops you from gaining weight, which can make it much harder to manage your diabetes. 
			<br>How much exercise should you do?
			<br>This depends on how old you are. 
			<br>People under 18 should exercise or play sport for at least 60 minutes every day. 
			<br>People 18 years or older should exercise or play sport for at least 30 minutes every day.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-primary pt-3">So, what does that mean for me?</h2>
          <br>What are some tips for best controlling my blood sugar with diet?
          <br>Eat three meals a day, roughly 4-6 hours apart
          <br>Do not skip meals
          <br>Try to consistently eat the same amount of carbohydrate at each meal
          <br>If you don’t finish your meal but have already given your insulin, try having a small carbohydrate snack before your next meal
          <br>If you have more carbohydrate with a meal than you planned, consider taking more insulin
          <br>Nutritious, high fibre, low fat foods (they are absorbed slower - generally fruits, wholegrains and dairy) will make you feel less hungry your blood glucose levels, and prevent glucose highs and glucose lows.
        </div>
      </div>
    </div>
  </div>
<!--   Link to quiz -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a class="btn btn-primary btn-block" href="quiz5.php">QUIZ ME</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>