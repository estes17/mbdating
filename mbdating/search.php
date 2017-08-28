<?php 
  include('config.php');
  if(count($_POST)>0){
  	//Getting the current user info
  	$current_user_id = $_SESSION['user_id'];
  	 $result = mysql_query("SELECT * FROM `member` WHERE `id`=".$current_user_id);
  	$current_user = mysql_fetch_object($result);
  	$lat = $current_user->lat;
  	$lng = $current_user->lng;
  	//Search
  	//ADDED RECENTLY CODE
  	//END OF RECENT
  	$radius = $_POST['radius'];
  	$sql = "SELECT *, ( 3959 * acos( cos( radians($lat) ) * cos( radians( lat ) ) 
		* cos( radians( lng ) - radians($lng) ) + sin( radians($lat) ) * sin(radians(lat)) ) ) AS distance 
		FROM `member` 
		WHERE `id`!=$current_user_id";
		if(!empty($_POST['gender']) && $_POST['gender']!=''){
			$sql.=" && `gender`='".$_POST['gender']."'";
		}
		if(!empty($_POST['personality_type_id']) && $_POST['personality_type_id']!=''){
			$sql.=" && `personality_type_id`='".$_POST['personality_type_id']."'";
		}
	$sql.=" HAVING distance < $radius 
		ORDER BY distance";
    $results = mysql_query($sql);                
  }else{
  	$results = mysql_query('SELECT * FROM `member`'); 
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
    <center><h1>Search Profiles</h1></center>
<br>
<center>
<div class="container">

	<form method="POST">
		<div class="col-sm-4">
			<div class="search-wrap">
				<label><span class="label label-warning">Personality Type:</span></label>
				<select name="personality_type_id">
					<option value="">All Types</option>
					<?php 
			            $personalities = getPersonalityTypes();
			            foreach ($personalities as $key => $name) {
			            	if(!empty($_POST['personality_type_id']) && $_POST['personality_type_id']==$key) 
							{ 
								$selected = 'selected'; 
							} else { 
								$selected = '';
							}
			              echo '<option value="'.$key.'" '.$selected.'>'.$name.'</option>';
			            }
			        ?>
				</select>
			</div>
		</div>
		<div class="container">
		<div class="col-sm-4">
			<div class="search-wrap">	
				<label><span class="label label-warning">Distance:</span></label>
				<select name="radius">
					<option value="10000">Anywhere</option>
					<?php 
						foreach ($RADIUS_ARRAY as $key => $name) {
							if(!empty($_POST['radius']) && $_POST['radius']==$key) 
								{ 
									$selected = 'selected'; 
								} else { 
									$selected = '';
								}
							echo '<option value="'.$key.'" '.$selected.'>'.$name.'</option>';
						}
					?>
				</select>
			</div>
		</div>
		<div class="container">
		<div class="col-sm-4">
			<div class="search-wrap">	
				<label><span class="label label-warning">Gender Prefrance:</span></label>
				<select name="gender">
					<option value="">All</option>
				<?php 
						foreach ($GENDER_OPTIONS as $key => $name) {
							if(!empty($_POST['gender']) && $_POST['gender']==$key) 
								{ 
									$selected = 'selected'; 
								} else { 
									$selected = '';
								}
							echo '<option value="'.$key.'" '.$selected.'>'.$name.'</option>';
						}
					?>
				</select>
			</div>
		</div>
		<input type="submit" name="search" value="Search" class="btn btn-info">
	</form>

	<br>


	<div class="results">
	<br>
	    <?php
			if ($results!=false && mysql_num_rows($results)>0){
				while($row = mysql_fetch_object($results)){
		?>
				    <table class="table table-bordered">
					  <thead>
					    <tr class="bg-primary">
					      <th colspan="3"><?= $row->first_name ?></th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr class="bg-info">
					      <td colspan="2"><?= $row->email ?></td>
					      <td><?= personalityTypeIdToPeronalityTypeName($row->personality_type_id) ?></td>
					    </tr>
					    <tr class="bg-warning">
					      <td><?= (!empty($row->distance))? round($row->distance) : ''?> miles away</td>
					      <td><?= calculateAge($row->birthday) ?></td>
					      <td><?= gender($row->gender) ?></td>
					    </tr>
					    <tr class="bg-info">
					      <td colspan="3"><?= $row->bio ?></td>
					    </tr>
					  </tbody>
				    </table>
	    <?php 
	     		}
			} else {
		?>
			<center><h3>There does not seem to be any current profiles that match your search settings.</h3>
			<br>
			<h5>Try refining the search settings </h5></center>
		<? } ?>
  </div>
</div>
<br>
<br>
</center>
		
</body>

 <center>
    <div class="container-fluid bg-warning">
        <h5><a href="index.php">MB Dating &copy;</a></h5>
        <p>By M. Estes (2017) - Resources from 16personalities.com</p>
    </div>
    </center>


</html>