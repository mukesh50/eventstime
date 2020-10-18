<html>

	<head>
		<title> Terms and conditions </title>
	</head>

	<?php
      session_start();

      if(isset($_SESSION['email']))
      {

      }
      else{
      	echo "<script> location.href='signin.php'; </script>";
      }
    ?>

	<style>
		.btn{
			padding: 3px 10px;
			background-color: green;
			color: white;
			border-radius: 20%;
		}
	</style>

	<body>
		<br> <br> <br>
		<div align="center">
			<table width="80%" style="box-shadow: 5px 5px aqua;">
				<tr>
					<th colspan="2"> Terms and conditions </th>
				</tr>

				<tr>
					<td colspan="2" style="border-bottom: solid;"> Create Event conditions: - </td>
				</tr>

				<tr>
					<td> <br> </td>
				</tr>

				<tr>
					<td width="5%" align="center"> 1 </td>

					<td> The Event Details should be true and genune. </td>
				</tr>

				<tr>
					<td align="center"> 2 </td>

					<?php
						include "data.php";

						$sql = "select * from eventcharges;";

						$row = mysqli_query($con, $sql);

						if (mysqli_num_rows($row)>0)
						{
							$r = mysqli_fetch_assoc($row);
					?>

					<td> The Price for Free ticket events to host is <strong> <?php echo $r['Free']; ?> </strong> and Price for paid ticket event to host is <strong> <?php echo $r['Paid']; ?> </strong>. </td>

					<?php
						}
					?>
				</tr>

				<tr>
					<td align="center"> 3 </td>

					<td> There is no commission on the ticket fare after the hosting of events. </td>
				</tr>

				<tr>
					<td align="center"> 4 </td>

					<td> You can view who all booked the tickets for the event and the Number of seats. </td>
				</tr>

				<tr>
					<td align="center"> 5 </td>

					<td> A user can book maximum of 5 tickets for a event. </td>
				</tr>

				<tr>
					<td> <br> </td>
				</tr>

				<tr>
					<td colspan="2" style="border-bottom: solid;"> Edit Event conditions: - </td>
				</tr>

				<tr>
					<td> <br> </td>
				</tr>

				<tr>
					<td align="center"> 1 </td>

					<td> Before verification you can edit the event as you want and after verification you cannot edit the event but you can delete it before payment. </td>
				</tr>

				<tr>
					<td align="center"> 2 </td>

					<td> After payment if you delete the event the hosted price for the event will not be credited and if any user bookes the ticket for the event and if the ticket is deleted then, that amount is refunded to the user(if its a paid event). </td>
				</tr>

				<tr>
					<td align="center"> 3 </td>

					<td> If you delete the event after hosting the tickets booked for the event will be deleted auto-matically. </td>
				</tr>

				<tr>
					<td align="center"> 4 </td>

					<td> If you change the event time and date after hosting then the users who booked a ticket will get a email. </td>
				</tr>

				<tr>
					<td align="center"> 5 </td>

					<td> If you change the discription of the event no email is sended to the booket ticket user. </td>
				</tr>

				<tr>
					<td> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td align="right"> <form method="POST"> <input type="submit" name="accept" value="Accept & Continue" class="btn"> </form> </td>
				</tr>
			</table>
		</div>
	</body>

	<?php
		if(isset($_POST['accept']))
		{
			echo "<script> location.href='create1.php'; </script>";
		}
	?>
</html>