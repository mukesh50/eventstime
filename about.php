<html>
	<?php
		session_start(); 
	?>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

	<title> About US </title>

	<style>
		body{
			background-color: black;
			margin: 0px;
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

			.msec1{
				display: none;
				width:100%; height:50px;
	        	position: fixed;
	        	background-color: white;
	        	top: 0px;
	        	box-shadow: 0px 5px aqua;
			}

			.mh2{
				display: none;
			}


			.h210{
				display: none;
			}

		.a1{
			position: absolute;
			top: 55px;
			color: white;
			font-size: 24px;
			font-weight: bold;
		}

		.a2{
			font-size: 28px;
			font-weight: bold;
		}

		.aboutus1{
			width: 100%;
			height: 600px;
		}

		.a3{
			width: 300px;
			height: 50px;
		}

		.a4{
			width: 60%;
			padding-right: 20px;
			padding-left: 20px;
		}

		.a5{
			width: 60%;
		}

		.img{
	    	width: 300px;
	    	height: 300px;
	    }

	    .img2{
	    	width: 100px;
	    	height: 100px;
	    }

	    .m11{
	    	display: none;
	    }

	    @media only screen and (max-width: 1150px){

				.h211, .h212, .h213, .h214{
		    		display: none;
		    	}

		    	.h210{
		    		display: block;
		    	}
			}

		@media only screen and (max-width: 850px){
			.aboutus1{
				width: 100%;
				height: 450px;
			}

			.a1{
				font-size: 20px;
			}

			.a2{
				font-size: 24px;
			}

			.a3{
				width: 200px;
				height: 50px;
			}

			.a4{
				width: 70%
			}

			.a5{
				width: 80%;
			}

			.h1{
				display: none;
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

		    	.img{
		    		width: 100px;
		    		height: 100px;
		    	}

		    	.aboutus1{
		    		width: 100%;
		    		height: 250px;
		    	}

		    	.a1{
		    		font-size: 14px;
		    	}

		    	.a3{
		    		width: 150px;
		    		height: 30px;
		    	}

		    	.m1{
		    		display: none;
		    	}

		    	.m2{
		    		font-size: 10px;
		    	}

		    	.m3{
		    		font-size: 12px;
		    	}

		    	.a4{
		    		width: 100%;
		    		padding-left: 0px;
		    		padding-right: 0px;
		    	}

		    	.img2{
		    		width: 50px;
		    		height: 50px;
		    	}

		    	.a5{
		    		width: 100%;
		    	}

		    	.m11{
		    		display: block;
		    	}
		    }
	</style>
</head>
<body>
	 <br> <br> <br>

	<div data-aos="fade-down">
		<img src="aboutus1.jpg" class="aboutus1">
	</div>

	<div data-aos="fade-up" class="a1" align="right">
		<p> We believe that "Success is never final." </p>
		<p> "Faliure is never fatal." </p>
	</div>

	<div style="height: 50px;"></div>

	<div data-aos="fade-down" align="center" style="color: white;">
		<p class="a2"> About US </p>
	</div>

	<div align="center" style="color: white;">
		<table>
			<tr>
				<td width="50%" align="center"> <div data-aos="flip-left"> <img src="eventstimelogo.png" class="a3"> </div> </td>

				<td width="40%" style="color: white;" align="center" class="m2"> <p data-aos="zoom-in"> Eventstime is a global platform for live experiences that allows anyone to create, share, find and attend events that fuel their passions and enrich their lives. From music festivals, marathons, conferences, community rallies, and fundraisers, to gaming competitions and air guitar contests. Our mission is to bring the world together through live experiences. </p> </td>

				<td width="10%" class="m1"> </td>
			</tr>
		</table>
	</div>

	<div style="height: 50px;"> </div>

	<div align="center" style="color: white;">
		<table>
			<tr>
				<td width="10%" class="m1"> </td>

				<td width="40%" align="center" style="color: white;" class="m2"> <p data-aos="zoom-in-left"> The Events Time is highly inspired by the Higher, Faster, Stronger motto of the volunters. Rising above obstacles and pushing to the mountain top is the trust of the brand. From kids to adults, everyone can benefit from the next generation events technology which we - the events time offers to you. </p> </td>

				<td width="50%" align="center"> <div data-aos="fade-down"> <img src="aboutus2.png" class="img"> </div> </td>
			</tr>
		</table>
	</div>

	<div style="height: 50px;"> </div>

	<div align="center" style="color: white;">
		<table>
			<tr>
				<td width="50%" align="center"> <div data-aos="fade-down"> <img src="aboutus3.png" class="img"> </div> </td>

				<td width="40%" style="color: white;" align="center" class="m2"> <p style="width: 70%" data-aos="zoom-in-right"> So our customer can achieve the very best result in events.We add only the most innovative. high quality products to our website these being discovered all over India and selectively choosen with the experties of our events. </p> </td>

				<td width="10%" class="m1"> </td>
			</tr>
		</table>
	</div>

	<div style="height: 50px;"> </div>

	<div data-aos="fade-down" align="center" style="color: white;">
		<h2> Get in touch </h2>

		<p class="m3"> Want to get in touch? we would love to hear from you. here's how you can reach us.. </p>
	</div>

	<div align="center">
		<table class="a4">

			<tr>
				<td align="center" height="100px;" width="40%" style="background-color: white">
						<table width="100%">
							<tr>
								<td> </br> </td>
							</tr>

							<tr>
								<td align="center"> <img src="phone.png" class="img2">  </td>
							</tr>

							<tr>
								<td align="center"> <strong> Talk to Customer Support </strong> </td>
							</tr>

							<tr>
								<td> </br> </td>
							</tr>

							<tr>
								<td style="padding: 30px;" class="m2"> <p> Interested in eventstime software? just pick up the phone to chat with the member of our sales team. </p> </td>
							</tr>

							<tr>
								<td> </br> </br> </td>
							</tr>

						</table>
					  </td>

					<td width="5%"> </td>

					<td align="center" height="100px" width="40%" style="background-color: white;">
						<table>
							<tr>
								<td> </br> </td>
							</tr>

							<tr>
								<td align="center"> <img src="message.png" class="img2"> </td>
							</tr>

							<tr>
								<td align="center"> <strong> Contact Customer Support </strong> </td>
							</tr>

							<tr>
								<td> </br> </td>
							</tr>

							<tr>
								<td  style="padding: 30px;" class="m2"> <p> Sometimes you need a little help. Don't worry...   we are here for you </p> </td>
							</tr>

							<tr>
								<td> </br> </br></td>
							</tr>

						</table>
					 </td> 
				</tr>

			</table>
	</div>

	<div style="height: 50px;"> </div>

	<div data-aos='fade-down' style="color: white" align="center">
		<p class="a2"> Our features </p>
	</div>

	<div style="height: 50px;"> </div>

	<div data-aos='fade-left' style="color: white;">
		<table class="a5">
			<tr>
				<td width="10%" class="m1"> </td>

				<td align="center" width="40%"> <img src="aboutus6.png" class="img"> </td>

				<td style="color: white" width="50%" class="m2"> <div align="center"> <strong> User Friendliness </strong> <br> (The whole system is user friendly and easy to navigate) </div> </td>
			</tr>
		</table>
	</div>


	<div style="height: 50px;"> </div>

	<div data-aos='fade-right' style="color: white;" align="right">
		<table class="a5">
			<tr>
				<td align="center" width="40%"> <img src="aboutus7.png" class="img"> </td>

				<td style="color: white" width="50%" class="m2"> <div align="center"> <strong> Bookmark Options (like) </strong> <br> (Bookmark your favourite event to browse it back faster and to book a ticket) </div> </td>

				<td width="10%" class="m1"> </td>
			</tr>
		</table>
	</div>


	<div style="height: 50px;"> </div>

	<div data-aos='fade-left' style="color: white;">
		<table class="a5">
			<tr>
				<td width="10%" class="m1"> </td>

				<td align="center" width="40%"> <img src="aboutus9.png" class="img"> </td>

				<td style="color: white" width="50%"> <div align="center" class="m2"> <strong> Easy Search </strong> <br> (User's convenience is our goal, So we made sure that they always get what they came for) </div> </td>
			</tr>
		</table>
	</div>


	<div style="height: 50px;"> </div>

	<div data-aos='fade-right' style="color: white;" align="right">
		<table class="a5">
			<tr>
				<td align="center" width="40%"> <img src="aboutus10.png" class="img"> </td>

				<td style="color: white" width="50%"> <div align="center" class="m2"> <strong> Complete verified Details </strong> <br> (All the details which are published that are verified and true) </div> </td>

				<td width="10%" class="m1"> </td>
			</tr>
		</table>
	</div>


	<div style="height: 50px;"> </div>

	<div data-aos='fade-left' style="color: white;">
		<table class="a5">
			<tr>
				<td width="10%" class="m1"> </td>

				<td align="center" width="40%"> <img src="aboutus11.png" class="img"> </td>

				<td style="color: white" width="50%"> <div align="center" class="m2"> <strong> Cancellation service and clear Refund terms </strong> <br> (User's convenience is our goal, So we made sure that they always get what they came for) </div> </td>
			</tr>
		</table>
	</div>


	<div style="height: 50px;"> </div>

	<div data-aos='fade-right' style="color: white;" align="right">
		<table class="a5">
			<tr>
				<td align="center" width="40%"> <img src="aboutus12.png" class="img"> </td>

				<td style="color: white" width="50%"> <div align="center" class="m2"> <strong> Conformation Email </strong> <br> (We make sure to send a confirmation email right after the regestration to acknowledge the fact of registration) </div> </td>

				<td width="10%" class="m1"> </td>
			</tr>
		</table>
	</div>

	<div style="height: 50px;"> </div>

	<div width="100%" style="color: white;" align="center"> <h2> Developers </h2> </div>

	<div align="center" class="m1">
		<table class="a4">
			<tr>
				<td width="50%" align="center"> <img src="aboutus13.png" width="300px" height="300px"> </td>

				<td width="50%" align="center"> <img src="aboutus14.png" width="300px" height="300px"> </td>
			</tr>

			<tr>
				<td style="color: white;" align="center"> <strong> Mukesh Nadar </strong> <br> (Designer and Developer) </td>

				<td style="color: white;" align="center"> <strong> Sudhan Raj Rajan </strong> <br> (Manager) </td>
			</tr>
		</table>
	</div>

	<div align="center" class="m11">
		<table class="a4">
			<tr>
				<td width="50%" align="center"> <img src="aboutus13.png" width="300px" height="300px"> </td>
			</tr>

			<tr>
				<td style="color: white;" align="center"> <strong> Mukesh Nadar </strong> <br> (Designer and Developer) </td>
			</tr>

			<tr>
				<td width="50%" align="center"> <img src="aboutus14.png" width="300px" height="300px"> </td>
			</tr>

			<tr>
				<td style="color: white;" align="center"> <strong> Sudhan Raj Rajan </strong> <br> (Manager) </td>
			</tr>

		</table>
	</div>


	<div style="height: 200px;"></div>


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
  											<form method='post'>
    											<p> <input type="submit" name="feed" value="Feed Back" class="button2">  </p>

    											<p> <input type="submit" name="like" value="Liked Events" class="button2"> </p>

    											<p> <input type="submit" name="book" value="Booked Tickets" class="button2"> </p>

    											<p> <input type="submit" name="created" value="Created Events" class="button2"> </p>

    											<p> <input type="submit" name="create" value="Create Event" class="button2"> </p>

    											<p> <input type="submit" name="home" value="Home Page" class="button2"> </p>

    											<p> <input type="submit" name="about" value="About US" class="button2"> </p>
    										</form>
  											</div>
										</div>
					</td>

					<td rowspan="2" class="h211">	
										<div class="dropdown">
  											<p class="dropbtn"> Menu </p>
  											<div class="dropdown-content">
  											<form method='post'>
    											<p> <input type="submit" name="feed" value="Feed Back" class="button2">  </p>

    											<p> <input type="submit" name="like" value="Liked Events" class="button2"> </p>

    											<p> <input type="submit" name="book" value="Booked Tickets" class="button2"> </p>

    											<p> <input type="submit" name="created" value="Created Events" class="button2"> </p>

    											<p> <input type="submit" name="create" value="Create Event" class="button2"></p>
    										</form>
  											</div>
										</div>
					</td>

					<td class="h212"> &nbsp &nbsp &nbsp </td>

					<td class="h213">	<a class="link11" href="home1.php"> Home Page </a> &nbsp; &nbsp; &nbsp;</td>

					<td>	 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>

          			<td> <img src="loginlogo.png" width="15px" height="15px"> </td>

					<td id="l1"> <p> 	<a class="link11" href="signin.php"> Login </a> &nbsp  

					  	<b> | </b> 

					   	<a class="link11" href="register.php"> &nbsp Register </a> </p> </td>

					<form method="post">
          			<td id="o1" style="display: none;"> <p> <input type="submit" name="logout" value="Log Out" class="button2"> </p> </td>
          			</form>
          
              	</form>
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

						<td width="10%">
							<img src="searchlogo.png" class="msearch1" onclick="show()"> &nbsp &nbsp
						</td>

					<td rowspan="2" align="right" width="10%">	
										<div class="dropdown" align="left">
  											<p class="dropbtn"> Menu </p>
  											<div class="dropdown-content">
  											<form method="post">
    											<p> <input type="submit" name="feed" value="Feed Back" class="button2">  </p>

    											<p> <input type="submit" name="like" value="Liked Events" class="button2"> </p>

    											<p> <input type="submit" name="book" value="Booked Tickets" class="button2"> </p>

    											<p> <input type="submit" name="created" value="Created Events" class="button2"> </p>

    											<p> <input type="submit" name="create" value="Create Event" class="button2"> </p>

    											<p> <input type="submit" name="about" value="About US" class="button2"> </p>

    											<p> <input type="submit" name="home" value="Home Page" class="button2"> </p>
    										</form>
  											</div>
										</div>
					</td>


					<td class="h212" align="right" width="10%"> &nbsp &nbsp &nbsp </td>

					<td id="l11"  align="right"> <p> <a class="link11" href="signin.php"> Login </a> &nbsp </p> </td>

					<form method="post">
          			<td id="o11" style="display: none;" align="right"> <p> <input type="submit" name="logout" value="Log Out" class="button2"> </p> </td>
          			</form>
				</tr>

			</table>
 
			<table class="mh2" id='mh2'>
				<tr>
					<td> </td>
				</tr>
				<tr>
					<form action="search.php">

						<td>
							<input type="image" name="search22" src='searchlogo.png' class="msearch1"> &nbsp &nbsp
						</td>

						<td>
							<input type="text" name="search" placeholder="Enter event name" class="msearch"> &nbsp &nbsp
						</td>
					</form>

					<td> <p onclick="hide()" style="font-size: 16px;"> Cancel </p> </td>
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

	
	<!-- mobile header -->
		<script type="text/javascript">

		function show()
		{
			document.getElementById('mh1').style.display='none';
			document.getElementById('mh2').style.display='block';
		}

		function hide()
		{
			document.getElementById('mh1').style.display='block';
			document.getElementById('mh2').style.display='none';
		}
	</script>

	<!-- Login Checking -->
	<?php

      if (isset($_POST['logout']))
      {
          unset($_SESSION['email']);
      }

    load();

    function load()
    {
      	if(isset($_SESSION['email']))
      	{
        	echo "<script>
                var l1 = document.getElementById('l1');
                var l11 = document.getElementById('l11');
                var o1 = document.getElementById('o1');
                var o11 = document.getElementById('o11');

                l1.style.display = 'none';
                l11.style.display = 'none';
                o1.style.display = 'block';
                o11.style.display = 'block';
              </script>        ";
      	}
      	else
      	{
        	echo "<script>
                var l1 = document.getElementById('l1');
                var l11 = document.getElementById('l11');
                var o1 = document.getElementById('o1');
                var o11 = document.getElementById('o11');

                l1.style.display = 'block';
                l11.style.display = 'block';
                o1.style.display = 'none';
                o11.style.display = 'none';
              </script>        ";
     	}
   	}

   	?>

   			<!-- FeedBack Page -->
	<?php
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

		if(isset($_POST['home']))
		{
			echo "<script> location.href='home1.php' </script>";
		}
	?>
</html>

<script type="text/javascript">
	AOS.init({
  duration: 1800,
})
</script>