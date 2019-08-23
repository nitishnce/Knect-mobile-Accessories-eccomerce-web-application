<?php
//WRITTEN BY D RAKESH(2018IS04) FOR CONNECTING TO THE SERVER AND DATABASE

$con = mysqli_connect('127.0.0.1:80','root','12345') or die('could not connect to server');
 if(isset($con)){
//echo 'connected to the server<br>';

$db = mysqli_select_db($con,'usernames');
 if(isset($db)){
//echo 'connected to the database<br>';
}
}
?>
