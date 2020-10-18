<html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php
      session_start();

      if(isset($_SESSION['email']))
      {
      	echo "<script> location.href='home1.php'; </script>";
      }
      else{

      }
    ?>

	<title>
		Lost Password Page
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
				width: 100%;
				height: 100%;
			}

			.tab{
	  			background-color: rgba(0,0,0, 0.5);
	  			border: 1px solid black;
	  			width: 40%;
	  			color: white;
			}

			.btn{
				padding: 6px 25px;
				background-color: White;
				color: black;
				border-radius: 5px;
				cursor: pointer;
				font-weight: bold;
			}

			.bt{
				padding: 6px 15px;
				background-color: White;
				color: black;
				border-radius: 5px;
				cursor: pointer;
				font-weight: bold;
			}

			.tab1{
				display: none;
	  			background-color: rgba(0,0,0, 0.5);
	  			border: 1px solid black;
	  			width: 40%;
	  			color: white;
			}

			.eye{
	    		cursor: pointer;
	    		display: inline-block;
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

	    	.link1{
	    		text-decoration: none;
	    		color: white;
	    	}

	    	.link1:hover{
	    		font-size: 17px;
	    	}

	    	.eye{
	    		cursor: pointer;
	    		display: inline-block;
	    	}

		    .link11{
	        	text-decoration: none;
	        	color : black;
	      	}

	      	.link11:hover{
	      		color: hotpink;
	      		font-size: 17px;
	      	}

	      	.msec1{
				display: none;
				width:100%; height:50px;
	        	position: fixed;
	        	background-color: white;
	        	top: 0px;
	        	box-shadow: 0px 5px aqua;
			}

			.a1{
				width: 350px;
				height: 25px;
			}

			.a2{
				padding-top: 40px;
			}

			.a3{
				width: 250px;
				height: 25px;
			}

			@media only screen and (max-width: 850px){
				.tab{
					width: 50%;
				}

				.tab1{
					50%;
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

		    	.a1{
		    		width: 250px;
		    		height: 25px;
		    	}

		    	.tab{
		    		width: 80%;
		    	}

		    	.tab1{
		    		width: 80%;
		    	}

		    	.a2{
		    		padding-top: 0px;
		    	}

		    	.m1{
		    		display: none;
		    	}

		    	.a3{
		    		width: 200px;
		    		height: 25px;
		    	}
		    }
		</style>

	</head>

	<body style="background-image:url('password.jpg'); background-size:100% 100%;background-repeat: no-repeat;">
		</br> </br> </br> </br>


		<div align="center" class="a2">

			<!-- Logo -->
			<img src="eventstimelogo.png" width="250px" height="50px" style="padding-bottom: 30px;" class="m1">



			<!-- register form -->
			<form method="post">
			<table class="tab" id='s1'>

				<tr>
					<td colspan="2"> </br> </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;" colspan="2"> Email ID </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;" colspan="2"> <input type="text" name="email" class="a1" > </td>
				</tr>

				<tr>
					<td> </br> </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;" colspan="2"> <p id='error'> Enter Your Email Address To reset Your Password </p> </td>
				</tr>

				<tr>
					<td style="padding-right: 20px;" align="right" colspan="2"> <input type="submit" name="register" value="Submit" class="btn">  </td>
				</tr>

				<tr>
					<td> </br> </br> </td>
				</tr>
			</table>
			</form>


			
			<!-- OTP form -->
			<form method="post">
			<table class="tab1" id='s2'>
				<tr>
					<td align="center" colspan="2" style="padding-left: 20px; padding-top: 20px;" class="m1"> <strong style="font-size: 20px;"> Verification Code </strong> </td>
				</tr>

				<tr>
					<td> </br> </td>
				</tr>

				<tr>
					<td colspan="2" style="padding-left: 20px;" align="center"> A verification code is sent to the email </td>
				</tr>

				<tr>
					<td> </br> </td>
				</tr>

				<tr>
					<td colspan="2" style="padding-left: 20px;"> Enter OTP </td>
				</tr>

				<tr>
					<td colspan="2" style="padding-left: 20px;"> <input type="text" name="otp" style="width: 150px; height: 25px;"> </td>
				</tr>

				<tr>
					<td> </br> </br> </td>
				</tr>

				<tr>
					<td colspan="2" style="padding-left: 20px;"> Password </td>

				</tr>

				<tr>
					<td style="padding-left: 20px;"> <input type="password" name="pass1" id='pass1' class="a3"> </td>

					<td>
						<p onclick="show()" id='eye1' class="eye"> <img src="eye1.png" width="30px" height="15px"> </p> 
						<p onclick="show()" id='eye2' class="eye" style="display: none;"> <img src="eye2.png" width="30px" height="15px"> </p>  
					</td>

				</tr>

				<tr>
					<td class="m1"> <br> </td>
				</tr>

				<tr>
					<td colspan="2" style="padding-left: 20px;"> Confirm </td>
				</tr>

				<tr>

					<td colspan="2" style="padding-left: 20px;"> <input type="Password" name="pass2" class="a3" id='pass2' > </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;"> </br> </br> </td>
				</tr>

				<tr>
					<td colspan="2" style="padding-left: 20px;" colspan="2"> <p id='error'> Enter Your New Password  </p> </td>
				</tr>

				<tr>
					<td> <br> </td>
				</tr>

				<tr>
					<td colspan="2" style="padding-right: 20px;" align="right" colspan="2"> <input type='submit' class='btn' name='sub' value='Submit'>  </td>
				</tr>

				<tr>
					<td class="m1"> </br> </br> </td>
				</tr>
			</table>
			</form>
			</div>
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

					<td>	<a class="link11" href="home1.php"> Home Page </a> </td>

					<td> &nbsp; &nbsp; &nbsp; </td>

					<td>	<a class="link11" href="about.php"> About Us </a> &nbsp &nbsp &nbsp</td>

					<td> <a class="link11" href="signin.php"> Sign In </a> </td>

					<td>	 &nbsp &nbsp &nbsp &nbsp &nbsp </td>
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

    											<p> <input type="submit" name="about" value="About US" class="button2"> </p>

    											<p> <input type="submit" name="home" value="Home Page" class="button2"> </p>
    										</form>
  											</div>
										</div>
					</td>


					<td class="h212" align="right" width="10%"> &nbsp &nbsp &nbsp </td>

					<td id="l11"  align="right"> <p> <a class="link11" href="signin.php"> Sign IN </a> &nbsp </p> </td>
				</tr>

			</table>
		</section>

	</body>

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

	<script type="text/javascript">
		function show() {
			x = document.getElementById('pass1');
			y = document.getElementById('pass2');

			if(x.type=='password')
			{
				document.getElementById('eye1').style.display='none';
				document.getElementById('eye2').style.display='inline-block';
				x.type='text';
				y.type='text';
			}
			else
			{
				document.getElementById('eye2').style.display='none';
				document.getElementById('eye1').style.display='inline-block';
				x.type='password';
				y.type='password';
			}
		}
	</script>

	<?php
		if(isset($_POST['register']))
		{
			include "data.php";

			$email = mysqli_escape_string($con , $_POST['email']);
			

			if(strlen($email)>0)
			{
					if(filter_var($email , FILTER_VALIDATE_EMAIL)==true)
					{
						$sql = "select * from user where Email_ID='".$email."';";

						$row = mysqli_query($con , $sql);

						if(mysqli_num_rows($row)>0)
						{
							$code = rand(10000 , 99999);
							$_SESSION['code'] = $code;
							if(mail($email, 'Verification Email from Eventstime.in', $code))
							{

								echo "<script> document.getElementById('s1').style.display='none';</script>";
								echo "<script> document.getElementById('s2').style.display='block';</script>";

								$_SESSION['email1'] = $email;
							}
							else
							{
								echo "<script> document.getElementById('error').innerHTML='there is a server issue please try after some time'; </script>";
							}
						}
						else
						{
							echo "<script> document.getElementById('error').innerHTML='This email Id had Not been registered'; </script>";

							echo "<script> alert('This email Id had not been registered'); </script>";
						}
					}
					else
					{
						echo "<script> document.getElementById('error').innerHTML='Please Enter a valid Email ID'; </script>";

						echo "<script> alert('Please Enter a valid Email ID'); </script>";
					}
			}
			else
			{
				echo "<script> document.getElementById('error').innerHTML='Enter all the details'; </script>";

				echo "<script> alert('Enter all the details'); </script>";
			}

			mysqli_close($con);
		}



		
		if(isset($_POST['sub']))
		{
			include 'data.php';

			$otp = mysqli_escape_string($con , $_POST['otp']);
			$pass1 = mysqli_escape_string($con , $_POST['pass1']);
			$pass2 = mysqli_escape_string($con , $_POST['pass2']);

			if(strlen($pass1)>0 && strlen($pass2)>0)
			{
				if($otp == $_SESSION['code'])
				{
					if($pass1 == $pass2)
					{
						if(strlen($pass1)>7 && strlen($pass2)<17)
						{
							$pass = openssl_encrypt($pass1, 'AES-256-CBC', $enc , 0, 'mukesh9167627606');

							$sql = "update user set Password='".$pass."' where Email_ID='".$_SESSION['email1']."';";

							if(mysqli_query($con , $sql))
							{
								echo "<script> location.href='signin.php'; </script>";
							}
							else
							{
								echo "<script> alert('Some error Occured'); </script>";

								echo "<script> alert('Some error Occured'); </script>";
							}
						}
						else
						{
							echo "<script> document.getElementById('error').innerHTML='Passowrd should be in the range of 8 to 16'; </script>";

							echo "<script> alert('Password should be in the range of 8 to 16'); </script>";
						}
					}
					else
					{
						echo "<script> document.getElementById('error').innerHTML=' Passwords does not match '; </script>";

						echo "<script> alert('Passwords does not match'); </script>";
					}
				}
				else
				{
					echo "<script> document.getElementById('error').innerHTML=' OTP does not match '; </script>";

					echo "<script> alert('OTP does not match'); </script>";
				}
			}
			else
			{
				echo "<script> document.getElementById('error').innerHTML='Please Enter all the details'; </script>";

				echo "<script> alert('Please Enter all the details'); </script>";
			}
		}

	?>

</html>