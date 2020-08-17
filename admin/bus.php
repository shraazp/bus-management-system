<!DOCTYPE html>
<html>
<head>
	<title>bus details</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="wrapper">
<h1 class="text-center text-info">bus details</h1>
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
<a class="nav-link" href="user.php">users</a></li>
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
	<th>Bus model</th>
	<th>Bus name</th>
	<th>Bus type</th>
	<th>route id</th>
	<th>no of seats</th>
	<th>total no of seats</th>
	<th>date</th>
	<th>edit</th>
	<th>delete</th>
	</tr>
	</thead>
	<tbody>
	<?php
		  include('adb.php');
		  $qq = mysqli_query($con,"SELECT * FROM bustable");
		  while($res=mysqli_fetch_array($qq))
		  {
			echo' 
			<tr>
		
			<td>' .$res['model']. '</td>
			<td>' .$res['name']. '</td>
			<td>' .$res['type']. '</td>
			<td>' .$res['rid']. '</td>
			<td>' .$res['seats']. '</td>
            <td>' .$res['total_seats']. '</td>
			<td>' .$res['date']. '</td>
			<td><a href="editbus.php?bid='.$res['bid'].' ">Edit</a></td>
		    <td><a href="deletebus.php?bid='.$res['bid'].' ">delete</a></td>
			</tr>
			';
		  }
		  ?>
		  </tbody>
		  </table>
		  </body>
		  </html>
		  