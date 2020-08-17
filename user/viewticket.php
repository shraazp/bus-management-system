<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>booking history</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<style type="text/css">

input    {
width:375px;
display:block;
border: 1px solid #999;
height: 25px;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
input.button {
width:100px;
position:absolute;
right:20px;
bottom:20px;
background:#09C;
color:#fff;
font-family: Tahoma, Geneva, sans-serif;
height:30px;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
border: 1p solid #999;
}
input.button:hover {
background:#fff;
color:#09C;
}
form    {
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
margin:auto;
position:relative;
width:550px;
height:450px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: italic;
line-height: 24px;
font-weight: bold;
color: #000000;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}

input::-webkit-input-placeholder {
  color: 	#f00;
}
textarea#feedback {
width:375px;
height:150px;
}
textarea.message {
display:block;
}
h2
{
	color:red;
}
		</style>
	</head>
	<body style="background:-webkit-linear-gradient(left top,BurlyWood,Chocolate,Darkkhaki,BlanchedAlmond,BurlyWood); background: linear-gradient(to bottom right,BurlyWood,CadetBlue,Darkkhaki,BlanchedAlmond,BurlyWood);">

		<!-- Header -->
			<header id="header">
				<h1><a href="home.php">Shrvya travellers</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="home1.php">Home</a></li>
						<li><a href="viewticket.php">Booking History</a></li>
						<li><a href="profile.php">View Profile</a></li>

						<li><a href="generic.php">buses</a></li>
					    <li><a href="#contact">Contact</a></li>	
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			</header>
<hr>
	<table border="1" class="table table-striped table-bordered">
	<thead>
	<tr>
	<th>Book_id</th>
	<th>user name</th>
	<th>date</th>
	<th>bid</th>
	<th>name</th>
	<th>total no of seats</th>
	<th>total fare</th>
	
	</tr>
	</thead>
	<tbody>
	<?php

session_start();

	$sel="SELECT * FROM `booking` where user='".$_SESSION['login_user']."'" ;
		  include('db.php');
		  $qq = mysqli_query($con,$sel);
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
             <td>'.$res['Total_fare'].'</td>
			<td><a href="view_seat.php?bid='.$res['Book_id'].' ">seat assignment</a></td>
			

			</tr>
			';
		  }
		  ?>
		  </tbody>
		  </table>
		  
<a name="contact"></a>
		  <footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3>Shrvyatravellers</h3>
							<ul class="alt">
								<li>Quick Search</li>
								<li>Online Bookings</li>
								<li>Hassle Free Bus Booking</li>
							</ul>
						</section>
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Top Bus Routes</h3>
							<ul class="alt">
								<li>mangalore-kochi</li>
								<li>mangalore-bangalore</li>
								<li>mangalore-pune</li>
								<li>mangalore-goa</li>
							</ul>
						</section>
					<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact Us</h3>
					<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Address</h3>
									kankanady,mangalore<br>
									 521126
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">shrvya@gmail.com</a>
								</li>
								<li>
									<h3>Phone</h3>
									+(91)7338221810
								</li>
							</ul>
						</section>
					</center>
					</div>
					<ul class="copyright">
						<li>&copy; 2017 Shrvyatravellers. All rights reserved. Brought To You By <a href="home.php">Shrvya travellers</a></li>
				</ul>
				</div>
			</footer>

	</body>
</html>

		  