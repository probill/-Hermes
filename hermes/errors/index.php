<?php

include $_SERVER["DOCUMENT_ROOT"]."includes/base.inc/header.php";

$errorcode = $_GET['errorcode'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Error!</title>
	<meta charset="utf-8">
	<meta charset="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../../styles/error.css">

</head>
<body>
	<div class="wrapper">

		<?php 

			switch ($errorcode) {
				case '400':
				echo "<h1>400 Bad Request!</h1>";
				break;
				case '401':
				echo "<h1>401 Unauthorized!</h1>";
				break;
				case '402':
				echo "<h1>402 Payment Required!</h1>";
				break;
				case '403':
				echo "<h1>403 Forbidden!</h1>";
				break;
				case '404':
				echo "<h1>404 page not found!</h1>";
				break;
				case '405':
				echo "<h1>405 - Method Not Allowed</h1>";
				break;
				case '407':
				echo "<h1>407 - Proxy Authentication Required</h1>";
				break;
				case '408':
				echo "<h1>408 - Request Timeout</h1>";
				break;
				
				case '409':
				echo "<h1>409 - Conflict</h1>";
				break;
				
				case '410':
				echo "<h1>410 - Gone </h1>";
				break;
			
				case '411':
				echo "<h1>411 - Length Required</h1>";
				break;		

				case '412':
				echo "<h1>412 - Precondition Failed</h1>";
				break;		

				case '413':
				echo "<h1>413 - Request Entity Too Large</h1>";
				break;
				
				case '414':
				echo "<h1>414 - Request-URI Too Long</h1>";
				break;
				
				case '415':
				echo "<h1>415 - Unsupported Media Type</h1>";
				break;
				
				case '416':
				echo "<h1>416 - Requested Range Not Satisfiable</h1>";
				break;
				
				case '417':
				echo "<h1>417 - Expectation Failed</h1>";
				break;
				
				case '500':
				echo "<h1>500 - Internal Server Error</h1>";
				break;
					case '501':
				echo "<h1>501 - Not Implemented</h1>";
				break;
					case '502':
				echo "<h1>502 - Bad Gateway</h1>";
				break;
					case '503':
				echo "<h1>503 - Service Unavailable</h1>";
				break;
					case '504':
				echo "<h1>504 - Gateway Timeout</h1>";
				break;
					case '505':
				echo "<h1>505 - HTTP Version Not Supported</h1>";
				break;
				

				
				default:
				echo "<h1>Uknown Error!!</h1>";			
				break;
		}
		?>
		
		
		
	</div>
</body>

</html>
