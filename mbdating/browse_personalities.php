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

  <center><h1>The 16 Personality Types</h1>
  <br>

<div class="container">
      <!-- Example row of columns -->
  <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>INTJ</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/INTJ.png" alt="INTJ" style="width:200px;height:200px;"></a></div>
            <div class="panel-body bg-info"><h5>Archtect (<a href="https://en.wikipedia.org/wiki/Elon_Musk">Elon Musk</a>)</h5></div>
        </div>
        <p>Bold, imaginative and strong-willed leaders, always finding a way.</p><p>
        <a href="https://www.reddit.com/r/intj/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/infj-personality" role="button">More About INFJ's &raquo;</a></p>
      </div>
    </div>
    <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>INTP</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/INTP.png" alt="INTP" style="width:200px;height:200px;"></div>
            <div class="panel-body bg-info"><h5>Logician (<a href="https://en.wikipedia.org/wiki/Albert_Einstein">Albert Einstein</a>)</h5></div>
        </div>
        <p>Innovative inventors with an unquenchable thirst for knowledge.</p><p>
        <a href="https://www.reddit.com/r/intp/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/intp-personality" role="button">More About INTP's &raquo;</a></p>
      </div>
    </div>
    <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>ENTJ</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/ENTJ.png" alt="ENTJ" style="width:200px;height:200px;"></div>
            <div class="panel-body bg-info"><h5>Commander (<a href="https://en.wikipedia.org/wiki/Margaret_Thatcher">M. Thatcher</a>)</h5></div>
        </div>
        <p>Bold, imaginative and strong-willed leaders, always finding a way - or making one.</p><p>
        <a href="https://www.reddit.com/r/entj/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/entj-personality" role="button">More About ENTJ's &raquo;</a></p>
      </div>
    </div>
    <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>ENTP</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/ENTP.png" alt="ENTP" style="width:200px;height:200px;"></div>
            <div class="panel-body bg-info"><h5>Debater (<a href="https://en.wikipedia.org/wiki/Mark_Twain">Mark Twain</a>)</h5></div>
        </div>
        <p>Smart and curious thinkers who cannot resist an intellectual challenge.</p><p>
        <a href="https://www.reddit.com/r/entp/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/entp-personality" role="button">More About ENTP's &raquo;</a></p>
      </div>
    </div>
</div> <!-- /container -->

<div class="container">
      <!-- Example row of columns -->
  <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>INFJ</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/INFJ.png" alt="INFJ" style="width:200px;height:200px;"></div>
            <div class="panel-body bg-info"><h5>Advocate (<a href="https://en.wikipedia.org/wiki/Mother_Teresa">Mother Teresa</a>)</h5></div>
        </div>
        <p>Quiet and mystical, yet very inspiring, and tireless idealist. Always willing to help others.</p><p>
        <a href="https://www.reddit.com/r/infj/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/infj-personality" role="button">More About INFJ's &raquo;</a></p>
      </div>
    </div>

    <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>INFP</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/INFP.png" alt="INFP" style="width:200px;height:200px;"></div>
            <div class="panel-body bg-info"><h5>Mediator (<a href="https://en.wikipedia.org/wiki/Alicia_Keys">Alicia Keys</a>)</h5></div>
        </div>
        <p>Poetic, kind and altruistic people, they are always very eager to join a cause they believe in.</p><p>
        <a href="https://www.reddit.com/r/infp/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/infp-personality" role="button">More About INFP's &raquo;</a></p>
      </div>
    </div>
        
    <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>ENFJ</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/ENFJ.png" alt="ENFJ" style="width:200px;height:200px;"></div>
            <div class="panel-body bg-info"><h5>Protagonist (<a href="https://en.wikipedia.org/wiki/Barack_Obama">Barack Obama</a>)</h5></div>
        </div>
        <p>Charismatic and inspiring leaders, able to mesmerize their listeners with their passion and charm.</p>
        <a href="https://www.reddit.com/r/enfj/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/enfj-personality" role="button">More About ENFJ's &raquo;</a></p>
      </div>
    </div>

    <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>ENFP</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/ENFP.png" alt="ENFP" style="width:200px;height:200px;"></div>
            <div class="panel-body bg-info"><h5>Campaigner (<a href="https://en.wikipedia.org/wiki/Drew_Barrymore">Drew Barrymore</a>)</h5></div>
        </div>
        <p>Enthusiastic, creative and sociable free spirits, who can always find a reason to smile.</p><p>
        <a href="https://www.reddit.com/r/enfp/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/enfp-personality" role="button">More About ENFP's &raquo;</a></p>
      </div>
    </div>
</div> <!-- /container -->

<div class="container">
      <!-- Example row of columns -->
  <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>ISTJ</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/ISTJ.png" alt="ISTJ" style="width:200px;height:200px;"></div>
            <div class="panel-body bg-info"><h5>Logistician (<a href="https://en.wikipedia.org/wiki/Angela Merkel">Angela Merkel</a>)</h5></div>
        </div>
        <p>Practical and fact-minded individuals, whose reliability cannot be doubted.</p><p>
        <a href="https://www.reddit.com/r/istj/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/istj-personality" role="button">More About ISTJ's &raquo;</a></p>
      </div>
    </div>

    <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>ISFJ</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/ISFJ.png" alt="ISFJ" style="width:200px;height:200px;"></div>
            <div class="panel-body bg-info"><h5>Defender (<a href="https://en.wikipedia.org/wiki/Beyonce">Beyonce</a>)</h5></div>
        </div>
        <p>Very dedicated and warm protectors, always ready to defend their loved ones.</p><p>
        <a href="https://www.reddit.com/r/isfj/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/isfj-personality" role="button">More About ISFJ's &raquo;</a></p>
      </div>
    </div>
        
    <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>ESTJ</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/ESTJ.png" alt="ESTJ" style="width:200px;height:200px;"></div>
            <div class="panel-body bg-info"><h5>Executive (<a href="https://en.wikipedia.org/wiki/John_D._Rockefeller">John Rockefeller</a>)</h5></div>
        </div>
        <p>Excellent administrators, unsurpassed managing things or people.</p><p>
        <a href="https://www.reddit.com/r/estj/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/estj-personality" role="button">More About ESTJ's &raquo;</a></p>
      </div>
    </div>

    <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>ESFJ</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/ESFJ.png" alt="ESFJ" style="width:200px;height:200px;"></div>
            <div class="panel-body bg-info"><h5>Consul (<a href="https://en.wikipedia.org/wiki/Taylor_Swift">Taylor Swift</a>)</h5></div>
        </div>
        <p>Extraordinarily caring, social and popular people, always eager to help and well liked.</p><p>
        <a href="https://www.reddit.com/r/esfj/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/esfj-personality" role="button">More About ESFJ's &raquo;</a></p>
      </div>
    </div>
</div> <!-- /container -->

<div class="container">
      <!-- Example row of columns -->
  <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>ISTP</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/ISTP.png" alt="ISTP" style="width:200px;height:200px;"></div>
            <div class="panel-body bg-info"><h5>Virtuoso (<a href="https://en.wikipedia.org/wiki/Clint_Eastwood">Clint Eastwood</a>)</h5></div>
        </div>
        <p>Bold and practical experimenters, masters of all kinds of tools.</p><p>
        <a href="https://www.reddit.com/r/istp/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/istp-personality" role="button">More About ISTP's &raquo;</a></p>
      </div>
    </div>

    <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>ISFP</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/ISFP.png" alt="ISFP" style="width:200px;height:200px;"></div>
            <div class="panel-body bg-info"><h5>Adventurer (<a href="https://en.wikipedia.org/wiki/Britney_Spears">Britney Spears</a>)</h5></div>
        </div>
        <p>Flexible, charming artists, always ready to explore and experience something new.</p><p>
        <a href="https://www.reddit.com/r/isfp/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/isfp-personality" role="button">More About ISFP's &raquo;</a></p>
      </div>
    </div>
        
    <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>ESTP</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/ESTP.png" alt="ESTP" style="width:200px;height:200px;"></div>
            <div class="panel-body bg-info"><h5>Entrepreneur (<a href="https://en.wikipedia.org/wiki/Ernest_Hemingway">E. Hemingway</a>)</h5></div>
        </div>
        <p>Smart, energetic and very perceptive people, who truely enjoy living on the edge.</p><p>
        <a href="https://www.reddit.com/r/estp/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/estp-personality" role="button">More About ESTP's &raquo;</a></p>
      </div>
    </div>

    <div class="row">
        <div class="col-md-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2>ESFP</h2></div>
          <div class="panel panel-warning">
            <div class="panel-heading"><img src="images/ESFP.png" alt="ESFP" style="width:200px;height:200px;"></div>
            <div class="panel-body bg-info"><h5>Entertainer (<a href="https://en.wikipedia.org/wiki/Jamie_Foxx">Jamie Foxx</a>)</h5></div>
        </div>
        <p>Spontaneous, energetic and enthusiastic people - life is never boring around them.</p><p>
        <a href="https://www.reddit.com/r/esfp/"><img src="images/Reddit.png" alt="reddit" style="width:40px;height:40px;"></a>
        <a class="btn btn-warning" href="https://www.16personalities.com/esfp-personality" role="button">More About ESFP's &raquo;</a></p>
      </div>
    </div>
</div> <!-- /container -->



  
  <br>
  <br>


  

  
   
  </center>
  <br>
  <br>

<center>
    <div class="container-fluid fixed-static-bottom bg-warning">
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