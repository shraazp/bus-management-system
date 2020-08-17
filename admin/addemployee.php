<!DOCTYPE html>
<html lang="en">
<head>
	<title>add employee</title>
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
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/s.png);">
					<span class="login100-form-title-1">
						add employee details
					</span>
				</div>

				<form class="login100-form validate-form" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="employee id is required">
						<span class="label-input100">employee id</span>
						<input class="input100" type="text" name="eid" placeholder="Enter employee number">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="name is required">
						<span class="label-input100">name</span>
						<input class="input100" type="text" name="name" placeholder="Enter name">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="address is required">
						<span class="label-input100">address</span>
						<input class="input100" type="text" name="address" placeholder="Enter address">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="age is required">
						<span class="label-input100">age</span>
						<input class="input100" type="text" name="age" placeholder="Enter age">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="gender is required">
						<span class="label-input100">gender</span>
						<input class="input100" type="text" name="gender" placeholder="Enter gender">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="designation is required">
						<span class="label-input100">designation</span>
						<input class="input100" type="text" name="designation" placeholder="Enter designation">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="cno is required">
						<span class="label-input100">contact number</span>
						<input class="input100" type="text" name="cno" placeholder="Enter contact number">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="bid is required">
						<span class="label-input100">bus number</span>
						<input class="input100" type="text" name="bid" placeholder="Enter bus number">
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
if(isset($_POST['add']))
{
	$eid=$_POST['eid'];
	$address=$_POST['address'];
	$name=$_POST['name'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$cno=$_POST['cno'];
	$designation=$_POST['designation'];
	$bid=$_POST['bid'];

	
	$qry=mysqli_query($con,"INSERT INTO `employee`(`eid`, `name`, `address`, `age`, `gender`, `cno`, `designation`, `bid`) VALUES ('$eid','$name','$address','$age','$gender','$cno','$designation','$bid')")or die(mysqli_error($con));
	if($qry==true)
		{
			echo "
			<script>
			alert('added');
			window.location='addemployee.php';
			</script>
			";

		} 
		else
			{
				echo "
			<script>
			alert('error');
			window.location='addemployee.php';
			</script>
			";

			 }
}
?>
</body>
</html>