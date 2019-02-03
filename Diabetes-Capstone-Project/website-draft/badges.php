<?php
  include 'scripts/authentication.php';
  include 'scripts/show-badges.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--Sets the width of the page to follow the screen-width of the device-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Capstone Team 31, 2018">
	<meta name="description" content="Diabetes Logbook Application">
	<script type="text/javascript" src="../Javascript/quiz-scripts.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="../theme.css" type="text/css"> 
  <link rel="icon" href="img/icon.png" type="image/x-icon" />
  <title>Badges</title>
</head>
<body>
<!-- Web responisve Navigation Bar with Javascript function to condense links to 3 bar icon - apart from Logbook - if page width less than 600px -->
<!-- Call to script that produces navbar is user is logged in -->
  <?php include 'scripts/navbar.php'; ?>
  <div class="py-3 w-100">
  </div>
  <div class="py-1">
    <div class="container"> </div>
  </div>
  <div class="py-5 text-center bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-light">Badges</h1>
              <p class="text-light">&nbsp;These are the badges you have received for aceing those Quizzes!&nbsp;</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <form action="../profile.php" method="post" onsubmit="return badge();">
  <div class="py-2">
    <div class="container">
      <div class="row mb-5">
        <!-- Initialising all images but having none display -->
        <div class="col-md-20">
          <img src="../Badges/module-one.png" id="mod1" alt="Module One Complete" style="display: none;">
		  <img src="../Badges/module-two.png" id="mod2" alt="Module Two Complete" style="display: none;">
		  <img src="../Badges/module-three.png" id="mod3" alt="Module Three Complete" style="display: none;">
		  <img src="../Badges/module-four.png" id="mod4" alt="Module Four Complete" style="display: none;">
		  <img src="../Badges/module-five.png" id="mod5" alt="Module Five Complete" style="display: none;">
		  <img src="../Badges/module-six.png" id="mod6" alt="Module Six Complete" style="display: none;">
		  <script type="text/javascript">
		
		var collection = []; // Creating the collection array in javascript 
		var badges = ["mod1", "mod2", "mod3", "mod4", "mod5", "mod6"]; // Array containing the ID's of all badges
		
		<?php
		// Copying the badges from the php array to the javascript array
		foreach ($collection as $badge) {
				echo "collection.push(".$badge.");";
			}
		?>
		console.log("JS Badges Earned: ");

		var module = collection[collection.length -1];
		
		// Displaying the images for the badges earnt
		for (var i = 0; i < collection.length; i++) {
			console.log(collection[i]);
			document.getElementById(badges[collection[i]-1]).style.display = "inline-block"
			document.getElementById(badges[collection[i]-1]).style.padding = "0px 43px 0px 43px";
		}
		
		</script>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
		<script>
		// Messages describing the users overall progress for the modules
		console.log("The amount of badges earned is: ", collection.length);
		if (collection.length == 6) {
			document.write("You have earned all the badges!");
		}
		else if (collection.length == 0) {
			document.write("You have no badges");
		}
		else{
			document.write("You have completed Modules ");
			for (var i = 0; i < collection.length; i++) {
				if (i == (collection.length-1)) {
				document.write(collection[i] + " which is " + collection.length + "/6 of the available Modules");
				}
				else {
					document.write(collection[i] + ", ");
				}
			}
		}
		 </script>
			<div>
         		<br><input class="btn btn-primary btn-block" type="submit" name="submit" value="Return"/>
        	</div>
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

