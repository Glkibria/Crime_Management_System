<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>




<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts --> 

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard" ></i> Dashboard / View service

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> View service 

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<?php

$get_service = "select * from services";

$run_service = mysqli_query($con,$get_service);

while($row_service = mysqli_fetch_array($run_service)){

$service_id = $row_service['service_id'];

$service_title = $row_service['service_title'];

$service_image = $row_service['service_image'];

$service_desc = substr($row_service['service_desc'],0,400);

$service_button = $row_service['service_button'];

$service_url = $row_service['service_url'];


?>

<div class="col-lg-4 col-md-4"><!-- col-lg-4 col-md-4 Starts -->

<div class="panel panel-primary"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title" align="center">

<?php echo $service_title; ?>

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<img src="services_images/<?php echo $service_image; ?>" class="img-responsive">

<br>

<p><?php echo $service_desc; ?></p>

</div><!-- panel-body Ends -->

<div class="panel-footer"><!-- panel-footer Starts -->

<a href="index.php?delete_services=<?php echo $service_id; ?>" class="pull-left">

<i class="fa fa-trash-o"></i> Delete

</a>

<a href="index.php?edit_services=<?php echo $service_id; ?>" class="pull-right">

<i class="fa fa-pencil"></i> Edit

</a>

<div class="clearfix"> </div>

</div><!-- panel-footer Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-4 col-md-4 Ends -->

<?php } ?>

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->




<?php } ?>