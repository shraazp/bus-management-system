<?php
$id=$_GET['rid'];
include('adb.php');
$qq=mysqli_query($con,"DELETE FROM `route` WHERE rid='$id'");
if($qq==true)
		{
			echo "
			<script>
			alert('deleted');
			window.location='route.php';
			</script>
			";

		} 
		else
			{
				echo "
			<script>
			alert('error');
			window.location='route.php';
			</script>
			";

			 }
	
	?>

