<h1 align="center">Change Your Password</h1>

<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Your Current Password:</label>
		<input type="text" name="current_password" class="from-control" required>
	</div>
	<div class="form-group">
		<label>Your New Password:</label>
		<input type="text" name="new_password" class="from-control" required>
	</div>	
	<div class="form-group">
		<label>Confirm Your New Password:</label>
		<input type="text" name="new_password_confirmation" class="from-control" required>
	</div>		
	<div class="text-center">
		<button name="update" class="btn btn-primary" type="submit">
			<i class="fa fa-user-md"></i>Update
		</button>
	</div>
</form>