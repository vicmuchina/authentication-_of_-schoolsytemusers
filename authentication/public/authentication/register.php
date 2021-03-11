<?php 
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="school";

$conn=new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
//global variable to check whether username exists 
$_SESSION['userTaken'] = "Username is already taken";
$_SESSION['userRegistered'] = "registration successful";

// //sql create table
// $sql="CREATE TABLE users (
// id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// username VARCHAR(210) NOT NULL,
// email VARCHAR(210),
// password VARCHAR(210),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
// if ($conn->query($sql) === TRUE) {
//   echo "Table MyGuests created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }
// ;

//set variables
$username =  $email = $password =$role = '';


if (isset($_POST['save'])) {
	# code...
	$username=$_POST['username'];
	$email=$_POST['emailSignup'];
	$password =$_POST['regpass'];
	$role=$_POST['role'];
	
}

//encrypt password 
$encrypted_pass = md5($password);
// fetch records from db 
$regsql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($regsql);

if ($result->num_rows > 0) {
	# code...
		# code...
 	$_SESSION['userTaken'];
 	header('location: signup.php');
}else{
	$sql = "INSERT INTO users(username,email,password,role) VALUES ('$username','$email','$encrypted_pass','$role')";

	$conn->query($sql);
	// echo "registration successful";
 	$_SESSION['userRegistered'];

 	header('location: login.php?registered=true');
}
















?>
