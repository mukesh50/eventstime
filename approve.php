<?php
	if(isset($_GET['id']))
	{
		include "data.php";

		$id = base64_decode($_GET['id']);

		$sql = "update publisher set verify='yes' where Event_ID=".$id.";";

		if(mysqli_query($con , $sql))
		{
			echo "<script> location.href='adminapprovedevents.php'; </script>";
		}
		else
		{
			echo "<script> alert('Some error occured'); </script>";
		}
	}
	else
	{

	}
?>