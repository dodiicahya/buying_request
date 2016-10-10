<?php 	
	echo form_open_multipart('post_buy_request/buying_request/request_offer'); 	
?>
	<div>
		<label>Description</label>
		<input type="text" name="description">
	</div>
	<div>
		<label>Image</label>
		<input type="file" name="image_product">
	</div>
	<div>
		<label>Email</label>
		<input type="email" name="email">
	</div>
	<div>
		<label>Phone</label>
		<input type="text" name="phone">
	</div>
	<div>
		<label>Date Expired</label>
		<input type="date" name="date_expired">
	</div>
	<div>
		<label>Date Deadline</label>
		<input type="date" name="date_deadline">
	</div>
	<div>
		<input type="checkbox" name="email_verification">
		<label>Email Verification</label>
	</div>
	<div>
		<input type="checkbox" name="create_new_user">
		<label>Confirm created account by Ralali</label>
	</div>
	<div>		
		<input type="submit" name="save" value="Submit">	
	</div>
<?php echo form_close(); ?>