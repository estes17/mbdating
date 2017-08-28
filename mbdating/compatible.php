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
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-4">
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
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br>
<br>
<br>
    <center><h1>Compatible Personalities</h1></center>
  
  
   <br>
   <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <a href="http://www.personalityrelationships.net/">
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>Specilized relationship advice for all 16 diffrent personility types!</h2></div>
            <br>
            <center><img src="images/CandyHearts.jpg" alt="16 Personalities" style="width:250px;height:200px;"><br></center>
          <span class="label label-warning">PersonalityRelationships.net</span>
          </div>
        </div>
        </a>
        <a href="https://www.truity.com/test/personality-type-love-match">
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>Take the quiz to figure out your ideal personality type!</h2></div>
            <br>
            <center><img src="images/heart.png" alt="16 Personalities" style="width:250px;height:200px;"><br></center>
          <span class="label label-warning">Truity.com</span>
          </div>
        </div>
        </a>
        <a href="https://www.pinterest.com/pin/639229740830910437/">
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>Copatibility of the 16 personality types shown with charts!</h2></div>
            <br>
            <center><img src="images/data.jpg" alt="16 Personalities" style="width:250px;height:200px;"><br></center>
          <span class="label label-warning">Pinterest.com</span>
          </div>
        </div>
        </a>
    </div> <!-- /container -->

    <br>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      <center>
        <div class="col-md-8 bg-warning">
          <img src="images/16person.png" alt="16 personalities" style="width:600px;height:500px;">
        </div>
        <div class="col-md-4">
          <div class="row"><h4>Relationship Suggestions Links:</h4></div>
          <div class="row"><p>-------------------------------------------------</p></div>
          <div class="row"><a href="https://thoughtcatalog.com/kathryn-stanley/2015/06/each-myers-briggs-types-fatal-flaw-in-relationships-and-what-to-do-about-it/"> <button class="btn btn-warning"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Thought Catalog</button> </a></div>
          <br>
          <div class="row"><a href="http://www.massmatch.com/MBTI-2.php"> <button class="btn btn-info"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Mass Match</button> </a></div>
          <br>
          <div class="row"><a href="https://www.bustle.com/articles/74402-what-your-myers-briggs-personality-type-says-about-who-you-should-date"> <button class="btn btn-warning"><span class="glyphicon glyphicon-bold" aria-hidden="true"></span> Bustle</button> </a></div>
          <br>
          <div class="row"><h4>Other Myers-Briggs Links:</h4></div>
          <div class="row"><p>-------------------------------------------------</p></div>
          <div class="dropup">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/Reddit2.png" alt="16 Personalities" style="width:15px;height:15px;"> Reddit <span class="caret"></span></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
              <li><a href="https://www.reddit.com/r/intj/">INTJ</a></li>
              <li><a href="https://www.reddit.com/r/intp/">INTP</a></li>
              <li><a href="https://www.reddit.com/r/infj/">INFJ</a></li>
              <li><a href="https://www.reddit.com/r/infp/">INFP</a></li>
              <li><a href="https://www.reddit.com/r/istj/">ISTJ</a></li>
              <li><a href="https://www.reddit.com/r/istp/">ISTP</a></li>
              <li><a href="https://www.reddit.com/r/isfj/">ISFJ</a></li>
              <li><a href="https://www.reddit.com/r/isfp/">ISFP</a></li>
              <li><a href="https://www.reddit.com/r/entj/">ENTJ</a></li>
              <li><a href="https://www.reddit.com/r/entp/">ENTP</a></li>
              <li><a href="https://www.reddit.com/r/enfj/">ENFJ</a></li>
              <li><a href="https://www.reddit.com/r/enfp/">ENFP</a></li>
              <li><a href="https://www.reddit.com/r/estj/">ESTJ</a></li>
              <li><a href="https://www.reddit.com/r/estp/">ESTP</a></li>
              <li><a href="https://www.reddit.com/r/esfj/">ESFJ</a></li>
              <li><a href="https://www.reddit.com/r/esfp/">ESFP</a></li>
            </ul>
        </div>
          <br>
          <div class="row"><a href="https://www.opp.com/en/tools/MBTI/MBTI-personality-Types"> <button class="btn btn-warning"><span class="glyphicon glyphicon-record" aria-hidden="true"></span> OPP</button> </a></div>
          <br>
          <div class="row"><a href="http://www.personalitypage.com/high-level.html"> <button class="btn btn-info"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Personality Page</button> </a></div>
          <br>
          <div class="row"><a href="http://www.myersbriggs.org/my-mbti-personality-type/mbti-basics/the-16-mbti-types.htm?bhcp=1"> <button class="btn btn-warning"><span class="glyphicon glyphicon-tower" aria-hidden="true"></span> Myers-Briggs Fondation</button> </a></div>
          <br>
          
        </div>
        
      </center>
      </div>
    </div><!-- /container -->
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