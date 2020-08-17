<?php
$id=$_GET['bid'];
include('adb.php');
$qq=mysqli_query($con,"DELETE FROM `bustable` WHERE bid='$id'");
if($qq==true)
		{
			echo "
			<script>
			alert('deleted');
			window.location='bus.php';
			</script>
			";

		} 
		else
			{
				echo "
			<script>
			alert('error');
			window.location='bus.php';
			</script>
			";

			 }
	
	?>

