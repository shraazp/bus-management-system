<!DOCTYPE html>
<html>
<head>
	<title>adding seats</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<table border="1" class="table table-striped table-bordered">
	<thead>
	<tr>
	<th>Book id</th>
	<th>seat number</th>
	</tr>
	</thead>
	<tbody>
	<?php
		  include('adb.php');
		  $qq = mysqli_query($con,"SELECT * FROM ticket");
		  while($res=mysqli_fetch_array($qq))
		  {
			echo' 
			<tr>
		
			<td>' .$res['Book_id']. '</td>
			<td>' .$res['seat_no']. '</td>
			
			</tr>
			';
		  }
		  ?>
		  </tbody>
		  </table>
<?php
$ts=$_GET['ts'];
?>	
<h1>total no of seats <?php echo $ts?></h1>
<form  method ="POST" class="form-4" >
<input class="form-control" name="seat_no" placeholder="eg:012" type="text">
<input type="submit" class="btn btn-primary" name="sub" value="Register">
</form>	
<?php
include('adb.php');
	$id=$_GET['bid'];
	$ts=$_GET['ts'];
	if(isset($_POST['sub']))
	{
		$seat_no=$_POST['seat_no'];
	
$qry=mysqli_query($con,"INSERT INTO `ticket`( `Book_id`, `seat_no`) VALUES ('$id','$seat_no')")or die(mysqli_error($con));
		}
		?>
