<?php
//WRITTEN BY D RAKESH(2018IS04) FOR LOGOUT

session_start();
unset($_SESSION['username']);

header('Location: ../Tlogin/login.php')
?>