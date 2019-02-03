<!-- Web responisve Navigation Bar with Javascript function to condense links to 3 bar icon - apart from Logbook - if page width less than 600px -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary navbar-expand-x1 navbar-expand-lg navbar-expand-sm">
  <div class="container">
<!--    If user is logged in then logo links to logbook back -->
<!--    If user is not logged in then logo links to log in page  -->
    <?php
      if(isset($_SESSION['id']) && $_SESSION['id']=hash_hmac('sha512', $_SESSION['username'], '89hv5vE2T802')) {
        echo '<a class="navbar-brand" href="logbook.php">DIABETES LOGBOOK</a>';
      } else {  
        echo '<a class="navbar-brand" href="index.php">DIABETES LOGBOOK</a>';
      }
    ?>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
<!-- Display navbar links authentication is successful -->      
      <?php
        if(isset($_SESSION['id']) && $_SESSION['id']=hash_hmac('sha512', $_SESSION['username'], '89hv5vE2T802')) {
          echo '<ul class="navbar-nav">';
            echo '<li class="nav-item">';
            echo    '<a class="nav-link" href="logbook.php"><i class="fa d-inline fa-lg fa-calendar"></i>&nbsp; LOGBOOK</a>';
            echo '</li>';
            echo '<li class="nav-item">';
              echo '<a class="nav-link" href="analytics.php"><i class="fa d-inline fa-lg fa fa-bar-chart"></i>&nbsp; ANALYTICS</a>';
            echo '</li>';
            echo '<li class="nav-item">';
              echo '<a class="nav-link" href="education.php"><i class="fa d-inline fa-lg fa fa-puzzle-piece"></i>&nbsp; EDUCATION</a>';
            echo '</li>';
            echo '<li class="nav-item">';
              echo '<a class="nav-link" href="profile.php"><i class="fa d-inline fa-lg fa fa-child"></i>&nbsp; PROFILE</a>';
            echo '</li>';
            echo '<li class="nav-item">';
              echo '<a class="nav-link" href="scripts/logmeout.php"><i class="fa d-inline fa-lgfa fa-cogs"></i>&nbsp; LOGOUT</a>';
            echo '</li>';
          echo '</ul>'; 
        } else {}
      ?>
    </div>
  </div>
</nav>