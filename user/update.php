<?php
include "db.php";
$sel="SELECT * FROM `user` where Username='".$_SESSION['login_user']."'" ;
$str= mysqli_query($con,$sel);
$rows= mysqli_num_rows($str);
?>
<form  method ="POST" class="form-4" >
				 <h1>update profile</h1>
	First name
<input class="form-control" name="Fname" value="<?php echo $rows['Fname']?>" type="text">
	Last name
<input class="form-control" name="Lname" value="<?php echo $rows['Lname']?>" type="text">
 Email
<input class="form-control" name="Email" value="<?php echo $rows['Email']?>" type="email">

	Username
<input class="form-control" name="Username" value="<?php echo $rows['Username']?>" type="text">

    Password
<input class="form-control" name="Password"value="<?php echo $rows['Password']?>" type ="password">
  Name of your primary school?
<input class="form-control" name="Security" value="<?php echo $rows['Security']?>"type ="text">

 <input type="submit" class="btn btn-primary" name="sub" value="update">
</form>