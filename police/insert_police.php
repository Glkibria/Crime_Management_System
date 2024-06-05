<?php



if(!isset($_SESSION['police_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>


<div class="row" ><!-- 1  row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard" ></i> Dashboard / Insert Police

</li>



</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1  row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" >

<i class="fa fa-money fa-fw" ></i> Insert Police

</h3>


</div><!-- panel-heading Ends -->


<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Police Name: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="police_name" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Police Email: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="police_email" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Police Password: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="password" name="police_pass" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Police Country: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="police_country" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Police Job: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="police_job" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Police Contact: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="text" name="police_contact" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Police About: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<textarea name="police_about" class="form-control" rows="3"> </textarea>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Police Image: </label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="file" name="police_image" class="form-control" required>

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6"><!-- col-md-6 Starts -->

<input type="submit" name="submit" value="Insert Police" class="btn btn-primary form-control">

</div><!-- col-md-6 Ends -->

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->


</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

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

$insert_police = "insert into police (police_name,police_email,police_pass,police_image,police_contact,police_country,police_job,police_about) values ('$police_name','$police_email','$police_pass','$police_image','$police_contact','$police_country','$police_job','$police_about')";

$run_police = mysqli_query($con,$insert_police);


if($run_police){

echo "<script>alert('One police Has Been Inserted successfully')</script>";

echo "<script>window.open('index.php?view_police','_self')</script>";

}


}


?>



<?php }  ?>