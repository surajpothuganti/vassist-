<?php
session_start();

 //$rname = $_POST['rname'];
$rpin = $_POST['rpin'];
$rveh = $_POST['rveh'];
$radd = $_POST['radd'];
$prob= $_POST['rprob'];
$_SESSION['pin']=$rpin;
$remail=$_SESSION['mail'];
$status="False";

// Database connection
$conn= new mysqli('localhost','root','','vassist');
if($conn->connect_error)
{
echo '$conn->connect_error';
die('Connection Failed :'. $conn->connect_error);
}
else
{
$stmt = $conn->prepare("Insert into service(email,location,vehicle,address,problem,status) values(?, ?, ?, ?, ?,?)");
$stmt->bind_param("sissss",$remail,$rpin,$rveh,$radd,$prob,$status);
$stmt->execute();
header("Location:lom.php");
echo "Service Requested...";
$stmt->close();
$conn->close();
if($_SESSION['count']==True)
		{
			insert();
		}
		else{
			#$_SESSION['c']==True;
			header("Location:login.php");
			
		}
}
?>