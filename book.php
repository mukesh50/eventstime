<html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php
    	session_start();

    	global $id,$price1,$seats;

    	$id = base64_decode($_GET['id']);

    	if(isset($_SESSION['email']))
      {

      }
      else{
      	echo "<script> location.href='signin.php'; </script>";
      }
    ?>

	<title>
		Book Ticket Page
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


			/* Description */
			.ticket{
				width: 70%;
				border-collapse: collapse;
				background-color: aqua;
			}

			.btn{
				text-decoration: none;
				padding: 10px 25px;
				background-color: black;
				color: white;
				border-radius: 15px;
				border: none;
				cursor: pointer;
			}

			.a1{
				width: 250px;
				height: 25px;
			}

			.a2{
				width: 250px;
				height: 25px;
			}

			.a3{
				font-size: 20px;
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

			@media only screen and (max-width: 550px){

				.sec{
		    		display: none;
		    	}

		    	.msec1{
		    		display: block;
		    	}

				.ticket{
					width: 100%;
					font-size: 10px;
				}

				.a1{
					width: 150px;
					height: 25px;
				}

				.a2{
					width: 250px;
					height: 25px;
				}

				.a3{
					font-size: 16px;
				}
			}
		</style>
	</head>

	<body>

		<br> <br> <br> <br>

		<?php

			include "data.php";

			$date = '';
			$price = '';

			$sql = "select * from events where Event_ID=".$id.";";

			$row = mysqli_query($con, $sql);

			if(mysqli_num_rows($row)>0)
			{
				$r = mysqli_fetch_assoc($row);

				$id = $r['Event_ID'];

				$price1 = $r['Price'];

				$seats = $r['Total_Seat'];

				$_SESSION['seats'] = $seats;

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
						<table class="ticket">
							<tr>
								<td  rowspan="3" width="30%" style="background-image:url(<?php echo $r['Image']; ?>); background-size:100% 100%;background-repeat: no-repeat;" height="200px;"> </td>

								<td colspan="2" style="padding-left: 20px;"> <strong class="a3"> <?php echo $r['Event_Name'] ?> </strong> </td>
							</tr>

							<tr>
								<td width="35%" style="padding-left: 20px;"> Date: <?php echo $date; ?> </td>

								<td width="35%"> Time: <?php echo $r['Start_Time']." To ".$r['End_Time']; ?></td>
							</tr>

							<tr>
								<td colspan="2" style="padding-left: 20px;"> <?php echo $r['Address2'] ?> </td>
							</tr>

							<tr>
								<form method="post">
								<table width="50%" style="background-color: white;border-collapse: collapse;">
									<tr>
										<td colspan="2"> <br> </td>
									</tr>

									<tr>
										<td width="50%"> First Name : </td>

										<td width="50%"> Last Name : </td>
									</tr>

									<tr>
										<td> <input type="text" name="first" id="first" class="a1"> </td>

										<td> <input type="text" name="last" id="last" class="a1"> </td>
									</tr>

									<tr>
										<td colspan="2"> <br> </td>
									</tr>

									<tr>
										<td colspan="2"> Phone No: </td>
									</tr>

									<tr>
										<td colspan="2"> <input type="text" name="phone" class="a2"> </td>
									</tr>

									<tr>
										<td colspan="2"> <br> </td>
									</tr>

									<tr>
										<td colspan="2"> Email ID: </td>
									</tr>

									<tr>
										<td colspan="2"> <input type="text" name="email" id="email" class="a2"> </td>
									</tr>

									<tr>
										<td colspan="2"> <br> </td>
									</tr>

									<tr>
										<td> Age: </td>

										<td> NO of Seats: </td>
									</tr>

									<tr>
										<td> <input type="text" name="age" style="width: 100px; height: 20px;"> </td>

										<td>
											<select name="seat" id='seat' style="width: 100px; height: 20px;">
												<option value="1"> 1 </option>
												<option value="2"> 2 </option>
												<option value="3"> 3 </option>
												<option value="4"> 4 </option>
												<option value="5"> 5 </option>
											</select>
										</td>
									</tr>

									<tr>
										<td colspan="2"> <br> <br>  </td>
									</tr>

									<tr>
										<td colspan="2"> <p id='id'> Enter all the deatils </p> </td>
									</tr>

									<tr>
										<td colspan="2" align="right" style="padding-right: 20px;"> <input type="submit" name="bookticket" value="Book" class="btn">  </td>
									</tr>
								</table>
							</form>
							</tr>
						</table>
					</div>

			<?php
					}
			?>
			

			<!-- Login Value -->
			<?php	
				$seat = 0;

				include "data.php";

				$sql = "select * from tickets where Event_ID=".$id." and BEmail_ID='".$_SESSION['email']."' and not T_Delete='yes';";

				$row = mysqli_query($con , $sql);

				if(mysqli_num_rows($row)>0)
				{
					while($r = mysqli_fetch_assoc($row))
					{
						$seat = $seat + $r['Seats'];
					}

					if($seat == 5 || $seat>5)
					{
						echo "<script> alert('You have Booked Maximum number of tickets')  </script>";

						echo "<script> loaction.href='eventifo.php?id=".$_GET['id']."' </script>";
					}
					else
					{

					echo "<script>";
					echo "var selectElement = document.getElementById('seat');";

					echo	"for (var i = selectElement.length - 1; i >= 0; i--){";

  					echo		"if (i+".$seat.">=5){";
    				echo			"selectElement.remove(i);
  							}
						}
					</script>";

					}
				}

				$sql1 = "select * from user where Email_ID='".$_SESSION['email']."';";

				$row1 = mysqli_query($con , $sql1);

				if(mysqli_num_rows($row1)>0)
				{
					$r1 = mysqli_fetch_assoc($row1);

					echo "<script> document.getElementById('first').value='".$r1['First_Name']."'; </script>";

					echo "<script> document.getElementById('last').value='".$r1['Last_Name']."'; </script>";

					echo "<script> document.getElementById('email').value='".$r1['Email_ID']."'; </script>";
					
				}
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
  												<form method="post">
    											<p> <input type="submit" name="like" value="Liked Events" class="button2"> </p>

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
    											<p> <input type="submit" name="like" value="Liked Events" class="button2"> </p>

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

					<td> &nbsp &nbsp &nbsp &nbsp &nbsp </td>
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

    											<p> <input type="submit" name="like" value="Liked Events" class="button2"> </p>

    											<p> <input type="submit" name="created" value="Created Events" class="button2"> </p>

    											<p> <input type="submit" name="create" value="Create Events" class="button2"> </p>

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
		if(isset($_POST['bookticket']))
		{
			include "data.php";

			$first = mysqli_escape_string($con , $_POST['first']);
			$last = mysqli_escape_string($con , $_POST['last']);
			$phone = mysqli_escape_string($con , $_POST['phone']);
			$email = mysqli_escape_string($con , $_POST['email']);
			$age = mysqli_escape_string($con , $_POST['age']);
			$seat = $_POST['seat'];

			if(strlen($first)>0 && strlen($last)>0 && strlen($phone)>0 && strlen($email)>0 && strlen($age)>0 && strlen($seat)>0)
			{
				if(is_numeric($first) && is_numeric($last))
				{
					echo "<script> document.getElementById('id').innerHTML='Please Enter Valid Name' </script>";

					echo "<script> alert('Please Enter valid name'); </script>";
				}
				else
				{
					if(is_numeric($phone) && strlen($phone)==10)
					{
						if(filter_var($email , FILTER_VALIDATE_EMAIL)==true)
						{
							if(is_numeric($age))
							{
								if($price1==0)
								{
									$seats = $seats - $seat;

									if($seats<=0)
									{
										echo "<script> alert('Tickets already filled'); <script>";

										echo "<script> location.href='home1.php'; </script>";
									}
									else
									{

										$sql2 = "insert into tickets (Event_ID , First_Name , Last_Name , Email_ID , BEmail_ID , Age , Phone_No , Seats , Price) values (?,?,?,?,?,?,?,?,?)";

										if($stmt = mysqli_prepare($con , $sql2))
										{
											mysqli_stmt_bind_param($stmt , "issssisii" , $id , $first , $last , $email , $_SESSION['email'] , $age , $phone , $seat , $price1);

											mysqli_stmt_execute($stmt);

											$sql3 = "update events set Total_Seat=".$seats." where Event_ID=".$id.";";

											if(mysqli_query($con , $sql3))
											{
												echo "<script> location.href='ticket.php'; </script>";
											}
											else
											{
												echo "<script> alert('Some error Occured'); </script>";
											}
										}
										else
										{
											echo "<script> alert('Some error Occured'); </script>";
										}
									}
								}
								else
								{
									$_SESSION['id'] = $id;
									$_SESSION['first'] = $first;
									$_SESSION['last'] = $last;
									$_SESSION['iemail'] = $email;
									$_SESSION['age'] = $age;
									$_SESSION['phone'] = $phone;
									$_SESSION['seat'] = $seat;
									$_SESSION['price'] = $price1;

									echo "<script> location.href='payment.php'; </script>";
								}
							}
							else
							{
								echo "<script> document.getElementById('id').innerHTML='Please Enter Valid Age' </script>";

								echo "<script> alert('Please Enter valid age'); </script>";
							}
						}
						else
						{
							echo "<script> document.getElementById('id').innerHTML='Please Enter Valid Email ID' </script>";

							echo "<script> alert('Please Enter valid Email ID'); </script>";
						}
					}
					else
					{
						echo "<script> document.getElementById('id').innerHTML='Please Enter Valid Phone Number' </script>";

						echo "<script> alert('Please Enter Valid phone number'); </script>";
					}
				}
			}
			else
			{
				echo "<script> document.getElementById('id').innerHTML='Please Enter All the Details' </script>";

				echo "<script> alert('Please Enter all the details'); </script>";
			} 

			mysqli_close($con);
		}
	?>


	<?php
		#FeedBack Page
		if(isset($_POST['feed']))
		{
			if(isset($_SESSION['email']))
			{
				echo "<script> location.href='feedback.php' </script>";
			}
			else
			{
				echo "<script> location.href='signin.php' </script>";	
			}
		}

		if(isset($_POST['like']))
		{
			if(isset($_SESSION['email']))
			{
				echo "<script> location.href='likedevents.php' </script>";
			}
			else
			{
				echo "<script> location.href='signin.php' </script>";	
			}
		}

		if(isset($_POST['book']))
		{
			if(isset($_SESSION['email']))
			{
				echo "<script> location.href='bookedtickets.php' </script>";
			}
			else
			{
				echo "<script> location.href='signin.php' </script>";	
			}
		}

		if(isset($_POST['created']))
		{
			if(isset($_SESSION['email']))
			{
				echo "<script> location.href='createdevents.php' </script>";
			}
			else
			{
				echo "<script> location.href='signin.php' </script>";	
			}
		}

		if(isset($_POST['create']))
		{
			if(isset($_SESSION['email']))
			{
				echo "<script> location.href='create.php' </script>";
			}
			else
			{
				echo "<script> location.href='signin.php' </script>";	
			}
		}

		if(isset($_POST['about']))
		{
			echo "<script> location.href='about.php' </script>";
		}
	?>
</html>