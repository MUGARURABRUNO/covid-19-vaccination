<?php
$servername="localhost";
$username="root";
$password="";
$dbname="vaccination";

$conn= mysqli_connect($servername,$username,$password,$dbname);
if($conn==TRUE){
	// echo "Connection successful";
}
	else{ 
	echo mysqli_error($conn);
}
?>
