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

	<div class="content">
		<div class="container">
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
				<?php
					include('includes/sidebar.php')
				?>
			</div>

			<div class="col-md-9">
				<div id="productMain" class="row">
					<div class="col-sm-6">
						<div id="mainImage">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="item active">
										<center>
											<img class="img-responsive" src="admin_area/product_images/Produt-3a.jpg" alt="Product 3-a"></center>
									</div>
									<div class="item">
										<center>
											<img class="img-responsive" src="admin_area/product_images/Product-3b.jpg" alt="Product 3-b">
										</center>
									</div>
								</div>

								<a href="#myCarousel" class="left carousel-control" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
									<span class="sr-only">Previous</span>
								</a>

								<a href="#myCarousel" class="right carousel-control" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
									<span class="sr-only">Previous</span>
								</a>	
							</div>
						</div>
					</div>


					<div class="col-sm-6">
						<div class="box">
							<h1 class="text-center">Shirt</h1>

							<form action="details.php" class="form-horizontal" method="post">
								<div class="form-group">
									<label for="" class="col-md-5 control-label">Products Quantity</label>
									<div class="col-md-7">
										<select name="product_qty" id="" class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
							</div>
								<div class="form*group">
									<label class="col-md-5 control-label">Product Size</label>
									<div class="col-md-7">
										<select name="product_size" class="form-control">
											<option>Select a size</option>
											<option>Small</option>
											<option>Medium</option>
											<option>Large</option>
										</select>
									</div>
								</div>
									<p class="price">$50</p>
									<p class="text-center buttons">
										<button class="btn btn-primary i fa fa-shopping-cart">Add to cart</button>
									</p>
								</div>
							</form>
							<div class="row" id="thumbs">
								<div class="col-xs-4">
									<a href="#" class="thumb">
										<img src="admin_area/product_images/product-1a.jpg" alt="product 1" class="img-responsive">
									</a>
								</div>
								<div class="col-xs-4">
									<a href="#" class="thumb">
										<img src="admin_area/product_images/product-1a.jpg" alt="product 1" class="img-responsive">
									</a>
								</div>
								<div class="col-xs-4">
									<a href="#" class="thumb">
										<img src="admin_area/product_images/product-1a.jpg" alt="product 1" class="img-responsive">
									</a>
								</div>																
							</div>
						</div>
					</div>
					<div class="box" id="details">
						<h4>Product Details</h4>
						<p>
							Some random text here. Right here.
						</p>
						<h4>Size</h4>
						<ul>
							<li>Smaill</li>
							<li>Medium</li>
							<li>Large</li>
						</ul>
						<hr>
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

		</div>
	</div>

	<?php
		include('includes/footer.php')
	?>

	<script src="js/jquery-331.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
</body>
</html>