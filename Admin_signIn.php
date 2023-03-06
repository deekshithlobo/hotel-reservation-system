<?php
$con= mysqli_connect("localhost","root","","project");
	
	if(!$con){
		die("Connection failed : ".mysqli_connect_error());
	}

	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if(empty($email) || empty ($password)){
		header('Location: error-page.php');	
		}
		
		else
		{
		$sql = "SELECT * FROM admin where username='$email' and password='$password' ";
		$result	= $con->query($sql);
		
		if(!$row = $result->fetch_assoc()){
			header('Location: error-page.php');
		}
		else
		{
			header('Location: add-hotels.php');
		}
		}
?>