<?php

$db_servername = "localhost";
$db_username = "root";
$db_password = "root";
$db_name = "design_home";

$con = mysqli_connect($db_servername,$db_username,$db_password,$db_name);

if(!$con){
	die("connection error".mysqli_connect_errno());
}


?>