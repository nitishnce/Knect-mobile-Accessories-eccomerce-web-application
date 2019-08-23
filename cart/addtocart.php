<?php
session_start();
include '/opt/lampp/htdocs\php\ecommercewebsite\databse\database.php';

$ua=$_SESSION['username'];
$pid=$_GET['pid'];
//getting product price
	$prodquery ="SELECT * FROM `products` WHERE `prod_id`='$pid'";
	$run_prodquery=mysqli_query($con,$prodquery);
	while($row_prod=mysqli_fetch_array($run_prodquery)){
    $inventry = $row_prod['prod_qty'];
	$price=$row_prod['prod_price'];
    }
 if($inventry>0) {
 	$inventry = $inventry-1;
 	$query = "UPDATE `products` SET `prod_qty`='$inventry' WHERE `prod_id`='$pid'";
 	$runquery = mysqli_query($con,$query);
 }
    	else {
    		 header('Location: outofstock.php');
    		 die();
    	}
		

echo $pid.' '.$ua.' '.$price;

//checking whether the product is already in the cart
$check="SELECT * FROM `cart` WHERE `cust_uname`='$ua' AND `prod_id`='$pid'";
$runcheck=mysqli_query($con,$check);



if(mysqli_num_rows($runcheck)>0){

while($row_prod=mysqli_fetch_array($runcheck)){
//if present increasing the qty
	$count=$row_prod['qty'];
	$count++;
}

	$query="UPDATE `cart` SET `qty`='$count'";
	mysqli_query($con,$query);
	echo '<script>alert("product already exists!");</script>';
	header('Location: ../testingelectro/blank.php');
}else {
	$query ="INSERT INTO `cart` (`cust_uname`,`prod_id`,`qty`,`price`) VALUES('$ua','$pid','1','$price')";
	if($run_prodquery=mysqli_query($con,$query)){
	echo '<script>alert("product added!");</script>';
	header('Location: ../testingelectro/blank.php');
}
}

?>