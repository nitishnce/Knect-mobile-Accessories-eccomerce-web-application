<?php
// WRITTEN BY D RAKESH(2018IS04) FOR INSERTING USER REGISTRATION DATA INTO DATABASE


require 'database.php';

$fa=$_GET['fullname'];
$un=$_GET['username'];
$pa=$_GET['pass'];
$ph=$_GET['phone'];
$ea=$_GET['email'];
$ge=$_GET['gender'];
echo $ge.'<br>'.$un.'<br>'.$pa.'<br>'.$ph.'<br>'.$ea.'<br>';

$flag = 2;
$queryr_input = "INSERT  INTO `register` (`username`,`pass`,`phoneno`,`gender`,`email`) VALUES ('$un','$pa','$ph','$ge','$ea')";
$queryp_input = "INSERT  INTO `userprofile` (`fullname`,`username`,`password`,`phone`,`gender`,`email`) VALUES ('$fa','$un','$pa','$ph','$ge','$ea')";
if(mysqli_query($con,$queryr_input)){
	
	if(mysqli_query($con,$queryp_input)){
    echo 'data inserted successfully<br>';
	$flag--;
	}
}
else {
    echo 'try something else';
}


//encryption of username and password`
$enun=md5($un);
$enpass=md5($pa);

$query="INSERT INTO `usernames` (`username`,`password`) VALUES ('$enun','$enpass')";
if(mysqli_query($con,$query)){
    echo 'successfully inserted into login';
	$flag--;
}

$ad='not entered';
$query="INSERT INTO `shipping` (`username`,`password`,`phone`,`fullname`,`email`,`address`) values('$un','$pa','$ph','$fa','$ea','$ad')";
if(mysqli_query($con,$query)){

}

mysqli_close($con);

if($flag==0){

header('Location: ../Tlogin/login.php');
}
?>