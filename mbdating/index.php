<?php 
  include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0" />

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	
	</style>
	</head>
	
	<body>
		<!-- this exercise looks like more work than it actually is, since you can copy and paste a majority of it. you might ask yourself in this regard why there is a gap between the navbar and the jumbotron. this is because the navbar is set to static and not to fixed. -->


<nav class="navbar bg-info navbar-fixed-top">
		<div class="container-fluid">
    		<div class="navbar-header">
      		<a class="navbar-brand bg-warning" href="index.php"><strong><span class="glyphicon glyphicon-home" aria-hidden="true"></span> MB Dating</strong></a>
   		</div>
    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-4">
     	 	<ul class="nav navbar-nav">
        	<li class="nav-item"><a class="nav-link" href="about.php"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> About</a></li>
          <li class="nav-item"><a class="nav-link" href="profile.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My Profile</a></li>
          <li class="nav-item"><a class="nav-link" href="search.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search Profiles</a></li>
          <li class="nav-item"><a class="nav-link" href="browse_personalities.php"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Personality Types</a></li>
          <li class="nav-item"><a class="nav-link" href="compatible.php"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Compatible Personalities</a></li>
        </ul>
        
        
      	
      	<ul class="nav navbar-nav navbar-right">
          <?php if(empty($_SESSION['loggedin'])){ ?>
          	<li class="nav-item"><a class="nav-link" href="login.php">Sign in</a></li>
          	<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
          <?php } else { ?>
            <li class="nav-item"><a class="nav-link" href="logout.php">Sign Out</a></li>
          <?php } ?>
        </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    
      <div class="container-fluid btn-warning">
      <br>
      <br>
        <center>
        <h1>Welcome to MB Dating</h1>
        <img src="images/home_image.png" alt="16 personalities" style="width:604px;height:328px;">
        </center>
      </div>
   


   <br>
   <br>
   <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading"><h2>What is exactly is MB Dating?</h2></div>
            <div class="panel-body"><p>MB Dating is a blind dating website that utulizes the reserch and papers written on the Myers-Briggs personaility type indicator to group all users into one of sixteen diffrent personalities, based on 4 divisive character traits.</p>
            <p><a class="btn btn-warning" href="https://en.wikipedia.org/wiki/Myers%E2%80%93Briggs_Type_Indicator" role="button">Myer-Briggs Wiki &raquo;</a></p></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading"><h2>What is my personility type?</h2></div>
            <div class="panel-body"><p>The Myer-Briggs personility indicator is a series of personal questions about ones   thoughts and behavior in common situations. You can take the test for free online in under tweleve minutes by clicking the button bellow.</p>
          <p><a class="btn btn-warning" href="https://www.16personalities.com/free-personality-test" role="button">Take Test &raquo;</a></p></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading"><h2>How does MB Dating work?</h2></div>
            <div class="panel-body"><p>By creating a MB Dating profile, you will be able to search for and get in contact with nearby users with specific personaility types you find compatable to you!</p>
            <br>
            <p><a class="btn btn-warning" href="register.php" role="button">Get Started &raquo;</a></p></div>
          </div>
        </div>
      <br>
    </div> <!-- /container -->

    <br>
    <br>
    
   
    

    <!-- Bootstrap core JavaScript
    
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
		<!-- based off template at https://getbootstrap.com/examples/jumbotron/? -->
	</body>
  
  
</html>