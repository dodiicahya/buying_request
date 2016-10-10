<form action="<?php echo base_url('auth/user_auth/sign_up'); ?>" method="post" accept-charset="utf-8">
	<div>
		<label>Nama</label>
		<input type="text" name="user_name">
	</div>
	<div>
		<label>Email</label>
		<input type="email" name="email">
	</div>
	<div>
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div>
		<label>Retry Password</label>
		<input type="password" name="confirm-password">
	</div>
	<div>
		<input type="submit" name="sign-up" value="Sign Up">
	</div>
</form>