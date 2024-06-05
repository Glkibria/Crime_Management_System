<?php



if(!isset($_SESSION['police_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['police_profile'])){

$edit_id = $_GET['police_profile'];

$get_police = "select * from police where police_id='$edit_id'";

$run_police = mysqli_query($con,$get_police);

$row_police = mysqli_fetch_array($run_police);

$police_id = $row_police['police_id'];

$police_name = $row_police['police_name'];

$police_email = $row_police['police_email'];

$police_pass = $row_police['police_pass'];

$police_image = $row_police['police_image'];

$new_police_image = $row_police['police_image'];

$police_country = $row_police['police_country'];

$police_job = $row_police['police_job'];

$police_contact = $row_police['police_contact'];

$police_about = $row_police['police_about'];



}



?>


<div class="row" ><!-- 1  row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard" ></i> Dashboard / Edit Profile

</li>



</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1  row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw" ></i> Edit Profile

</h3>


</div><!-- panel-heading Ends -->


<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">police Name: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="police_name" class="form-control" required value="<?php echo $police_name; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">police Email: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="police_email" class="form-control" required value="<?php echo $police_email; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">police Password: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="police_pass" class="form-control" required value="<?php echo $police_pass; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">police Country: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="police_country" class="form-control" required value="<?php echo $police_country; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">police Job: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="police_job" class="form-control" required value="<?php echo $police_job; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">police Contact: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="police_contact" class="form-control" required value="<?php echo $police_contact; ?>">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">police About: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<textarea name="police_about" class="form-control" rows="3"> <?php echo $police_about; ?> </textarea>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">police Image: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="file" name="police_image" class="form-control" >
<br>
<img src="police_images/<?Php echo $police_image; ?>" width="70" height="70" >

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="submit" name="update" value="Update police" class="btn btn-primary form-control">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->


</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update'])){

$police_name = $_POST['police_name'];

$police_email = $_POST['police_email'];

$police_pass = $_POST['police_pass'];

$police_country = $_POST['police_country'];

$police_job = $_POST['police_job'];

$police_contact = $_POST['police_contact'];

$police_about = $_POST['police_about'];


$police_image = $_FILES['police_image']['name'];

$temp_police_image = $_FILES['police_image']['tmp_name'];

move_uploaded_file($temp_police_image,"police_images/$police_image");

if(empty($police_image)){

$police_image = $new_police_image;

}

$update_police = "update police set police_name='$police_name',police_email='$police_email',police_pass='$police_pass',police_image='$police_image',police_contact='$police_contact',police_country='$police_country',police_job='$police_job',police_about='$police_about' where police_id='$police_id'";

$run_police = mysqli_query($con,$update_police);

if($run_police){

echo "<script>alert('Police Has Been Updated successfully and login again')</script>";

echo "<script>window.open('login.php','_self')</script>";

session_destroy();

}

}


?>



<?php }  ?>