<?php


if(!isset($_SESSION['police_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts --> 

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard" ></i> Dashboard / Insert Station

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Insert Station

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Station Title : </label>

<div class="col-md-6">

<input type="text" name="Station_title" class="form-control">

</div>

</div><!-- form-group Ends -->



<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Station Image : </label>

<div class="col-md-6">

<input type="file" name="Station_image" class="form-control">

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Station Description : </label>

<div class="col-md-6">

<textarea name="Station_desc" class="form-control" rows="10" cols="19">



</textarea>

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Station Button : </label>

<div class="col-md-6">

<input type="text" name="Station_button" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Station Url : </label>

<div class="col-md-6">

<input type="url" name="Station_url" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="submit" value="Insert Station" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$Station_title = $_POST['Station_title'];

$Station_desc = $_POST['Station_desc'];

$Station_button = $_POST['Station_button'];

$Station_url = $_POST['Station_url'];

$Station_image = $_FILES['Station_image']['name'];

$tmp_image = $_FILES['Station_image']['tmp_name'];

$sel_Station = "select * from police_station";

$run_Station = mysqli_query($con,$sel_Station);

$count = mysqli_num_rows($run_Station);

if($count == 3){

echo "<script>alert('You Have already Inserted 3 Station columns')</script>";

}
else{

move_uploaded_file($tmp_image,"Station_images/$Station_image");

$insert_Station = "insert into police_station (Station_title,Station_image,Station_desc,Station_button,Station_url) values ('$Station_title','$Station_image','$Station_desc','$Station_button','$Station_url')";

$run_Station = mysqli_query($con,$insert_Station);

if($run_Station){

echo "<script>alert('New Station Column Has Been Inserted')</script>";

echo "<script>window.open('index.php?view_Station','_self')</script>";

}

}

}

?>

<?php } ?>