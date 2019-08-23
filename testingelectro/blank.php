<?php
session_start();
include 'catdisplay.php';

if(isset($_SESSION['username'])){
	
	$ua=$_SESSION['username'];
}
else {
	header('Location: ../Tlogin/login.html');
}


 echo '<!DOCTYPE html>
   <html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Home | Knect</title>

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
						<li><a href="#"><i class="fa fa-map-marker"></i> Prayagraj, Allahabad</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><span style="color:#9B5506;">Hello, </span><a href="userprofile.php"><i "></i>'.$ua.'</a></li>
						<li><a href="logout.php"><i class="fa fa-user-o"></i>Logout</a></li>
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

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="showsearchresults.php" method="GET">
									
									<input class="input" placeholder="Search here" name="searchstring">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								
								<!-- Cart -->
								<div class="dropdown">
									<a href="../cart/viewcart.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										
									</a>
									
								</div>
								<!-- /Cart -->

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
						<li class="active"><a href="blank.php">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="userprofile.php">My Profile</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				
				<!--sidelink===========================================================================================================================-->
									<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<ul >
						<li class="active"><a a href="blank.php?cat=power bank">POWERBANK</a></li>
						<li><a href="blank.php?cat=headphones">HEAD PHONES</a></li>
						<li><a href="blank.php?cat=mobile charger">CHARGERS</a></li>
						<li><a href="blank.php?cat=screen gaurd">SCREEN GAURD</a></li>

						<li><a href="blank.php?cat=covers">COVERS</a></li>
						<li><a href="blank.php?cat=speaker and mic">SPEAKERS AND MICS</a></li>
						<li><a href="blank.php?cat=battery">BATTERY</a></li>
						<li><a href="blank.php?cat=card number">CARD READER</a></li>
						<li><a href="blank.php?cat=otg cable">OTG CABLE</a></li>
						<li><a href="blank.php?cat=memory card">MEMORY CARD</a></li>
						<li><a href="blank.php?cat=tools">TOOLS</a></li>


					</ul>
								
						</div>
						<!-- /aside Widget -->
					</div>
				<!--/sidelink======================================================================================================================-->
				
				
					<!-- product 1===================================================================================================================-->
							'?><?php showall();
							         catdisplay();'

							<!-- /product 2===========================================================================================================================-->
							
							
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
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->



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
