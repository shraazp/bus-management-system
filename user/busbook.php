<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />

        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css1/style.css" />
		<script src="js1/modernizr.custom.63321.js"></script>
       		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #7f9b4e url(images1/bg.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;

				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
			a {
    color: hotpink;
}
h1 {
    color:white;
}
		</style>
    </head>
    <body>
    		<header id="header">
				<h1><a href="home.php">Shrvya travellers</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="generic.php">Search</a></li>
					
						<li><a href="home1.php">home</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="profile.php">View Profile</a></li>
						<li><a href="logout.php">Logout</a></li>
					

					</ul>
				</nav>
			</header>
<hr>
<div class="container">
	<table border="1" class="table table-striped table-bordered">
	<thead>
	<tr>
	<th>Bus id</th>
	<th>Bus name</th>
	<th>seats</th>
	<th>origin</th>
	<th>destination</th>
	<th>arrival time</th>
	<th>departure time</th>
	<th>fare</th>
	<th>total fare</th>
	<th>date</th>
	<th>book</th>
	</tr>
	</thead>

	<tbody>
	<?php
		  include('db.php');
		  $req=$_POST["Seats"];
		  $qq = mysqli_query($con,"SELECT * FROM `busroutes` where origin='".$_POST["Origin"]."' and destination='".$_POST["Destination"]."' and date='".$_POST["Date"]."' and seats>= ".$_POST["Seats"]."  ");
		  while($res=mysqli_fetch_array($qq))
		  {
		  	$Total_fare= $res['fare'] * $req;
			echo' 
			<tr>
		
			<td>' .$res['bid']. '</td>
			<td>' .$res['name']. '</td>
			<td>' .$_POST['Seats']. '</td>
			<td>' .$res['origin']. '</td>
			<td>' .$res['destination']. '</td>
			<td>' .$res['arr_time']. '</td>
			<td>' .$res['depart_time']. '</td>
			<td>' .$res['fare']. '</td>
			<td>' .$Total_fare.'</td>
			<td>' .$res['date']. '</td>
			<td><a href="book.php?bid='.$res['bid'].'&Seats_no='.$req.'&Total_fare='.$Total_fare.' ">book now</a></td>
			</tr>
			';
		  }
		  ?>
		  </tbody>
		  </table>
		  </div>
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
