<?php
//WRITTEN BY D RAKESH(2018IS04) FOR CHECKING 


include '/opt/lampp/htdocs\php\ecommercewebsite\databse\database.php';
session_start();


$username = $_GET['admin'];
$password = $_GET['pass'];
echo 'username:'.$username.'<br> pasword:'.$password.'<br>';


$query1 = 'SELECT `admin`,`password` FROM `admin`';

$runquery1 = mysqli_query($con,$query1);
$pas = 1;
while(($row = mysqli_fetch_assoc($runquery1)) && ($pas == 1)){
$dusername = $row['admin'];
$dpassword = $row['password'];
//echo $dusername.' '.$dpassword.'<br>';
if($username == $dusername && $password == $dpassword){
$pas = 0;
echo 'password matched<br>';

//session variable
$_SESSION['admin']=$username;
$_SESSION['password']=$password;

header('Location: ../admincontrols\admin.php');
}
}

if($pas == 1){
header('Location: adminlogin.php');
echo 'invalid userid and password<br>';
}
mysqli_close($con);
?>