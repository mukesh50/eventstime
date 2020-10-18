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
    ?>

	<title>
		Create Event Page
	</title>

	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
		<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

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

			/* form section */
			.tab{
				width: 60%;
				box-shadow: 5px 5px aqua;
			}

			.btn{
				padding: 10px 25px;
				background-color: black;
				color: white;
				border-radius: 5px;
				cursor: pointer;
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

			@media only screen and (max-width: 1150px){
				.tab{
					width: 80%;
				}

				.h211, .h212, .h213{
		    		display: none;
		    	}

		    	.h210{
		    		display: block;
		    	}
			}

			@media only screen and (max-width: 850px){
				.tab{
					width: 95%;
				}
			}

		</style>
	</head>

	<body>
		</br> </br> </br> </br>

		<div align="center">
			<table class="tab">
				<form method="post" enctype="multipart/form-data">
				<tr>
					<td colspan="3" style="border-bottom: solid"> </td>
				</tr>

				<tr>
					<th width="10%" align="center"> </br> 1) </th>

					<th colspan="2"> </br> Basic Publisher Details </th>
				</tr>

				<tr>
					<td colspan="3" style="border-bottom: solid;"></td>
				</tr>

				<tr>
					<td colspan="3"> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;" width="45%"> First Name </td>

					<td style="padding-left: 10px;" width="45%"> Last Name </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;"> <input type="text" name="first" style="width: 250px; height: 25px;"> </td>

					<td style="padding-left: 10px;"> <input type="text" name="last" style="width: 250px; height: 25px;"> </td>
				</tr>

				<tr>
					<td colspan="3"> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;" colspan="2"> Email ID </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;" colspan="2"> <input type="text" name="email" style="width: 350px; height: 25px;"> </td>
				</tr>

				<tr>
					<td colspan="3"> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;" colspan="2"> Phone Number </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;" colspan="2"> <input type="text" name="phone" style="width: 350px; height: 25px;"> </td>
				</tr>

				<tr>
					<td colspan="3" style="border-bottom: solid;"> </br> </td>
				</tr>

				<tr>
					<th width="10%" align="center"> </br> 2) </th>

					<th colspan="2"> </br> Event Image </th>
				</tr>

				<tr>
					<td style='border-bottom: solid;' colspan="3"> </td>
				</tr>

				<tr>
					<td> </td>

					<td> <input type="file" onchange="readURL(this);" name="file"> </td>

					<td colspan="2"> <img  id="blah" src="" width="250px" height="200px"> </td>
				</tr>

				<tr>
					<td> </td>

					<td colspan="2"> Please choose a jpg file </td>
				</tr>

				<tr>
					<td colspan="3" style="border-bottom: solid;"> </br> </td>
				</tr>

				<tr>
					<th> </br> 3) </th>

					<th colspan="2" > </br> Event Basic Details </th>
				</tr>

				<tr>
					<td style='border-bottom: solid;' colspan="3"> </td>
				</tr>

				<tr>
					<td colspan="3"> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;" colspan="2"> Event Name </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;" colspan="2"> <input type="text" name="event" style="width: 350px; height: 25px;"> </td>
				</tr>

				<tr>
					<td colspan="3"> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;" colspan="2"> Category :- &nbsp; &nbsp; &nbsp; 
							<select style="width: 250px; height: 25px;" name='cat'>
								<option value="Concert"> Concert </option>
								<option value="Sport"> Sport</option>
								<option value="Arts&museums"> Arts & Museums </option>
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
							</select>  </td>
				</tr>

				<tr>
					<td colspan="3"> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px" colspan="2"> Address 1 </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;" colspan="2"> <input type="text" name="add1" style="width: 350px; height: 25px;"> </td>
				</tr>

				<tr>
					<td colspan="3"> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;"> Address 2 </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;"> <textarea name="add2" rows="8" cols="50" style="resize: none;"> </textarea> </td>
				</tr>

				<tr>
					<td colspan="3"> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;"> Start Date </td>

					<td style="padding-left: 10px;"> End Date </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;"> <input type="date" name="sdate" style="width: 250px; height: 25px;"> </td>

					<td style="padding-left: 10px;"> <input type="date" name="edate" style="width: 250px; height: 25px;"> </td>
				</tr>

				<tr>
					<td colspan="3"> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;"> Start Time </td>

					<td style="padding-left: 10px;"> End Time </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;"> <input type="Time" name="stime" style="width: 250px; height: 25px;"> </td>

					<td style="padding-left: 10px;"> <input type="Time" name="etime" style="width: 250px; height: 25px;"> </td>
				</tr>

				<tr>
					<td colspan="3"> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;"> Total Seat </td>

					<td style="padding-left: 10px;"> Price </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;"> <input type="text" name="seat" style="width: 250px; height: 25px;"> </td>

					<td style="padding-left: 10px;"> <input type="text" name="price" style="width: 250px; height: 25px;"> </td>
				</tr>

				<tr>
					<td colspan="3"> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td colspan="2" style="padding-left: 10px;"> Orgnaizer Name </td>
				</tr>

				<tr>
					<td> </td>

					<td colspan="2"> <input type="text" name="org" style="width: 350px; height: 25px;"> </td>
				</tr>

				<tr>
					<td colspan="3"> </br> </br> </td>
				</tr>

				<tr>
					<td colspan="3" style="border-top: solid;"> </br> </td>
				</tr>

				<tr>
					<td width="10%" align="center"> 4 </td>

					<td colspan="2"> <strong> Advanced Details </strong> </td>
				</tr>

				<tr>
					<td colspan="3" style="border-bottom: solid;"> </td>
				</tr>

				<tr>
					<td colspan="3"> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td colspan="2" style="padding-left: 10px;"> Event Description </td>
				</tr>

				<tr>
					<td> </td>

					<td colspan="2" style="padding-left: 10px;"> <textarea rows=17 cols="100" name="des"> </textarea> </td>
				</tr>

				<tr>
					<td> <br> </td>
				</tr>

				<tr>
					<td> </td>

					<td colspan="2" style="padding-left: 10px;"> Organizer Description </td>
				</tr>

				<tr>
					<td> </td>

					<td colspan="2" style="padding-left: 10px;"> <textarea rows="17" cols="100" name="org_des"> </textarea> </td>
				</tr>

				<tr>
					<td colspan="3"> </br> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td colspan="2" style="padding-left: 10px;"> <p id='id'>  please Enter all the details </p> </td>
				</tr>

				<tr>
					<td colspan="3" align="right" style="padding-right: 20px;"> <input type="submit" value="Next" name="sub1" class="btn"> </td>
				</tr>

				<tr>
					<td colspan="3"> </br>  </br> </td>
				</tr>
				<form>
			</table>
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

    											<p> <input type="submit" name="like" value="Liked Events" class="button2"> </p>

    											<p> <input type="submit" name="book" value="Booked Tickets" class="button2"> </p>

    											<p> <input type="submit" name="created" value="Created Events" class="button2"> </p>

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
    											
    											<p> <input type="submit" name="created" value="Created Events" class="button2"></p>
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

	<SCRIPT>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(250)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </SCRIPT>


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

		if(isset($_POST['created']))
		{
			echo "<script> location.href='createdevents.php' </script>";
		}
	?>
	</body>


	<?php
	if(isset($_POST['sub1']))
		{
			include "data.php";

			$first = mysqli_escape_string($con ,$_POST['first']);
			$last = mysqli_escape_string($con , $_POST['last']);
			$email = mysqli_escape_string($con , $_POST['email']);
			$phone = mysqli_escape_string($con , $_POST['phone']);
			$name = mysqli_escape_string($con ,$_POST['event']);
			$cat = mysqli_escape_string($con ,$_POST['cat']);
			$add1 = mysqli_escape_string($con ,$_POST['add1']);
			$add2 = mysqli_escape_string($con, $_POST['add2']);
			$sdate = mysqli_escape_string($con , $_POST['sdate']);
			$edate = mysqli_escape_string($con , $_POST['edate']);
			$stime = mysqli_escape_string($con , $_POST['stime']);
			$etime = mysqli_escape_string($con , $_POST['etime']);
			$price = mysqli_escape_string($con ,$_POST['price']);
			$seat = mysqli_escape_string($con , $_POST['seat']);
			$org_name = mysqli_escape_string($con , $_POST['org']);
			$des = mysqli_escape_string($con , $_POST['des']);
			$org_des = mysqli_escape_string($con , $_POST['org_des']);

			if(strlen($first)>0 && strlen($last)>0 && strlen($email)>0 && strlen($phone)>0 && strlen($name)>0 && strlen($add1)>0 && strlen($add2)>0 && strlen($sdate)>0 && strlen($edate)>0 && strlen($stime)>0 && strlen($etime)>0 && strlen($org_name)>0 && strlen($des)>0 && strlen($org_des)>0 && strlen($price)>0 && strlen($seat)>0)
			{
				if($_FILES['file']['error'] == 0)
				{
					$type=$_FILES['file']['type'];

					if($type == "image/jpeg")
					{
						if(($sdate <= $edate) && ($sdate>date("Y-m-d")))
						{
							if($stime < $etime)
							{
								if(is_numeric($seat) && is_numeric($price) && $seat>49)
								{
									if(is_numeric($first) && is_numeric($last))
									{
										echo "<script> document.getElementById('id').innerHTML='Please Enter Valid Name'; </script>";

										echo "<script> alert('Please Enter Valid Name'); </script>";
									}
									else
									{
										if(filter_var($email , FILTER_VALIDATE_EMAIL) && is_numeric($phone) && strlen($phone)==10)
										{
											$sql1 = "insert into publisher (Event_name , Event_Category , Address1 , Address2 , Price , Total_Seat , Start_Date , End_Date , Start_Time , End_Time , Description , Org_Name , Organizer , Email_ID , BEmail_ID , Phone_NO , First_Name , Last_Name) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";

										if($stmt = mysqli_prepare($con , $sql1))
										{
											mysqli_stmt_bind_param($stmt , "ssssiissssssssssss" , $name , $cat , $add1 , $add2 , $price , $seat , $sdate , $edate , $stime , $etime , $des , $org_name , $org_des , $email , $_SESSION['email'] , $phone , $first , $last);

											mysqli_stmt_execute($stmt);

											$sql2 = "select * from publisher order by Event_ID desc;";

											$row2 = mysqli_query($con , $sql2);

											if(mysqli_num_rows($row2)>0)
											{
												$r2 = mysqli_fetch_assoc($row2);

												$txt = $r2['Event_ID'];

												$target_file = "cimages/".$txt.".jpg";
												move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

												$sql3 = "update publisher set Image='".$target_file."' where Event_ID=".$r2['Event_ID'].";";

												if(mysqli_query($con , $sql3))
												{
													echo "<script> location.href='createdevents.php'; </script>";
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
										else
										{
											echo "<script> alert('Some error Occured'); </script>";
										}
										}
										else
										{
											echo "<script> document.getElementById('id').innerHTML='Please Enter Valid Email and Phone Number'; </script>";

											echo "<script> alert('Please Enter Valid Email and Phone Number'); </script>";
										}
										
									}
								}
								else
								{
									echo "<script> document.getElementById('id').innerHTML='Please Enter Valid Seat or Price'; </script>";

									echo "<script> alert('Please Enter Valid seat or price'); </script>";
								}
							}
							else
							{
								echo "<script> document.getElementById('id').innerHTML='Please Enter Valid Time'; </script>";

								echo "<script> alert('Please Enter valid Time'); </script>";
							}
						}
						else
						{
							echo "<script> document.getElementById('id').innerHTML='Please Enter a Valid date'; </script>";

							echo "<script> alert('Please Enter a valid date'); </script>";
						}
					}
					else
					{
						echo "<script> document.getElementById('id').innerHTML='Please Select a Jpeg Image'; </script>";

						echo "<script> alert('Please Select a Jpeg Image'); </script>";
					}
				}
				else
				{
					echo "<script> document.getElementById('id').innerHTML='Please Select an image'; </script>";

					echo "<script> alert('Please select an image'); </script>";
				}

			}
			else
			{
				echo "<script> document.getElementById('id').innerHTML='Please Enter all Details'; </script>";

				echo "<script> alert('Please Enter all Details'); </script>";
			}
			mysqli_close($con);
		}
	?>
</html>