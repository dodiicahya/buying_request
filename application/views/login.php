<form action="<?php echo base_url('auth/user_auth/authenticate'); ?>" method="post" accept-charset="utf-8">
	<div>
		<label>Username</label>	
		<input type="text" name="username">
	</div>	
	<div>
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div>
		<input type="submit" name="login" value="Login">
	</div>
</form>