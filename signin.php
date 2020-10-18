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
		Login Page
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
	  			width: 30%;
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
				width: 250px;
				height: 50px;
				padding-bottom: 30px;
			}

			.a2{
				padding-top: 40px;
			}

			.a3{
				width: 350px;
				height: 25px;
			}

			@media only screen and (max-width: 850px){
				.tab{
					width: 40%;
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

		    	.a2{
		    		padding-top: 0px;
		    	}

		    	.a1{
		    		display: none;
		    	}

		    	.a3{
		    		width: 300px;
		    		height: 25px;
		    	}

		    	.tab{
		    		width: 100%;
		    	}
		    }
		</style>

	</head>

	<body style="background-image:url('signin.jpg'); background-size:100% 100%;background-repeat: no-repeat;">
		</br> </br> </br> </br>
		<div align="center" class="a2">

			<!-- Logo -->
			<img src="eventstimelogo.png" class="a1">


			<!-- SIgn in form -->
			<form method="post">
			<table class="tab">
				<tr>
					<td style="padding-left: 20px; padding-top: 20px;"> Email ID </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;" > <input type="text" name="email" class="a3"> </td>
				</tr>

				<tr>
					<td> </br> </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;"> Password </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;"> 
						<input type="Password" name="pass" style="width: 250px; height: 25px;" id='pass'> &nbsp; &nbsp; &nbsp; 
						<p onclick="show()" id='eye1' class="eye"> <img src="eye1.png" width="30px" height="15px"> </p> 
						<p onclick="show()" id='eye2' class="eye" style="display: none;"> <img src="eye2.png" width="30px" height="15px"> </p> 
					</td>
				</tr>

				<tr>
					<td style="padding-left: 20px;"> </br> </br> </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;"> <p id='error'> Enter Email ID and Passowrd </p> </td>
				</tr>

				<tr>
					<td style="padding-right: 20px;" align="right"> <input type="submit" name="signin" value="login" class="btn">  </td>
				</tr>

				<tr>
					<td> </br> </br> </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;"> <a href="lostpassword.php" class="link1"> Lost Your Password? </a> </td>
				</tr>

				<tr>
					<td style="padding-left: 20px;"> </br> <a href="register.php" class="link1"> Create Account </a> </td>
				</tr>

				<tr>
					<td> </br> </br> </td>
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

					<td>	<a class="link11" href="home1.php"> Home Page </a> </td>

					<td> &nbsp; &nbsp; &nbsp; </td>

					<td>	<a class="link11" href="about.php"> About Us </a> &nbsp &nbsp &nbsp</td>

					<td> <a class="link11" href="register.php"> Register </td>

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

					<td id="l11"  align="right"> <p> <a class="link11" href="register.php"> Register </a> &nbsp </p> </td>
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
			x = document.getElementById('pass');

			if(x.type=='password')
			{
				document.getElementById('eye1').style.display='none';
				document.getElementById('eye2').style.display='inline-block';
				x.type='text';
			}
			else
			{
				document.getElementById('eye2').style.display='none';
				document.getElementById('eye1').style.display='inline-block';
				x.type='password';
			}
		}
	</script>

	<?php
		if(isset($_POST['signin']))
		{
			echo "<script> document.getElementById('error').style.fontWeight= 'bold' ; </script>";

			include "data.php";

			$email = mysqli_escape_string($con , $_POST['email']);
			$pass = mysqli_escape_string($con , $_POST['pass']);

			if(filter_var($email, FILTER_VALIDATE_EMAIL)== true)
			{
				$sql = "select * from user where Email_ID='".$email."';";

				$row = mysqli_query($con , $sql);

				if(mysqli_num_rows($row)>0)
				{
					$r = mysqli_fetch_assoc($row);

					$pass1 = openssl_encrypt($pass , "AES-256-CBC", $enc , 0 , "mukesh9167627606");

					if($pass1 == $r['Password'])
					{
						$_SESSION['email'] = $email;
						echo "<script> location.href='home1.php'; </script>";
					}
					else
					{
						echo "<script> document.getElementById('error').innerHTML='Password Does Not Match'; </script>";
						echo "<script> alert('Password Does not match'); </script>";
					}
				}
				else
				{
					echo "<script> document.getElementById('error').innerHTML='This Email ID is not registered'; </script>";
					echo "<script> alert('This Email ID is not registered'); </script>";
				}
			}
			else
			{
				echo "<script> document.getElementById('error').innerHTML='Please Enter a valid Email ID'; </script>";
				echo "<script> alert('Please Enter a vaild email'); </script>";
			}

			mysqli_close($con);
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