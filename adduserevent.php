<?php
	session_start();

	if(isset($_SESSION['adminemail']))
	{

	}
	else
	{
		echo "<script> location.href='adminlogin.php' </script>";
	}

	$id= base64_decode($_GET['id']);

	include "data.php";

	$sql = "select * from publisher where Event_ID=".$id.";";

	$row = mysqli_query($con , $sql);

	if(mysqli_num_rows($row)>0)
	{
		$r= mysqli_fetch_assoc($row);

		$sql1 = "insert into events (C_ID , Event_Name , Event_Category , Image , Address1 , Address2 , Price , Total_Seat , Start_Date , End_Date , Start_Time , End_Time , Description , Org_Name , Org_Description) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

		if($stmt = mysqli_prepare($con , $sql1))
		{
			mysqli_stmt_bind_param($stmt , "isssssiisssssss" , $r['Event_ID'] , $r['Event_Name'] , $r['Event_Category'] , $r['Image'] , $r['Address1'] , $r['Address2'] , $r['Price'] , $r['Total_Seat'] , $r['Start_Date'] , $r['End_Date'] , $r['Start_Time'] , $r['End_Time'] , $r['Description'] , $r['Org_Name'] , $r['Organizer']);

			mysqli_stmt_execute($stmt);

			$sql2 = "update publisher set added='yes' where Event_ID=".$id.";";

			if(mysqli_query($con, $sql2))
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
			echo "<script> alert('Some error occured'); </script>";
		}
	}
	else
	{
		echo "<script> alert('Some error occured'); </script>";
	}
?>