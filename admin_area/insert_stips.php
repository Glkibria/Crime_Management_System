<?php


if(!isset($_SESSION['admin_email'])){

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

<i class="fa fa-dashboard" ></i> Dashboard / Insert safety tips

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Insert safety tips

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Safety tips Title : </label>

<div class="col-md-6">

<input type="text" name="safety_tips_title" class="form-control">

</div>

</div><!-- form-group Ends -->



<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Safety tips Image : </label>

<div class="col-md-6">

<input type="file" name="safety_tips_image" class="form-control">

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Safety tips Description : </label>

<div class="col-md-6">

<textarea name="safety_tips_desc" class="form-control" rows="10" cols="19">



</textarea>

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Safety tips Button : </label>

<div class="col-md-6">

<input type="text" name="safety_tips_button" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Safety tips Url : </label>

<div class="col-md-6">

<input type="url" name="safety_tips_url" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="submit" value="Insert safety_tips" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$safety_tips_title = $_POST['safety_tips_title'];

$safety_tips_desc = $_POST['safety_tips_desc'];

$safety_tips_button = $_POST['safety_tips_button'];

$safety_tips_url = $_POST['safety_tips_url'];

$safety_tips_image = $_FILES['safety_tips_image']['name'];

$tmp_image = $_FILES['safety_tips_image']['tmp_name'];

$sel_safety_tips = "select * from safety_tips";

$run_safety_tips = mysqli_query($con,$sel_safety_tips);

$count = mysqli_num_rows($run_safety_tips);

if($count == 3){

echo "<script>alert('You Have already Inserted 3 safety_tips columns')</script>";

}
else{

move_uploaded_file($tmp_image,"safety_tips_images/$safety_tips_image");

$insert_safety_tips = "insert into safety_tips (safety_tips_title,safety_tips_image,safety_tips_desc,safety_tips_button,safety_tips_url) values ('$safety_tips_title','$safety_tips_image','$safety_tips_desc','$safety_tips_button','$safety_tips_url')";

$run_safety_tips = mysqli_query($con,$insert_safety_tips);

if($run_safety_tips){

echo "<script>alert('New safety_tips Column Has Been Inserted')</script>";

echo "<script>window.open('index.php?view_stips','_self')</script>";

}

}

}

?>

<?php } ?>