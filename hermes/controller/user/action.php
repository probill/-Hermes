<?php
include_once $_SERVER['DOCUMENT_ROOT']."controller/session.php";

if(isset($_REQUEST['case'])){
	$case = $_REQUEST['case'];

	switch ($case) {
		case 'login':

		break;
		case 'register':
		header("Location: http://{$_SERVER['HTTP_HOST']}/public/register.php");

		exit();


		case 'confirm_register':
		//REGISTER THIS MOTHAFUCKA
		break;
		
		default:
		$_GET['errorcode']=404;
		include  $_SERVER['DOCUMENT_ROOT']."errors/index.php";
		exit();
		break;
	}
}
$_GET['errorcode']=404;

include  $_SERVER['DOCUMENT_ROOT']."errors/index.php";
exit();

?>