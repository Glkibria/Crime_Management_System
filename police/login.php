<?php

session_start();

include("includes/db.php");

?>
<!DOCTYPE HTML>
<html>

<head>

<title>Police Login</title>

<link rel="stylesheet" href="css/bootstrap.min.css" >

<link rel="stylesheet" href="css/login.css" >

</head>

<body>

<div class="container" ><!-- container Starts -->

<form class="form-login" action="" method="post" ><!-- form-login Starts -->

<h2 class="form-login-heading" >police Login</h2>

<input type="text" class="form-control" name="police_email" placeholder="Email Address" required >

<input type="password" class="form-control" name="police_pass" placeholder="Password" required >

<button class="btn btn-lg btn-primary btn-block" type="submit" name="police_login" >

Log in

</button>


</form><!-- form-login Ends -->

</div><!-- container Ends -->



</body>

</html>

<?php

if(isset($_POST['police_login'])){

$police_email = mysqli_real_escape_string($con,$_POST['police_email']);

$police_pass = mysqli_real_escape_string($con,$_POST['police_pass']);

$get_police = "select * from police where police_email='$police_email' AND police_pass='$police_pass'";

$run_police = mysqli_query($con,$get_police);

$count = mysqli_num_rows($run_police);

if($count==1){

$_SESSION['police_email']=$police_email;

echo "<script>alert('You are Logged in into police panel')</script>";

echo "<script>window.open('index.php?dashboard','_self')</script>";

}
else {

echo "<script>alert('Email or Password is Wrong')</script>";

}

}

?>