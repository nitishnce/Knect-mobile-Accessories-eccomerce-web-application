<?php
include '/opt/lampp/htdocs\php\ecommercewebsite\databse\database.php';
$query="SELECT * FROM `products`";
$run_query=mysqli_query($con,$query);
$sn=mysqli_num_rows($run_query);
$sn++;
$newfolder='pid'.$sn;
echo $sn;
?>