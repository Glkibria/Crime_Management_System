<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
  
<?php

if(isset($_GET['edit_stips'])){

$edit_id = $_GET['edit_stips'];

$get_safety_tips = "select * from safety_tips where safety_tips_id='$edit_id'";

$run_safety_tips = mysqli_query($con,$get_safety_tips);

$row_safety_tips = mysqli_fetch_array($run_safety_tips);

$safety_tips_id = $row_safety_tips['safety_tips_id'];

$safety_tips_title = $row_safety_tips['safety_tips_title'];

$safety_tips_image = $row_safety_tips['safety_tips_image'];

$safety_tips_desc = $row_safety_tips['safety_tips_desc'];

$safety_tips_button = $row_safety_tips['safety_tips_button'];

$safety_tips_url = $row_safety_tips['safety_tips_url'];

$new_s_image = $row_safety_tips['safety_tips_image'];


}

?>  

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts --> 

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard" ></i> Dashboard / Edit safety_tips

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit safety_tips

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> safety_tips Title : </label>

<div class="col-md-6">

<input type="text" name="safety_tips_title" class="form-control" value="<?php echo $safety_tips_title; ?>">

</div>

</div><!-- form-group Ends -->



<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> safety_tips Image : </label>

<div class="col-md-6">

<input type="file" name="safety_tips_image" class="form-control">

<br>

<img src="safety_tips_images/<?php echo $safety_tips_image; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> safety_tips Description : </label>

<div class="col-md-6">

<textarea name="safety_tips_desc" class="form-control" rows="10" cols="19">

<?php echo $safety_tips_desc; ?>

</textarea>

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> safety_tips Button : </label>

<div class="col-md-6">

<input type="text" name="safety_tips_button" class="form-control" value="<?php echo $safety_tips_button; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> safety_tips Url : </label>

<div class="col-md-6">

<input type="url" name="safety_tips_url" class="form-control" value="<?php echo $safety_tips_url; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="update" value="Update safety_tips" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update'])){

$safety_tips_title = $_POST['safety_tips_title'];

$safety_tips_desc = $_POST['safety_tips_desc'];

$safety_tips_button = $_POST['safety_tips_button'];

$safety_tips_url = $_POST['safety_tips_url'];

$safety_tips_image = $_FILES['safety_tips_image']['name'];

$tmp_image = $_FILES['safety_tips_image']['tmp_name'];

if(empty($safety_tips_image)){

$safety_tips_image = $new_s_image;

}

move_uploaded_file($tmp_image,"safety_tips_images/$safety_tips_image");

$update_safety_tips = "update safety_tips set safety_tips_title='$safety_tips_title',safety_tips_image='$safety_tips_image',safety_tips_desc='$safety_tips_desc',safety_tips_button='$safety_tips_button',safety_tips_url='$safety_tips_url' where safety_tips_id='$safety_tips_id'";

$run_safety_tips = mysqli_query($con,$update_safety_tips);

if($run_safety_tips){

echo "<script>alert('One safety tips Column Has Been Updated')</script>";

echo "<script>window.open('index.php?view_stips','_self')</script>";

}

}

?>

<?php } ?>