<!--WRITTEN BY D RAKESH(2018IS04)-->
<?php
session_start();

if(isset($_SESSION['admin']) && isset($_SESSION['password'])){
unset($_SESSION['admin']);
unset($_SESSION['password']);
}

echo '<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V9</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url(\'images/admin.jpg\');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="adminloginphp.php" method="GET">
				<span class="login100-form-title p-b-37">
					ADMIN 
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="admin" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="pass" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						ADMIN
					</button>
				</div>

			
<br>
				
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
</body>
</html>';
?>