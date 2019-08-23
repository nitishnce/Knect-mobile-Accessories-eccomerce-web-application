<?php
function searchresults(){
include '/opt/lampp/htdocs\php\ecommercewebsite\databse/database.php';
  	$searchstring=$_GET['searchstring'];	  


	$prodquery ="SELECT * FROM `products` WHERE `prod_name` LIKE '%$searchstring%'";
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
											<span class="sale">-30%</span>
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="product.php?pid='.$pid.'">'.$pname.'</a></h3>
										<h4 class="product-price">'.$price.' <del class="product-old-price">'.$price.'</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
							</div>';
							
							if($count==0){
							$count=3;
							echo '<div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>';
							}
							else {
							echo '<div class="clearfix visible-sm visible-xs"></div>';
 							
							echo '<!-- /product 1====================================================================================================================-->';
	}	
}
}
?>