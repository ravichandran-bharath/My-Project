<?php
session_start();
include 'conf.php';
echo $usr=$_SESSION['usr'];
if(isset($_POST['nusubmit']))
{
	echo $uname=$_POST['tuname'];
	echo $pass=$_POST['tpass'];
	if(mysqli_query($con,"insert into sub_user values( '$uname','$pass','$usr');"))
	{
		header("Location:index.php?message=1");
	}
	else
	{
		header("Locattion:index.php?message=2");
	}
}
?>