<?php
	// Database connection
	$conn = new mysqli('localhost','root','','vassist');
	if($conn->connect_error)
	{
		echo '$conn->connect_error';
		die('Connection Failed :'. $conn->connect_error);
	} 
if(isset($_GET['accpet']))
{
$sno=$_GET['accpet'];
$status="True";
$stmt=$conn->prepare("UPDATE service SET status='".mysqli_real_escape_string($conn,$status)."' WHERE sno='".mysqli_real_escape_string($conn,$sno)."'");
//$stmt->bind_param("si",$status,$sno);
$stmt->execute();
$stmt->close();
}
?>