<?php
	include 'data.php';

	if(isset($_GET['search']))
	{
		$search = mysqli_escape_string($con , $_GET['search']);

		echo "<script> location.href='adminallevent.php?name=".$search."' </script>";
	}

	elseif(isset($_GET['search1']))
	{
		$search = mysqli_escape_string($con , $_GET['search1']);

		echo "<script> location.href='admindeletedevent.php?name=".$search."' </script>";
	}

	elseif(isset($_GET['search2']))
	{
		$search = mysqli_escape_string($con , $_GET['search2']);

		echo "<script> location.href='adminexpiredevent.php?name=".$search."' </script>";
	}

	elseif(isset($_GET['search3']))
	{
		$search = mysqli_escape_string($con , $_GET['search3']);

		echo "<script> location.href='adminalluser.php?name=".$search."' </script>";
	}

	elseif(isset($_GET['search4']))
	{
		$search = mysqli_escape_string($con , $_GET['search4']);

		echo "<script> location.href='adminbookedtickets.php?name=".$search."' </script>";
	}

	elseif(isset($_GET['search5']))
	{
		$search = mysqli_escape_string($con , $_GET['search5']);

		echo "<script> location.href='createdallevents.php?name=".$search."' </script>";
	}

	else
	{

	}
?>