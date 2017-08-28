<?php 
  include('config.php');
  unset($_SESSION['loggedin']);
  unset($_SESSION['user_id']);
  header('location: index.php');
?>
