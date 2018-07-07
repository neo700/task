<?php

session_start();
include("db_connection.php");
$mode = NULL;
if($_SERVER["REQUEST_METHOD"]=="POST")
{   
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
}


    $encrypt_pass = md5($password);
	
	$count=0;
	$q="SELECT * FROM registration WHERE Password='$encrypt_pass' AND Email='$email'";
	$w=mysqli_query($con,$q);

	while($row = mysqli_fetch_row($w))
{
    $count++;
    $value = mysqli_fetch_object($w);
    $_SESSION['username'] =  $name;
	
     header('Location: after.php');
}
	if($count==0)
	{
		 echo "<script>";
		 echo "alert('INVALID CREDENTIALS');";
		 echo "window.location.href = 'login.html'";
		 echo "</script>"; 
	}




?>