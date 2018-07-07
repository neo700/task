<?php

session_start();
include("db_connection.php");


if ($_SERVER["REQUEST_METHOD"]=="POST")

 {
 
 	
  
  $name = $_POST['user_name'];
  $email = $_POST['user_email'];
  $university = $_POST['user_university'];
  $password = $_POST['user_password'];
  $password1 = $_POST['user_password1'];
  $mobile_no = $_POST['user_mobile_no'];

 
  if ($password != $password1) {
	echo "<script>";
		 echo "alert('Password Do Not Match');";
		 echo "window.location.href = 'form.html'";
		 echo "</script>";
  }
}



  
  $query = mysqli_query($con,"SELECT Email FROM registration WHERE Email='$email' ");
  if (mysqli_num_rows($query) != 0)
  {
      echo "<script>";
		 echo "alert('Email Already Exist');";
		 echo "window.location.href = 'form.html'";
		 echo "</script>";
      
  
  }
  else
  {

    $encrypt_pass = md5($password);

  	$query = "INSERT INTO registration (Name, Email, University, Password, Phone_Number) 
  			  VALUES ('$name', '$email', '$university','$encrypt_pass','$mobile_no')";
  	mysqli_query($con, $query);
  	
 	$_SESSION['username']=$name;
 	
  	header('location: after.php');

}




?>