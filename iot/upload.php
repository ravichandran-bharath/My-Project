<?php
session_start();
include 'conf.php';
$usr=$_SESSION['usr'];
echo $name=$_POST['tmname'];
echo $path=$_POST['path'];
if(mysqli_query($con,"insert into song values('$usr','$name','$path')"))
{
	header("Location:washarea.php?message=8");
}
else
{
	header("Location:washarea.php?message=9");
}
?>