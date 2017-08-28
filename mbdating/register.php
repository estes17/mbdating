<?php 
include('config.php');

if(!empty($_SESSION['loggedin'])){
  header('location: profile.php');
}

if (!empty($_POST)) {
  $email = $_POST['email'];
  $password = sha1($_POST['password']);
  $first_name = $_POST['first_name'];
  $address = $_POST['address'];
  $birthday = $_POST['birthday'];
  $birthday = date("Y-m-d H:i:s",strtotime($birthday));
  $gender = $_POST['gender'];
  $personality_type_id = $_POST['personality_type_id'];
  $bio = $_POST['bio'];
  //Get the coordinations
  $coordiantion = addressToCoordinations($address);
  $lat = $coordiantion['lat'];
  $lng = $coordiantion['lng'];
  mysql_query("insert into `member` (`email`,`password`,`first_name`,`address`,`lat`,`lng`,`gender`,`birthday`,`bio`,`personality_type_id`) VALUES('".$email."','".$password."','".$first_name."','".$address."','".$lat."','".$lng."','".$gender."','".$birthday."','".$bio."',".$personality_type_id.")");
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
          <li><a href="login.php">Sign in</a></li>
        </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<form method="POST">
  <center><h1>Create a Profile</h1></center>
  <div class="form-horizontal">
    <div class="form-group">
      <label class="col-sm-2 control-label">Email:</label>
      <div class="col-sm-8">
        <input class="form-control" name="email" type="email">
      </div>
    </div>
    <div class="form-horizontal">
      <div class="form-group">
        <label class="col-sm-2 control-label">Password:</label>
        <div class="col-sm-8">
          <input class="form-control" name="password" type="password">
        </div>
      </div>
      <div class="form-horizontal">
        <div class="form-group">
          <label class="col-sm-2 control-label">First Name:</label>
          <div class="col-sm-8">
            <input class="form-control" name="first_name" type="text">
          </div>
        </div>
        <div class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label">Address:</label>
            <div class="col-sm-8">
              <input class="form-control" name="address" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Birthday:</label>
            <div class="col-sm-8">
              <input class="form-control" name="birthday" placeholder="YYYY-MM-DD" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Gender:</label>
            <div class="col-sm-8">
              <div class="radio">
                <label>
                  <input type="radio" name="gender" id="optionsRadios1" value="1">
                  Male
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="gender" id="optionsRadios2" value="2">
                  Female
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="gender" id="optionsRadios3" value="3">
                  Other
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Personality Type:</label>
            <div class="col-sm-8">
              <select multiple class="form-control" name="personality_type_id" id="exampleSelect2">
                <?php
                $results = mysql_query('SELECT * FROM `personality_types`');
                while ($row = mysql_fetch_object($results)) {
                  echo '<option value="'.$row->id.'">'.$row->name.'</option>';
                }
                ?>  
              </select>

            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Bio:</label>
            <div class="col-sm-8">
              <textarea class="form-control" rows="3" placeholder="" name="bio"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
              <a href="index.php">
              <input type="submit" href="index.php"  class="btn btn-warning" value="Create Account" >
              </a>
            </div>
          </div>
        </form>

        <center>
        <div class="container-fluid bg-warning">
          <h5><a href="index.php">MB Dating &copy;</a></h5>
          <p>By M. Estes (2017) - Resources from 16personalities.com</p>
        </div>
        </center>

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