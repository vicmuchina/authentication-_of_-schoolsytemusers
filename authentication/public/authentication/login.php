<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container jumbotron" style="margin-top: 4%;">
	
	<form action="access.php" method="POST">
	<div class="row">
		<div class="col-6">
			<h2>Login</h2>
			<hr style="margin-right:25%;">
		<h2><?php
		
		if(isset($_GET['registered'])) {
			# code...
			 // echo "Your account has been created";
			if (isset($_SESSION['userRegistered'])) {
				# code...
				echo $_SESSION['userRegistered'];
				unset($_SESSION['userRegistered']);
				session_destroy();
			}
		}

		?>
		</h2>
		</div>
	</div>	



	<div class="row" >
		<div class="col">
			Enter Username:<input type="text"  name="username" class="form-control" placeholder="Enter Username" required="">
		</div>
	</div>
	<div class="row">
		<div class="col">
			Enter Email:<input type="email" name="emaillogin" class="form-control" placeholder="Enter Email Adress" required="">
		</div>		
	</div>
	<div class="row">
		<div class="col">
			Password:<input type="password" name="passlogin" class="form-control" placeholder="Enter password" required="">
		</div>		
	</div>
	<div class="row" style="margin-top: 1%;">
		<div class="col-6">
			<input type="submit" name="save" value="Login" class="btn btn-success btn-block" >
		</div>
		<div class="col-6">
			<a href="signup.php"><p style="text-align: center;">Dont have an account signUp here</p></a>
		</div>
	</div>


	</form>		
</div>	

</body>
</html>