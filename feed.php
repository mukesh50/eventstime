<html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php
    	session_start();

    	global $id;

    	$id = base64_decode($_GET['id']);
    ?>

	<title>
		FeedBack Page
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

			.btn{
				text-decoration: none;
				padding: 7px 25px;
				background-color: green;
				color: white;
				border-radius: 15px;
				border: none;
				cursor: pointer;
			}

			@media only screen and (max-width: 550px)
		    {
		    	.a4{
		    		font-size: 10px;
		    	}
		    }
		</style>

	</head>

	<body>

		<?php
		for($i=0;$i<=10;$i++)
		{
			include "data.php";

			$sql = "select * from feed , user Where Event_ID=".$id." and feed.Email_ID = user.Email_ID and not F_Delete='yes'";

			$row = mysqli_query($con , $sql);
			
			if(mysqli_num_rows($row)>0)
			{
				while ($r = mysqli_fetch_assoc($row))
				{
			?>
				<div style="padding: 20px;">
					<table style="background-color: lightgray; padding: 20px; border-radius: 15px;" width="80%">
						<tr>
							<td> <strong class="a4"> <?php echo $r['First_Name']." ".$r['Last_Name']; ?></strong> </td>
						</tr>
						<tr>
							<td class="a4"> <?php echo nl2br($r['Data']); ?> </td>
						</tr>
					</table>
				</div>

			<?php
				}
			}
			else
			{
				echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any Feed </h1> </div>";
				break;
			}
			mysqli_close($con);
		}




		if(isset($_SESSION['email']))
			{
		?>
				<form method="post">
					<table style="position: fixed; bottom: 0px;">
						<tr>
							<td width="100%" style="padding-left: 20px;"> <input type="text" name="data" style="width: 100%" height="20px;" > </td>

							<td> &nbsp; &nbsp; </td>

							<td style="padding-right: 20px;"> <input type="submit" name="Enter" value="Enter" class="btn"> </td>
						</tr>
					</table>
				</form>

		<?php
			}
			else
			{

			}



			#Enter Feed
			if(isset($_POST['Enter']))
			{
				include "data.php";

				$data = mysqli_escape_string($con , $_POST['data']);

				if(strlen($data)>0)
				{

					$sql = "insert into feed (Event_ID , Email_ID , Data) values(?,?,?);";

					if($stmt = mysqli_prepare($con , $sql))
					{
						mysqli_stmt_bind_param($stmt , "iss" , $id , $_SESSION['email'] , $data);

						mysqli_stmt_execute($stmt);

						echo "<script> location.href='feed.php?id=".$_GET['id']."' </script>";
					}
					else
					{
						echo "<script> alert('Some error Occured'); <script>";
					}
				}
				else
				{

				}
				mysqli_close($con);
			}

			
		?>

	</body>
</html>