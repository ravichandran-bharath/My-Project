<?php
session_start();
include 'conf.php';
$usr=$_SESSION['usr'];
if(isset($_POST['msubmit']))
{
	$selected_radio = $_POST['group1'];

	if(mysqli_query($con,"update mode set mode='$selected_radio' where email='$usr';"))
	{
		$_SESSION['mode']=$selected_radio;
		echo $_SESSION['usr'];
		echo $_SESSION['mode'];
		header("Location:index.php?message=3");
	}
	else
	{
		header("Locattion:login.php");
	}
}
?>