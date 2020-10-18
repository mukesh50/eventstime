<html>
	<head>

    <?php
      session_start();

      global $id;

      $id = base64_decode($_GET['id']);

      if(isset($_SESSION['email']))
	      {

	      }
	      else{
	      	echo "<script> location.href='signin.php'; </script>";
	      }
    ?>

	<title>
		Edit Event Page
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
		<?php
		if(isset($_GET['id']))
		{
			include "data.php";

			$sql = "select * from publisher where Event_ID=".$id." and not c_delete='yes';";

			$row = mysqli_query($con , $sql);

			if(mysqli_num_rows($row)>0)
			{
				$r = mysqli_fetch_assoc($row);

				$_SESSION['sdate'] = $r['Start_Date'];
				$_SESSION['edate'] = $r['End_Date'];
				$_SESSION['stime'] = $r['Start_Time'];
				$_SESSION['etime'] = $r['End_Time'];
				?>
		</br> </br> </br> </br>

		<div align="center">
			<table class="tab">
				<form method="post" enctype="multipart/form-data"> 
				<tr>
					<td colspan="3" style="border-bottom: solid"> </td>
				</tr>

				<tr>
					<th width="10%" align="center"> </br> 1) </th>

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
					<th> </br> 2) </th>

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

					<td style="padding-left: 10px;">
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

					<td style="padding-left: 10px;" colspan="2"> <input type="text" name="event" id='name' style="width: 350px; height: 25px;"> </td>
				</tr>

				<tr>
					<td colspan="3"> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td style="padding-left: 10px;" colspan="2"> Category :- &nbsp; &nbsp; &nbsp; 
							<select style="width: 250px; height: 25px;" name='cat' id='cat'>
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

					<td style="padding-left: 10px;" colspan="2"> <input type="text" id='add1' placeholder="City , State" name="add1" style="width: 350px; height: 25px;"> </td>
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

					<td style="padding-left: 10px;"> <textarea name="add2" id='add2' rows="8" cols="50" style="resize: none;"> <?php echo $r['Address2']; ?> </textarea> </td>
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

					<td style="padding-left: 10px;"> <input type="date" id='sdate' name="sdate" style="width: 250px; height: 25px;"> </td>

					<td style="padding-left: 10px;"> <input type="date" id='edate' name="edate" style="width: 250px; height: 25px;"> </td>
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

					<td style="padding-left: 10px;"> <input type="Time" id='stime' name="stime" style="width: 250px; height: 25px;"> </td>

					<td style="padding-left: 10px;"> <input type="Time" id='etime' name="etime" style="width: 250px; height: 25px;"> </td>
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

					<td style="padding-left: 10px;"> <input type="text" id='seat' name="seat" style="width: 250px; height: 25px;"> </td>

					<td style="padding-left: 10px;"> <input type="text" id='price' name="price" style="width: 250px; height: 25px;"> </td>
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

					<td colspan="2" style="padding-left: 10px;"> <input type="text" id='org_name' name="org_name" style="width: 350px; height: 25px;"> </td>
				</tr>

				<tr>
					<td colspan="3"> <br> </td>
				</tr>

				<tr>
					<td colspan="3" style="border-bottom: solid;"> </br> </td>
				</tr>

				<tr>
					<td width="10%" align="center"> 3 </td>

					<td colspan="2"> <strong> Advanced Details </strong> </td>
				</tr>

				<tr>
					<td colspan="3" style="border-bottom: solid;"> </br> </td>
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

					<td colspan="2" style="padding-left: 10px;"> <textarea rows=17 cols="100" id='des' name="des"> <?php echo $r['Description']; ?> </textarea> </td>
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

					<td colspan="2" style="padding-left: 10px;"> <textarea rows="17" cols="100" id='org_des' name="org_des"> <?php echo $r['Organizer']; ?> </textarea> </td>
				</tr>

				<tr>
					<td colspan="3"> </br> </br> </td>
				</tr>

				<tr>
					<td> </td>

					<td colspan="2" style="padding-left: 10px;"> <p id="id"> please Enter all the details </p> </td>
				</tr>

				<tr>
					<td colspan="3" align="right" style="padding-right: 20px;"> <input type="submit" value="Next" name="submit" class="btn"> </td>
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
					<td style="padding-left: 20px;"> <a href="createdevents.php" class="link11"> Back </a> </td>
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

	</body>

	<?php

				echo "<script> document.getElementById('name').value='".$r['Event_Name']."'; </script>";

				echo "<script> document.getElementById('cat').value='".$r['Event_Category']."'; </script>";

				echo "<script> document.getElementById('add1').value='".$r['Address1']."'; </script>";

				echo "<script> document.getElementById('sdate').value='".$r['Start_Date']."'; </script>";

				echo "<script> document.getElementById('edate').value='".$r['End_Date']."'; </script>";

				echo "<script> document.getElementById('stime').value='".$r['Start_Time']."'; </script>";

				echo "<script> document.getElementById('etime').value='".$r['End_Time']."'; </script>";

				echo "<script> document.getElementById('seat').value='".$r['Total_Seat']."'; </script>";

				echo "<script> document.getElementById('price').value='".$r['Price']."'; </script>";

				echo "<script> document.getElementById('org_name').value='".$r['Org_Name']."'; </script>";

				echo "<script> img = document.getElementById('blah')
						img.src = '".$r['Image']."' </script>";
			}
			else
			{
				echo "<script> alert('Some error Occured'); </script>";
			}

			mysqli_close($con);
		}
	?>


	<!-- Submit Button -->
	<?php
		if(isset($_POST['submit']))
		{
			include "data.php";

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
			$org_name = mysqli_escape_string($con , $_POST['org_name']);
			$des = mysqli_escape_string($con , $_POST['des']);
			$org_des = mysqli_escape_string($con , $_POST['org_des']);

			if($_FILES['file']['error'] == 0)
			{
				$type=$_FILES['file']['type'];

				if($type == "image/jpeg")
				{
					$target_file = "cimages/".$id.".jpg";
					move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
				}
			}
			else
			{

			}

			if(strlen($name)>0 && strlen($add1)>0 && strlen($add2)>0 && strlen($sdate)>0 && strlen($edate)>0 && strlen($stime)>0 && strlen($etime)>0 && strlen($org_name)>0 && strlen($des)>0 && strlen($org_des)>0 && strlen($price)>0 && strlen($seat)>0)
			{
				if(($sdate <= $edate) && ($sdate>date("Y-m-d")))
				{
					if($stime < $etime)
					{
						if(is_numeric($seat) && is_numeric($price) && $seat>49)
						{
							if($_SESSION['sdate'] != $sdate && $_SESSION['edate'] != $edate && $_SESSION['stime'] != $stime && $_SESSION['etime'] != $etime)
							{
								
										
							}
							else
							{
								$sql = "Update publisher set Event_Name = '".$name."', Event_Category = '".$cat."', Address1 = '".$add1."', Address2 = '".$add2."', Price = '".$price."', Total_Seat = ".$seat.", Start_Date = '".$sdate."', End_Date = '".$edate."', Start_Time = '".$stime."', End_Time = '".$etime."', Description = '".$des."', Org_Name = '".$org_name."', Organizer = '".$org_des."' where Event_ID=".$id.";";


								if (mysqli_query($con, $sql))
					    		{
					    			echo "<script> alert('Done'); </script>";
					    			echo "<script> location.href='Createdevents.php'; </script>";
								}
					    		else
					    		{
							    	echo "<script> alert('Some Error Occured'); </script>";

							    	echo "<script> alert('Some Error Occured'); </script>";
						 		}
						   	}
						}
						else
						{
							echo "<script> document.getElementById('id').innerHTML='Please Enter Valid Seat or Price'; </script>";

							echo "<script> alert('Please Enter Valid Seat or Price'); </script>";
						}
					}
					else
					{
						echo "<script> document.getElementById('id').innerHTML='Please Enter Valid Time'; </script>";

						echo "<script> alert('Please Enter Valid Time'); </script>";
					}
				}
				else
				{
						echo "<script> document.getElementById('id').innerHTML='Please Enter a Valid date'; </script>";

						echo "<script> alert('Please Enter a Valid date'); </script>";
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