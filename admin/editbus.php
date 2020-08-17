<!DOCTYPE html>
<html lang="en">
<head>
	<title>add bus</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php
$id=$_GET['bid'];
include('adb.php');
$qq = mysqli_query($con,"SELECT * FROM `bustable` WHERE bid='$id' ");
$res =mysqli_fetch_array($qq);
?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/s.png);">
					<span class="login100-form-title-1">
						add bus details
					</span>
				</div>

				<form class="login100-form validate-form" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="bus id is required">
						<span class="label-input100">Bus id</span>
						<input class="input100" type="text" name="bid" value="<?php echo $res['bid']?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="bus model is required">
						<span class="label-input100">model</span>
						<input class="input100" type="text" name="model" value="<?php echo $res['model']?>" >
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="bus name is required">
						<span class="label-input100">name</span>
						<input class="input100" type="text" name="name" value="<?php echo $res['name']?>">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="bus type is required">
						<span class="label-input100">type</span>
						<input class="input100" type="text" name="type" value="<?php echo $res['type']?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="route number is required">
						<span class="label-input100">route number</span>
						<input class="input100" type="text" name="rid" value="<?php echo $res['rid']?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="seats is required">
						<span class="label-input100">no of seats</span>
						<input class="input100" type="text" name="seats" value="<?php echo $res['seats']?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="seats is required">
						<span class="label-input100">total no of seats</span>
						<input class="input100" type="text" name="total_seats" value="<?php echo $res['total_seats']?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="seats is required">
						<span class="label-input100">date</span>
						<input class="input100" type="date" name="date" value="<?php echo $res['date']?>">
						<span class="focus-input100"></span>
					</div>
                    <div class="container-login100-form-btn">
						
						<button class="login100-form-btn" type="submit" name="add" >
							insert
						</button>
					</div>
				</form>
				</div>
				</div>
				</div>



<?php
	
	include('adb.php');
	$id=$_GET['bid'];
	if(isset($_POST['add']))
	{
		$bid=$_POST['bid'];
		$model=$_POST['model'];
		$name=$_POST['name'];
		$type=$_POST['type'];
		$rid=$_POST['rid'];
		$seats=$_POST['seats'];
		$total_seats=$_POST['total_seats'];
		$date=$_POST['date'];



		$qry=mysqli_query($con,"UPDATE `bustable` SET `bid`='$bid',`model`='$model',`name`='$name',`type`='$type',`rid`='$rid',`total_seats`='$total_seats',`date`='$date' WHERE bid='$id'")or die(mysqli_error($con));
		if($qry==true)
		{
			echo "
			<script>
			alert('updated');
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
	}
	?>
	