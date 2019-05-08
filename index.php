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

<div class="container" id="slider"><!-- Container - start -->
	<div class="col-md-12"><!-- col-md-12 - start -->
		<ol class="carousel-indicators"><!-- carousel-indicators start -->	
			<li class="active" data-target="#myCarousel" data-slide-to="0"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol><!-- carousel-indicators end -->
		<div class="carousel-inner"><!--carousel-inner start -->
			<div class="item active"><img src="admin_area/slides_images/slide-1.jpg" alt="Slider Image 1"></div>
			<div class="item"><img src="admin_area/slides_images/slide-2.jpg"></div>
			<div class="item"><img src="admin_area/slides_images/slide-3.jpg"></div>	
			<div class="item"><img src="admin_area/slides_images/slide-4.jpg"></div>					
		</div><!--carousel-inner end -->
		<a href="#myCarousel" class="left carousel-control" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a href="#myCarousel" class="right carousel-control" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div><!-- col-md-12 - start -->
</div><!-- Container - end -->

	<div id="advantages"><!-- advantages - start -->
		<div class="container"><!-- container - start -->
			<div class="same-height-row"><!-- same-height-row - start -->
				<div class="col-sm-4"><!-- col-sm-4 - start -->
					<div class="box same-height"><!-- box same-height - start -->
						<div class="icon">
							<i class="fa fa-heart"></i>
						</div>
						<h3><a href="#">We Love Our Customer</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div><!-- box same-height - end -->
				</div><!-- col-sm-4 - end -->

				<div class="col-sm-4"><!-- col-sm-4 - start -->
					<div class="box same-height"><!-- box same-height - start -->
						<div class="icon">
							<i class="fa fa-tag"></i>
						</div>
						<h3><a href="#">Best Prices</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div><!-- box same-height - end -->
				</div><!-- col-sm-4 - end -->

				<div class="col-sm-4"><!-- col-sm-4 - start -->
					<div class="box same-height"><!-- box same-height - start -->
						<div class="icon">
							<i class="fa fa-thumbs-up"></i>
						</div>
						<h3><a href="#">100% Original Products</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div><!-- box same-height - end -->
				</div><!-- col-sm-4 - end -->				

			</div><!-- same-height-row - end -->
		</div><!-- container - end -->
	</div><!-- advantages - end -->

	<div id="hot"><!-- #hot - start -->
		<div class="box"><!-- box - start -->
			<div class="container"><!-- container - start -->
				<div class="col-md-12"><!-- col-md-12 - start -->				
					<h2>Our Latest Products</h2>
				</div><!-- col-md-12 - end -->				
			</div><!-- container - start -->
		</div><!-- box - end -->
	</div><!-- #hot - end -->

	<div class="container" id="content"><!-- container - start -->
		<div class="row"><!-- row - start -->
			<div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single - start -->
				<div class="product"><!-- product - start -->
					<a href="details.php">
						<img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
					</a>
				</div><!-- product - end -->
			</div><!-- col-sm-4 col-sm-6 single - end -->
		</div><!-- row - end -->
	</div><!-- container - end -->

	<script src="js/jquery-331.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>
</body>
</html>