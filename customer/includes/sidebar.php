<div class="panel panel-default sidebar-menu">
	<div class="panel-heading">
		<center>
			<img src="customer_images/erica.jpg" alt="Profile">
		</center>
		<br>
		<h3 align="center" class="panel-title">
			Name: Random Name
		</h3>
	</div>
	<div class="panel-body">
		<ul class="nav-pills nav-stacked nav">
			<li class="<?php if(isset($_GET['my_orders'])) 
				echo "active;"
			 ?>
			"> 
				<a href="my_account.php?my_orders">
					<i class=""></i>My Orders
				</a>
			</li>
			<li class="<?php if(isset($_GET['pay_offline'])) echo "active;" ?>"> 
				<a href="my_account.php?pay_offline">
					<i class=""></i>Pay Offline
				</a>
			</li>
			<li class="<?php if(isset($_GET['edit_account'])) echo "active;" ?>"> 
				<a href="my_account.php?edit_account">
					<i class=""></i>Edit Account
				</a>
			</li>	
			<li class="<?php if(isset($_GET['change_pass'])) echo "active;" ?>"> 
				<a href="my_account.php?change_pass">
					<i class=""></i>Change Password
				</a>
			</li>
			<li class="<?php if(isset($_GET['delete_account'])) echo "active;" ?>"> 
				<a href="my_account.php?delete_account">
					<i class=""></i>Delete Account
				</a>
			</li>	
				<a href="logout.php">
					<i class="fa fa-sign-out">Log Out</i>Delete Account
				</a>													
		</ul>
	</div>
</div>