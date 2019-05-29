<h1 align="center">Edit Your Account</h1>

<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Customer Name:</label>
		<input type="text" name="name" class="from-control" required>
	</div>
	<div class="form-group">
		<label>Customer Email:</label>
		<input type="text" name="email" class="from-control" required>
	</div>	
	<div class="form-group">
		<label>Customer Profile Photo:</label>
		<input type="file" name="profile_photo" class="form-control form-height-custom" required>
		<img src="customer_images/erika.jpg" class="img-responsive" alt="Customer image">
	</div>		
	<div class="text-center">
		<button name="update" class="btn btn-primary">
			<i class="fa fa-user-md"></i>Update
		</button>
	</div>
</form>