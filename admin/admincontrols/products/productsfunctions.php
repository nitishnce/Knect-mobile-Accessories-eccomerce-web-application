<?php
include '/opt/lampp/htdocs\php\ecommercewebsite\databse\database.php';
if(isset($_SESSION['admin'])){
$ua=$_SESSION['admin'];
$pa=$_SESSION['password'];
}
else{
	die('sorry!');
}

function productfunction(){
	include '/opt/lampp/htdocs\php\ecommercewebsite\databse\database.php';
$ua=$_SESSION['admin'];

if(isset($_GET['value'])){

$value = $_GET['value'];

if($value == 'sp'){


	echo '<table>';
   
   echo '<tr><th>ID&nbsp</th>
		          <th>PRODUCT NAME&nbsp</th>
		          <th>CATEGORY</th>
		          <th>PRICE&nbsp</th>
		          <th>QUANTITY</th>      
		      </tr>';

	$query = "SELECT * FROM `products`";
	$runquery = mysqli_query($con,$query);
	while($row=mysqli_fetch_array($runquery)){
		$prod_id = $row['prod_id'];
		$prod_cat = $row['prod_cat'];
		$prod_name = $row['prod_name'];
		$prod_price = $row['prod_price'];
		$prod_qty = $row['prod_qty'];

		echo '<tr><th>'.$prod_id.'&nbsp</th>
		          <th>'.$prod_name.'&nbsp</th>
		          <th>'.$prod_cat.'&nbsp;&nbsp;&nbsp</th>
		          <th>Rs. '.$prod_price.'&nbsp</th>
		          <th>'.$prod_qty.'</th>      
		      </tr>';
	}

	echo '</table>';
}
}
else{
echo '<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">'.$ua.'</h3>
					</div>';
}
}

function customerfunction(){
	include '/opt/lampp/htdocs\php\ecommercewebsite\databse\database.php';
$ua=$_SESSION['admin'];

if(isset($_GET['value'])){

$value = $_GET['value'];

if($value == 'cst'){


	echo '<table>';
   
   echo '<tr>
		          <th>NAME&nbsp</th>
		          <th>Email&nbsp</th>
		          <th>Phone&nbsp</th>
		          <th>Gender&nbsp</th>      
		      </tr>';

	$query = "SELECT * FROM `userprofile`";
	$runquery = mysqli_query($con,$query);
	while($row=mysqli_fetch_array($runquery)){
		$name = $row['fullname'];
		$email = $row['email'];
		$phone = $row['phone'];
		$gender = $row['gender'];
		

		echo '<tr><th>'.$name.'&nbsp;&nbsp</th>
		          <th>'.$email.'&nbsp;&nbsp</th>
		          <th>'.$phone.'&nbsp;&nbsp;&nbsp</th>
		          <th>'.$gender.'&nbsp</th>
		             
		      </tr>';
	}

	echo '</table>';
}
}

}

function orderfunction(){
	include '/opt/lampp/htdocs\php\ecommercewebsite\databse\database.php';
$ua=$_SESSION['admin'];

if(isset($_GET['value'])){

$value = $_GET['value'];

if($value == 'odr'){


	echo '<table>';
   
   echo '<tr>
		          <th>Customer NAME&nbsp</th>
		          <th>Product Id &nbsp</th>
		          <th>Qunatity &nbsp</th>
		          <th>Price &nbsp</th>
		          <th>Date &nbsp</th>
		          <th>Order Status &nbsp</th>
		          <th>Transaction Id &nbsp</th>    
		      </tr>';

	$query = "SELECT * FROM orders_placed`";
	$runquery = mysqli_query($con,$query);
	while($row=mysqli_fetch_array($runquery)){
		$name = $row['cust_uname'];
		$prod_id = $row['prod_id'];
		$qty = $row['qty'];
		$price = $row['price'];
		$date = $row['date'];
		$order_status = $row['order_status'];
		$transaction_id = $row['transaction_id'];
		echo '<tr><th>'.$name.'&nbsp;&nbsp</th>
		          <th>'.$prod_id.'&nbsp;&nbsp</th>
		          <th>'.$qty.'&nbsp;&nbsp;&nbsp</th>
		          <th>'.$price.'&nbsp</th>
		          <th>'.$date.'&nbsp</th>   
		          <th>'.$order_status.'&nbsp</th>
		          <th>'.$transaction_id.'&nbsp</th>
		      </tr>';
	}

	echo '</table>';
}
}

}



?>