<html>
	<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php
      session_start();
    ?>

	<title>
		Events Page
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

			.mh2{
				display: none;
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

    		/* Filter content */
    		.dropdown1 {
	  			position: fixed;
	  			display: inline-block;
	  			bottom: 30px;
	  			right: 30px;
	  			cursor: pointer;
			}

			.dropdown-content1 {
	  			display: none;
	  			position: absolute;
	  			right: 0;
	  			bottom: 0;
	  			background-color: White;
	  			min-width: 160px;
	  			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  			z-index: 1;
			}

			.dropdown-content1 p {
	  			color: black;
	  			padding: 6px 8px;
	  			text-decoration: none;
	  			display: block;
			}

			.dropdown-content1 p:hover {background-color: #ddd;}

			.dropdown1:hover .dropdown-content1 {display: block;}

			.dropdown1:hover .dropbtn1 {color: hotpink;}

			.btn{
				text-decoration: none;
				padding: 10px 25px;
				background-color: black;
				color: white;
				border-radius: 5px;
			}

			@media only screen and (max-width: 1250px){
				.h11{
	      			display: none;
	      		}
			}

			@media only screen and (max-width: 1150px){
				.evsec{
					margin: 25px;
					width: 250px;
					height: 360px;
				}

				.h211, .h212, .h213, .h214{
		    		display: none;
		    	}

		    	.h210{
		    		display: block;
		    	}
			}

			@media only screen and (max-width: 1150px){
				.eva{
	      			padding-left: 80px;
	      		}
			}

			@media only screen and (max-width: 850px){
				.eva{
	      			padding-left: 30px;
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

		<!-- Search Events Section -->
		<?php
			if(isset($_GET['name']))
			{
				?>

				<div class="eva" id="s1">
		
			<?php
    			for($i=0;$i<10;$i++)
    			{
        			$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and not E_Delete='yes' and upper(Event_Name) like upper('%".$_GET['name']."%') order by Priority;";

					include "data.php";
					$row = mysqli_query($con,$sql);

					if (mysqli_num_rows($row)>0)
					{
						while ($r = mysqli_fetch_assoc($row))
	        			{

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

	              			$id = base64_encode($r['Event_ID']);
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
	      		break;
	    	}
  		}
  		mysqli_close($con);
		?>
		</div>



		<?php

			}

			elseif(isset($_GET['cat'])){

		?>

		<!-- Category Events Section -->
		<div class="eva" id="s1">
		
			<?php
    			for($i=0;$i<10;$i++)
    			{

        			$sql = "select * from events where Event_Category='".$_GET['cat']."' and Start_Date>'".date('Y-m-d')."' and not E_Delete='yes' order by Priority;";

					include "data.php";
					$row = mysqli_query($con, $sql);

					if (mysqli_num_rows($row)>0)
					{
						while ($r = mysqli_fetch_assoc($row))
	        			{

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

	              			$id = base64_encode($r['Event_ID']);
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
	      		break;
	    	}
  		}
  		mysqli_close($con);
		?>
		</div>




		<!-- Filter Section -->
		<?php
			}


			elseif(isset($_GET['muk'])){

		?>

				<div class="eva" id="s1">
		
			<?php
    			for($i=0;$i<10;$i++)
    			{
        			$muk = $_GET['muk'];

        			$sql = base64_decode($muk);

					include "data.php";
					$row = mysqli_query($con,$sql);

					if (mysqli_num_rows($row)>0)
					{
						while ($r = mysqli_fetch_assoc($row))
	        			{

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

	              			$id = base64_encode($r['Event_ID']);
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
	      		break;
	    	}
  		}
  		mysqli_close($con);
		?>
		</div>


		<?php

			}


			else{
		?>



		<!-- All Events Section -->
		<div class="eva" id="s1">
		
			<?php
    			for($i=0;$i<10;$i++)
    			{
        			$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and not E_Delete='yes' order by Priority;";

					include "data.php";
					$row = mysqli_query($con,$sql);

					if (mysqli_num_rows($row)>0)
					{
						while ($r = mysqli_fetch_assoc($row))
	        			{

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

	              			$id = base64_encode($r['Event_ID']);
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
	      		break;
	    	}
  		}
  		mysqli_close($con);
		?>
		</div>

		<?php
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


		<!-- Filter Button -->
			<div class="dropdown1">
  				<p class="dropbtn1"> <img src="filter.png" width="50px" height="50px"> </p>
					<div class="dropdown-content1">
						<form method="post">
    						<table>

    							<tr>
    								<th> Filter </th>
    							</tr>

    							<tr>
    								<td> </br> </td>
    							</tr>

    							<tr>
    								<td> Date: - </td>
    							</tr>

    							<tr>
    								<td>
    									<select style="width: 250px; height: 25px;" name='date' id='filter1'>
    										<option value="All"> All </option>
											<option value="Tomorrow"> Tomorrow </option>
											<option value="Thisweek"> This Week </option>
											<option value="Weekend"> Week End </option>
											<option value="Thismonth"> This Month </option>
											<option value="Nextmonth"> Next Month </option>
										</select> 
    								</td>
    							</tr>

    							<tr>
    								<td> </br> </td>
    							</tr>

    							<tr>
    								<td> Category: -</td>
    							</tr>

    							<tr>
    								<td>
										<select style="width: 250px; height: 25px;" name='cat' id='filter2'>
											<option value="All"> All </option>
											<option value="Concert"> Concert </option>
											<option value="Sport"> Sport</option>
											<option value="Arts&Museums"> Arts & Museums </option>
											<option value="Dance"> Dance </option>
											<option value="NightLife"> NightLife </option>
											<option value="Educational"> Educational </option>
											<option value="Festival"> Festival </option>
											<option value="Business"> Business </option>
											<option value="Food"> Food </option>
											<option value="Health"> Health </option>
											<option value="Fashion"> Fashion </option>
											<option value="Film&Media"> Film & Media</option>
											<option value="Lifestyle"> LifeStyle </option>
											<option value="Science&Tech"> Science & Tech</option>
										</select>  
									</td>
    							</tr>

    							<tr>
    								<td> </br> </td>
    							</tr>

    							<tr>
    								<td> Price: - </td>
    							</tr>

    							<tr>
    								<td>
    									<select style="width: 250px; height: 25px;" name='price' id='filter3'>
    										<option value="All"> All </option>
											<option value="Free"> Free </option>
											<option value="Paid"> Paid </option>
										</select>
    								</td>
    							</tr>

    							<tr>
    								<td> </br> </td>
    							</tr>

    							<tr>
    								<td align="center"> <input type="submit" name="filter" value="Filter" class="btn" style="cursor: pointer;"> </td>
    							</tr>
    						</table>
						</form>
  					</div>
				</div>



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


   	<!-- Filter -->
   	<?php
   		if(isset($_POST['filter']))
   		{
   			$date = $_POST['date'];
   			$cat = $_POST['cat'];
   			$price = $_POST['price'];

   			$_SESSION['filter1'] = $date;
   			$_SESSION['filter2'] = $cat;
   			$_SESSION['filter3'] = $price;


   			#Today Filter
   			if($date == 'All')
   			{
   				if($cat == 'All' && $price == 'All')
   				{
   					$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and not E_Delete='yes' order by Priority;";
   				}
   				elseif($cat!='All' && $price == 'All')
   				{
   					$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and Event_Category='".$cat."' and not E_Delete='yes' order by Priority;";
   				}
   				elseif ($cat=='All' && $price!='All') 
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and Price=0 and not E_Delete='yes' order by Priority;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and Price>0 and not E_Delete='yes' order by Priority;";
   					}
   				}
   				elseif($cat!='All' && $price!='All')
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and Price=0 and Event_Category='".$cat."' and not E_Delete='yes' order by Priority;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and Price>0 and Event_Category='".$cat."' and not E_Delete='yes' order by Priority;";
   					}
   				}
   			
   				$muk = base64_encode($sql);

   				echo "<script> location.href='events.php?muk=".$muk."' </script>";
   			}



   			#Tomorrow Filter
   			elseif($date == 'Tomorrow')
   			{
   				$date = strtotime("1day",strtotime(date('Y-m-d')));

   				if($cat == 'All' && $price == 'All')
   				{
   					$sql = "select * from events where Start_Date='".date('Y-m-d' , $date)."' and not E_Delete='yes' order by Priority;";
   				}
   				elseif($cat!='All' && $price == 'All')
   				{
   					$sql = "select * from events where Start_Date='".date('Y-m-d' , $date)."' and Event_Category='".$cat."' and not E_Delete='yes' order by Priority;";
   				}
   				elseif ($cat=='All' && $price!='All') 
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from events where Start_Date='".date('Y-m-d' , $date)."' and Price=0 and not E_Delete='yes' order by Priority;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from events where Start_Date='".date('Y-m-d' , $date)."' and Price>0 and not E_Delete='yes' order by Priority;";
   					}
   				}
   				elseif($cat!='All' && $price!='All')
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from events where Start_Date='".date('Y-m-d' , $date)."' and Event_Category='".$cat."' and Price=0 and not E_Delete='yes' order by Priority;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from events where Start_Date='".date('Y-m-d' , $date)."' and Event_Category='".$cat."' and not E_Delete='yes' and Price>0 order by Priority;";
   					}
   				}

   				$muk = base64_encode($sql);

   				echo "<script> location.href='events.php?muk=".$muk."' </script>";
   			}



   			#This Week Filter
   			elseif($date == 'Thisweek')
   			{
   				if($cat == 'All' && $price == 'All')
   				{
   					if(date('l') == 'Saturday')
	    			{
	    				$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW() + interval 1 week) and not E_Delete='yes' order by Priority;";
	    			}
	    			else{
	       				$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW()) and not E_Delete='yes' order by Priority;";
	     			}
   				}
   				elseif($cat!='All' && $price == 'All')
   				{
	   				if(date('l') == 'Saturday')
	    			{
	    				$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW() + interval 1 week) and Event_Category='".$cat."' and not E_Delete='yes' order by Priority;";
	    			}
	    			else{
	       				$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW()) and Event_Category='".$cat."' and not E_Delete='yes' order by Priority;";
	     			}
   				}
   				elseif ($cat=='All' && $price!='All') 
   				{
   					if($price == 'Free')
   					{
		   				if(date('l') == 'Saturday')
		    			{
		    				$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW() + interval 1 week) and Price=0 and not E_Delete='yes' order by Priority;";
		    			}
		    			else{
		       				$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW()) and Price=0 and not E_Delete='yes' order by Priority;";
		     			}
   					}
   					elseif($price == 'Paid')
   					{
   						if(date('l') == 'Saturday')
		    			{
		    				$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW() + interval 1 week) and Price>0 and not E_Delete='yes' order by Priority;";
		    			}
		    			else{
		       				$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW()) and Price>0 and not E_Delete='yes' order by Priority;";
		     			}
   					}
   				}
   				elseif($cat!='All' && $price!='All')
   				{
   					if($price == 'Free')
   					{
		   				if(date('l') == 'Saturday')
		    			{
		    				$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW() + interval 1 week) and Event_Category='".$cat."' and Price=0 and not E_Delete='yes' order by Priority;";
		    			}
		    			else{
		       				$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW()) and Event_Category='".$cat."' and Price=0 and not E_Delete='yes' order by Priority;";
		     			}
   					}
   					elseif($price == 'Paid')
   					{
   						if(date('l') == 'Saturday')
		    			{
		    				$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW() + interval 1 week) and Event_Category='".$cat."' and Price>0 and not E_Delete='yes' order by Priority;";
		    			}
		    			else{
		       				$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW()) and Event_Category='".$cat."' and Price>0 and not E_Delete='yes' order by Priority;";
		     			}
   					}
   				}

   				$muk = base64_encode($sql);

   				echo "<script> location.href='events.php?muk=".$muk."' </script>";
   			}



   			#Weekend filter
   			elseif($date == 'Weekend')
   			{
   				if($cat == 'All' && $price == 'All')
   				{
   					$sql = "select * from events WHERE Start_Date>'".date('Y-m-d')."' and not E_Delete='yes' and (dayofweek(Start_Date) = 7 or dayofweek(Start_Date) = 1) order by Priority;";
   				}
   				elseif($cat!='All' && $price == 'All')
   				{
   					$sql = "select * from events WHERE Start_Date>'".date('Y-m-d')."'  and not E_Delete='yes' and (dayofweek(Start_Date) = 7 or dayofweek(Start_Date) = 1) and Event_Category='".$cat."' order by Priority;";
   				}
   				elseif ($cat=='All' && $price!='All') 
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from events WHERE Start_Date>'".date('Y-m-d')."' and not E_Delete='yes' and (dayofweek(Start_Date) = 7 or dayofweek(Start_Date) = 1) and Price=0  order by Priority;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from events WHERE Start_Date>'".date('Y-m-d')."' and not E_Delete='yes' and (dayofweek(Start_Date) = 7 or dayofweek(Start_Date) = 1) and Price>0 order by Priority;";
   					}
   				}
   				elseif($cat!='All' && $price!='All')
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from events WHERE Start_Date>'".date('Y-m-d')."' and not E_Delete='yes' and (dayofweek(Start_Date) = 7 or dayofweek(Start_Date) = 1) and Event_Category='".$cat."' and Price=0 order by Priority;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from events WHERE Start_Date>'".date('Y-m-d')."' and not E_Delete='yes' and (dayofweek(Start_Date) = 7 or dayofweek(Start_Date) = 1) and Event_Category='".$cat."' and Price>0 order by Priority;";
   					}
   				}

   				$muk = base64_encode($sql);

   				echo "<script> location.href='events.php?muk=".$muk."' </script>";
   			}



   			#This Month Filter
   			elseif($date == 'Thismonth')
   			{
   				$expire = strtotime('first day of +1 month');

   				$nextm = date('Y-m-d', $expire);

   				if($cat == 'All' && $price == 'All')
   				{
   					$sql = "select * from events Where Start_Date>'".date('Y-m-d')."' and Start_Date<'".$nextm."' and not E_Delete='yes' order by Priority;";
   				}
   				elseif($cat!='All' && $price == 'All')
   				{
   					$sql = "select * from events Where Start_Date>'".date('Y-m-d')."' and Start_Date<'".$nextm."' and Event_Category='".$cat."' and not E_Delete='yes' order by Priority;";
   				}
   				elseif ($cat=='All' && $price!='All') 
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from events Where Start_Date>'".date('Y-m-d')."' and Start_Date<'".$nextm."' and Price=0 and not E_Delete='yes' order by Priority;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from events Where Start_Date>'".date('Y-m-d')."' and Start_Date<'".$nextm."' and Price>0 and not E_Delete='yes' order by Priority;";
   					}
   				}
   				elseif($cat!='All' && $price!='All')
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from events Where Start_Date>'".date('Y-m-d')."' and Start_Date<'".$nextm."' and Event_Category='".$cat."' and Price=0 and not E_Delete='yes' order by Priority;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from events Where Start_Date>'".date('Y-m-d')."' and Start_Date<'".$nextm."' and Event_Category='".$cat."' and Price>0 and not E_Delete='yes' order by Priority;";
   					}
   				}

   				$muk = base64_encode($sql);

   				echo "<script> location.href='events.php?muk=".$muk."' </script>";
   			}



   			#Next Month filter
   			elseif($date == 'Nextmonth')
   			{
   				$expire = strtotime('first day of +1 month');
   				$nextm = date('Y-m-d', $expire);

   				$expire = strtotime('first day of +2 month');
   				$nextm1 = date('Y-m-d', $expire);

   				if($cat == 'All' && $price == 'All')
   				{
   					$sql = "select * from events Where Start_Date>'".$nextm."' and Start_Date<'".$nextm1."' and not E_Delete='yes' order by Priority;";
   				}
   				elseif($cat!='All' && $price == 'All')
   				{
   					$sql = "select * from events Where Start_Date>'".$nextm."' and Start_Date<'".$nextm1."' and Event_Category='".$cat."' and not E_Delete='yes' order by Priority;";
   				}
   				elseif ($cat=='All' && $price!='All') 
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from events Where Start_Date>'".$nextm."' and Start_Date<'".$nextm1."' and Price=0 and not E_Delete='yes' order by Priority;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from events Where Start_Date>'".$nextm."' and Start_Date<'".$nextm1."' and Price>0 and not E_Delete='yes' order by Priority;";
   					}
   				}
   				elseif($cat!='All' && $price!='All')
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from events Where Start_Date>'".$nextm."' and Start_Date<'".$nextm1."' and Event_Category='".$cat."' and Price=0 and not E_Delete='yes' order by Priority;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from events Where Start_Date>'".$nextm."' and Start_Date<'".$nextm1."' and Event_Category='".$cat."' and Price>0 and not E_Delete='yes' order by Priority;";
   					}
   				}

   				$muk = base64_encode($sql);

   				echo "<script> location.href='events.php?muk=".$muk."' </script>";
   			}
   		}

   		if(isset($_SESSION['filter1']))
   		{
   			echo "<script> document.getElementById('filter1').value='".$_SESSION['filter1']."'; </script>";
   			echo "<script> document.getElementById('filter2').value='".$_SESSION['filter2']."'; </script>";
   			echo "<script> document.getElementById('filter3').value='".$_SESSION['filter3']."'; </script>";
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