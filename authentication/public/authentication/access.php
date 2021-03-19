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

$_SESSION['userUnavailable'] = "Please try again, incorrect credentials";

$username="";
$emaillogin="";
$passlogin="";
$role="";
if (isset($_POST['save'])) {
	# code...

	$username=$_POST['username'];
	$emaillogin=$_POST['emaillogin'];
	$passlogin=$_POST['passlogin'];


}

//create the sql query
//create sql query to fetch records
$sql="SELECT * FROM users WHERE email='$emaillogin' && password='".md5($passlogin)."' &&  username='$username' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	# code...
	//logic to check if user exists
	$row = $result->fetch_assoc();
	$username=$row['username'];
    $role=$row['role'];

    switch ($role) {
    	case 'student':
    		# code...
    	$_SESSION['activeUser']= $username;
    //setting new location to studentform.php if role is student
    	header('location: ../../../../mitDatabase1/students.php');
    		break;
    	case 'staff':
    		# code...
    	$_SESSION['activeUser']= $username;
    //setting new location to studentform.php if role is student
    	header('location:../../../../mitDatabase1/staff.php');
    		break;	
    	case 'admin':
    		# code...
    	$_SESSION['activeUser']= $username;
    //setting new location to studentform.php if role is student
    	header('location: ../../../../mitDatabase1/school info/Page-9.php');
    		break;	
    	
    }

   
}else{
    //setting new location if user creds are wrong
    header('location: login.php');
}

















?>