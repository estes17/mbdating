<?php 
session_start();
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'mbdating';

	$conn = mysql_connect($host, $user, $pass);
	$db = mysql_select_db($database, $conn);

	require_once('functions.php');

?>