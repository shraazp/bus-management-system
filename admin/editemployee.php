<!DOCTYPE html>
<html lang="en">
<head>
	<title> Edit employee</title>
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
$id=$_GET['eid'];
include('adb.php');
$qq = mysqli_query($con,"SELECT * FROM `employee` WHERE eid='$id' ");
$res =mysqli_fetch_array($qq);
?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/s.png);">
					<span class="login100-form-title-1">
						Edit Employee details
					</span>
				</div>

				<form class="login100-form validate-form" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="bus id is required">
						<span class="label-input100"> eid</span>
						<input class="input100" type="text" name="eid" value="<?php echo $res['eid']?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="bus model is required">
						<span class="label-input100">name</span>
						<input class="input100" type="text" name="name" value="<?php echo $res['name']?>" >
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="bus name is required">
						<span class="label-input100">address</span>
						<input class="input100" type="text" name="address" value="<?php echo $res['address']?>">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="bus type is required">
						<span class="label-input100">age</span>
						<input class="input100" type="text" name="age" value="<?php echo $res['age']?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="route number is required">
						<span class="label-input100">gender</span>
						<input class="input100" type="text" name="gender" value="<?php echo $res['gender']?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="seats is required">
						<span class="label-input100">contact no </span>
						<input class="input100" type="text" name="cno" value="<?php echo $res['cno']?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="seats is required">
						<span class="label-input100">designation </span>
						<input class="input100" type="text" name="designation" value="<?php echo $res['designation']?>">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-26" data-validate="seats is required">
						<span class="label-input100">bid </span>
						<input class="input100" type="text" name="bid" value="<?php echo $res['bid']?>">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="container-login100-form-btn">
						
						<button class="login100-form-btn" type="submit" name="add"  >
							update
						</button>
					</div>
				</form>
				</div>
				</div>
				</div>

<?php  
	
	include('adb.php');
	$id=$_GET['eid'];
	if(isset($_POST['add']))
	{
		$eid=$_POST['eid'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$gender=$_POST['gender'];
		$cno=$_POST['cno'];
		$designation=$_POST['designation'];
        $bid=$_POST['bid'];


		$qry=mysqli_query($con,"UPDATE `employee` SET `eid`='$eid',`name`='$name',`address`='$address',`gender`='$gender',`cno`='$cno',`designation`='$designation',`bid`='$bid' WHERE eid='$id'")or die(mysqli_error($con));
		if($qry==true)
		{
			echo "
			<script>
			alert('updated');
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
	}
	?>
	