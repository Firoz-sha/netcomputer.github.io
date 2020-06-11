<?php

	session_start();
	
	$con = mysqli_connect("localhost","root","","net");
	
	$username = $_POST['username'];
	$password =$_POST['password'];
	
	$sql = "select * from user where username='$username' and password= '$password'";
	
	$rs = mysqli_query($con,$sql);
	
	$rec= mysqli_fetch_array($rs);
	if($rec['username']!="")
	{
		$_SESSION['username'] = $rec['username'];
		
		header("location:home.php");
	}
	
	else{
		header("location:index.php");
	}

?>
