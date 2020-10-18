<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php

    	session_start();

    	if(!isset($_GET['id']))
    	{
    		echo "<script> location.href='home1.php'; </script>";
    	}
      	global $id,$total;
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

			.mh2{
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
				padding: 10px 25px;
				background-color: black;
				color: white;
				border-radius: 15px;
				border: none;
				cursor: pointer;
			}

			.a1{
				height: 300px;
			}

			.a2{
				font-size: 20px;
			}

			.a3{
				width: 50px;
				height: 50px;
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

		    	.a1{
		    		height: 100px;
		    	}

		    	.a2{
		    		font-size: 10px;
		    	}

		    	.a3{
		    		width: 30px;
		    		height: 30px;
		    	}

		    	.a4{
		    		font-size: 10px;
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

			$sql = "select * from events where Event_ID=".$id." and Start_Date>'".date("Y-m-d")."' and not E_Delete='yes';";

			$row = mysqli_query($con, $sql);

			if(mysqli_num_rows($row)>0)
			{
				$r = mysqli_fetch_assoc($row);

				$total = $r['Total_Seat'];

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
							<td width="60%" rowspan="4" class="a1" style="background-image:url(<?php echo $r['Image']; ?>); background-size:100% 100%;background-repeat: no-repeat;"> </td>

							<td width="40%" style="padding: 20px;" colspan="2"> <strong class="a2"> <?php echo $r['Event_Name']; ?> </strong> </td>
						</tr>

						<tr>
							<td style="padding-left: 20px;" colspan="2"> 
								<p style="display: inline-block;"> 
									<form method="post"> <input type="image" name="like1" src='like2.png' class="like1" id='like1'> 
										<input type="image" name="like2" src='like1.png' class="like" id='like2'> &nbsp; 
										<p id='like' style="display: inline-block;"> 0 </p>
									</form> </p> 
							</td>
						</tr>

						<tr>
							<td colspan="2"> <p style="display: none; color: red" id="id"> Tickets Filled </p> </td>
						</tr>

						<tr>
							<td style="padding-left: 20px;" colspan="2"> <form method="post"> <input type="submit" name="bookticket" value='Book' class="btn" id='btn'> </form> <div align="right"> <strong style="padding-right: 30px;"> <?php echo $price; ?> </strong> </div> 
							</td>
						</tr>

						<tr>
							<td colspan="3" height="100px">
								<table style="border-collapse: collapse;" width="100%" hight="100%">
									<tr>
										<td height="100px" style="background-color: peachpuff" align="center" width="33%" class="a4"> <img src="datelogo.png" class="a3"> </br>
											<?php echo $date; ?>
										</td>

										<td height="100px" style="background-color: peachpuff" align="center" width="33%"  class="a4"> <img src="timelogo.png" class="a3"> </br>
											<?php echo $time; ?>
										</td>

										<td height="100px" style="background-color: peachpuff" align="center" width="34%" class="a4"> <img src="locationlogo.png" class="a3"> </br>
											<?php echo $r['Address1']; ?> 
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr>
							<td width="70%" style="padding: 20px;" colspan="2"> <strong class="a2"> Event Description </strong> </td>

							<td width="30%" style="background-color: powderblue; padding: 20px;"> <strong class="a2"> Address </strong> </td>
						</tr>

						<tr>
							<td width="70%" style="padding-left: 20px;" rowspan="2" colspan="2" class="a4"> <p align="left"> <?php echo nl2br($r['Description']); ?> </p> </td>

							<td width="30%" height="120px" style="padding-left: 20px; background-color: powderblue;" class="a4"> <p align="left"> <?php echo nl2br($r['Address2']); ?> </p> </td>
						</tr>

						<tr>
							<td colspan="3"> </td>
						</tr>

						<tr>
							<td style="padding: 20px;" colspan="2"> <strong class="a2"> Organizer Name </strong> </td>
						</tr>

						<tr>
							<td  style="padding-left: 20px;" colspan="2" class="a4"> <p align="left"> <?php echo nl2br($r['Org_Name']); ?> </p> </td>
						</tr>

						<tr>
							<td style="padding: 20px;" colspan="2"> <strong class="a2"> Organizer Description </strong> </td>
						</tr>

						<tr>
							<td style="padding-left: 20px;" colspan="2" class="a4"> <p align="left"> <?php echo nl2br($r['Org_Description']);  ?> </p> </td>
						</tr>

						<tr>
							<td colspan="3"> <br/> <br/> </td>
						</tr>

						<tr>
							<td colspan="3" style="padding-left: 20px;"> <strong class="a2"> Feed Back </strong> </td>
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
			}
			else
			{
				echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any event </h1> </div>";
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

					<form action="search.php">

						<td>
							<input type="image" name="search22" src='searchlogo.png' class="search1"> &nbsp &nbsp
						</td>

						<td>
							<input type="text" name="search" placeholder="Enter event name" class="search"> &nbsp &nbsp
						</td>
					</form>

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

					<td class="h214">	<a class="link11" href="about.php"> About Us </a> &nbsp &nbsp &nbsp</td>

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


   	#like button load
   	function like($id , $total)
   	{
   		if(isset($_SESSION['email']))
   		{
   			include 'data.php';

   			$sql2 = "select * from likes where Event_ID=".$id." and Email_ID='".$_SESSION['email']."';";

   			$row2= mysqli_query($con , $sql2);

   			if(mysqli_num_rows($row2)>0)
   			{
   				$r2 = mysqli_fetch_assoc($row2);

   				if($r2['lik'] == 1)
   				{
   					echo "<script> document.getElementById('like1').style.display='none'; </script>";
   					echo "<script> document.getElementById('like2').style.display='inline-block'; </script>";
   				}
   				else
   				{

   				}
   			}
   			else
   			{

   			}
   			mysqli_close($con);
   		}
   		else
   		{

   		}


   		#like count
   		include "data.php";

   			$sql1 = "select * from likes where lik=1 and Event_ID=".$id.";";

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

			echo "<script> document.getElementById('like').innerHTML='".$like."' </script>";



			#Seats Count
			if($total == 0)
			{
				echo "<script> document.getElementById('id').style.display='inline-block'; </script>";
				echo "<script> document.getElementById('btn').disabled=true; </script>";
			}
			else
			{
				
			}
   	}




   	#like button
   	if(isset($_POST['like1_x']))
   	{
   		include "data.php";

   		if(isset($_SESSION['email']))
   		{
   			$sql3 = "select * from likes where Event_ID=".$id." and Email_ID='".$_SESSION['email']."';";

   			$row3 = mysqli_query($con , $sql3);

   			if(mysqli_num_rows($row3)>0)
   			{
   				$sql4  = "update likes set lik=1 where Event_ID=".$id." and Email_ID='".$_SESSION['email']."' ;";

   				if(mysqli_query($con , $sql4))
   				{
   					
   				}
   				else
   				{
   					echo "<script> alert('error occured') </script>";
   				}
   			}
   			else
   			{
   				$sql5 = "insert into likes (lik , Event_ID , Email_ID) values (? , ? , ?);";

   				if($stmt = mysqli_prepare($con , $sql5))
   				{
   					$lik = 1;

   					mysqli_stmt_bind_param($stmt , "iis" , $lik , $id , $_SESSION['email']);

   					mysqli_stmt_execute($stmt);
   				}
   				else
   				{
   					echo "<script> alert('error occured'); </script>";
   				}
   			}
   		}
   		else
   		{
   			echo "<script> location.href='signin.php'; </script>";
   		}

   		mysqli_close($con);
   	}




   	if(isset($_POST['like2_x']))
   	{
   		include "data.php";

   		$sql6 = "update likes set lik=0 where Event_ID=".$id." and Email_ID='".$_SESSION['email']."' ;";

   		if(mysqli_query($con , $sql6))
   		{

   		}
   		else
   		{
   			echo "<script> alert('Some error Occured'); </script>";
   		}

   		mysqli_close($con);
   	}

   	?>


   	
	<?php

		#Ticket Book Page
		if(isset($_POST['bookticket']))
		{
			if(isset($_SESSION['email']))
			{
				echo "<script> location.href='book.php?id=".$_GET['id']."'; </script>";
			}
			else
			{
				echo "<script> location.href='signin.php' </script>";
			}
		}





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

		if(isset($_POST['home']))
		{
			echo "<script> location.href='home1.php' </script>";
		}
	?>

</html>

<?php
	like($id , $total);
?>