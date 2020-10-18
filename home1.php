<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    	session_start();

      if(isset($_SESSION['enco']))
      {

      }
      else{
      	$enco = rand(10000 , 99999);
      	$_SESSION['enco'] = $enco;
      }

      if(isset($_SESSION['filter1']))
      {
      	unset($_SESSION['filter1']);
      	unset($_SESSION['filter2']);
      	unset($_SESSION['filter3']);
      }
    ?>

	<title>
		Events Time Home Page
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
   				margin: 0;
   				height: 100%;
   			}

			/* Slideshow container */
        	.slideshow-container {
        		width: 100%;
        		position: relative;
    	    	text-align : center;
        		margin: auto;
      			color : white;
    		}

    		.myslide{
    			height: 600px;
    		}

	    	/* Fading animation */
    		.fade {
      			-webkit-animation-name: fade;
      			-webkit-animation-duration: 0s;
	      		animation-name: fade;
    	  		animation-duration: 0s;
      			transition: all 4s;
    		}

    		@-webkit-keyframes fade {
      			from {opacity: .4} 
	      		to {opacity: 1}
    		}

    		@keyframes fade {
     			from {opacity: .4} 
	     		to {opacity: 1}
   			}

   			/* Zooming animation */
   			.fade:hover{transform:scale(1.02) translate(0px,0px)
   			}

   			/* Header */
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


			/* Center of the slide show */
			.tab1{
	        	position: absolute;
	        	text-align: center;
	        	top: 40%;
	        	left: 50%;
	        	transform: translate(-50%, -50%);
	      	}

	      	.c1{
	      		color: white;
	      		font-size: 30px;
	      	}

	      	.c3{
	      		color: white;
	      		font-size: 30px;
	      	}

	      	.c2{
	      		height: 70px;
	      		width: 450px;
	      	}

	      	.c4{
	      		font-size: 30px;
	      	}


	      	/* Categories Section */

	      	.scrollmenu {
			    background-color: aqua;
			    overflow: hidden;
			    white-space: nowrap;
			    width: 80%;
			    display: inline-block;
			    border : solid;
			    border-color: white;
		    }

			.mycat{
	            font-size: 20px;
	    	    display: inline-block;
			    color: black;
			    text-align: center;
			    padding: 24px;
			    text-decoration: none;
		    }

		    .mycat:hover {
		      	background-color: white;
		      	font-size: 17px;
		    }

		    .arrow{
		      display: inline-block;
		      cursor: pointer;
		      width: 70px;
		      height: 70px;
		    }

		    .arrow:hover{
		    	opacity: 0.7;
		    }

		    /* Popular Events */
		    .pop{
      			padding-left: 140px;
    		}

    		.p1{
    			padding-left: 150px;
    		}

    		.pa{
    			cursor: pointer;
    			text-decoration: none;
    			color : black;
    		}

    		.paa{
    			cursor: pointer;
    			text-decoration: none;
    			color: blue;
    			border-color: blue;
    			border-bottom: solid;
    		}

    		.Paa:hover{
    			font-size: 17px;
    		}

    		.pa:hover{
    			font-size: 17px;
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

			/* See More */

			.seemore{
				background-color: white;
				padding: 10px 60px;
			}

			.seemore:hover{
				font-size: 17px;
			}


			/* footer Section */
			.footer{
				clear: both;
				background-color: black;
				height: 200px;
				width: 100%;
				text-align: center;
			}

			.footer1{
				padding: 30px;
				color: white;
				display: inline;
			}

			.f{
				text-decoration: none;
				cursor: pointer;
				color: white;
			}

			.f:hover{
				color: hotpink;
				font-size: 17px;
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

				.evsec{
					margin: 25px;
					width: 250px;
					height: 360px;
				}
			}

	      	@media only screen and (max-width: 1000px){

	      		.pop{
	      			padding-left: 90px;
	      		}

	      		.p1{
	      			padding-left: 100px;
	      		}

	      		.eva{
	      			padding-left: 80px;
	      		}
	      	}

		    @media only screen and (max-width: 850px){

		    	.h1{
		    		display: none;
		    	}

		    	.myslide{
		    		height: 400px;
		    	}

		    	.c1, .c3 , .c4{
		    		font-size: 25px;
		    	}

		    	.c2{
		    		height: 60px;
		    		width: 385px;
		    	}

		    	.mycat{
		    		font-size: 15px;
		    		padding : 20px;
		    	}

		    	.arrow{
		    		width: 50px;
		    		height: 50px;
		    	}

		    	.pop{
		    		padding-left: 40px;
		    	}

		    	.p1{
		    		padding-left: 50px;
		    	}

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

		    	.c2{
		    		height: 50px;
		    		width: 300px;
		    	}

		    	.myslide{
		    		height: 300px;
		    	}

		    	.m1{
		    		display: none;
		    	}

		    	.arrow{
		    		width: 30px;
		    		height: 30px;
		    	}

		    	.c1, .c3, .c4{
		    		font-size: 20px;
		    	}

		    	.scrollmenu a{
		    		font-size : 10px;
		    	}

		    	.scrollmenu{
		    		width: 70%
		    	}

		    	.pa{
		    		font-size: 10px;
		    	}

		    	.paa{
		    		font-size: 10px;
		    	}

		    	.Paa:hover{
	    			font-size: 11px;
	    		}

	    		.pa:hover{
	    			font-size: 11px;
	    		}

	    		.mycat:hover {
			      	background-color: white;
			      	font-size: 11px;
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

		<!-- Slide Showing images -->

		<div class="slideshow-container">

			<div class="mySlides fade">
				<img class="myslide" src="image1.jpg" width="100%">
			</div>

			<div class="mySlides fade">
				<img class="myslide" src="image2.jpg" width="100%">
			</div>

			<div class="mySlides fade">
				<img class="myslide" src="image3.jpg" width="100%">
			</div>

			<div class="mySlides fade">
				<img class="myslide" src="image4.jpg" width="100%">
			</div>
		</div>



      <!-- Center of the slide show -->
	    <table class="tab1">
	        <tr>
	          	<td>  <strong class="c1"> Welcome To, </strong> </td>
	        </tr>

	        <tr>
	          	<td> <img class="c2" src="eventstimelogo.png"> </td>
	        </tr>

	        <tr>
	          	<td> </br> </td>
	        </tr>

	        <tr>
	          	<td> <strong class="c3"> Make the world you want </strong> </td>
	        </tr>
	    </table>


      <!-- Categories Section -->

	    <div align="center">
	        </br>
	        <strong class="c4"> Discover Events by Categories </strong>
	    	</br> </br>
	    </div>

	    <div align="center">
	        <div>

	          	<img src="arrow1.png" class="arrow" onclick="scroll1()">

		        <div  class="scrollmenu" id="mydiv">
			        <a href="events.php?cat=Concert" class="mycat"> Concerts </a>
			        <a href="events.php?cat=Sport" class="mycat"> Sports </a>
		            <a href="events.php?cat=Arts&museums" class="mycat"> Arts & Museums </a>
		            <a href="events.php?cat=Dance" class="mycat"> Dance </a>
			        <a href="events.php?cat=NightLife" class="mycat"> NightLife </a>
			        <a href="events.php?cat=Educational" class="mycat"> Educational </a>
			        <a href="events.php?cat=Festival" class="mycat"> Festivals </a>  
		            <a href="events.php?cat=Business" class="mycat"> Business </a>
		            <a href="events.php?cat=Food" class="mycat"> Food </a>
			        <a href="events.php?cat=Health" class="mycat"> Health </a>
			        <a href="events.php?cat=Fashion" class="mycat"> Fashion </a>
			        <a href="events.php?cat=Film&Media" class="mycat">Film & Media</a>
		            <a href="events.php?cat=Lifestyle" class="mycat"> Lifestyle </a>
		            <a href="events.php?cat=Science&Tech" class="mycat"> Science & Tech</a>
	      		</div>

		        <img src="arrow2.png" class="arrow" onclick="scroll2()">
		    </div>
		</div>


		<!-- Popular Events by Dates -->
		<br>
      	<strong class="c4 p1"> Popular Events </strong>

      	<table class="pop">
        	<tr>
          		<th style="padding: 10px;"> <p  class="paa" id='p1' onclick="p1()"> All  </p> </th>

    	        <th style="padding: 10px;"> <p class="pa" id='p2' onclick="p2()"> Tomorrow </p> </th>

    	        <th style="padding: 10px;"> <p class="pa" id='p3' onclick="p3()"> This Week </p> </th>

          		<th style="padding: 10px;"> <p class="pa" id='p4' onclick="p4()"> Weekend </p> </th>

          		<th style="padding: 10px;"> <p class="pa" id='p5' onclick="p5()"> Free </p> </th>

          		<th style="padding: 10px;"> <p class="pa" id='p6' onclick="p6()"> Paid </p> </th>
        	</tr>
      	</table>


      	<!-- All Events Section -->
      		<div class="eva" id="s1">
		
			<?php
				$count = 0;
    			for($i=0;$i<=10;$i++)
    			{
        			$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and not E_Delete='yes' order by Priority;";

					include "data.php";
					$row = mysqli_query($con,$sql);

					if (mysqli_num_rows($row)>0)
					{
						while ($r = mysqli_fetch_assoc($row))
	        			{
	        				$count = $count + 1;

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
					if($count == 8)
					{
						break;
					}
				}
			}
	    	else
	    	{
	      		echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any event </h1> </div>";
	      		$j = 0;
	      		break;
	    	}
	    	if($count == 8)
	    	{
	    		break;
	    	}
  		}
  		mysqli_close($con);
		?>
		</div>


		<!-- Tomorrow Events Section -->
		<div class="eva" id="s2" style="display: none;">
		
			<?php
				$date = strtotime("1day",strtotime(date('Y-m-d')));
				$count = 0;
    			for($i=0;$i<=10;$i++)
    			{
        			$sql = "select * from events where Start_Date='".date('Y-m-d' , $date)."' and not E_Delete='yes' order by Priority;";

					include "data.php";
					$row = mysqli_query($con,$sql);

					if (mysqli_num_rows($row)>0)
					{
						while ($r = mysqli_fetch_assoc($row))
	        			{
	        				$count = $count + 1;

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

	            			<a href="eventifo.php?id=<?php echo $id; ?>" class="pa" >
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
					if($count == 8)
					{
						break;
					}
				}
			}
	    	else
	    	{
	      		echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any event </h1> </div>";
	      		break;
	    	}
	    	if($count == 8)
	    	{
	    		break;
	    	}
  		}
  		mysqli_close($con);
		?>
		</div>


		<!-- This Week Events Section -->
		<div class="eva" id="s3" style="display: none;">
		
			<?php
				$count = 0;
    			for($i=0;$i<=10;$i++)
    			{
    				if(date('l') == 'Saturday')
	    			{
	    				$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW() + interval 1 week) and not E_Delete='yes' order by Priority;";
	    			}
	    			else{
	       				$sql = "select * from events where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW()) and not E_Delete='yes' order by Priority;";
	     			}

					include "data.php";
					$row = mysqli_query($con,$sql);

					if (mysqli_num_rows($row)>0)
					{
						while ($r = mysqli_fetch_assoc($row))
	        			{
	        				$count = $count + 1;

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
					if($count == 8)
					{
						break;
					}
				}
			}
	    	else
	    	{
	      		echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any event </h1> </div>";
	      		break;
	    	}
	    	if($count == 8)
	    	{
	    		break;
	    	}
  		}
  		mysqli_close($con);
		?>
		</div>



		<!-- WeekEnd Events section -->
		<div class="eva" id="s4" style="display: none;">
		
			<?php
				$count = 0;
    			for($i=0;$i<=10;$i++)
    			{
        			$sql = "select * from events WHERE Start_Date>'".date('Y-m-d')."' and (dayofweek(Start_Date) = 7 or dayofweek(Start_Date) = 1) and not E_Delete='yes' order by Priority;";

					include "data.php";
					$row = mysqli_query($con,$sql);

					if (mysqli_num_rows($row)>0)
					{
						while ($r = mysqli_fetch_assoc($row))
	        			{
	        				$count = $count + 1;

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
					if($count == 8)
					{
						break;
					}
				}
			}
	    	else
	    	{
	      		echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any event </h1> </div>";
	      		break;
	    	}
	    	if($count == 8)
	    	{
	    		break;
	    	}
  		}
  		mysqli_close($con);
		?>
		</div>



		<!-- Free Events Section -->
		<div class="eva" id="s5" style="display: none;">
		
			<?php
				$count = 0;
    			for($i=0;$i<=10;$i++)
    			{
        			$sql = "select * from events WHERE Price=0 and Start_Date>'".date('Y-m-d')."' and not E_Delete='yes' order by Priority;";

					include "data.php";
					$row = mysqli_query($con,$sql);

					if (mysqli_num_rows($row)>0)
					{
						while ($r = mysqli_fetch_assoc($row))
	        			{
	        				$count = $count + 1;

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
					if($count == 8)
					{
						break;
					}
				}
			}
	    	else
	    	{
	      		echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any event </h1> </div>";
	      		break;
	    	}
	    	if($count == 8)
	    	{
	    		break;
	    	}
  		}
  		mysqli_close($con);
		?>
		</div>


		<!-- Paid Events Section -->
		<div class="eva" id="s6" style="display: none;">
		
			<?php
				$count = 0;
    			for($i=0;$i<10;$i++)
    			{
        			$sql = "select * from events WHERE Price>00 and Start_Date>'".date('Y-m-d')."' and not E_Delete='yes' order by Priority;";

					include "data.php";
					$row = mysqli_query($con,$sql);

					if (mysqli_num_rows($row)>0)
					{
						while ($r = mysqli_fetch_assoc($row))
	        			{
	        				$count = $count + 1;

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
					if($count == 8)
					{
						break;
					}
				}
			}
	    	else
	    	{
	      		echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any event </h1> </div>";
	      		break;
	    	}
	    	if($count == 8)
	    	{
	    		break;
	    	}
  		}
  		mysqli_close($con);
		?>
		</div>


		<!-- See More Button -->
		<div align="center">
		    
		    <form method="POST"> 
		    <table style="width: 100%;">
		        <tr>
		            <td align="center"> <input type="submit" value="See more" name="seemore" class="seemore">  </td>
		        </tr>
		    </table>
		    </form>
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
  											<form method="post">
    											<p> <input type="submit" name="feed" value="Feed Back" class="button2">  </p>

    											<p> <input type="submit" name="like" value="Liked Events" class="button2"> </p>

    											<p> <input type="submit" name="book" value="Booked Tickets" class="button2"> </p>

    											<p> <input type="submit" name="created" value="Created Events" class="button2"> </p>

    											<p> <input type="submit" name="create" value="Create Event" class="button2"> </p>

    											<p> <input type="submit" name="about" value="About US" class="button2"> </p>
    										</form>
  											</div>
										</div>
					</td>

					<td rowspan="2" class="h211">
										
										<div class="dropdown">
  											<p class="dropbtn"> Menu </p>
  											<div class="dropdown-content">
  											<form method="post">
    											<p> <input type="submit" name="feed" value="Feed Back" class="button2">  </p>
    											<p> <input type="submit" name="like" value="Liked Events" class="button2"> </p>
    											<p> <input type="submit" name="book" value="Booked Tickets" class="button2"> </p>
    											<p> <input type="submit" name="created" value="Created Events" class="button2"> </p>
    										</form>
  											</div>
										</div>
					</td>

					<td class="h212"> &nbsp &nbsp &nbsp </td>

					<form method="post">
						<td class="h213"> <p> <input type="submit" name="create" value="Create Event" class="button2">&nbsp &nbsp &nbsp </p> </td>
					</form> 

					<td class="h214">	<a class="link11" href="about.php"> About Us </a> &nbsp &nbsp &nbsp</td>

					<td>	 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>

          			<td> <img src="loginlogo.png" width="15px" height="15px"> </td>

					<td id="l1"> <p> 	<a class="link11" href="signin.php"> Login </a> &nbsp  

					  	<b> | </b> 

					   	<a class="link11" href="register.php"> &nbsp Register </a> </p> </td>


					<form method="post">
          			<td id="o1" style="display: none;"> <p> <input type="submit" name="logout" value="Log Out" class="button2"> </p> </td>
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


	</br>
		</br>
		<!-- Footer Section -->
		<section class="footer">
			<div align="center" style="padding-top: 30px;">
				<table  class="footer1">
					<tr>
						<td colspan="4"> <img src="eventstimelogo.png" width="200px" height="30px"> </td>
					</tr>

					<tr>
						<td colspan="4"> &nbsp; </td>
					</tr>

					<tr align="center">
						<td> <img src="facebooklogo.png" width="20px;" height="20px;"> </td>

						<td> <img src="instalogo.png" width="20px;" height="20px;"> </td>

						<td> <img src="twitterlogo.png" width="20px;" height="20px;"> </td>

						<td> <img src="googlelogo.png" width="20px;" height="20px;"> </td>
					</tr>

					<tr>
						<td colspan="4"> </br> </td>
					</tr>

					<tr> 
						<td style="color: white;" colspan="4"> &copy; Reserved By Eventstime.in </td>
					</tr>

					<tr>
						<td style="color: white;" colspan="4"> Developed By Mukesh Nadar </td>
					</tr>
				</table>

				<table class="footer1 m1">
					<tr>
						<td> <strong> Links </strong> </td>
					</tr>

					<tr>
						<td> <a href="#" class="f"> About US </a> </td>
					</tr>

					<tr>
						<td> <a href="#" class="f"> Register </a> </td>
					</tr>

					<tr>
						<td> <a href="#" class="f"> Create Event </a> </td>
					</tr>

					<tr>
						<td> <a href="#" class="f"> Browse More Events </a> </td>
					</tr>
				</table>

				<table class="footer1 m1">
					<tr>
						<td> <strong> Support </strong> </td>
					</tr>

					<tr>
						<td> <a href="#" class="f"> Contact Us </a> </td> 
					</tr>

					<tr>
						<td> <a href="#" class="f"> Feed Back </a> </td>
					</tr>
				</table>
			</div>
		</section>
	</body>


	<!-- Slide Show Container -->
	<script>
        var slideIndex = 0;
        showSlides();

        function showSlides() 
        {
	        var i;
	        var slides = document.getElementsByClassName("mySlides");
	        for (i = 0; i < slides.length; i++) 
	        {
	        	slides[i].style.display = "none";  
	        }

	        slideIndex++;
	        if (slideIndex > slides.length) 
	        {
	        	slideIndex = 1
	        }    

	        slides[slideIndex-1].style.display = "block";  
	        setTimeout(showSlides, 5000);
        }
    </script>


	<!-- Category Scroll Bar -->
  	<script>
    	var cat = 0;

    	function scroll1() 
    	{
      		if (cat>0)
      		{
        		cat = 0;
        		document.getElementById("mydiv").scrollLeft = cat;
      		}
      		else
      		{

      		}
    	}
  	</script>

  	<script>
    	function scroll2() 
    	{
      		cat = cat + 100;
      		document.getElementById("mydiv").scrollLeft = cat;
    	}
  	</script>


  	<!-- Popular Events -->
  	<script>
  		function p1(){
  			document.getElementById('p1').style.color='blue';
  			document.getElementById('p1').style.borderBottom = 'solid';
  			document.getElementById('s1').style.display = 'block';

  			document.getElementById('p2').style.color='black';
  			document.getElementById('p2').style.borderStyle = 'none';
  			document.getElementById('s2').style.display = 'none';

  			document.getElementById('p3').style.color='black';
  			document.getElementById('p3').style.borderStyle = 'none';
  			document.getElementById('s3').style.display = 'none';

  			document.getElementById('p4').style.color='black';
  			document.getElementById('p4').style.borderStyle = 'none';
  			document.getElementById('s4').style.display = 'none';

  			document.getElementById('p5').style.color='black';
  			document.getElementById('p5').style.borderStyle = 'none';
  			document.getElementById('s5').style.display = 'none';

  			document.getElementById('p6').style.color='black';
  			document.getElementById('p6').style.borderStyle = 'none';
  			document.getElementById('s6').style.display = 'none';
  		}

  		function p2(){
  			document.getElementById('p2').style.color='blue';
  			document.getElementById('p2').style.borderBottom = 'solid';
  			document.getElementById('s2').style.display = 'block';

  			document.getElementById('p1').style.color='black';
  			document.getElementById('p1').style.borderStyle = 'none';
  			document.getElementById('s1').style.display = 'none';

  			document.getElementById('p3').style.color='black';
  			document.getElementById('p3').style.borderStyle = 'none';
  			document.getElementById('s3').style.display = 'none';

  			document.getElementById('p4').style.color='black';
  			document.getElementById('p4').style.borderStyle = 'none';
  			document.getElementById('s4').style.display = 'none';

  			document.getElementById('p5').style.color='black';
  			document.getElementById('p5').style.borderStyle = 'none';
  			document.getElementById('s5').style.display = 'none';

  			document.getElementById('p6').style.color='black';
  			document.getElementById('p6').style.borderStyle = 'none';
  			document.getElementById('s6').style.display = 'none';

  		}

  		function p3(){
  			document.getElementById('p3').style.color='blue';
  			document.getElementById('p3').style.borderBottom = 'solid';
  			document.getElementById('s3').style.display = 'block';

  			document.getElementById('p1').style.color='black';
  			document.getElementById('p1').style.borderStyle = 'none';
  			document.getElementById('s1').style.display = 'none';

  			document.getElementById('p2').style.color='black';
  			document.getElementById('p2').style.borderStyle = 'none';
  			document.getElementById('s2').style.display = 'none';

  			document.getElementById('p4').style.color='black';
  			document.getElementById('p4').style.borderStyle = 'none';
  			document.getElementById('s4').style.display = 'none';

  			document.getElementById('p5').style.color='black';
  			document.getElementById('p5').style.borderStyle = 'none';
  			document.getElementById('s5').style.display = 'none';

  			document.getElementById('p6').style.color='black';
  			document.getElementById('p6').style.borderStyle = 'none';
  			document.getElementById('s6').style.display = 'none';
  		}

  		function p4(){
  			document.getElementById('p4').style.color='blue';
  			document.getElementById('p4').style.borderBottom = 'solid';
  			document.getElementById('s4').style.display = 'block';

  			document.getElementById('p1').style.color='black';
  			document.getElementById('p1').style.borderStyle = 'none';
  			document.getElementById('s1').style.display = 'none';

  			document.getElementById('p2').style.color='black';
  			document.getElementById('p2').style.borderStyle = 'none';
  			document.getElementById('s2').style.display = 'none';

  			document.getElementById('p3').style.color='black';
  			document.getElementById('p3').style.borderStyle = 'none';
  			document.getElementById('s3').style.display = 'none';

  			document.getElementById('p5').style.color='black';
  			document.getElementById('p5').style.borderStyle = 'none';
  			document.getElementById('s5').style.display = 'none';

  			document.getElementById('p6').style.color='black';
  			document.getElementById('p6').style.borderStyle = 'none';
  			document.getElementById('s6').style.display = 'none';
  		}

  		function p5(){
  			document.getElementById('p5').style.color='blue';
  			document.getElementById('p5').style.borderBottom = 'solid';
  			document.getElementById('s5').style.display = 'block';

  			document.getElementById('p1').style.color='black';
  			document.getElementById('p1').style.borderStyle = 'none';
  			document.getElementById('s1').style.display = 'none';

  			document.getElementById('p2').style.color='black';
  			document.getElementById('p2').style.borderStyle = 'none';
  			document.getElementById('s2').style.display = 'none';

  			document.getElementById('p3').style.color='black';
  			document.getElementById('p3').style.borderStyle = 'none';
  			document.getElementById('s3').style.display = 'none';

  			document.getElementById('p4').style.color='black';
  			document.getElementById('p4').style.borderStyle = 'none';
  			document.getElementById('s4').style.display = 'none';

  			document.getElementById('p6').style.color='black';
  			document.getElementById('p6').style.borderStyle = 'none';
  			document.getElementById('s6').style.display = 'none';
  		}

  		function p6(){
  			document.getElementById('p6').style.color='blue';
  			document.getElementById('p6').style.borderBottom = 'solid';
  			document.getElementById('s6').style.display = 'block';

  			document.getElementById('p1').style.color='black';
  			document.getElementById('p1').style.borderStyle = 'none';
  			document.getElementById('s1').style.display = 'none';

  			document.getElementById('p2').style.color='black';
  			document.getElementById('p2').style.borderStyle = 'none';
  			document.getElementById('s2').style.display = 'none';

  			document.getElementById('p3').style.color='black';
  			document.getElementById('p3').style.borderStyle = 'none';
  			document.getElementById('s3').style.display = 'none';

  			document.getElementById('p4').style.color='black';
  			document.getElementById('p4').style.borderStyle = 'none';
  			document.getElementById('s4').style.display = 'none';

  			document.getElementById('p5').style.color='black';
  			document.getElementById('p5').style.borderStyle = 'none';
  			document.getElementById('s5').style.display = 'none';
  		}
  	</script>

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

		if(isset($_POST['seemore']))
		{
			echo "<script> location.href='events.php' </script>";
		}

		if(isset($_POST['about']))
		{
			echo "<script> location.href='about.php' </script>";
		}
	?>
</html>