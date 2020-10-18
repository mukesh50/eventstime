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
		Liked Events Page
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


			/* Events Section */

    		.evsec{
				margin:30px;
				width:270px;
				height:400px;
				float: left;
				border: 1px;
				box-shadow: 4px 4px aqua;
			}

			.evsec:hover{
				opacity: 0.5;
			}

			.eva{
				background-color: snow;
				padding-left: 120px;
			}

			.pa{
    			cursor: pointer;
    			text-decoration: none;
    			color : black;
    		}

    		@media only screen and (max-width: 1150px){
				.evsec{
					margin: 25px;
					width: 250px;
					height: 360px;
				}

				.eva{
	      			padding-left: 80px;
	      		}

	      		.h211, .h212, .h213{
		    		display: none;
		    	}

		    	.h210{
		    		display: block;
		    	}
	      	}

	      	@media only screen and (max-width: 850px){
				.eva{
	      			padding-left: 30px;
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

		    	.msearch{
					background-color: aqua;
					opacity: 0.6;
	  				filter: alpha(opacity=60);
	  				width: 200px;
	  				height: 30px;
	  				border-radius: 10px;
				}

		    	.msearch1{
		    		width: 15px;
					height: 15px;
		    	}

		    	.evsec{
			    	margin: 10px;
			    	width: 120px;
			    	height: 220px;
			    	font-size: 12;
			    }

			    .m2{
			    	font-size: 10px;
			    }
		    }

		</style>

	</head>

	<body>
		</br> </br> </br> </br>

		<!-- Events Section -->
		<div class="eva">
		
			<?php
        			$sql = "SELECT * FROM likes , events where likes.Event_ID = events.Event_ID and lik=1 and Email_ID='".$_SESSION['email']."' and Start_Date>'".date('Y-m-d')."' and not E_Delete='yes' order by ID desc;";

					include "data.php";
					$row = mysqli_query($con,$sql);

					if (mysqli_num_rows($row)>0)
					{
						while ($r = mysqli_fetch_assoc($row))
	        			{
    							$id = base64_encode($r['Event_ID']);
	            			$c="";
	              			$p="";
	            			if ($r['Start_Date']==$r['End_Date'])
	            			{
	            				$t = date('g:i A',strtotime($r['Start_Time']));
	                			$d = date('j M Y',strtotime($r['Start_Date']));

	            				$c = $d." - ".$t;
	              			}
	              			else
	              			{
	              				$d = date('j M Y', strtotime($r['Start_Date']));
	              				$t = date('j M Y', strtotime($r['End_Date']));

	              				$c = $d." - ".$t;
	                		}

	                		if ($r['Price']==0)
	              			{
	              				$p="Free";
	              			}
	              			else
	              			{
	              				$p=$r['Price']." /-";
	              			}
						?>

						<section class="evsec">

	            			<a href="eventinfo.php?id=<?php echo $id; ?>" class="pa" >
								<table width="100%" height=100% bgcolor="white" class="m2">
									<tr style="height: 65%;" bgcolor="silver">
										<td style="background-image:url(<?php echo $r['Image']; ?>); background-size:100% 100%;background-repeat: no-repeat;"> </td>
									</tr>
								
									<tr>
										<th> <?php  echo $r['Event_Name']; ?> </th>
									</tr>

									<tr>
										<td> <img src="datelogo.jpg" width="15px" height="15px"> &nbsp;<?php  echo $c;?></td>
									</tr>

									<tr>
										<td> <img src="locationlogo.png" width="15px" height="15px"> &nbsp;<?php echo $r['Address1']; ?> </td>
									</tr>

									<tr>
										<td> #<?php echo $r['Event_Category']; ?> </td>
									</tr>

									<tr style="height: 10%;">
										<td style="border-top: thin solid;text-align: right;padding-right: 10px"> <?php echo $p; ?> </td>
									</tr>

								</table>
	        				</a>
						</section>
					<?php
				}
			}
	    	else
	    	{
	      		echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any event </h1> </div>";

	      		$j = 0;
	    	}
  		mysqli_close($con);
		?>
		</div>

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

    											<p> <input type="submit" name="book" value="Booked Tickets" class="button2"> </p>

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

    											<p> <input type="submit" name="book" value="Booked Tickets" class="button2"> </p>

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

					<td>	 &nbsp &nbsp &nbsp &nbsp &nbsp </td>
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

    											<p> <input type="submit" name="book" value="Booked Tickets" class="button2"> </p>

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
			echo "<script> location.href='feedback.php'; </script>";
		}

		if(isset($_POST['book']))
		{
			echo "<script> location.href='bookedtickets.php' </script>";
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