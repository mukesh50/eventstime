<?php
	session_start();

	if(isset($_SESSION['email']))
	{

	}
	else
	{
		echo "<script> location.href='home1.php' </script>";
	}
	
if (isset($_GET['id']))
{
	$id = base64_decode($_GET['id']);

	include "data.php";

	$sql = "update feed set F_Delete='yes' where ID=".$id.";";

	if(mysqli_query($con , $sql))
	{
		echo "<script> location.href='feedback.php'; </script>";
	}
	else
	{
		echo "<script> alert('Some Error Occured') </script>";
	}

	mysql_close($con);
}
else
{
	echo "<script> location.href='home1.php'; </script>";
}

?>