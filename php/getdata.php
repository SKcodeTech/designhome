<?php
include("connection.php");

$name = $_GET['name'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$message = $_GET['message'];

if(empty($name) || empty($phone) || empty($email) || empty($message)){
	
	echo "<script>alert('Please enter all the fields')</script>";
	
}else{
	
	$sql = "
			INSERT INTO contact_info 
			(cst_name, cst_phone, cst_email, cst_message) 
			VALUES ('$name','$phone','$email','$message')
			";
	$result = mysqli_query($con,$sql);	
	if($result) {
		
		echo "<script>alert('Thank you for contacting us!')</script>";
		
	} else {
		
		echo "Enter valid data";
	}
}

mysqli_close($con);
$url="../contact.html";
echo "<script>document.location.href='{$url}'</script>";
?>