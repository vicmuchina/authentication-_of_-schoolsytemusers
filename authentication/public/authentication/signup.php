<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Authentication</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container jumbotron" style="margin-top: 4%;">
	<div class="row">
	  <div class="col-6">
		<h3>Create Account</h3>
		<hr>
	<h2>
	<?php 
	if (isset($_SESSION['userTaken'])) {
		# code...
		echo $_SESSION['userTaken'];
		unset($_SESSION['userTaken']);
		session_destroy();
	}

	?>
	</h2>
	  </div>	
	</div>
 <form action="register.php" method="POST">
	<div class="row">
		<div class="col-6">
		Enter Username:<input type="text"  name="username" class="form-control" placeholder="Enter Username" required="">
		</div>
		<div class="col-6">
		Enter Email:<input type="email" name="emailSignup" class="form-control" placeholder="Enter Email Adress" required="">
		</div>
		

	</div>
	<div class="row">
		<div class="col-6">	
		Password:<input onkeyup="check();"  type="password" name="regpass" id="password" class="form-control" placeholder="password" required="">
		</div>
		<div class="col-6 form-group">	
		Confirm Password:<input onkeyup="check();"  type="password" name="confpass" id="conpass" class="form-control"  placeholder="Confirm password" required="">

		<span id="message"></span>
		</div>	
	</div>
	<div class="row" style="margin-top: -10px;">
	<div class="col-6"> 
                <select class="form-control" name="role" id="role" style="margin-top: 20px;" required="">
                    <option value="">Select User role</option>
                    <option value="student">Student</option>
                    <option value="staff">Staff</option>
                    <option value="admin">Administrator</option>
                </select>
    </div>

	</div>
	<div class="row" style="margin-top: 30px;">
		<div class="col-6 form-group">
		  <button id="save" name="save" class="btn btn-success">
		  	Create Acount
		  </button>	
		</div>
		<div class="col-6 form-group">
			<a href="login.php" style="text-align: center;">Already have an account?Login in here.</a>
		</div>
	</div>
</form>

</div>	
 <script type="text/javascript">
        let check =function (){
            if (document.getElementById('password').value === document.getElementById('conpass').value) {
                 
                 //span for password match 
                 document.getElementById('message').style.color = 'green';
                 document.getElementById('message').innerHTML = 'Passwords Match';
                 document.getElementById('save').disabled = false;

            } else {
                  //span for password match 
                 document.getElementById('message').style.color = 'red';
                 document.getElementById('message').innerHTML = 'Passwords do not Match';
                 document.getElementById('save').disabled = true;
            }
        }    
     




     </script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>