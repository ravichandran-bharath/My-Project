<?php
session_start();
include 'conf.php';

if(isset($_POST['blsubmit']))
{
	
	echo $email=$_POST['tlemail'];
	echo $pass=$_POST['tlpassword'];
	$rs=mysqli_query($con,"select email,password from login where email='$email' and password='$pass';") ;
	
	$result=mysqli_fetch_array($rs);
	if($result['password']==$pass && $result['email']==$email)
	{
		$_SESSION['usr']=$email;
		$rs=mysqli_query($con,"select * from mode where email='$email';") ;
		$result=mysqli_fetch_array($rs);
		$_SESSION['mode']=$result['mode'];
		
		header("Location:index.php");
	}
	else
	{
		header('Location:login.php?error=1');
	}
	
}
?>