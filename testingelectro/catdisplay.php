<?php

function catdisplay(){
	include '/opt/lampp/htdocs\php\ecommercewebsite\databse/database.php';

	if(isset($_GET['cat'])){}
		else {
			die();
		}
  	$category=$_GET['cat'];	  


	$prodquery ="SELECT * FROM `products` WHERE `prod_cat`='$category'";
	$run_prodquery=mysqli_query($con,$prodquery);
	
	//<!--count==================================================================-->
	$count=2;
	//<!--count==================================================================-->
	
	
	
	while($row_prod=mysqli_fetch_array($run_prodquery)){

	$pid=$row_prod['prod_id'];
	$pname=$row_prod['prod_name'];
	$pimage=$row_prod['prod_image'];
	$price=$row_prod['prod_price'];
	//echo $count.'<br>';
	$count--;
	
		echo '<!-- product 1===================================================================================================================-->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="../product_images/pid'.$pid.'/'.$pimage.'" alt="">
										<div class="product-label">
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="product.php?pid='.$pid.'">'.$pname.'</a></h3>
										<h4 class="product-price">Rs.'.$price.' </h4>
										<div class="product-rating">
											
										</div>
										
									</div>
									<div class="add-to-cart">
										<a href="../cart/addtocart.php?pid='.$pid.'"><button  class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
									</div>
								</div>
							</div>';
							
							if($count==0){
							$count=3;
							echo '<div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>';
							}
							else {
							echo '<div class="clearfix visible-sm visible-xs"></div>';
							}
							
							echo '<!-- /product 1====================================================================================================================-->';
	}

	
}

function showall(){
	if(!isset($_GET['cat'])){
	include '/opt/lampp/htdocs\php\ecommercewebsite\databse/database.php';

	$prodquery ="SELECT * FROM `products`";
	$run_prodquery=mysqli_query($con,$prodquery);
	
	//<!--count==================================================================-->
	$count=2;
	//<!--count==================================================================-->
	
	
	
	while($row_prod=mysqli_fetch_array($run_prodquery)){

	
	$pid=$row_prod['prod_id'];
	$pname=$row_prod['prod_name'];
	$pimage=$row_prod['prod_image'];
	$price=$row_prod['prod_price'];
	//echo $count.'<br>';
	$count--;
	
		echo '<!-- product 1===================================================================================================================-->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="../product_images/pid'.$pid.'/'.$pimage.'" alt="">
										<div class="product-label">
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="product.php?pid='.$pid.'">'.$pname.'</a></h3>
										<h4 class="product-price">Rs.'.$price.' </h4>
										<div class="product-rating">
											
										</div>
										
									</div>
									<div class="add-to-cart">
										<a href="../cart/addtocart.php?pid='.$pid.'"><button  class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
									</div>
								</div>
							</div>';
							
							if($count==0){
							$count=3;
							echo '<div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>';
							}
							else {
							echo '<div class="clearfix visible-sm visible-xs"></div>';
							}
							
							echo '<!-- /product 1====================================================================================================================-->';
	}
}
}
?>