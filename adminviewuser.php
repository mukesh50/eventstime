<html>
	<head>

    <?php
      session_start();

      if(isset($_SESSION['adminemail']))
      {

      }
      else{
      	echo "<script> location.href='adminlogin.php'; </script>";
      }
    ?>

	<title>
		All User Page
	</title>

		<style>

			@Viewport{
				zoom: 1.0;
				width: extend-to-zoom;
			}

			@-ms-viewport{
				width : extend-to-zoom;
				zoom: 1.0;
			}

			body{
				margin : 0px;
			}

			/*Header */
			.sec{
	      		width:100%; height:70px;
	        	position: fixed;
	        	background-color: white;
	        	top: 0px;

	    	}

		    .link11{
	        	text-decoration: none;
	        	color : black;
	      	}

	      	.link11:hover{
	      		color: hotpink;
	      		font-size: 17px;
	      	}

			.h210{
				display: none;
			}

			.search{
				background-color: aqua;
				opacity: 0.6;
  				filter: alpha(opacity=60);
  				width: 300px;
  				height: 30px;
  				border-radius: 10px;
			}

			.search1{
				width: 20px;
				height: 20px;
			}

			.eva{
				width: 70%;
				border-collapse: collapse;
			}

			@media only screen and (max-width: 850px){
				.eva{
	      			width: 100%;
	      		}

	      		.h11{
	      			display: none;
	      		}
	      	}
		</style>
	</head>

	<body>
		<br> <br> <br> <br>

		<div align="center">
			<table class="eva">
				<tr>
					<th colspan="2" style="border: solid; padding: 10px;"> Liked Events </th>
				</tr>

				<tr>
					<th style="border: solid; padding: 10px;" width="10%"> Sr No </th>

					<th style="border: solid; padding: 10px;" width="90%"> Event Name </th>
				</tr>

				<?php
					include "data.php";

					$sql = "select * from likes , events where lik=1 and Email_ID='".$_GET['id']."' and likes.Event_ID = events.Event_ID order by likes.Event_ID desc;";

					$row = mysqli_query($con , $sql);

					if(mysqli_num_rows($row)>0)
					{
						$i=1;
						while ($r = mysqli_fetch_assoc($row)) 
						{
							echo "<tr>";

							echo "<td style='border: solid; padding: 10px;'> ".$i." </td>";

							echo "<td style='border: solid; padding: 10px;'> ".$r['Event_Name']." </td>";

							echo "</tr>";

							$i = $i+1;
						}
					}
					else
					{
						echo "<th style='border: solid; padding: 10px;' colspan='2'> Sorry, No Data to Show </th>";
					}
				?>
			</table>

			<br> <br> <br> <br>



			<!-- Booked Tickets -->
			<table class="eva">
				<tr>
					<th colspan="3" style="border: solid; padding: 10px;"> Booked Tickets </th>
				</tr>

				<tr>
					<th style="border: solid; padding: 10px;" width="10%"> Sr No </th>

					<th style="border: solid; padding: 10px;" width="80%"> Event Name </th>

					<th style="border: solid; padding: 10px;" width="10%"> Seats </th>
				</tr>

				<?php
					include "data.php";

					$sql = "select * from tickets , events where BEmail_ID='".$_GET['id']."' and tickets.Event_ID = events.Event_ID order by Ticket_ID desc;";

					$row = mysqli_query($con , $sql);

					if(mysqli_num_rows($row)>0)
					{
						$i=1;
						while ($r = mysqli_fetch_assoc($row)) 
						{
							echo "<tr>";

							echo "<td style='border: solid; padding: 10px;'> ".$i." </td>";

							echo "<td style='border: solid; padding: 10px;'> ".$r['Event_Name']." </td>";

							echo "<td style='border: solid; padding: 10px;'> ".$r['Seats']." </td>";

							echo "</tr>";

							$i = $i+1;
						}
					}
					else
					{
						echo "<th style='border: solid; padding: 10px;' colspan='3'> Sorry, No Data to Show </th>";
					}
				?>
			</table>




			<br> <br> <br> <br>

			<!-- Created Events -->
			<table class="eva">
				<tr>
					<th colspan="3" style="border: solid; padding: 10px;"> Created Events </th>
				</tr>

				<tr>
					<th style="border: solid; padding: 10px;" width="10%"> Sr No </th>

					<th style="border: solid; padding: 10px;" width="80%"> Event Name </th>

					<th style="border: solid; padding: 10px;" width="10%"> View </th>
				</tr>

				<?php
					include "data.php";

					$sql = "select * from publisher where BEmail_ID='".$_GET['id']."'";

					$row = mysqli_query($con , $sql);

					if(mysqli_num_rows($row)>0)
					{
						$i=1;
						while ($r = mysqli_fetch_assoc($row)) 
						{
							$id = base64_encode($r['Event_ID']);
							
							echo "<tr>";

							echo "<td style='border: solid; padding: 10px;'> ".$i." </td>";

							echo "<td style='border: solid; padding: 10px;'> ".$r['Event_Name']." </td>";

							echo "<td style='border: solid; padding: 10px;'> <a href='userevent.php?id=".$id."'> View </a> </td>";

							echo "</tr>";

							$i = $i+1;
						}

					}
					else
					{
						echo "<th style='border: solid; padding: 10px;' colspan='3'> Sorry, No Data to Show </th>";
					}
				?>
			</table>
		</div>

		<br> <br> <br> <br>





		<!--  Header -->
		<section class="sec" id='navbar'>
			<table align="left" class="h1">

				<tr>
					<td> &nbsp&nbsp&nbsp&nbsp  <img src="eventstimelogo2.png" width="160px" height="24px"> </td>
				</tr>

				<tr>
					<td> </td>
				</tr>

				<tr>
					<td colspan="2" class="h11"> &nbspIndia's largest event showing and creating website</td>
				</tr>
			</table>

			<table align="right">
				<tr>
					<td> <br> </td>
				</tr>

				<tr>
					<form action="adminsearch.php">

						<td style="padding-right: 40px;"> <a href='adminalluser.php' class="link11"> Back </a> </td>

					</form>
				</tr>
			</table>
		</section>

	</body>