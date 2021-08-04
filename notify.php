<?php
session_start();
$m=$_SESSION['mail'];
	// Database connection
	$conn = new mysqli('localhost','root','','vassist');
	if($conn->connect_error)
	{
		echo '$conn->connect_error';
		die('Connection Failed :'. $conn->connect_error);
	} 
$sqlq=$conn->prepare("SELECT address,problem FROM service where email=?");
$sqlq->bind_param("s",$m);
$sqlq->execute();
$res=$sqlq->get_result();
$row=$res->fetch_assoc();
$madd=$row['address'];
$mprob=$row['problem'];
$sqlq=$conn->prepare("SELECT name,phno FROM userreg where mail=?");
$sqlq->bind_param("s",$m);
$sqlq->execute();
$res=$sqlq->get_result();
$row=$res->fetch_assoc();
$mname=$row['name'];
$mphno=(string)$row['phno'];
$msg="Username:".$mname."  "."User Phonenumber:  ".$mphno."  "."Problem: ".$mprob."  "."Address: ".$madd;
if(isset($_GET['notify']))
{
	$sno=$_GET['notify'];
	$_SESSION["sno"]=$sno;
	$sqlq=$conn->prepare("SELECT email from mechanic where sno=?");
	$sqlq->bind_param("i",$sno);
	$sqlq->execute();
	$res=$sqlq->get_result();
	$row=$res->fetch_assoc();
	$email=$row['email'];
	//echo "heloo bro";
	//$email;
mail($email,'VASSIST Service Request',$msg,'From:pothugantisuraj@gmail.com');
header("Location:notify1.php");

}
?>