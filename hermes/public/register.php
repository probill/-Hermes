<?php

include $_SERVER["DOCUMENT_ROOT"]."includes/base.inc/header.php";

?>

<!DOCTYPE html>
<html>
<head>
	<?php include $_SERVER["DOCUMENT_ROOT"]."includes/base.inc/meta_tags.html";?>
	<title>Hermes Register</title>
	
</head>
<body>
	<div class="wrapper">


		<section id="log">

			<form id="form_register" action="controller/user/action.php" method="POST">
				<div class="form-group">
					<h2>Come to the right side</h2>
					<input type="hidden" name="confirm_register" value="register">

					<input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted"></small>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="passwordInput" placeholder="Password">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="confirm_passwordInput" placeholder="Confirm password">
				</div>
				<div class="form-group">
					<input type="date" class="form-control" id="birthdayInput" placeholder="BirthDay" title="BirthDay">
				</div>
				<div class="form-group">
					<input type="textbox" class="form-control" id="userNameInput" placeholder="Nickname">
				</div>
				<button id="register_btn" type="submit" class="btn" form="form_register">Register</button>
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