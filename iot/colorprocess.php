<?php
session_start();
include 'conf.php';
echo $usr=$_SESSION['usr'];
if(isset($_POST['colorsubmit']))
{
	$red=$_POST['red'];
	echo $green=$_POST['green'];
	echo $blue=$_POST['blue'];
	
	if(mysqli_query($con,"update color set red=$red,green=$green,blue=$blue"))
	{
		
		header("Location:statistics.php");
	}
	else
	{
		header("Locattion:login.php");
	}
}
?>