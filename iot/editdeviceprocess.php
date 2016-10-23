<?php
session_start();
include 'conf.php';
echo $usr=$_SESSION['usr'];

	$id=$_POST['tid'];
	echo $ip=$_POST['tip'];
	echo $port=$_POST['tport'];
	echo $pin=$_POST['tpin'];
	echo $selected_radio = $_POST['group2'];
echo $name=$_POST['tdname'];
	if(mysqli_query($con,"update device set ip='$ip',port=$port,pin=$pin,type='$selected_radio',name='$name' where id=$id"))
	{
		
		header("Location:pumpset.php?message=6");
	}
	else
	{
		header("Locattion:login.php");
	}

?>