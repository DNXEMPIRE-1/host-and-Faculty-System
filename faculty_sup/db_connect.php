<?php
$servername= "localhost";
$username="root";
$password="";
$db="api";

$conn=mysqli_connect($servername,$username,$password,$db);

if (!$conn) {
		die("Not connected to Database".mysqli_connect_error());
}
else{
	echo"connected to the Database";
}


?>