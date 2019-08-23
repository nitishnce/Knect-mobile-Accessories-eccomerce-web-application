<?php

session_start();
include '/opt/lampp/htdocs\php\ecommercewebsite\databse\database.php';


if(isset($_SESSION['admin']) && isset($_SESSION['password'])){

$ua=$_SESSION['admin'];
$pa=$_SESSION['password'];

}
else {
	die('sorry!');
}

//echo 'you can edit your profile!';


echo '<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +91-8285854966</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> knect@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Prayagraj, India</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="logout.php"><i ></i>Logout</a></li>
						<li><a href="userprofile.php"><i class="fa fa-user-o"></i>'.$ua.'</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->


						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								

								

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="../admin.php">Home</a></li>
						<li><a href="#">Add Products</a></li>
						<li><a href="../admin.php?value=sp">Show Products</a></li>
						<li><a href="../admin.php?value=cst">Customers</a></li>
						<li><a href="../admin.php?value=odr">Orders</a></li>
		




						<!--<li><a href="#">Cameras</a></li>
						<li><a href="#">Accessories</a></li>-->
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>


		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">ADD PRODUCT</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">


<!--=======================================================================================================================================-->
					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">ADD PRODUCT</h3>
							</div>
                            <form action="addproductdatabase.php" method="POST" enctype="multipart/form-data">
							<div class="form-group">

								<p><strong>PRODUCT NAME: &nbsp</strong></p>  
								<input class="input" type="text" name="productname" placeholder="PRODUCT NAME" required>

								<p><strong>PRODUCT CATEGORY: &nbsp</strong></p>  
								<select class="input-select" name="productcategory">
								<option value="case">CASE</option>
								<option value="screen gaurd">SCREENGAURD</option>
								<option value="power bank">POWERBANK</option>
								<option value="headphones">HEAD PHONES</option>
								<option value="mobile charger">MOBILE CHARGER</option>
								<option value="data cables">DATA CABLES</option>
								<option value="covers">COVERS</option>
								<option value="speaker and mic">SPEAKERS AND MICS</option>
								<option value="battery">BATTERY</option>
								<option value="card reader">CARD READER</option>
								<option value="otg cable">OTG Cable</option>
								<option value="memory card">MEMORY CARD</option>
								<option value="tools">TOOLS</option>
								</select>

								<p><strong>PRODUCT PRICE: &nbsp</strong></p> 
								<input class="input" type="number" name="productprice" placeholder="PRODUCT PRICE" required>

								<p><strong>PRODUCT QUANTITY: &nbsp</strong></p> 
								<input class="input" type="number" name="quantity" placeholder="QUANTITY" required>

								<p><strong>PRODUCT IMAGES:    &nbsp &nbsp &nbsp &nbsp &nbsp</strong></p>  
								<input type="file" name="images[]" multiple required>
								<br><br>
								<p><strong>PRODUCT DESCRIPTION: &nbsp</strong></p>
								<p><textarea name="product_desc" cols="90" rows="10"></textarea></p>
								<button class="primary-btn">ADD PRODUCT</button>
							</div>
							</form>
						</div>
						
							
					</div>

		


		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>';

?>