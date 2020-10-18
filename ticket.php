
<html>
	<head>
		<?php
			session_start();
		?>

		if(isset($_SESSION['email']))
      {

      }
      else
      {
      	echo "<script> location.href='signin.php'; </script>";
      }
		<title> </title>
	</head>

	<body>

			<?php

	        	$sql = "SELECT * FROM tickets , events where tickets.Event_ID = events.Event_ID and BEmail_ID='".$_SESSION['email']."' and not T_Delete='yes' Order by Ticket_ID desc;";

				include "data.php";
				$row = mysqli_query($con,$sql);

				if (mysqli_num_rows($row)>0)
				{
					$r = mysqli_fetch_assoc($row);

					$ticket  = openssl_encrypt($r['Ticket_ID'], "AES-128-CBC", $enc , 0 , "mukesh9167627606");

	require_once('tcpdf/tcpdf.php'); 
	 ob_start();
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();  
      $content = '';  

					$content = '
			<div align="center">
				<table>
					<tr>
						<td rowspan="5" width="20%"> <img src="'.$r['Image'].'" width="600px" height="600px"> </td>

						<td width="55%" align="center"> <strong> '.$r["Event_Name"].' </strong> </td>

						<td width="25%" align="center" style="background-color: aqua;"> '.$ticket.' </td>
					</tr>

					<tr>
						<td colspan="2"> <br> </td>
					</tr>

					<tr>
						<td style="padding: 10px;"> Name : '.$r["First_Name"].' '.$r["Last_Name"].' <br> <br> No. of Seats '.$r["Seats"].' </td>

						<td style="padding: 10px;">Date : '.$r["Start_Date"].' <br> <br> Timming : '.$r["Start_Time"].' </td>
					</tr>

					<tr>
						<td> <br> </td>
					</tr>

					<tr>
						<td style="padding: 10px;"> Email ID : '.$r["Email_ID"].' </td>

						<td style="padding: 10px;">Phone NO : '.$r["Phone_No"].' </td>
					</tr>
				</table>
			</div>
			';

			$content1 = '
			<div align="center">
				<table>
					<tr>
						<td rowspan="5" width="20%"> <img src="http://www.eventstime.in/project/'.$r['Image'].'" width="200px" height="200px"> </td>

						<td width="55%" align="center"> <strong> '.$r["Event_Name"].' </strong> </td>

						<td width="25%" align="center" style="background-color: aqua;"> '.$ticket.' </td>
					</tr>

					<tr>
						<td colspan="2"> <br> </td>
					</tr>

					<tr>
						<td style="padding: 10px;"> Name : '.$r["First_Name"].' '.$r["Last_Name"].' <br> <br> No. of Seats '.$r["Seats"].' </td>

						<td style="padding: 10px;">Date : '.$r["Start_Date"].' <br> <br> Timming : '.$r["Start_Time"].' </td>
					</tr>

					<tr>
						<td> <br> </td>
					</tr>

					<tr>
						<td style="padding: 10px;"> Email ID : '.$r["Email_ID"].' </td>

						<td style="padding: 10px;">Phone NO : '.$r["Phone_No"].' </td>
					</tr>
				</table>
			</div>
			';

				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

				if(mail($_SESSION['email'], "Ticket Booking successfull", $content1 , $headers))
				{
					$obj_pdf->writeHTML($content);  
	      			$obj_pdf->Output('file.pdf', 'I');
				}
				else
				{
					echo "<script> alert('Some error has occured'); </script>";
				}

			}
	    	else
	    	{
	      		echo "<div align='center'> <img src='sorry.png' width='100px' height='100px'> <h1> sorry, did not find any Data </h1> </div>";
	    	}
  		mysqli_close($con);
		?>

	</body>
</html>