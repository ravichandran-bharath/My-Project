<?php
session_start();
include 'conf.php';
echo $usr=$_SESSION['usr'];
if(isset($_POST['ndsubmit']))
{
	$id=$_POST['tid'];
	echo $ip=$_POST['tip'];
	echo $port=$_POST['tport'];
	echo $pin=$_POST['tpin'];
	echo $selected_radio = $_POST['group2'];
$name=$_POST['tdname'];
	if(mysqli_query($con,"INSERT INTO device VALUES ($id,'$usr','$ip',$port,$pin,'$selected_radio',0,'$name')"))
	{
		
		header("Location:pumpset.php?message=4");
	}
	else
	{
		header("Locattion:login.php");
	}
}
?>