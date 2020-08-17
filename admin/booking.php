<!DOCTYPE html>
<html>
<head>
	<title>booking details</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="wrapper">
<h1 class="text-center text-info">booking details</h1>
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
<a class="nav-link" href="user.php">user details</a></li>
<li class="nav-item">
<a class="nav-link" href="addemployee.php">add employee</a></li>
<li class="nav-item">
<a class="nav-link" href="addbus.php">add bus</a></li>
<li class="nav-item">
<a class="nav-link" href="addroute.php">add route</a></li>
<li class="nav-item">
<a class="nav-link" href="seat.php">view seat</a></li>

</ul>
</div>
</nav>
<hr>
	<table border="1" class="table table-striped table-bordered">
	<thead>
	<tr>
	<th>Book id</th>
	<th>user</th>
	<th>date</th>
	<th>bid</th>
	<th>name</th>
	<th>total seats</th>
	
	</tr>
	</thead>
	<tbody>
	<?php
		  include('adb.php');
		  $qq = mysqli_query($con,"SELECT * FROM booking");
		  while($res=mysqli_fetch_array($qq))
		  {
			echo' 
			<tr>
		
			<td>' .$res['Book_id']. '</td>
			<td>' .$res['user']. '</td>
			<td>' .$res['date']. '</td>
			<td>' .$res['bid']. '</td>
			<td>' .$res['name']. '</td>
			<td>' .$res['seats_no']. '</td>
			<td><a href="editseat.php?bid='.$res['Book_id'].'& ts='.$res['seats_no'].' ">seat assign</a></td>
		    
			</tr>
			';
		  }
		  ?>
		  </tbody>
		  </table>
		  </body>
		  </html>
		  