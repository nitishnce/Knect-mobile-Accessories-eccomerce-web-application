<?php
session_start();

include '/opt/lampp/htdocs\php\ecommercewebsite\databse\database.php';

if(isset($_SESSION['username'])){
$ua=$_SESSION['username'];
$pa=$_SESSION['password'];

$query="SELECT * FROM `shipping` WHERE `username`='$ua' AND `password`='$pa'";
$run_query=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($run_query)){
$fullname=$row['fullname'];
$email=$row['email'];
$phone=$row['phone'];
$address=$row['address'];
}
}
else {
	die('sorry!');
}


if(($_POST['fullname'])!=''){
	$fullname=$_POST['fullname'];
	$query="UPDATE `shipping` SET `fullname`='$fullname' WHERE `username`='$ua' AND `password`='$pa'";
	mysqli_query($con,$query);
}

if(($_POST['email'])!=''){
	$email=$_POST['email'];
	$query="UPDATE `shipping` SET `email`='$email' WHERE `username`='$ua' AND `password`='$pa'";
	mysqli_query($con,$query);
}

if(($_POST['phone'])!=0){
	$phone=$_POST['phone'];
	$query="UPDATE `shipping` SET `phone`='$phone' WHERE `username`='$ua' AND `password`='$pa'";
	mysqli_query($con,$query);
}

if(($_POST['address'])!=''){
	$address=$_POST['address'];
	$query="UPDATE `shipping` SET `address`='$address' WHERE `username`='$ua' AND `password`='$pa'";
	mysqli_query($con,$query);
}

mysqli_close($con);

header('Location: ../testingelectro/userprofile.php');
?>