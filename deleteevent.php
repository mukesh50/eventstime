<?php
	session_start();

	if(isset($_SESSION['email']))
	{

	}
	else
	{
		echo "<script> location.href='home1.php' </script>";
	}

	global $id;

	$id = base64_decode($_GET['id']);

	include "data.php";

	$sql = "select * from publisher where Event_ID=".$id.";";

	$row = mysqli_query($con , $sql);

	if(mysqli_num_rows($row)>0)
	{
		$r = mysqli_fetch_assoc($row);

		if($r['verify'] == 'yes' and $r['payment'] == 'yes')
		{
			echo "<script> alert('Event Cannot be deleted'); </script>";
			echo "<script> location.href='createdevents.php'; </script>";
		}
		else
		{
			$sql2 = "update publisher set c_delete='yes' where Event_ID=".$id.";";

			if(mysqli_query($con , $sql2))
			{
				echo "<script> location.href='createdevents.php'; </script>";
			}
			else
			{
				echo "<script> alert('Some error occured'); </script>";
			}
		}
	}
	else
	{
		echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any event </h1> </div>"; 
	}
?>