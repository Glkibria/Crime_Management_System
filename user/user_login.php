<div class="box" ><!-- box Starts -->

<div class="box-header" ><!-- box-header Starts -->

<center>

<h1>Login</h1>

<p class="lead" >Already our user</p>


</center>

<p class="text-muted" >

</p>




</div><!-- box-header Ends -->

<form action="checkout.php" method="post" ><!--form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label>Email</label>

<input type="text" class="form-control" name="c_email" required >

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label>Password</label>

<input type="password" class="form-control" name="c_pass" required >

<h4 align="center">

<a href="forgot_pass.php"> Forgot Password </a>

</h4>

</div><!-- form-group Ends -->

<div class="text-center" ><!-- text-center Starts -->

<button name="login" value="Login" class="btn btn-primary" >

<i class="fa fa-sign-in" ></i> Log in


</button>

</div><!-- text-center Ends -->


</form><!--form Ends -->

<center><!-- center Starts -->

<a href="user_register.php" >

<h3>New ? Register Here</h3>

</a>


</center><!-- center Ends -->


</div><!-- box Ends -->

<?php

if(isset($_POST['login'])){

$user_email = $_POST['c_email'];

$user_pass = $_POST['c_pass'];

$select_user = "select * from user where user_email='$user_email' AND user_pass='$user_pass'";

$run_user = mysqli_query($con,$select_user);

$get_ip = getRealUserIp();

$check_user = mysqli_num_rows($run_user);



if($check_user==0){

echo "<script>alert('password or email is wrong')</script>";

exit();

}

if($check_user==1 AND $check_cart==0){

$_SESSION['user_email']=$user_email;

echo "<script>alert('You are Logged In')</script>";

echo "<script>window.open('user/my_account.php?my_complain','_self')</script>";

}
else {

$_SESSION['user_email']=$user_email;

echo "<script>alert('You are Logged In')</script>";

echo "<script>window.open('checkout.php','_self')</script>";

} 


}

?>