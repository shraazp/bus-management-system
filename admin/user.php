<!DOCTYPE html>
<html>
<head>
	<title>user details</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="wrapper">
<h1 class="text-center text-info">user details</h1>
</div>
<nav class="navbar navbar-expand-md bg-dark navbar-dark ">
<a class="navbar-brand" href="dashboard.php">Dashboard</a>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="employee.php">employee</a></li>
<li class="nav-item">
<a class="nav-link" href="route.php">route</a></li>
<li class="nav-item">
<a class="nav-link" href="bus.php">bus</a></li>
<li class="nav-item">
<a class="nav-link" href="booking.php">booking details</a></li>
<li class="nav-item">
<a class="nav-link" href="addemployee.php">add employee</a></li>
<li class="nav-item">
<a class="nav-link" href="addbus.php">add bus</a></li>
<li class="nav-item">
<a class="nav-link" href="addroute.php">add route</a></li>

</ul>
</div>
</nav>
<hr>
	<table border="1" class="table table-striped table-bordered">
	<thead>
	<tr>
	<th>uid</th>
	<th>first name</th>
	<th>last name</th>
	<th>email</th>
	<th>user name</th>
	<th>password</th>
	<th>security</th>
	
	</tr>
	</thead>
	<tbody>
	<?php
		  include('adb.php');
		  $qq = mysqli_query($con,"SELECT * FROM user");
		  while($res=mysqli_fetch_array($qq))
		  {
			echo' 
			<tr>
		
			<td>' .$res['uid']. '</td>
			<td>' .$res['Fname']. '</td>
			<td>' .$res['Lname']. '</td>
			<td>' .$res['Email']. '</td>
			<td>' .$res['Username']. '</td>
			<td>' .$res['Password']. '</td>
			<td>' .$res['security']. '</td>
			</tr>
			';
		  }
		  ?>
		  </tbody>
		  </table>
		  </body>
		  </html>
		  