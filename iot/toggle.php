<?php
session_start();
include 'conf.php';

if(isset($_GET['did']))
{
	echo $fname=$_GET['did'];
	
	if($rs=mysqli_query($con,"select * from status"))
	{
		$result=mysqli_fetch_array($rs);
		if($result['status']=='0')
		{
			
			mysqli_query($con,"update status set status=1");
			$name=$result['name'];
			$sts=$result['status'];
			header("Location:pumpset.php?message=5&name=$name&sts=$sts");
		}
		else
		{
			
			mysqli_query($con,"update status set status=0");
				$name=$result['name'];
			$sts=$result['status'];
			header("Location:pumpset.php?message=5&name=$name&sts=$sts");
		}
	}
	else
	{
		header("Location:login.php");
	}
}
?>