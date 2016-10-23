<?php
include 'conf.php';
session_start();
if(isset($_POST['bsubmit']))
{
	$fname=$_POST['tfname'];
	$lname=$_POST['tlname'];
	$email=$_POST['temail'];
	$token=$_POST['ttoken'];
	$pass=$_POST['tpassword'];
	if(mysqli_query($con,"insert into login values(,'$fname','$lname','$email',$token,'$pass');"))
	{
		$_SESSION['usr']=$email;
		header("Location:index.php");
	}
}
?>