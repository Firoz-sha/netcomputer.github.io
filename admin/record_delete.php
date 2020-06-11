<?php

	$con = mysqli_connect("localhost","root","","net");
	
	$id = $_GET['id'];
	
	$sql = "delete from message where id = '$id'";
	
	if(mysqli_query($con,$sql))
	{
		header("location:index.php");
	}
	else{
		
		echo "error".mysqli_error($con);
	}




?>