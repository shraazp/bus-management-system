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
				background: #7f9b4e url(images1/login.jpg) no-repeat center top;
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
				<h1><a href="index.php">shrvya travellers</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="index.php">Users</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</nav>
			</header>
        <div class="container">




	<table >
	<!--	<tr> <td> <h3>  <I> <font color="red"> Hello <?php// echo '$_GET['User']'; ?> </font></I> </h3> </td>  </tr>
		-->
		<?php
		session_start();
		if(isset($_SESSION['error']))
		{
			echo '<p class="message"> <font size="5" color="MediumMagenta"> <center><i>';
			echo $_SESSION['error'];
			echo "</i></center></font></p>";
			unset($_SESSION['error']);
		}
		?>

	</table>


			<section class="main">
				<form action="register.php" method ="POST" class="form-4" >
				 <h1>Register</h1>
	First name
<input class="form-control" name="Fname" placeholder="eg:Johann" type="text">
	Last name
<input class="form-control" name="Lname" placeholder="eg:Bach" type="text">
 Email
<input class="form-control" name="Email" placeholder="eg:johannes@yaho.com" type="email">

	Username
<input class="form-control" name="Username" placeholder="choose a username" type="text">

    Password
<input class="form-control" name="Password" placeholder="choose a password" type ="password">
  Name of your primary school?
<input class="form-control" name="Security" placeholder="please answer the security question" type ="text">

 <input type="submit" class="btn btn-primary" name="sub" value="Register">
</form>
<?php
include('db.php');
if(isset($_POST['sub']))
{
	
	$Fname=$_POST['Fname'];
	$Lname=$_POST['Lname'];
	$Email=$_POST['Email'];
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
    $Security=$_POST['Security'];
	
	$qry=mysqli_query($con,"INSERT INTO `user`(  `Fname`, `Lname`, `Email`, `Username`, `Password`,`security`) VALUES('$Fname','$Lname','$Email','$Username','$Password','$Security')")or die(mysqli_error($con));
	if($qry==true)
		{
			echo "
			<script>
			alert('registered');
			window.location='home1.php';
			</script>
			";

		} 
		else
			{
				echo "
			<script>
			alert('error');
			window.location='register.php';
			</script>
			";

			 }
}
?>
			</section>

        </div>

<a name="contact"></a>
			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3>shrvyatravellers</h3>
							<ul class="alt">
								<li>Quick Search</li>
								<li>Online Booking</li>
		
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
									<a href="#">shrvyatravellers@gmail.com</a>
								</li>
								<li>
									<h3>Phone</h3>
									(+91)7338221810
								</li>
							</ul>
						</section>
					</center>
					</div>
					<ul class="copyright">
						<li>&copy; 2017 shrvyatravellers. All rights reserved. </li>
			</ul>
				</div>
			</footer>
    </body>
</html>

