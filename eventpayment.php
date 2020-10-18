<html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php
    	session_start();

    	if(isset($_GET['id']))
    	{

    	}
    	else
    	{
    		echo "<script> location.href='home1.php'; </script>";
    	}

    	global $id,$payment;

    	$id = base64_decode($_GET['id']);
    ?>

    <title>
    	Event Payment
    </title>

    	<style type="text/css">
    		.sec{
	      		width:100%; height:70px;
	        	position: fixed;
	        	background-color: white;
	        	top: 0px;
	        	box-shadow: 0px 5px aqua;
	    	}
	    	
	    	.link11{
	        	text-decoration: none;
	        	color : black;
	      	}

	      	.link11:hover{
	      		color: hotpink;
	      		font-size: 17px;
	      	}

    		.btn{
    			text-decoration: none;
    			padding: 7px 25px;
    			background-color: black;
    			color: white;
    			border-radius: 15px;
    			border: none;
    			cursor: pointer;
    		}

    		.tab2{
    			width: 40%;
    		}

    		.tab1{
    			width: 40%;
    		}

    		@media only screen and (max-width: 550px){
    			.h11{
    				display: none;
    			}

    			.tab2{
    				width: 80%;
	    		}

	    		.tab1{
	    			width: 80%;
	    		}
	    	}
    	</style>

	</head>

	<body>

		<?php
			include "data.php";

			$sql = "select * from publisher where Event_ID=".$id.";";

			$row = mysqli_query($con , $sql);

			if(mysqli_num_rows($row)>0)
			{
				$r = mysqli_fetch_assoc($row);

				if($r['Price']==0)
				{
					$sql1 = "select * from eventcharges;";

					$row1 = mysqli_query($con , $sql1);

					$r1 = mysqli_fetch_assoc($row1);

					$payment = $r1['Free'];
				}
				else
				{
					$sql1 = "select * from eventcharges;";

					$row1 = mysqli_query($con , $sql1);

					$r1 = mysqli_fetch_assoc($row1);

					$payment = $r1['Paid'];
				}
			}
			else
			{

			}
		?>
		</br> <br> <br> <br>
		<div align="center">
			<form method="POST">
			<table class="tab1" style="box-shadow: 5px 5px aqua;" id="tab1">
				<tr>
					<td align="center" colspan="2"> <img src="eventstimelogo2.png" width="150px" height="30px"> </td>
				</tr>

				<tr>
					<td align="center" colspan="2"> India's largest Event Showing Site </td>
				</tr>

				<tr>
					<td> <br> </td>
				</tr>

				<tr>
					<td colspan="2" align="center"> <p id="price" style="color: red;"> Your payment for the Event to publish is <?php echo $payment ?> </p> </td>
				</tr>

				<tr>
					<td> <br> </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;" colspan="2"> Card Number </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;" colspan="2"> <input type="text" name="card" style="width: 250px; height: 20px;"> </td>
				</tr>

				<tr>
					<td> <br> </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;"> Expiry Date </td>

					<td> CVV </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;"> <input type="text" name="mm" placeholder="MM" style="width: 50px; height: 20px;"> &nbsp; &nbsp; <input type="text" name="yy" placeholder="YYYY" style="width: 100px; height: 20px;"> </td>

					<td> <input type="text" name="cvv" style="width: 100px; height: 20px;"> </td>
				</tr>

				<tr>
					<td> <br> <br> </td>
				</tr>

				<tr>
					<td colspan="2"> <p id='id'> Enter All the Details </p> </td>
				</tr>

				<tr>
					<td align="right" style="padding-right: 20px" colspan="2"> <input type="submit" name="pay" value="Pay" class="btn"> </td> 
				</tr>

				<tr>
					<td colspan="2"> <br> <br> </td>
				</tr>
			</table>
			</form>


			<!--OTP -->
			<form method="POST">
			<table class="tab2" style="box-shadow: 5px 5px aqua; display: none;" id="tab2">
				<tr>
					<td align="center" > <img src="eventstimelogo2.png" width="150px" height="30px"> </td>
				</tr>

				<tr>
					<td align="center"> India's largest Event Showing Site </td>
				</tr>

				<tr>
					<td> <br> </td>
				</tr>

				<tr>
					<td > <p id="price" style="color: red;"> </p> </td>
				</tr>

				<tr>
					<td> <br> <br> </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;"> OTP </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;"> <input type="text" name="otp" style="width: 100px;" height="20px;"> </td>
				</tr>

				<tr>
					<td> <br> <br> </td>
				</tr>

				<tr>
					<td> <p id='id1'> Enter OTP </p> </td>
				</tr>

				<tr>
					<td align="right" style="padding-right: 20px"> <input type="submit" name="submit" value="Submit" class="btn"> </td> 
				</tr>

				<tr>
					<td colspan="2"> <br> <br> </td>
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
		
	</body>
</html>

<?php

		if(isset($_POST['pay']))
		{
			include "data.php";

			$card = mysqli_escape_string($con , $_POST['card']);
			$mm = mysqli_escape_string($con , $_POST['mm']);
			$yy = mysqli_escape_string($con , $_POST['yy']);
			$cvv = mysqli_escape_string($con , $_POST['cvv']);

			if(strlen($card)>0 && strlen($mm)>0 && strlen($yy)>0 && strlen($cvv)>0)
			{
				if(is_numeric($card) && strlen($card)==16)
				{
					if(is_numeric($mm) && $mm>0 && $mm<13)
					{
						if(is_numeric($yy) && $yy>date("Y"))
						{
							if(is_numeric($cvv) && strlen($cvv)==3)
							{
								$_SESSION['card'] = openssl_encrypt($card, "AES-256-CBC", $enc , 0 , "mukesh9167627606");
								$_SESSION['mm'] = $mm;
								$_SESSION['yy'] = $yy;
								$_SESSION['cvv'] = $cvv;
								$_SESSION['otp'] = rand(10000 , 99999);

								if(mail($_SESSION['email'],"OTP", $_SESSION['otp']))
								{
									echo "<script> document.getElementById('tab2').style.display='block'; </script>";

									echo "<script> document.getElementById('tab1').style.display='none'; </script>";
								}
								else
								{
									echo " <script> alert('Some error Occured'); </script>";
								}
							}
							else
							{
								echo "<script> document.getElementById('id').innerHTML='Enter Valid cvv number'; </script>";

								echo "<script> alert('Enter valid CVV number'); </script>";
							}
						}
						else
						{
							echo "<script> document.getElementById('id').innerHTML='Enter Valid Year'; </script>";

							echo "<script> alert('Enter valid year'); </script>";
						}
					}
					else
					{
						echo "<script> document.getElementById('id').innerHTML='Enter valid Month'; </script>";

						echo "<script> alert('Enter Valid month'); </script>";
					}
				}
				else
				{
					echo "<script> document.getElementById('id').innerHTML='Enter valid card Number'; </script>";

					echo "<script> alert('Enter valid card number'); </script>";
				}
			}
			else
			{
				echo "<script> document.getElementById('id').innerHTML='Please Enter all the Details'; </script>";

				echo "<script> alert('Please Enter all the details'); </script>";
			}
		}

		if(isset($_POST['submit']))
		{
			
			include "data.php";

			$otp = mysqli_escape_string($con, $_POST['otp']);

			if($otp == $_SESSION['otp'])
			{
				$sql = "select * from publisher where Event_ID=".$id.";";

				$row = mysqli_query($con , $sql);

				if(mysqli_num_rows($row)>0)
				{
					$r = mysqli_fetch_assoc($row);

					$sql1 = "insert into payment1 (Email_ID , Event_ID , Price , Card_NO , Date) values (?,?,?,?,?)";

					if($stmt = mysqli_prepare($con , $sql1))
					{
						$date = date("y-m-d");

						mysqli_stmt_bind_param($stmt , "siiss" , $_SESSION['email'] , $r['Event_ID'] , $payment , $_SESSION['card'] , $date);

						mysqli_stmt_execute($stmt);

						$sql2 = "update publisher set payment='yes' where Event_ID=".$id.";";

						if(mysqli_query($con , $sql2))
						{
							echo "<script> location.href='createdevents.php' </script>";
						}
						else
						{
							echo "<script> alert('some error occured'); </script>";

							echo "<script> alert('Some error occured'); </script>";
						}
					}
					else
					{
						echo "<script> alert('some error occured'); </script>";

						echo "<script> alert('Some error occured'); </script>";
					}

				}
				else
				{
					echo "<script> alert('some error occured'); </script>";

					echo "<script> alert('Some error occured'); </script>";
				}
			}
			else
			{
				echo "<script> document.getElementById('id1').innerHTML='OTP does not match'; </script>";

				echo "<script> alert('OTP does not match'); </script>";
			}
		}