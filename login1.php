<?php
// Start the session
session_start(); 
if(isset($_POST['mail'])||isset($_POST['pass']))
{
$mail = $_POST['mail'];  
$password = $_POST['pass'];
$_SESSION['mail']=$mail;
$_SESSION['pass']=$password;
}    
  // Database connection
  $conn = new mysqli('localhost','root','','vassist');
	if($conn->connect_error)
	{
		echo '$conn->connect_error';
		die('Connection Failed :'. $conn->connect_error);
	}   
     
      else{
	  
        //to prevent from mysqli injection  
        $mail = stripcslashes($mail);  
        $password = stripcslashes($password);  
        $mail = mysqli_real_escape_string($conn, $mail);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from userreg where mail = '$mail' and pass = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1)
		{
            echo "<h1><center> Login successful </center></h1>"; 
                  header("Location:requestservices.php");
					$log="true";				  
				$_SESSION['Req']=$log;
				$_SESSION['count']=True;
				#$_SESSION['c']=True;
        }  
        else
		{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 
}		
?>  