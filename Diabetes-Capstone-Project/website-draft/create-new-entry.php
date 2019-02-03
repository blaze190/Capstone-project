<?php include 'scripts/authentication.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Logbook</title>
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
          <h3 class="text-primary">NEW LOGBOOK ENTRY</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row2">
        <div class="col-md-12">
          <p class="entry_desc">Fill out the below form to add a new logbook entry. <br> You must fill out all fields to log an entry. <br>Press the cancel button to go back to the logbook.&nbsp;</p>
		</div>
      </div>
    </div>
  </div>
<!--   Form to add a new log entry -->
  <div class="py-1">
    <div class="container">
      <form class="logbook-entry" action='scripts/update-logs.php' method='POST'>
      <div class="row2">
        <div class="col-md-6">
          <div class="form-group form-row"> <label class="col-form-label col-md-4">Date</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" required="required" name="date"> 
            </div>
          </div>
          <div class="form-group form-row"> <label class="col-form-label col-md-4">QA Correction</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="qa-correction" required="required"> 
            </div>
          </div>
          <div class="form-group form-row"> <label class="col-form-label col-md-4">Carb Exchange (CE)</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="carb-exchange" required="required"> 
            </div>
          </div>
          <div class="form-group form-row"> <label class="col-form-label col-md-4">Blood Glucose</label>
            <div class="col-sm-10">
                <input type="number" step="0.1" class="form-control" name="blood-glucose" required="required"> 
              </div>
          </div>
          <button type="button" class="btn btn-primary btn-block" onclick="window.location.href='../logbook.php'">CANCEL</button>       
        </div>
        <div class="col-md-6">
          <div class="form-group form-row"> <label class="col-form-label col-md-4">Time</label>
            <div class="col-sm-10">
              <input type="time" class="form-control" required="required" name="time"> 
            </div>
          </div>
          <div class="form-group form-row"> <label class="col-sm-2 col-form-label col-md-7">CE Correction</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="carb-exchange-correction"> 
            </div>
          </div>
          <div class="form-group form-row"> <label class="col-sm-2 col-form-label col-md-7">Quick Acting Insulin</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="qa-insulin"> 
            </div>
          </div>
            <div class="form-group form-row"> <label class="col-sm-2 col-form-label col-md-7">Basal Insulin</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="b-insulin"> 
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>   
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>