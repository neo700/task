<?php

<?php

$server="us-cdbr-iron-east-04.cleardb.net";
$user="b08c149bde9abf";
$pass="8c8e9030";
$con=mysqli_connect($server,$user,$pass);
if(!$con)
{	
		die("Connection failed:" . $con->connect_error);		
}

$db=mysqli_select_db($con,"heroku_826b63e19883921");
if(!$db)
{
	die("Connection failed: " . $db->connect_error);			
}

?>
