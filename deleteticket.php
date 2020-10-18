<?php

	session_start();

	global $id;

	if(isset($_SESSION['email']))
	{

	}
	else
	{
		echo "<script> location.href='home1.php'; </script>";
	}

	if(isset($_GET['id']))
	{
		$id = base64_decode($_GET['id']);

		include "data.php";

		$sql = "select * from tickets , events where Ticket_ID=".$id." and tickets.Event_ID = events.Event_ID;";

		$row = mysqli_query($con , $sql);

		if(mysqli_num_rows($row)>0)
		{
			$r = mysqli_fetch_assoc($row);

			if($r['Price']>0)
			{
				$sql = "update tickets set T_Delete='yes' where Ticket_ID=".$id.";";

				if($r['Start_Date']>date("Y-m-d"))
				{
					if(mysqli_query($con , $sql))
					{
						$txt = "Your Ticket For event '".$r['Event_Name']."' has been deleted and your Money Has Been Refunded";

						if(mail($_SESSION['email'], "Ticket Delete", $txt))
						{

							$seats = $r['Toatl_Seat'] + $r['Seats'];

							$sql3 = "update events set Total_Seat=".$seats." where Event_ID=".$r['Event_ID'].";";

							if(mysqli_query($con , $sql3))
							{
								$sql4 = "update payment set P_Delete='yes' where Ticket_ID=".$id.";";

								if(mysqli_query($con , $sql4))
								{
									echo "<script> location.href='bookedtickets.php'; </script>";
								}
								else
								{
									echo "<script> alert('Some error has occured'); </script>";
								}
							}
							else
							{
								echo "<script> alert('Some error has occured'); </script>";
							}
						}
						else
						{
							echo "<script> alert('Some error has occured'); </script>";
						}
					}
				}
				else
				{
					if(mysqli_query($con , $sql2))
					{
						echo "<script> location.href='bookedtickets.php'; </script>";
					}
					else
					{
						echo "<script> alert('Some error has occured'); </script>";
					}
				}
			}




			
			else
			{
				$sql2 = "update tickets set T_Delete='yes' where Ticket_ID=".$id.";";

				if($r['Start_Date']>date('Y-m-d'))
				{
					if(mysqli_query($con , $sql2))
					{
						$txt = "Your Ticket For event '".$r['Event_Name']."' has been deleted";

						if(mail($_SESSION['email'], "Ticket Delete", $txt))
						{
							$seats = $r['Toatl_Seat'] + $r['Seats'];

							$sql3 = "update events set Total_Seat=".$seats." where Event_ID=".$r['Event_ID'].";";

							if(mysqli_query($con , $sql3))
							{
								echo "<script> location.href='bookedtickets.php'; </script>";
							}
							else
							{
								echo "<script> alert('Some error has occured'); </script>";
							}
						}
						else
						{
							echo "<script> alert('Some error has occured'); </script>";
						}
					}
					else
					{
						echo "<script> alert('Some error has occured'); </script>";
					}
				}
				else
				{
					if(mysqli_query($con , $sql2))
					{
						echo "<script> location.href='bookedtickets.php'; </script>";
					}
					else
					{
						echo "<script> alert('Some error has occured'); </script>";
					}
				}
			}
		}
		else
		{
			echo "<script> alert('Some error has occured'); </script>";
		}

		mysqli_close($con);
	}
	else
	{
		echo "<script> location.href='home1.php' </script>";
	}
?>