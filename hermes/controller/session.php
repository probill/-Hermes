<?php 
session_start();
$root =  $_SERVER['DOCUMENT_ROOT'];

// INCLUDES AND INIT //////////////////////////////////////////////////
require_once $root.'/includes/db.inc/connection.php';
$_servername = $_SERVER['SERVER_NAME'];


// LOGIC //////////////////////////////////////////////////

if(isset($_SESSION['state'])){
	$_state = $_SESSION['state'];
}
if(isset($_SESSION['userID'])){
	$_userID = $_SESSION['userID'];
}


// HEADERS ///////////////////////////////////////////////////////
  header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
  header("Pragma: no-cache"); //HTTP 1.0
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
  
?>