<?php
include('config.php');

if(!empty($_SESSION['loggedin'])){
  header('location: profile.php');
}

if (count($_POST)>0) {
  $email = $_POST['email'];
  $password = sha1($_POST['password']);
  $result = mysql_query("SELECT * FROM `member` WHERE `email`='".$email."' AND `password`='".$password."'");
  $valid_user = 'invalid';
  if(!empty($result)) {
    $user_row = mysql_fetch_object($result);
    //$count = mysql_num_rows($result);
    if(count($user_row)==1){
      $_SESSION['loggedin'] = true;
      $_SESSION['user_id'] = $user_row->id;
      header('location: profile.php');
    }
  }
}
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


<nav class="navbar navbar-info bg-info navbar-static-top">
		<div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand bg-warning" href="index.php"><strong><span class="glyphicon glyphicon-home" aria-hidden="true"></span> MB Dating</strong></a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-4">
        <ul class="nav navbar-nav">
          <li><a href="about.php"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> About</a></li>
          <li><a href="profile.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My Profile</a></li>
          <li><a href="search.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search Profiles</a></li>
          <li><a href="browse_personalities.php"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Personality Types</a></li>
          <li><a href="compatible.php"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Compatible Personalities</a></li>
        </ul>
      	<ul class="nav navbar-nav navbar-right">
        	<li><a href="register.php">Register</a></li>
        </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<center><h1>Sign in</h1></center>
  <?php 
    if(!empty($valid_user) && $valid_user=='invalid') { 
  ?>
  <div class="error">
    <h5>Error!</h5>
    <p>The Email or the password is not valid. Please try again.</p>
  </div>
  <?php 
    }
  ?>
  <form class="form-horizontal" method="POST">
  <div class="form-group">
    <label class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-8">
      <input class="form-control" type="email" name="email">
    </div>
  </div>
  <form class="form-horizontal">
  <div class="form-group">
    <label class="col-sm-2 control-label">Password:</label>
    <div class="col-sm-8">
      <input class="form-control" type="password" name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <input type="submit" class="btn btn-warning" value="Sign in">
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <center>
    <div class="container-fluid bg-warning">
        <h5><a href="index.php">MB Dating &copy;</a></h5>
        <p>By M. Estes (2017) - Resources from 16personalities.com</p>
    </div>
  </center>


 </form>


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