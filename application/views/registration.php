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
			<form id="login_form" action="<?php echo base_url('auth/user_auth/sign_up'); ?>" method="post" accept-charset="utf-8">
				<div class="field_container">					
					<input type="text" name="user_name" placeholder="Username">
				</div>
				<div class="field_container">					
					<input type="email" name="email" placeholder="Email">
				</div>
				<div class="field_container">					
					<input type="password" name="password" placeholder="Password">
				</div>
				<div class="field_container">					
					<input type="password" name="confirm-password" placeholder="Confirmation Password">
				</div>
				<div class="field_container">					
					<select name="status">
						<option value="1">Buyer</option>
						<option value="2">Seller</option>
					</select>
				</div>
				<div>					
					<input type="submit" name="sign-up" value="Sign Up" class="btn btn-info">
				</div>				
				<div id="dont_have_an_account">
					<h2> Go to <a href="<?php echo base_url('auth/user_auth'); ?>" class="login_link">login page</a> </h2>
				</div>
			</form>
		</div>
	</body>
</html>