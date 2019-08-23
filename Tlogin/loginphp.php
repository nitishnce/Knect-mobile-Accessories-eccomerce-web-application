<?php 
//WRITTEN BY D RAKESH(2018IS04) FOR CHECKING 


include '/opt/lampp/htdocs/php/ecommercewebsite/databse/database.php';
session_start();


$username = $_GET['username'];
$password = $_GET['pass'];
echo 'username:'.$username.'<br> pasword:'.$password.'<br>';

//encryption of username and password`
$enun=md5($username);
$enpass=md5($password);


$query1 = 'SELECT `username`,`password` FROM `usernames`';

$runquery1 = mysqli_query($con,$query1);
$pas = 1;
while(($row = mysqli_fetch_assoc($runquery1)) && ($pas == 1)){
$dusername = $row['username'];
$dpassword = $row['password'];
//echo $dusername.' '.$dpassword.'<br>';
if($enun == $dusername && $enpass == $dpassword){
$pas = 0;
echo 'password matched<br>';

//session variable
$_SESSION['username']=$username;
$_SESSION['password']=$password;

header('Location: ../testingelectro/blank.php');
}
}

if($pas == 1){
header('Location: login.html');
echo 'invalid userid and password<br>';
}
mysqli_close($con);
?>
