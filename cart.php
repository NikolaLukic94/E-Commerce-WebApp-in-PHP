<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" contect="width=device-width, initial-scale=1"> 
	<title>My Store</title>
	<link rel="stylesheet" href="styles/bootstrap-337.min.css">
	<link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/style.css">
</head>
<body>

<div id="top"><!-- Top - start -->
	<div class="container"><!-- Container - start -->
		<div class="col-md-6 offer"><!-- col-md-6 offer - start -->
			<a href="" class="btn btn-success btn-sm">Welcome</a>
			<a href="checkout.php">2 Items In Your Cart | Total Price: $400</a>
		</div><!-- col-md-6 offer - end -->
		<div class="col-md-6"><!-- col-md-6  - start -->
			<ul class="menu">
				<li>
					<a href="cutomer_register.php">Register</a>
				</li>
				<li>
					<a href="checkout.php">My Account</a>
				</li>
				<li>
					<a href="cart.php">Go To Cart</a>
				</li>
				<li>
					<a href="login.php">Login</a>
				</li>
			</ul>
		</div><!-- col-md-6  - end -->
	</div><!-- Container - end -->
</div><!-- Top - end -->

<div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default start -->
	<div class="container"><!-- Container - start -->
		<div class="navbar-header"><!-- navbar-header - start -->
			<a href="index.php" class="navbar-brand home"><!-- navbar-brand home - start -->
				<img src="images/ecom-store-logo.png" alt="store" class="hidden-xs"><!--to be hidden when xs size-->
				<img src="images/ecom-store-logo-mobile.php" alt="store" class="visible-xs"><!-- to be shown when xs size -->
			</a><!-- navbar-brand home - end -->
			<button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
				<span class="sr-only">
					Toggle Navigation
				</span>
				<i class="fa fa-align-justify"></i>
			</button>
			<button class="navbar-toggle" data-toggle="collapse" data-target="#search">
				<span class="sr-only">
					Toggle Navigation
				</span>
				<i class="fa fa-search"></i>
			</button>			
		</div><!-- navbar-header - end -->
		<div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse start --><div class="padding-nav"><!-- padding-nav start -->
			<ul class="nav navbar-nav left">
				<li class="active">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="shop.php">Shop</a>
				</li>
				<li>
					<a href="checkout.php">My Account</a>
				</li>
				<li>
					<a href="contact.php">Contact Us</a>
				</li>
			</ul>
		</div><!-- padding-nav end -->
		<a href="cart.php" class="btn navbar-btn btn-primary right">
			<i class="fa fa-shopping-cart"></i>
			<span>4 Items In Your Cart</span>
		</a>
		<div class="navbar-collapse collapse right">
			<button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
				<span class="sr-only">Toggle Search</span>
				<i class="fa fa-search"></i>
			</button>
		</div>		
		<div class="collapse clearfix" id="search">
			<form method="get" action="results.php" class="navbar-form">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="user_query" required>
					<span class="input-group-btn">	
					<button type="submit" name="search" value="search" class="btn btn-primary">
						<i class="fa fa-search"></i>
					</button>
					</span>
				</div>
			</form>
		</div>
		</div><!-- navbar-collapse collapse end -->
	</div><!-- Container - end -->
</div><!-- navbar navbar-default end -->

<div class="container">
	<div class="col-md-12">
		<ul class="breadcrumb">
			<li>
				<a href="index.php">Home</a>
			</li>
			<li>
				Cart
			</li>
		</ul>
	</div>
	<div id="cart" class="col-md-9">
		<div class="box">
			<form action="cart.php" method="POST" enctype="multipart/form-data">
				<h1>Shpping cart</h1>
				<p class="text-muted">Your currently have 3 item(s) in your cart</p>
				<div class="table-responsive">
					<table class="table">
						<thead>
						<tr>
							<th colspan="2">Product</th>
							<th>Quantity</th>
							<th>Size</th>
							<th colspan="1">Delete</th>
							<th colspan="2">Sub-Total</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img class="img-responsive" src="admin_area/product_images/Product-2a.jpg" alt="Product 3a">
								</td>
								<td>
									<a href="">Polo Shirt</a>
								</td>
								<td>
									2
								</td>
								<td>50</td>
								<td>Large</td>
								<td>
									<input type="checkbox" name="remove[]">
								</td>
								<td>100</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th colspan="5">100</th>
								<th colspan="2">$100</th>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="box-footer">
					<div class="pull-left">
						<a href="index.php" class="btn btn-deault">
							<i class="fa fa-chevron-left"></i>Continue Shopping
						</a>
					</div>
					<div class="pull-right">
						<button type="submit" name="update" value="Update Cart" class="btn btn-deault">
							<i class="fa fa-refresh"></i>Update Cart
						</button>
						<a href="checkout.php" class="btn btn-primary">
							Proceed Checkout <i class="fa fa-chevron-right"></i>
						</a>
					</div>
				</div>
			</form>
		</div>
			<div id="row same-height-row">
				<div class="col-md-3 col-sm-6">
					<div class="box same-height headline">
						<h3 class="text-center">Product You May Like</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 center-responsive">
					<div class="product same-height">
						<a href="details.php">
							<img class="img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 6">
						</a>
						<div class="text">
							<h3>
								<a href="details.php">Tank Top Women</a>
							</h3>
							<p class="price">40</p>
						</div>
					</div>
				</div>
			</div>		
	</div>
</div>


	<div class="content"><!-- content - start -->
		<div class="container"><!-- Container - start -->
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						Shop
					</li>
				</ul>
			</div>

			<div class="col-md-3">
				<div id="order-summary" class="box">
					<div class="box-header">
						<h3>Order Summary</h3>
					</div>
				</div>
				<p class="text-muted">
					Shipping and additional costs are calculated based on value you have entered
				</p>
				<div class="table-responsive">
					<table class="table">
						<tbody>
							<tr>
								<td>Order Sub-Total</td>
								<th>$200</th>
							</tr>
							<tr>
								<td>Shipping and Handling</td>
								<td>$0</td>
							</tr>
							<tr>
								<td>Tax</td>
								<th>$0</th>
							</tr>
							<tr class="total">
								<td>Total</td>
								<th>$200</th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

		</div><!-- Container - end -->
	</div><!-- content - end -->

	<?php
		include('includes/footer.php')
	?>

	<script src="js/jquery-331.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
</body>
</html>