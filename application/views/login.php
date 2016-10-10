<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>CodePen - Login Form</title>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
		<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
		<script src="<?php echo base_url('assets/js/prefixfree.min.js'); ?>"></script>
	</head>
	<body>
		<div id="login">
			<form id="login_form" action="<?php echo base_url('auth/user_auth/authenticate'); ?>" method="post" accept-charset="utf-8">
				<div class="field_container">
					<input type="text" name="username" placeholder="username">
				</div>
				<div class="field_container">
					<input type="password" name="password" placeholder="password">
				</div>
				<div>
					<input type="submit" name="login" value="Login" class="btn btn-info">					
				</div>
				<div id="dont_have_an_account">
					<h2> Need to <a href="<?php echo base_url('auth/user_auth/sign_up'); ?>" class="login_link">sign up</a> for an account </h2>
				</div>
			</form>
		</div>
	</body>
</html>