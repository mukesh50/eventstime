<html>
	<head>

    <?php

    	session_start();

    	if(isset($_SESSION['email']))
	      {

	      }
	      else{
	      	echo "<script> location.href='signin.php'; </script>";
	      }

      	global $id,$total,$eid;
      	$id = base64_decode($_GET['id']);
    ?>

	<title>
		Eventinfo Page
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
				background-color: aqua;
			}

			/*Header */
			.sec{
	      		width:100%; height:70px;
	        	position: fixed;
	        	background-color: white;
	        	top: 0px;

	    	}

	    	.dropdown {
	  			position: relative;
	  			display: inline-block;
	  			cursor: pointer;
			}

			.dropdown-content {
	  			display: none;
	  			position: absolute;
	  			background-color: White;
	  			min-width: 160px;
	  			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  			z-index: 1;
			}

			.dropdown-content p {
	  			color: black;
	  			padding: 6px 8px;
	  			text-decoration: none;
	  			display: block;
			}

			.dropdown-content p:hover {background-color: #ddd;}

			.dropdown:hover .dropdown-content {display: block;}

			.dropdown:hover .dropbtn {color: hotpink;}

			.button2 {     
		      	background-color: Transparent;
		      	background-repeat:no-repeat;
		      	border: none;
		      	cursor:pointer;
		      	overflow: hidden;
		      	font-size: 16px;
		      	font-family: Times New Roman;        
		    }

		    .button2:hover{
		    	color: hotpink;
		    	font-size: 17px;
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


			/* Description page */
			.event{
				width: 70%;
				border-collapse: collapse;
			}

			.like1{
				width: 20px;
				height: 20px;
				display: inline-block;
			}

			.like{
				width: 20px;
				height: 20px;
				display: none;
			}

			.btn{
				text-decoration: none;
				padding: 6px 25px;
				background-color: black;
				color: white;
				border-radius: 10px;
				border: none;
				cursor: pointer;
			}

			@media only screen and (max-width: 1250px){
				.h11{
	      			display: none;
	      		}
			}

			@media only screen and (max-width: 1150px){

				.h211, .h212, .h213, .h214{
		    		display: none;
		    	}

		    	.h210{
		    		display: block;
		    	}
			}

			@media only screen and (max-width: 1150px){
	      		.event{
	      			width: 85%;
	      		}
			}

			@media only screen and (max-width: 850px){

	      		.h1{
		    		display: none;
		    	}

		    	.event{
		    		width: 100%;
		    	}
			}
		</style>

	</head>

	<body>

		</br> </br> </br> </br>

		<?php

			include "data.php";

			$date = '';
			$price = '';

			$sql = "select * from events where C_ID=".$id.";";

			$row = mysqli_query($con, $sql);

			if(mysqli_num_rows($row)>0)
			{
				$r = mysqli_fetch_assoc($row);

				$total = $r['Total_Seat'];
				$eid = $r['Event_ID'];

				if($r['Price']==0)
				{
					$price = 'Free';
				}
				else
				{
					$price = $r['Price']."/-";
				}

				if($r['Start_Date'] == $r['End_Date'])
				{
					$date = date( "D, d M Y" ,strtotime($r['Start_Date']));
				}
				else
				{
					$date = date("D, d M Y" ,strtotime($r['Start_Date']))." - ".date("D, d M Y" ,strtotime($r['End_Date']));
				}

				$time = date('g:i A',strtotime($r['Start_Time']))." - ".date('g:i A',strtotime($r['End_Time']));
				?>

				<div align="center">
					<table class="event" style="background-color: white">
						<tr>
							<td width="60%" rowspan="8" style="background-image:url(<?php echo $r['Image']; ?>); background-size:100% 100%;background-repeat: no-repeat;" height="300px;"> </td>

							<td width="40%" style="padding: 20px;" colspan="2"> <strong style="font-size: 20px;"> <?php echo $r['Event_Name']; ?> </strong> </td>
						</tr>

						<tr>
							<td style="padding-left: 20px;" colspan="2">  
										<p id='like' style="display: inline-block;"> 0 </p> 
							</td>
						</tr>

						<tr>
							<td colspan="2" id='a1' style="padding-left: 20px;"> Tickets Booked : 0 </td>
						</tr>

						<tr>
							<td colspan="2" style="padding-left: 20px;"> <a href="bookedticketinfo2.php?id=<?php echo $_GET['id']; ?>" class="btn"> View </a> </td>
						</tr>

						<tr>
							<td colspan="2"> <br> </td>
						</tr>

						<tr>
							<td colspan="2" id='a2' style="padding-left: 20px;"> Available Tickets : <?php echo $r['Total_Seat']; ?> </td>
						</tr>

						<tr>
							<td colspan="2"> <br> </td>
						</tr>

						<tr>
							<td style="padding-left: 20px;" colspan="2">  <strong style="padding-right: 30px;"> <?php echo $price; ?> </strong> </div> 
							</td>
						</tr>

						<tr>
							<td colspan="3" height="100px">
								<table style="border-collapse: collapse;" width="100%" hight="100%">
									<tr>
										<td height="100px" style="background-color: yellow" align="center" width="33%"> <img src="datelogo.png" width="50px;" height="50px;"> </br>
											<?php echo $date; ?>
										</td>

										<td height="100px" style="background-color: yellow" align="center" width="33%"> <img src="timelogo.png" width="50px;" height="50px;"> </br>
											<?php echo $time; ?>
										</td>

										<td height="100px" style="background-color: yellow" align="center" width="34%"> <img src="locationlogo.png" width="50px;" height="50px;"> </br>
											<?php echo $r['Address1']; ?> 
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr>
							<td width="70%" style="padding: 20px;" colspan="2"> <strong style="font-size: 20px;"> Event Description </strong> </td>

							<td width="30%" style="background-color: powderblue; padding: 20px;"> <strong style="font-size: 20px;"> Address </strong> </td>
						</tr>

						<tr>
							<td width="70%" style="padding-left: 20px;" rowspan="2" colspan="2"> <p align="left"> <?php echo nl2br($r['Description']); ?> </p> </td>

							<td width="30%" height="120px" style="padding-left: 20px; background-color: powderblue;"> <p align="left"> <?php echo nl2br($r['Address2']); ?> </p> </td>
						</tr>

						<tr>
							<td colspan="3"> </td>
						</tr>

						<tr>
							<td style="padding: 20px;" colspan="2"> <strong style="font-size: 20px;"> Organizer Name </strong> </td>
						</tr>

						<tr>
							<td  style="padding-left: 20px;" colspan="2"> <p align="left"> <?php echo nl2br($r['Org_Name']); ?> </p> </td>
						</tr>

						<tr>
							<td style="padding: 20px;" colspan="2"> <strong style="font-size: 20px;"> Organizer Description </strong> </td>
						</tr>

						<tr>
							<td style="padding-left: 20px;" colspan="2"> <p align="left"> <?php echo nl2br($r['Org_Description']);  ?> </p> </td>
						</tr>

						<tr>
							<td colspan="3"> <br/> <br/> </td>
						</tr>

						<tr>
							<td colspan="3" style="padding-left: 20px;"> <strong style="font-size: 20px;"> Feed Back </strong> </td>
						</tr>

						<tr>
							<td style="padding: 20px;" colspan="3"> <iframe src="feed.php?id=<?php echo $_GET['id']; ?>" width="100%" height="500px;"></iframe>  </td>
						</tr>

						<tr>
							<td colspan="3"> <br/> <br/> </td>
						</tr>
					</table>
				</div>
		<?php
				like($eid);
			}
			else
			{
				echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any event </h1>
					<h2> Please make sure that you have paid for the event to host </h2> </div>";
			}

			mysqli_close($con);
		?>


		<!--  Header -->
		<section class="sec" id='navbar'>
			<table align="left" class="h1">

				<tr>
					<td> </td>
				</tr>

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


			<table align="right" style="margin: 18px;">
			
				<tr>

					<td rowspan="2" class="h210">	
										<div class="dropdown">
  											<p class="dropbtn"> Menu </p>
  											<div class="dropdown-content">
  												<form method="POST">
    											<p> <input type="submit" name="feed" value="Feed Back" class="button2"> </p>

    											<p> <input type="submit" name="like" value="Liked Events" class="button2"> </p>

    											<p> <input type="submit" name="book" value="Booked Tickets" class="button2"> </p>

    											<p> <input type="submit" name="create" value="Create Event" class="button2"> </p>

    											<p> <input type="submit" name="home" value="Home Page" class="button2"> </p>
    										</form>
  											</div>
										</div>
					</td>

					<td rowspan="2" class="h211">	
										<div class="dropdown">
  											<p class="dropbtn"> Menu </p>
  											<div class="dropdown-content">
  												<form method="post">
    											<p> <input type="submit" name="feed" value="Feed Back" class="button2"> </p>

    											<p> <input type="submit" name="like" value="Liked Events" class="button2"> </p>

    											<p> <input type="submit" name="book" value="Booked Tickets" class="button2"> </p>
    											
    											<p> <input type="submit" name="create" value="Create Event" class="button2"></p>
    										</form>
  											</div>
										</div>
					</td>

					<td class="h212"> &nbsp &nbsp &nbsp </td>

					<td class="h213">	<a class="link11" href="home1.php"> Home Page </a> </td>

					<td> &nbsp; &nbsp; &nbsp; </td>

					<td>	<a class="link11" href="about.php"> About Us </a> &nbsp &nbsp &nbsp</td>

					<td>	 &nbsp &nbsp &nbsp &nbsp &nbsp </td>
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
	<?php
   		function like($eid)
   		{
	   		include "data.php";

	   			$sql1 = "select * from likes where lik=1 and Event_ID=".$eid.";";

				$row1 = mysqli_query($con, $sql1);

				$like=0;
				if(mysqli_num_rows($row1)>0)
				{
					while($r1 = mysqli_fetch_assoc($row1))
					{
						$like = $like + 1;
					}
				}
				else
				{

				}

				echo "<script> document.getElementById('like').innerHTML='Total Likes : ".$like."' </script>";



				$sql2 = "select * from tickets where Event_ID=".$eid." and not T_delete='yes';";

				$row2 = mysqli_query($con , $sql2);

				$seat = 0;

				if(mysqli_num_rows($row2)>0)
				{
					while($r2 = mysqli_fetch_assoc($row2))
					{
						$seat = $seat + $r2['Seats'];
					}
				}

				echo "<script> document.getElementById('a1').innerHTML='Booked Tickets : ".$seat."' </script>";

				mysqli_close($con);
			}
   	?>
</html>

<?php
		if(isset($_POST['feed']))
		{
			echo "<script> location.href='feedback.php'; </script>";
		}

		if(isset($_POST['like']))
		{
			echo "<script> location.href='likedevents.php' </script>";
		}

		if(isset($_POST['book']))
		{
			echo "<script> location.href='bookedtickets.php' </script>";
		}

		if(isset($_POST['home']))
		{
			echo "<script> location.href='home1.php' </script>";
		}

		if(isset($_POST['create']))
		{
			echo "<script> location.href='create.php' </script>";
		}
	?>