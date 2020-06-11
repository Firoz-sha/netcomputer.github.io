<?php

	$con = mysqli_connect("localhost","root","","net");
	
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$message = $_POST['message'];
	
	$sql = "insert into Message(name,mobile,email,address,message) values('$name','$mobile','$email','$address','$message')";
	
	if(mysqli_query($con,$sql))
	{
		header("location:contact.php");
	}
	else {
		echo "error".mysqli_error($con);
	}
	




?>