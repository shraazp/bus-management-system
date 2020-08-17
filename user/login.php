<?php
			     include('db.php');
			     session_start();
			     if($_SERVER["REQUEST_METHOD"] == "POST") {
                    $myusername = mysqli_real_escape_string($con,$_POST['Username']);
                    $mypassword = mysqli_real_escape_string($con,$_POST['Password']);
                    $sql = "SELECT uid FROM user WHERE Username = '$myusername' and Password = '$mypassword'";
                    $result = mysqli_query($con,$sql);
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    $count = mysqli_num_rows($result);
                    if($count == 1) {
                     
                        $_SESSION['login_user'] = $myusername;
                        header("location: generic.php");
                     }else 
                     {
                            echo "
            <script>
            alert('error');
            window.location='index.php';
            </script>
            ";
                     }
   }
?>