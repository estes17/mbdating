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
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="about.php"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> About</a></li>
          <li><a href="profile.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My Profile</a></li>
          <li><a href="search.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search Profiles</a></li>
          <li><a href="browse_personalities.php"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Personality Types</a></li>
          <li><a href="compatible.php"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Compatible Personalities</a></li>
        </ul>
        </li>
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

  <center><h1>Browse Profiles</h1>
  <br>
  
  <div class="container">
    <table class="table table-bordered">
  <thead>
    <tr class="bg-primary">
      <th colspan="3">firstName</th>
    </tr>
  </thead>
  <tbody>
    <tr class="bg-info">
      <td colspan="2">emailAdress@email.com</td>
      <td>Personality Type</td>
    </tr>
    <tr class="bg-warning">
      <td>__ miles away</td>
      <td>Age</td>
      <td>Gender</td>
    </tr>
    <tr class="bg-info">
      <td colspan="3">Bio here.</td>
    </tr>
  </tbody>
    </table>
  </div>



  </div>
   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      <a href="profile.php"> <button class="btn btn-warning">Edit Search</button> </a>
    </div>
  </div>
</center>
  <br>
  <br>


 
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