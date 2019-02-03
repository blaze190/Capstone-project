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
<!-- Call to script that produces navbar is user is logged in -->
  <?php include 'scripts/navbar.php'; ?>
  <div class="py-3 w-100">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-primary">LOGBOOK</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
<!--   Link to create new logbook entry -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a class="btn btn-primary btn-block" href="create-new-entry.php">CREATE NEW ENTRY</a>
        </div>
      </div>
<!--   Form to allow user to search for dates in logbook -->
      <form class="logbook-entry" action='logbook.php' method='POST'>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group form-row"> <label class="col-form-label col-md-4">Start Date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" required="required" name="startDate"> 
              </div>
            </div>
          </div>
          <div class="col-md-6">    
            <div class="form-group form-row"> <label class="col-form-label col-md-4">End Date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" required="required" name="endDate"> 
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block">SEARCH</button>
          </div>
        </div>
      </form>
    </div>
  </div>
<!--   Call to script that searches database and displays users logs in a table -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php include 'scripts/logbook-table.php'; ?>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>