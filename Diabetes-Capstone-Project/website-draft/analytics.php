<?php
  include 'scripts/authentication.php';  
  include 'scripts/graphdata.php'; 
  include 'scripts/search-graph.php';
?>
<link rel="icon" href="img/icon.png" type="image/x-icon" />
<input type="hidden" name="foo" value="<?php echo $test1;?>" />
<!DOCTYPE html>
<html>
<head>
  <title>Analytics</title> 
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
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-primary">ANALYTICS</h3>
        </div>
      </div>
    </div>
  </div>
<!--   Drop down menu to select graph type -->
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">                                    
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Graph
          <span class="caret"></span></button>
          <ul class="dropdown-menu" id="dropselect">
            <li><a id="carbbtn">Carb Exchange</a></li>
            <li><a  id="bloodbtn">Blood Glucose</a></li>
            <li><a id="qabtn">Quick Acting Insulin</a></li>
            <li><a id="backgroundbtn">Basal Insulin</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>  
<!-- Canvas for graph to be displayed on -->
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <canvas id="linecanvasday" width="200" height="100"></canvas>
        </div>
      </div>
    </div>
  </div>
<!-- Form to search for different dates on the graph -->
  <div class="py-2">
    <div class="container">
      <form class="graph-entry" action='analytics.php' method='POST'>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group form-row"> <label class="col-form-label col-md-4">Start Date</label>
              <div class="col-sm-10">
                <input type="date" id="fromDate" class="form-control" required="required" name="startDate"> 
              </div>
            </div>
          </div>
          <div class="col-md-6">    
            <div class="form-group form-row"> <label class="col-form-label col-md-4">End Date</label>
              <div class="col-sm-10">
                <input type="date" id="toDate" class="form-control" required="required" name="endDate"> 
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <a class="btn btn-primary btn-block" id="sort"  role="button" style="color:white;">SEARCH</a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.js"   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script> 
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="Javascript/draw-chart.js"></script>  
</body>

</html>