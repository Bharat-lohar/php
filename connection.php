<?php
//database connection1 in php
$servername="localhost";
$username="root";
$password="bharat1234";
$con=new mysqli()($servername,$username,$password);
if($con->connect_error){
	die("connection failed".$con->connect_error);
}
else{
	echo "connection successful";
}
?>