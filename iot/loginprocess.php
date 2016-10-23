<?php
session_start();
include 'conf.php';

if(isset($_POST['bsubmit']))
{
	echo $fname=$_POST['tfname'];
	echo $lname=$_POST['tlname'];
	echo $email=$_POST['temail'];
	echo $token=$_POST['ttoken'];
	echo $pass=$_POST['tpassword'];
	if(mysqli_query($con,"insert into login values( '$email','$fname','$lname',$token,'$pass');") && mysqli_query($con,"insert into mode values( '$email','default');") && mysqli_query($con,"insert into color values( '$email',0,0,0);") )
	{
		$_SESSION['usr']=$email;
		header("Location:index.php");
	}
	else
	{
		header("Location:login.php");
	}
}
?>