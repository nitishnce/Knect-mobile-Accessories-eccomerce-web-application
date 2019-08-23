<?php
require 'database.php';
$username = $_GET['username'];
$password = $_GET['pass'];
echo 'username:'.$username.'<br> pasword:'.$password.'<br>';

$query1 = 'SELECT `Email`,`password` FROM `Login`';

$runquery1 = mysqli_query($con,$query1);
$pas = 1;
while(($row = mysqli_fetch_assoc($runquery1)) && ($pas == 1)){
$dusername = $row['Email'];
$dpassword = $row['password'];
//echo $dusername.' '.$dpassword.'<br>';
if($username == $dusername && $password == $dpassword){
$pas = 0;
echo 'password matched<br>';
header('Location: index.php');
}
}

if($pas == 1){
header('Location: connected.html');
echo 'invalid userid and password<br>';
}

?>
