<?php 

$conn = mysqli_connect('localhost','root','','a.m.system');
if ($conn) {
	// echo "Connected ";
}else{
	echo "Failed" . mysqli_error($conn);
}



 ?>