<?php

include $_SERVER["DOCUMENT_ROOT"]."includes\\base.inc\\header.php";

?>

<!DOCTYPE html>
<html>
<head>
	<?php include $_SERVER["DOCUMENT_ROOT"]."includes/base.inc/meta_tags.html";?>
	<title>Hermes</title>
	
</head>
<body>
	<div class="wrapper">


		<section id="log">

			<form id="form_login" action="controller/user/action.php" method="POST">
				<div class="form-group">
					<h2>Connect to the other side</h2>
					<input type="hidden" name="case" value="logins">
					<input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted"></small>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="passwordInput" placeholder="Password">
				</div>
				<button id="login_btn" type="submit" class="btn">Log In</button>
			</form>

			<form id="form_reg" action="controller/user/action.php" method="GET" >
					<input type="hidden" name="case" value="register">
					<button id="register_btn" type="submit" class="btn">Register</button>
			</form>

		</fieldset>
	</section>
</div>



</body>
</html>
<script	src="includes/addons/js/jquery.js"></script>

<script type="text/javascript">
	var domain = window.location.hostname;

</script>