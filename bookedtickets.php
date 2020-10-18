<html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php
      session_start();

      if(isset($_SESSION['email']))
      {

      }
      else{
      	echo "<script> location.href='signin.php'; </script>";
      }
    ?>

	<title>
		Booked Events Page
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
	        	box-shadow: 0px 5px aqua;
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

			.msec1{
				display: none;
				width:100%; height:50px;
	        	position: fixed;
	        	background-color: white;
	        	top: 0px;
	        	box-shadow: 0px 5px aqua;
			}

			/* Tickets Section */
			.tab{
				width: 80%; 
				margin-top: 30px; 
				box-shadow: 5px 5px aqua;
			}

			.btn{
				text-decoration: none;
				padding: 5px 25px;
				background-color: black;
				color: white;
				border-radius: 5px;
			}

			.btn:hover{
				font-size: 17px;
			}

			.m2{
				visibility: hidden;
			}

			@media only screen and (max-width: 1150px){
				.h211, .h212, .h213{
		    		display: none;
		    	}

		    	.h210{
		    		display: block;
		    	}

		    	.tab{
		    		width: 100%;
		    	}
	      	}

	      	@media only screen and (max-width: 550px)
		    {

		    	.sec{
		    		display: none;
		    	}

		    	.msec1{
		    		display: block;
		    	}

		    	.tab{
		    		font-size: 10px;
		    	}

		    	.m1{
		    		display: none;
		    	}

		    	.m2{
		    		visibility: visible;
		    	}
		    }
		</style>

	</head>

	<body>
		</br> </br> </br> </br>
			<?php
	        	$sql = "SELECT * FROM tickets , events where tickets.Event_ID = events.Event_ID and BEmail_ID='".$_SESSION['email']."' and not T_Delete='yes' order by Ticket_ID desc;";

				include "data.php";
				$row = mysqli_query($con,$sql);

				if (mysqli_num_rows($row)>0)
				{
					while ($r = mysqli_fetch_assoc($row))
	        		{
	        			$ticket = openssl_encrypt($r['Ticket_ID'], "AES-128-CBC", $enc , 0 , "mukesh9167627606");

	        			$tic  = base64_encode($r['Ticket_ID']);
	        			$id = base64_encode($r['Event_ID']);
	        			
			?>

			<div align="center">
				<a href="eventinfo.php?id=<?php echo $id; ?>" style="text-decoration: none; cursor: pointer;">
				<table class="tab">
					
					<tr>
						<td style="background-image:url(<?php echo $r['Image']; ?>); background-size:100% 100%;background-repeat: no-repeat;" rowspan="4" width="20%">  </td>

						<td width="55%" align="center"> <strong> <?php echo $r['Event_Name']; ?> </strong> </td>

						<td width="25%" align="center" style="background-color: aqua;"> <?php echo $ticket; ?> </td>
					</tr>

					<tr>
						<td style="padding: 10px;"> <?php echo "Name : ".$r['First_Name']." ".$r['Last_Name']; ?> </br> </br> No. of Seats <?php echo $r['Seats']; ?> </td>

						<td style="padding: 10px;"> <?php echo "Date : ".$r['Start_Date']; ?> </br> </br> Timming : <?php echo $r['Start_Time']; ?> </td>
					</tr>

					<tr>
						<td style="padding: 10px;"> <?php echo "Email ID : ".$r['Email_ID']; ?> </td>

						<td style="padding: 10px;"> <?php echo "Phone NO : ".$r['Phone_No']; ?> </td>
					</tr>

					<tr>
						<td class="m2"> </td>

						<td style="padding: 10px" class="m1"> <?php echo "Address : ".$r['Address2']; ?> </td>

						<td align="right" style="padding-right: 40px;"> <a class="btn" href='deleteticket.php?id=<?php echo $tic ?>'> Delete  </a> </td>
					</tr>

					<tr>
						<td> </td>
					</tr>

					<tr class="m2">
						<td> Address&nbsp:-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>

						<td colspan="3"> <?php echo $r['Address2']; ?> </td>
					</tr>
				</table>
			</a>

			</div>

				<?php
				}
			}
	    	else
	    	{
	      		echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any Data </h1> </div>";
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

    											<p> <input type="submit" name="created" value="Created Events" class="button2"> </p>

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

    											<p> <input type="submit" name="created" value="Created Events" class="button2"> </p>
    											
    											<p> <input type="submit" name="create" value="Create Event" class="button2"></p>
    										</form>
  											</div>
										</div>
					</td>

					<td class="h212"> &nbsp &nbsp &nbsp </td>

					<td class="h213">	<a class="link11" href="home1.php"> Home Page </a> </td>

					<td> &nbsp; &nbsp; &nbsp; </td>

					<td>	<a class="link11" href="about.php"> About Us </a> &nbsp &nbsp &nbsp</td>

					<td>	 &nbsp &nbsp &nbsp &nbsp &nbsp</td>
				</tr>

			</table>
		</section>

		<!-- Mobile Header -->
		<section class="msec1" id='navbar'>
			<table class="mh1" width="100%" id='mh1'>

				<tr>
					<td> </td>
				</tr>

				<tr>
					<td> &nbsp&nbsp&nbsp&nbsp  <img src="eventstimelogo2.png" width="120px" height="20px"> </td>

					<td rowspan="2" align="right" width="10%">	
										<div class="dropdown" align="left">
  											<p class="dropbtn"> Menu </p>
  											<div class="dropdown-content">
  											<form method="post">

    											<p> <input type="submit" name="like" value="Liked Events" class="button2"> </p>

    											<p> <input type="submit" name="feed" value="Feed Back" class="button2"> </p>

    											<p> <input type="submit" name="created" value="Created Events" class="button2"> </p>

    											<p> <input type="submit" name="create" value="Create Event" class="button2"> </p>

    											<p> <input type="submit" name="about" value="About US" class="button2"> </p>
    										</form>
  											</div>
										</div>
					</td>


					<td class="h212" align="right" width="10%"> &nbsp &nbsp &nbsp </td>

					<td id="l11"  align="right"> <p> <a class="link11" href="home1.php"> Home page </a> &nbsp </p> </td>
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
		if(isset($_POST['feed']))
		{
			echo "<script> location.href='feedback.php' </script>";
		}

		if(isset($_POST['like']))
		{
			echo "<script> location.href='likedevents.php' </script>";
		}

		if(isset($_POST['home']))
		{
			echo "<script> location.href='home1.php' </script>";
		}

		if(isset($_POST['created']))
		{
			echo "<script> location.href='createdevents.php' </script>";
		}

		if(isset($_POST['create']))
		{
			echo "<script> location.href='create.php' </script>";
		}

		if(isset($_POST['about']))
		{
			echo "<script> location.href='about.php' </script>";
		}
	?>

</html>