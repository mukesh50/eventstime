<html>
	<head>

    <?php
      session_start();

      if(isset($_SESSION['email']))
      {

      }
      else{
      	echo "<script> location.href='adminlogin.php'; </script>";
      }

      global $id;

      $id = base64_decode($_GET['id']);
    ?>

	<title>
		Event booking Details
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

		<?php
			include "data.php";

			$sql = "select * from tickets where Event_ID=".$id." and not T_delete = 'yes' ;";

			$row = mysqli_query($con , $sql);

			if(mysqli_num_rows($row)>0)
			{
				$i = 1;
				while($r = mysqli_fetch_assoc($row))
				{
				?>
					<div align="center">
						<table class="eva">
							<tr>
								<th style="padding: 10px; border: solid;" width="7%"> SR NO. </th>

								<th style="padding: 10px; border: solid;"> First Name </th>

								<th style="padding: 10px; border: solid;"> Last Name </th>

								<th style="padding: 10px; border: solid;"> Email ID </th>

								<th style="padding: 10px; border: solid;"> Phone No </th>

								<th style="padding: 10px; border: solid;" width="7%"> Seats </th>
							</tr>

						<?php
							echo "<tr>";

							echo "<td style='padding: 10px; border: solid;'> ".$i." </td>";

							echo "<td style='padding: 10px; border: solid;'> ".$r['First_Name']." </td>";

							echo "<td style='padding: 10px; border: solid;'> ".$r['Last_Name']." </td>";

							echo "<td style='padding: 10px; border: solid;'> ".$r['Email_ID']." </td>";

							echo "<td style='padding: 10px; border: solid;'> ".$r['Phone_No']." </td>";

							echo "<td style='padding: 10px; border: solid;'> ".$r['Seats']." </td>";

							echo "</tr>";

							$i = $i+1;
						?>
						</table>	
					</div>
				<?php
				}
			}
			else
			{
				echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any Data </h1> </div>";
			}
		?>







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

						<td style="padding-right: 40px;"> <a href='usereventinfo.php' class="link11"> Back </a> </td>

						</td>
					</form>
				</tr>
			</table>
		</section>



	</body>

	<!-- Header -->
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