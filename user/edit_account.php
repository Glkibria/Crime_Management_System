<?php

$user_session = $_SESSION['user_email'];

$get_user = "select * from user where user_email='$user_session'";

$run_user = mysqli_query($con,$get_user);

$row_user = mysqli_fetch_array($run_user);

$user_id = $row_user['user_id'];

$user_name = $row_user['user_name'];

$user_email = $row_user['user_email'];

$user_country = $row_user['user_country'];

$user_city = $row_user['user_city'];

$user_contact = $row_user['user_contact'];

$user_address = $row_user['user_address'];

$user_image = $row_user['user_image'];

?>

<h1 align="center" > Edit Your Account </h1>

<form action="" method="post" enctype="multipart/form-data" ><!--- form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label> user Name: </label>

<input type="text" name="c_name" class="form-control" required value="<?php echo $user_name; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> user Email: </label>

<input type="text" name="c_email" class="form-control" required value="<?php echo $user_email; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> user Country: </label>

<input type="text" name="c_country" class="form-control" required value="<?php echo $user_country; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> user City: </label>

<input type="text" name="c_city" class="form-control" required value="<?php echo $user_city; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> user Contact: </label>

<input type="text" name="c_contact" class="form-control" required value="<?php echo $user_contact; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> user Address: </label>

<input type="text" name="c_address" class="form-control" required value="<?php echo $user_address; ?>">


</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label> user Image: </label>

<input type="file" name="c_image" class="form-control" required ><br>

<img src="user_images/<?php echo $user_image; ?>" width="100" height="100" class="img-responsive" >


</div><!-- form-group Ends -->

<div class="text-center" ><!-- text-center Starts -->

<button name="update" class="btn btn-primary" >

<i class="fa fa-user-md" ></i> Update Now

</button>


</div><!-- text-center Ends -->


</form><!--- form Ends -->

<?php

if(isset($_POST['update'])){

$update_id = $user_id;

$c_name = $_POST['c_name'];

$c_email = $_POST['c_email'];

$c_country = $_POST['c_country'];

$c_city = $_POST['c_city'];

$c_contact = $_POST['c_contact'];

$c_address = $_POST['c_address'];

$c_image = $_FILES['c_image']['name'];

$c_image_tmp = $_FILES['c_image']['tmp_name'];

move_uploaded_file($c_image_tmp,"user_images/$c_image");

$update_user = "update user set user_name='$c_name',user_email='$c_email',user_country='$c_country',user_city='$c_city',user_contact='$c_contact',user_address='$c_address',user_image='$c_image' where user_id='$update_id'";

$run_user = mysqli_query($con,$update_user);

if($run_user){

echo "<script>alert('Your account has been updated please login again')</script>";

echo "<script>window.open('logout.php','_self')</script>";

}

}


?>