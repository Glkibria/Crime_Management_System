<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
  
<?php

if(isset($_GET['edit_station'])){

$edit_id = $_GET['edit_station'];

$get_station = "select * from police_station where station_id='$edit_id'";

$run_station = mysqli_query($con,$get_station);

$row_station = mysqli_fetch_array($run_station);

$station_id = $row_station['station_id'];

$station_title = $row_station['station_title'];

$station_image = $row_station['station_image'];

$station_desc = $row_station['station_desc'];

$station_button = $row_station['station_button'];

$station_url = $row_station['station_url'];

$new_s_image = $row_station['station_image'];


}

?>  

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts --> 

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard" ></i> Dashboard / Edit station

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit station

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> station Title : </label>

<div class="col-md-6">

<input type="text" name="station_title" class="form-control" value="<?php echo $station_title; ?>">

</div>

</div><!-- form-group Ends -->



<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> station Image : </label>

<div class="col-md-6">

<input type="file" name="station_image" class="form-control">

<br>

<img src="station_images/<?php echo $station_image; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> station Description : </label>

<div class="col-md-6">

<textarea name="station_desc" class="form-control" rows="10" cols="19">

<?php echo $station_desc; ?>

</textarea>

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> station Button : </label>

<div class="col-md-6">

<input type="text" name="station_button" class="form-control" value="<?php echo $station_button; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> station Url : </label>

<div class="col-md-6">

<input type="url" name="station_url" class="form-control" value="<?php echo $station_url; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="update" value="Update station" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update'])){

$station_title = $_POST['station_title'];

$station_desc = $_POST['station_desc'];

$station_button = $_POST['station_button'];

$station_url = $_POST['station_url'];

$station_image = $_FILES['station_image']['name'];

$tmp_image = $_FILES['station_image']['tmp_name'];

if(empty($station_image)){

$station_image = $new_s_image;

}

move_uploaded_file($tmp_image,"station_images/$station_image");

$update_station = "update police_station set station_title='$station_title',station_image='$station_image',station_desc='$station_desc',station_button='$station_button',station_url='$station_url' where station_id='$station_id'";

$run_station = mysqli_query($con,$update_station);

if($run_station){

echo "<script>alert('One station Column Has Been Updated')</script>";

echo "<script>window.open('index.php?view_station','_self')</script>";

}

}

?>

<?php } ?>