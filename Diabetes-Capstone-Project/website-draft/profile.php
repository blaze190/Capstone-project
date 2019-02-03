<?php include 'scripts/authentication.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
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
  <?php include 'scripts/navbar.php'; ?>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-primary">YOUR PROFILE</h3>
        </div>
      </div>
    </div>
  </div>
<!--   Table containing profile picture and profile data  -->
  <div class="p-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <?php include 'scripts/profile-picture.php' ?> 
            <?php include 'scripts/profile-data.php' ?>
<!-- Update profile picture button - clicking opens modal content - profile picture selector pop up box -->
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">UPDATE PROFILE PICTURE</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
<!-- Modal content - Profile picture selector pop up box-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Profile Picture Selector</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
<!-- Form to update profile picture -->
          <form action="scripts/update-profile-picture.php" method='POST' enctype="multipart/form-data">
            <div>
              <select name="image-select" id="profile-picture">
                <option value="boy1">Boy 1</option>
                <option value="boy2">Boy 2</option>
                <option value="boy3">Boy 3</option>
                <option value="girl1">Girl 1</option>
                <option value="girl2">Girl 2</option>
                <option value="girl3">Girl 3</option>
              </select>
            </div>
            <div class="boy1 pic">
              <img src="img/boy1.svg" alt="picture of a black boy with an afro in a yellow and green t-shirt" />
            </div>
            <div class="boy2 pic">
              <img src="img/boy2.svg" alt="Picture of a white boy with spikey hair in a blue jacket wearing a green t-shirt"/>
            </div>
            <div class="boy3 pic">
              <img src="img/boy3.svg" alt="Picture of a white boy with smooth hair in a red t-shirt" />
            </div>
            <div class="girl1 pic">
              <img src="img/girl1.svg" alt="Picture of a black girl with an afro in a yellow shirt" />
            </div>
            <div class="girl2 pic">
              <img src="img/girl2.svg" alt="Picture of a white girl with long blond hair with a red shirt and blue overalls" />
            </div>
            <div class="girl3 pic">
              <img src="img/girl3.svg" alt="Picture of a white girl with brown bangs and a blue shirt" />
            </div>
            <button type="submit" name="submit">Update </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn-primary btn-block" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="Javascript/titlecard.js"></script>  
</body>

</html>