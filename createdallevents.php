<html>
	<head>

    <?php
      session_start();

      if(isset($_SESSION['adminemail']))
      {

      }
      else{
      	echo "<script> location.href='adminlogin.php'; </script>";
      }
    ?>

	<title>
		All Events Page
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


			/* Events Section */

    		.evsec{
				margin:30px;
				width:270px;
				height:400px;
				float: left;
				border: 1px;
				box-shadow: 4px 4px aqua;
			}

			.eva{
				background-color: snow;
				padding-left: 120px;
			}

    		.btn{
				text-decoration: none;
				padding: 3px 25px;
				background-color: black;
				color: white;
				border-radius: 5px;
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

			.btn1{
				text-decoration: none;
				padding: 7px 25px;
				background-color: black;
				color: white;
				border-radius: 5px;
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

	      	@media only screen and (max-width: 850px){
				.eva{
	      			padding-left: 30px;
	      		}

	      		.h11{
	      			display: none;
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
        			$sql = "select * from publisher where upper(Event_Name) like upper('%".$_GET['name']."%') order by Event_ID desc;";

					include "data.php";
					$row = mysqli_query($con,$sql);

					if (mysqli_num_rows($row)>0)
					{
						while ($r = mysqli_fetch_assoc($row))
	        			{

	            			$c="";
	              			$p="";
	              			$payment="";
	              			$verify = "";
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

	              			if($r['payment'] == 'yes')
	              			{
	              				$payment = "Payment : yes";
	              			}
	              			else
	              			{
	              				$payment = "Payment : no";
	              			}


	              			if($r['verify'] == "yes")
	              			{
	              				$verify = "Verify : Approved";
	              			}
	              			elseif($r['verify'] == "no")
	              			{
	              				$verify = "Verify : Rejected";
	              			}
	              			else
	              			{
	              				$verify = "Verify : No";
	              			}

	              			$id = base64_encode($r['Event_ID']);
						?>

						<section class="evsec">
								<table width="100%" height=100% bgcolor="white">
									<tr style="height: 65%;" bgcolor="silver">
										<td colspan="2" style="background-image:url(<?php echo $r['Image']; ?>); background-size:100% 100%;background-repeat: no-repeat;"> </td>
									</tr>
								
									<tr>
										<th colspan="2"> <?php  echo $r['Event_Name']; ?> </th>
									</tr>

									<tr>
										<td colspan="2"> <img src="datelogo.jpg" width="15px" height="15px"> &nbsp;<?php  echo $c;?></td>
									</tr>

									<tr>
										<td colspan="2"> <img src="locationlogo.png" width="15px" height="15px"> &nbsp;<?php echo $r['Address1']; ?> </td>
									</tr>

									<tr>
										<td colspan="2"> #<?php echo $r['Event_Category']; ?> </td>
									</tr>

									<tr style="height: 10%;">
										<td colspan="2" style="border-top: thin solid;text-align: right;padding-right: 10px"> <?php echo $p; ?> </td>
									</tr>

									<tr>
										<td colspan="2" style="border-top: thin solid;text-align: right;padding-right: 10px"> </td>
									</tr>

									<tr>
										<td colspan="2" style="padding-right: 20px;" align="right"> <?php echo $verify; ?> &nbsp; &nbsp; <?php echo $payment ?> </td>
									</tr>
								</table>
						</section>
					<?php
				}
			}
	    	else
	    	{
	      		echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any event </h1> </div>";
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
	              			$payment = "";
	              			$verify = "";
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

	              			if($r['payment'] == 'yes')
	              			{
	              				$payment = "Payment : yes";
	              			}
	              			else
	              			{
	              				$payment = "Payment : no";
	              			}


	              			if($r['verify'] == "yes")
	              			{
	              				$verify = "Verify : Approved";
	              			}
	              			elseif($r['verify'] == "no")
	              			{
	              				$verify = "Verify : Rejected";
	              			}
	              			else
	              			{
	              				$verify = "Verify : No";
	              			}

	              			$id = base64_encode($r['Event_ID']);
						?>

						<section class="evsec">
								<table width="100%" height=100% bgcolor="white">
									<tr style="height: 65%;" bgcolor="silver">
										<td style="background-image:url(<?php echo $r['Image']; ?>); background-size:100% 100%;background-repeat: no-repeat;" colspan="2"> </td>
									</tr>
								
									<tr>
										<th colspan="2"> <?php  echo $r['Event_Name']; ?> </th>
									</tr>

									<tr>
										<td colspan="2"> <img src="datelogo.jpg" width="15px" height="15px"> &nbsp;<?php  echo $c;?></td>
									</tr>

									<tr>
										<td colspan="2"> <img src="locationlogo.png" width="15px" height="15px"> &nbsp;<?php echo $r['Address1']; ?> </td>
									</tr>

									<tr>
										<td colspan="2"> #<?php echo $r['Event_Category']; ?> </td>
									</tr>

									<tr style="height: 10%;">
										<td colspan="2" style="border-top: thin solid;text-align: right;padding-right: 10px"> <?php echo $p; ?> </td>
									</tr>

									<tr>
										<td colspan="2" style="border-top: thin solid;text-align: right;padding-right: 10px"> </td>
									</tr>

									<tr>
										<td colspan="2" style="padding-right: 20px;" align="right"> <?php echo $verify; ?> &nbsp; &nbsp; <?php echo $payment ?> </td>
									</tr>
								</table>
						</section>
					<?php
				}
			}
	    	else
	    	{
	      		echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any event </h1> </div>";
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
        			$sql = "select * from publisher order by Event_ID desc;";

					include "data.php";
					$row = mysqli_query($con,$sql);

					if (mysqli_num_rows($row)>0)
					{
						while ($r = mysqli_fetch_assoc($row))
	        			{

	            			$c="";
	              			$p="";
	              			$payment="";
	              			$verify ="";
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


	              			if($r['payment'] == 'yes')
	              			{
	              				$payment = "Payment : yes";
	              			}
	              			else
	              			{
	              				$payment = "Payment : no";
	              			}


	              			if($r['verify'] == "yes")
	              			{
	              				$verify = "Verify : Approved";
	              			}
	              			elseif($r['verify'] == "no")
	              			{
	              				$verify = "Verify : Rejected";
	              			}
	              			else
	              			{
	              				$verify = "Verify : No";
	              			}


	              			$id = base64_encode($r['Event_ID']);
						?>

						<section class="evsec">
								<table width="100%" height=100% bgcolor="white">
									
									<tr style="height: 65%;" bgcolor="silver">
										<td colspan="2" style="background-image:url(<?php echo $r['Image']; ?>); background-size:100% 100%;background-repeat: no-repeat;"> </td>
									</tr>
								
									<tr>
										<th colspan="2"> <?php  echo $r['Event_Name']; ?> </th>
									</tr>

									<tr>
										<td colspan="2"> <img src="datelogo.jpg" width="15px" height="15px"> &nbsp;<?php  echo $c;?></td>
									</tr>

									<tr>
										<td colspan="2"> <img src="locationlogo.png" width="15px" height="15px"> &nbsp;<?php echo $r['Address1']; ?> </td>
									</tr>

									<tr>
										<td colspan="2"> #<?php echo $r['Event_Category']; ?> </td>
									</tr>

									<tr style="height: 10%;">
										<td colspan="2" style="border-top: thin solid;text-align: right;padding-right: 10px"> <?php echo $p; ?> </td>
									</tr>

									<tr>
										<td colspan="2" style="border-top: thin solid;text-align: right;padding-right: 10px"> </td>
									</tr>

									<tr>
										<td colspan="2" style="padding-right: 20px;" align="right"> <?php echo $verify; ?> &nbsp; &nbsp; <?php echo $payment ?> </td>
									</tr>
								</table>
						</section>
					<?php
				}
			}
	    	else
	    	{
	      		echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any event </h1> </div>";
	    	}
  		mysqli_close($con);
		?>
		</div>

		<?php
			}
		?>


		<!-- Filter Button -->
			<div class="dropdown1">
  				<p class="dropbtn1"> <img src="filter.png" width="30px" height="30px"> </p>
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

						<td>
							<input type="image" name="search22" src='searchlogo.png' class="search1"> &nbsp &nbsp
						</td>

						<td>
							<input type="text" name="search5" placeholder="Enter event name" class="search"> &nbsp; &nbsp; &nbsp; &nbsp;
						</td>

						<td style="padding-right: 40px;"> <a href='adminpage.php' class="link11"> Back </a> </td>

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
   					$sql = "select * from publisher order by Event_ID desc;;";
   				}
   				elseif($cat!='All' && $price == 'All')
   				{
   					$sql = "select * from publisher where Event_Category='".$cat."' order by Event_ID desc;";
   				}
   				elseif ($cat=='All' && $price!='All') 
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from publisher where Price=0 order by Event_ID desc;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from publisher where Price>0 order by Event_ID desc;";
   					}
   				}
   				elseif($cat!='All' && $price!='All')
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from publisher where Price=0 and Event_Category='".$cat."' order by Event_ID desc;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from publisher where Price>0 and Event_Category='".$cat."' order by Event_ID desc;";
   					}
   				}
   			
   				$muk = base64_encode($sql);

   				echo "<script> location.href='createdallevents.php?muk=".$muk."' </script>";
   			}



   			#Tomorrow Filter
   			elseif($date == 'Tomorrow')
   			{
   				$date = strtotime("1day",strtotime(date('Y-m-d')));

   				if($cat == 'All' && $price == 'All')
   				{
   					$sql = "select * from publisher where Start_Date='".date('Y-m-d' , $date)."' order by Event_ID desc;";
   				}
   				elseif($cat!='All' && $price == 'All')
   				{
   					$sql = "select * from publisher where Start_Date='".date('Y-m-d' , $date)."' and Event_Category='".$cat."'  order by Event_ID desc;";
   				}
   				elseif ($cat=='All' && $price!='All') 
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from publisher where Start_Date='".date('Y-m-d' , $date)."' and Price=0  order by Event_ID desc;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from publisher where Start_Date='".date('Y-m-d' , $date)."' and Price>0  order by Event_ID desc;";
   					}
   				}
   				elseif($cat!='All' && $price!='All')
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from publisher where Start_Date='".date('Y-m-d' , $date)."' and Event_Category='".$cat."' and Price=0 order by Event_ID desc;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from publisher where Start_Date='".date('Y-m-d' , $date)."' and Event_Category='".$cat."'  and Price>0 order by Event_ID desc;";
   					}
   				}

   				$muk = base64_encode($sql);

   				echo "<script> location.href='createdallevents.php?muk=".$muk."' </script>";
   			}



   			#This Week Filter
   			elseif($date == 'Thisweek')
   			{
   				if($cat == 'All' && $price == 'All')
   				{
   					if(date('l') == 'Saturday')
	    			{
	    				$sql = "select * from publisher where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW() + interval 1 week) order by Event_ID desc;";
	    			}
	    			else{
	       				$sql = "select * from publisher where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW()) order by Event_ID desc;";
	     			}
   				}
   				elseif($cat!='All' && $price == 'All')
   				{
	   				if(date('l') == 'Saturday')
	    			{
	    				$sql = "select * from publisher where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW() + interval 1 week) and Event_Category='".$cat."' order by Event_ID desc;";
	    			}
	    			else{
	       				$sql = "select * from publisher where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW()) and Event_Category='".$cat."' order by Event_ID desc;";
	     			}
   				}
   				elseif ($cat=='All' && $price!='All') 
   				{
   					if($price == 'Free')
   					{
		   				if(date('l') == 'Saturday')
		    			{
		    				$sql = "select * from publisher where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW() + interval 1 week) and Price=0 order by Event_ID desc;";
		    			}
		    			else{
		       				$sql = "select * from publisher where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW()) and Price=0 order by Event_ID desc;";
		     			}
   					}
   					elseif($price == 'Paid')
   					{
   						if(date('l') == 'Saturday')
		    			{
		    				$sql = "select * from publisher where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW() + interval 1 week) and Price>0 order by Event_ID desc;";
		    			}
		    			else{
		       				$sql = "select * from publisher where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW()) and Price>0 order by Event_ID desc;";
		     			}
   					}
   				}
   				elseif($cat!='All' && $price!='All')
   				{
   					if($price == 'Free')
   					{
		   				if(date('l') == 'Saturday')
		    			{
		    				$sql = "select * from publisher where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW() + interval 1 week) and Event_Category='".$cat."' and Price=0 order by Event_ID desc;";
		    			}
		    			else{
		       				$sql = "select * from publisher where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW()) and Event_Category='".$cat."' and Price=0 order by Event_ID desc;";
		     			}
   					}
   					elseif($price == 'Paid')
   					{
   						if(date('l') == 'Saturday')
		    			{
		    				$sql = "select * from publisher where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW() + interval 1 week) and Event_Category='".$cat."' and Price>0 order by Event_ID desc;";
		    			}
		    			else{
		       				$sql = "select * from publisher where Start_Date>'".date('Y-m-d')."' and YEARWEEK(Start_Date) = YEARWEEK(NOW()) and Event_Category='".$cat."' and Price>0 order by Event_ID desc;";
		     			}
   					}
   				}

   				$muk = base64_encode($sql);

   				echo "<script> location.href='createdallevents.php?muk=".$muk."' </script>";
   			}



   			#Weekend filter
   			elseif($date == 'Weekend')
   			{
   				if($cat == 'All' && $price == 'All')
   				{
   					$sql = "select * from publisher WHERE Start_Date>'".date('Y-m-d')."' and dayofweek(Start_Date) = 7 or dayofweek(Start_Date) = 1 order by Event_ID desc;";
   				}
   				elseif($cat!='All' && $price == 'All')
   				{
   					$sql = "select * from publisher WHERE Start_Date>'".date('Y-m-d')."' and dayofweek(Start_Date) = 7 or dayofweek(Start_Date) = 1 and Event_Category='".$cat."' order by Event_ID desc;";
   				}
   				elseif ($cat=='All' && $price!='All') 
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from publisher WHERE Start_Date>'".date('Y-m-d')."' and dayofweek(Start_Date) = 7 or dayofweek(Start_Date) = 1 and Price=0 order by Event_ID desc;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from publisher WHERE Start_Date>'".date('Y-m-d')."' and dayofweek(Start_Date) = 7 or dayofweek(Start_Date) = 1 and Price>0 order by Event_ID desc;";
   					}
   				}
   				elseif($cat!='All' && $price!='All')
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from publisher WHERE Start_Date>'".date('Y-m-d')."' and dayofweek(Start_Date) = 7 or dayofweek(Start_Date) = 1 and Event_Category='".$cat."' and Price=0 order by Event_ID desc;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from publisher WHERE Start_Date>'".date('Y-m-d')."' and dayofweek(Start_Date) = 7 or dayofweek(Start_Date) = 1 and Event_Category='".$cat."' and Price>0 order by Event_ID desc;";
   					}
   				}

   				$muk = base64_encode($sql);

   				echo "<script> location.href='createdallevents.php?muk=".$muk."' </script>";
   			}



   			#This Month Filter
   			elseif($date == 'Thismonth')
   			{
   				$expire = strtotime('first day of +1 month');

   				$nextm = date('Y-m-d', $expire);

   				if($cat == 'All' && $price == 'All')
   				{
   					$sql = "select * from publisher Where Start_Date>'".date('Y-m-d')."' and Start_Date<'".$nextm."' order by Event_ID desc;";
   				}
   				elseif($cat!='All' && $price == 'All')
   				{
   					$sql = "select * from publisher Where Start_Date>'".date('Y-m-d')."' and Start_Date<'".$nextm."' and Event_Category='".$cat."' order by Event_ID desc;";
   				}
   				elseif ($cat=='All' && $price!='All') 
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from publisher Where Start_Date>'".date('Y-m-d')."' and Start_Date<'".$nextm."' and Price=0 order by Event_ID desc;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from publisher Where Start_Date>'".date('Y-m-d')."' and Start_Date<'".$nextm."' and Price>0 order by Event_ID desc;";
   					}
   				}
   				elseif($cat!='All' && $price!='All')
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from publisher Where Start_Date>'".date('Y-m-d')."' and Start_Date<'".$nextm."' and Event_Category='".$cat."' and Price=0 order by Event_ID desc;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from publisher Where Start_Date>'".date('Y-m-d')."' and Start_Date<'".$nextm."' and Event_Category='".$cat."' and Price>0 order by Event_ID desc;";
   					}
   				}

   				$muk = base64_encode($sql);

   				echo "<script> location.href='createdallevents.php?muk=".$muk."' </script>";
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
   					$sql = "select * from publisher Where Start_Date>'".$nextm."' and Start_Date<'".$nextm1."' order by Event_ID desc;";
   				}
   				elseif($cat!='All' && $price == 'All')
   				{
   					$sql = "select * from publisher Where Start_Date>'".$nextm."' and Start_Date<'".$nextm1."' and Event_Category='".$cat."' order by Event_ID desc;";
   				}
   				elseif ($cat=='All' && $price!='All') 
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from publisher Where Start_Date>'".$nextm."' and Start_Date<'".$nextm1."' and Price=0 order by Event_ID desc;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from publisher Where Start_Date>'".$nextm."' and Start_Date<'".$nextm1."' and Price>0 order by Event_ID desc;";
   					}
   				}
   				elseif($cat!='All' && $price!='All')
   				{
   					if($price == 'Free')
   					{
   						$sql = "select * from publisher Where Start_Date>'".$nextm."' and Start_Date<'".$nextm1."' and Event_Category='".$cat."' and Price=0 order by Event_ID desc;";
   					}
   					elseif($price == 'Paid')
   					{
   						$sql = "select * from publisher Where Start_Date>'".$nextm."' and Start_Date<'".$nextm1."' and Event_Category='".$cat."' and Price>0 order by Event_ID desc;";
   					}
   				}

   				$muk = base64_encode($sql);

   				echo "<script> location.href='createdallevents.php?muk=".$muk."' </script>";
   			}
   		}

   		if(isset($_SESSION['filter1']))
   		{
   			echo "<script> document.getElementById('filter1').value='".$_SESSION['filter1']."'; </script>";
   			echo "<script> document.getElementById('filter2').value='".$_SESSION['filter2']."'; </script>";
   			echo "<script> document.getElementById('filter3').value='".$_SESSION['filter3']."'; </script>";
   		}
   	?>

</html>