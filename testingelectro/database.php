<?php
//WRITTEN BY D RAKESH(2018IS04) FOR CONNECTING TO THE SERVER AND DATABASE

$con = mysqli_connect('ec2-3-14-7-3.us-east-2.compute.amazonaws.com','root','12345') or die('could not connect to server');
 if(isset($con)){
//echo 'connected to the server<br>';

$db = mysqli_select_db($con,'usernames');
 if(isset($db)){
//echo 'connected to the database<br>';
}
}
?>
