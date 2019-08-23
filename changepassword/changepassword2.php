<?php
require '/opt/lampp/htdocs\php\ecommercewebsite\databse\database.php';
session_start();


if(isset($_SESSION['username'])){
$ua=$_SESSION['username'];
$pa=$_SESSION['password'];

$enua=md5($ua);
$enpa=md5($pa);

if($_GET['newpassword']!=''){
$newpassword=$_GET['newpassword'];
$enpass=md5($newpassword);

$query="UPDATE `usernames` SET `password`='$enpass' where `username`='$enua' AND `password`='$enpa'";
$query2="UPDATE `userprofile` SET `password`='$newpassword' WHERE `username`='$ua' AND `password`='$pa'";
$query3="UPDATE `shipping` SET `password`='$newpassword' WHERE `username`='$ua' AND `password`='$pa'";


if(mysqli_query($con,$query)){
	if(mysqli_query($con,$query2)){
		if(mysqli_query($con,$query3)){
	echo 'password chnged seccessfully!';
	header('Location: ../Tlogin/login.php');
	}
	}
}
else {
	echo 'failed to change the password!';
}

}
else {
header('Location: ../testingelectro\userprofile.php');
}
}

else {
	die('sorry!');
}
?>