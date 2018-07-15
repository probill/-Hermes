<?php
include_once $_SERVER['DOCUMENT_ROOT']."controller/session.php";


if(isset($_SESSION['state']) && !empty($_SESSION['state'])){
	$_state  = $_SESSION['state'];

	switch ($_state) {
		case 'public':
		include 'public/_home.php';
		//-------------------------------
		break;
		case 'private':

		if(isset($_userID) && !empty($_userID) && isset($_connected) && $_connected==true){

			include 'private/_home.php';
			
		}else{

			include 'public/_home.php';
		//-------------------------------
		}

		break;

		default:
		include $_SERVER['DOCUMENT_ROOT']."errors";
		exit();

		break;
	}
}else{

	$_SESSION['state']='public';
	include 'public/_home.php';
	//-------------------------------

}


?>