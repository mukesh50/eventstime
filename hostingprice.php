<html>
	<head>

		<?php
			session_start();

			if(isset($_SESSION['adminemail']))
			{

			}
			else
			{
				echo "<script> location.href='adminlogin.php'; </script>";
			}
		?>

	<title>
		Admin Page
	</title>

	<style type="text/css">
		.sec{
			width:100%; height:70px;
			position: fixed;
			background-color: white;
			top: 0px;

		}

		a{
			text-decoration: none;
		}

		.btn{
			padding: 6px 25px;
			background-color: black;
			color: white;
			border-radius: 5px;
			cursor: pointer;
			font-weight: bold;
		}
	</style>

	</head>

	<body>
		<br> <br> <br> <br>

		<div align="center">
			<table style="width: 70%; box-shadow: 5px 5px aqua;">
				<form method="post">
					<tr>
						<td align="center"> <strong> Event Hosting Charges </strong> </td>
					</tr>

					<tr>
						<td> <br> </td>
					</tr>

					<tr>
						<td> Free </td>
					</tr>

					<tr>
						<td> <input type="text" name="free" id='free'> </td>
					</tr>

					<tr>
						<td> <br/> </td>
					</tr>

					<tr>
						<td> Paid </td>
					</tr>

					<tr>
						<td> <input type="text" name="paid" id='paid'> </td>
					</tr>

					<tr>
						<td> <br> </td>
					</tr>

					<tr>
						<td> <p id="id"> Enter valid amount </p> </td>
					</tr>

					<tr>
						<td style="padding-left: 100px;"> <input type="submit" name="submit" value="Submit" class="btn"> </td>
					</tr>
				</form>
				
			</table>
		</div>

		<!-- Header -->
		<section id="navbar" class="sec">
			<table align="left">

				<tr>
					<td style="padding-left: 20px;"> <img src="eventstimelogo2.png" width="160px" height="24px"> </td>
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
					<td style="padding-right: 20px;"> <a href="adminpage.php"> Back </a> </td>
				</tr>
			</table>
		</section>
	</body>

	<script>
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function() 
		{
			var currentScrollPos = window.pageYOffset;
				if (prevScrollpos > currentScrollPos) 
				{
						document.getElementById("navbar").style.top = "0";
					}
					else 
					{
						document.getElementById("navbar").style.top = "-70px";
					}
					prevScrollpos = currentScrollPos;
			}
	</script>


	<?php
		include "data.php";

		$sql = "select * from eventcharges";

		$row  = mysqli_query($con , $sql);

		if(mysqli_num_rows($row)>0)
		{
			$r = mysqli_fetch_assoc($row);

			echo "<script> document.getElementById('free').value=".$r['Free']." </script>";

			echo "<script> document.getElementById('paid').value=".$r['Paid']." </script>";
		}
		else
		{
			echo "<script> alert('Some error occured'); </script>";
		}

		if(isset($_POST['submit']))
		{
			$free = mysqli_escape_string($con , $_POST['free']);
			$paid = mysqli_escape_string($con , $_POST['paid']);

			if(is_numeric($free) && is_numeric($paid))
			{

				$sql1 = "update eventcharges set Free=".$free." , Paid=".$paid.";";

				if(mysqli_query($con , $sql1))
				{
					echo "<script> alert('Done'); </script>";

					echo "<script> location.href='hostingprice.php'; </script>";
				}
				else
				{
					echo "<script> alert('Some error occured'); </script>";
				}
			}
			else
			{
				echo "<script> document.getElementById('id').innerHTML = 'Enter Valid amount'; </script>";
			}
		}
		
	?>

</html>