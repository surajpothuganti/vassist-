<?php
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$phno = $_POST['phno'];
	$pass = $_POST['pass'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','vassist');
	if($conn->connect_error)
	{
		echo '$conn->connect_error';
		die('Connection Failed :'. $conn->connect_error);
	} 
	else 
	{
		$stmt = $conn->prepare("Insert into userreg(name,mail,phno,pass) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis",$name,$mail,$phno,$pass);
		$stmt->execute();
		echo "Registration successfully...";
		header("Location:login.php");			
		$stmt->close();
		$conn->close();
	}
?>