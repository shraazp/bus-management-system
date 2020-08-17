<?php
$id=$_GET['eid'];
include('adb.php');
$qq=mysqli_query($con,"DELETE FROM `employee` WHERE eid='$id'");
if($qq==true)
		{
			echo "
			<script>
			alert('deleted');
			window.location='employee.php';
			</script>
			";

		} 
		else
			{
				echo "
			<script>
			alert('error');
			window.location='employee.php';
			</script>
			";

			 }
	
	?>

