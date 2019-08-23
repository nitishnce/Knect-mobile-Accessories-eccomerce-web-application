<?php
session_start();

include '/opt/lampp/htdocs\php\ecommercewebsite\databse\database.php';

if(isset($_SESSION['username'])){
$ua=$_SESSION['username'];
$pa=$_SESSION['password'];

$query="SELECT * FROM `userprofile` WHERE `username`='$ua' AND `password`='$pa'";
$run_query=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($run_query)){
$fullname=$row['fullname'];
$email=$row['email'];
$phone=$row['phone'];
$gender=$row['gender'];
}
}
else {
	die('sorry!');
}


if(($_POST['fullname'])!=''){
	$fullname=$_POST['fullname'];
	$query="UPDATE `userprofile` SET `fullname`='$fullname' WHERE `username`='$ua' AND `password`='$pa'";
	mysqli_query($con,$query);
}

if(($_POST['email'])!=''){
	$email=$_POST['email'];
	$query="UPDATE `userprofile` SET `email`='$email' WHERE `username`='$ua' AND `password`='$pa'";
	mysqli_query($con,$query);
}

if(($_POST['phone'])!=0){
	$phone=$_POST['phone'];
	$query="UPDATE `userprofile` SET `phone`='$phone' WHERE `username`='$ua' AND `password`='$pa'";
	mysqli_query($con,$query);
}

if(($_POST['gender'])!=''){
	$gender=$_POST['gender'];
	$query="UPDATE `userprofile` SET `gender`='$gender' WHERE `username`='$ua' AND `password`='$pa'";
	mysqli_query($con,$query);
}

mysqli_close($con);

header('Location: ../testingelectro/userprofile.php');
?>