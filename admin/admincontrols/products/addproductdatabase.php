<?php
session_start();
include '/opt/lampp/htdocs\php\ecommercewebsite\databse\database.php';
$query="SELECT * FROM `products`";
$run_query=mysqli_query($con,$query);
$sn=mysqli_num_rows($run_query);
$sn++;
$newfolder='pid'.$sn;
$uploadfolder='/opt/lampp/htdocs\php\ecommercewebsite\product_images/'.$newfolder.'/';
mkdir($uploadfolder);

$qty=10;
if(isset($_SESSION['admin']) && isset($_SESSION['password'])){
				                        for($i=0;$i<count($_FILES['images']['name']);$i++){
										$name=$_FILES['images']['name'][$i];
										$temp_Location=$_FILES['images']['tmp_name'][$i];

										//$uploadfolder='/opt/lampp/htdocs\php\ecommercewebsite\product_images/'.$newfolder.'/';
								        $destination=$uploadfolder.$name;

								        if(!empty($name)){
								        	if(move_uploaded_file($temp_Location,$destination)){
								        		echo 'image uploaded!';
								        	}
								        }


												$productname=$_POST['productname'];
												$productcategory=$_POST['productcategory'];
                                                $productprice=$_POST['productprice'];
											    $product_dec = $_POST['product_desc'];
											    $quantity = $_POST['quantity'];
											//inserting into the products tabel	
												if($i==0){
											
												$query="INSERT INTO `products` (`prod_id`,`prod_name`,`prod_cat`,`prod_image`,`prod_price`,`prod_discription`,`prod_qty`) VALUES('$sn','$productname','$productcategory','$name','$productprice','$product_dec','$quantity')";
												if(mysqli_query($con,$query)){
													echo 'insert into produncts <br>';
												}
												//header('Location: display.php');
											   }
											   //inserting into the product_images tabel
											   $query="INSERT INTO `product_images` (`prod_id`,`prod_image`) VALUES ('$sn','$name')";
											  if(mysqli_query($con,$query)){
											echo 'inserted!';}
											
									
}
header('Location: ../admin.php');
						
}

else {
	echo 'need to write code!';
}		
?>