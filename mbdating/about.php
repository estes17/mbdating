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


<nav class="navbar navbar-info bg-info navbar-fixed-top">
	<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand bg-warning" href="index.php"><strong><span class="glyphicon glyphicon-home" aria-hidden="true"></span> MB Dating</strong></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="about.php"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> About</a></li>
        <li><a href="profile.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My Profile</a></li>
        <li><a href="search.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search Profiles</a></li>
        <li><a href="browse_personalities.php"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Personality Types</a></li>
        <li><a href="compatible.php"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Compatible Personalities</a></li>
      </ul>
    	<ul class="nav navbar-nav navbar-right">
        <?php if(empty($_SESSION['loggedin'])){ ?>
        	<li><a href="login.php">Sign in</a></li>
        	<li><a href="register.php">Register</a></li>
        <?php } else { ?>
          <li><a href="logout.php">Sign Out</a></li>
        <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br>
<br>
<br>
    <center><h1>About</h1></center>
  
  
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <img src="images/about.png" alt="16 personalities" style="width:300px;height:300px;">
        </div>
        <br>
        <div class="col-md-8">
          <div class="panel panel-primary">
            <div class="panel-heading bg-warning"><h2>The Idea Behind MB Dating</h2></div>
             <div class="panel-body bg-warning"><h4>Unlike most modern dating sites/apps, that ask users to make split second decisions if they would be intrested in someone based off of five photos of them; MB Dating gives you the tools to find someone with a personality you love and let you go from there. MB Dating puts personality first and formost providing you the tools to better know yourself and what personality type you are looking for!</h4></div>
          </div>
        </div>
          
          
        </div>
        
     
      </div>
    </div><!-- /container -->

   <br>
   <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-13">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>How To Use MB Dating</h2></div>
            <div class="panel-body bg-info">
              <p>1. Determine your Myers-Briggs personality type, one of 16 distinct set of 4 letters based off of four distanct characteristics. If you do not know your personality type, you can click <a href="https://www.16personalities.com/free-personality-test">here</a> to take a free and fast test to determine your personality type.</p>
              <br>
              <p>2. Create an MB Dating profile, with basic information on yourself as well as an email address that interestend mates can contact you from. Making an MB Dating profile will allow you to search for nearby personaility types, and lets others find you. You can create a free MB Dating profile <a href="register.php">here</a> .</p>
              <br>
              <p>3. Learn about the diffrent personality types and work to determine which type you believe you would be the most compatable with. You can read about the diffrenent personalities <a href="register.php">here</a> and check out links about the compatability between the diffrent personality types <a href="register.php">here</a>.</p>
              <br>
              <p>4. Search the MB Dating profiles by personaility type, distance and gender to find the perfectly compatiable match for yourself by clicking <a href="browse_profiles.php">here</a>!</p>
            </div>
          </div>
        </div>  
    </div> <!-- /container -->

    <br>
    

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