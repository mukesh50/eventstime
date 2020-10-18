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
		User Payments Page
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


			/* Events Section */
			.eva{
				width: 70%;
				border-collapse: collapse;
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
	      	@media only screen and (max-width: 850px){
				.eva{
	      			padding-left: 30px;
	      		}
	      	}

		</style>

	</head>

	<body>
		</br> </br> </br> </br>

		<?php

		if(isset($_GET['muk']))
		{
			include "data.php";

			$sql = base64_decode($_GET['muk']);

			$row = mysqli_query($con , $sql);

			if(mysqli_num_rows($row)>0)
			{
			?>
				<div align="center">
					<table class="eva">
						<tr>
							<th width="10%" style="border: solid; padding: 10px;"> Sr No. </th>

							<th width="50%" style="border: solid; padding: 10px;"> Email_ID </th>

							<th width="15%" style="border: solid; padding: 10px;"> Date </th>

							<th width="25%" style="border: solid; padding: 10px;"> Price </th>
						</tr>
			<?php

					$i=1;
					$pay = 0;
					while($r = mysqli_fetch_assoc($row))
					{
						echo "<tr>";

						echo "<td style='border: solid; padding: 10px;'> ".$i." </td>";

						echo "<td style='border: solid; padding: 10px;'> ".$r['Email_ID']." </td>";

						echo "<td style='border: solid; padding: 10px;'> ".$r['Date']." </td>";

						echo "<td style='border: solid; padding: 10px;'> ".$r['Price']." </td>";

						echo "</tr>";

						$pay = $pay + $r['Price'];

						$i = $i+1;
					}

					echo  "<tr> ";

					echo "<td colspan='3' style='border: solid; padding: 10px;' align='right'> Total:  </td>";

					echo "<td colspan='3' style='border: solid; padding: 10px;'> ".$pay." </td>";
				?>
					</table>
				</div>

				<?php
			}
			else
			{
				echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any Data </h1> </div>";
	    	}
  			mysqli_close($con);

		}
		else
		{
			include "data.php";

			$sql = "select * from payment where P_Delete='yes'";

			$row = mysqli_query($con , $sql);

			if(mysqli_num_rows($row)>0)
			{
			?>
				<div align="center">
					<table class="eva">
						<tr>
							<th width="10%" style="border: solid; padding: 10px;"> Sr No. </th>

							<th width="50%" style="border: solid; padding: 10px;"> Email_ID </th>

							<th width="15%" style="border: solid; padding: 10px;"> Date </th>

							<th width="25%" style="border: solid; padding: 10px;"> Price </th>
						</tr>
			<?php

					$i=1;
					$pay = 0;
					while($r = mysqli_fetch_assoc($row))
					{
						echo "<tr>";

						echo "<td style='border: solid; padding: 10px;'> ".$i." </td>";

						echo "<td style='border: solid; padding: 10px;'> ".$r['Email_ID']." </td>";

						echo "<td style='border: solid; padding: 10px;'> ".$r['Date']." </td>";

						echo "<td style='border: solid; padding: 10px;'> ".$r['Price']." </td>";

						echo "</tr>";

						$pay = $pay + $r['Price'];

						$i = $i+1;
					}

					echo  "<tr> ";

					echo "<td colspan='3' style='border: solid; padding: 10px;' align='right'> Total:  </td>";

					echo "<td colspan='3' style='border: solid; padding: 10px;'> ".$pay." </td>";
				?>
					</table>
				</div>

				<?php
			}
			else
			{
				echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any Data </h1> </div>";
	    	}
  			mysqli_close($con);
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
    								<td> <br> </td>
    							</tr>

    							<tr>
    								<td> <input type="date" id='f1' name="sdate" style="width: 150px; height: 20px;"> </td>
    							</tr>

    							<tr>
    								<td align="center"> <br> To, <br> <br> </td>
    							</tr>

    							<tr> 
    								<td> <input type="date" id='f2' name="edate" style="width: 150px; height: 20px;"> </td> 
    							</tr>

    							<tr>
    								<td> <br> </td>
    							</tr>

    							<tr>
    								<td align="center"> <input type="submit" name="submit" value="submit"> </td>
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
   		if(isset($_POST['submit']))
   		{
   			if(strlen($_POST['sdate'])==0 && strlen($_POST['edate'])==0)
   			{
   				$sql = "select * from payment where P_Delete='yes';";

   				$muk = base64_encode($sql);

   				echo "<script> location.href='adminpayment.php?muk=".$muk."' </script>";
   			}
   			elseif(strlen($_POST['sdate'])>0 && strlen($_POST['edate'])==0)
   			{
   				$date = date("Y-m-d" , strtotime($_POST['sdate']));

   				$sql = "select * from payment where Date between '".$date."' and '".date('Y-m-d')."' and P_Delete='yes'";

   				$muk = base64_encode($sql);

   				echo "<script> location.href='adminpayment.php?muk=".$muk."' </script>";
   			}
   			elseif(strlen($_POST['sdate'])>0 && strlen($_POST['edate'])>0)
   			{
   				$date = date("Y-m-d" , strtotime($_POST['sdate']));

   				$date1 = date("Y-m-d" , strtotime($_POST['edate']));

   				$sql = "select * from payment where Date between '".$date."' and '".$date1."' and P_Delete='yes'";

   				$muk = base64_encode($sql);

   				echo "<script> location.href='adminpayment.php?muk=".$muk."' </script>";
   			}

   			$_SESSION['sdate'] = $_POST['sdate'];
   			$_SESSION['edate'] = $_POST['edate'];
   		}

   		if(isset($_SESSION['sdate']))
   		{
   			echo "<script> document.getElementById('f1').value='".$_SESSION['sdate']."' </script>";

   			echo "<script> document.getElementById('f2').value='".$_SESSION['edate']."' </script>";
   		}
   	?>

</html>