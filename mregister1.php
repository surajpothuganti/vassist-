<?php
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$phno = $_POST['phno'];
	$pass = $_POST['pass'];
	$pin = $_POST['pin'];
	$address = $_POST['address'];
	
	
	// Database connection
	$conn = new mysqli('localhost','root','','vassist');
	if($conn->connect_error)
	{
		echo '$conn->connect_error';
		die('Connection Failed :'. $conn->connect_error);
	} 
	else 
	{
		$stmt = $conn->prepare("Insert into mechanic(name,email,phno,pass,pincode,address) values( ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssisis",$name,$mail,$phno,$pass,$pin,$address);
		$stmt->execute();
		echo "Registration successfully...";
		header("Location:mlogin.php");			
		$stmt->close();
		$conn->close();
	}
?>