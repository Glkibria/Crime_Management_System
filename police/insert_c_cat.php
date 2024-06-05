<?php

if(!isset($_SESSION['police_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard"></i> Dashboard / Insert Criminals Category

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Insert Criminal Category

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->


<div class="panel-body" ><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Criminal Category Title</label>

<div class="col-md-6" >

<input type="text" name="p_cat_title" class="form-control" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Show as Top Criminal Category</label>

<div class="col-md-6" >

<input type="radio" name="p_cat_top" value="yes" >

<label> Yes </label>

<input type="radio" name="p_cat_top" value="no" >

<label> No </label>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Select Criminal Category Image</label>

<div class="col-md-6" >

<input type="file" name="p_cat_image" class="form-control" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->


</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$p_cat_title = $_POST['p_cat_title'];

$p_cat_top = $_POST['p_cat_top'];

$p_cat_image = $_FILES['p_cat_image']['name'];

$temp_name = $_FILES['p_cat_image']['tmp_name'];

move_uploaded_file($temp_name,"other_images/$p_cat_image");

$insert_p_cat = "insert into criminal_categories (criminal_cat_title,criminal_cat_top,criminal_cat_image) values ('$p_cat_title','$p_cat_top','$p_cat_image')";

$run_p_cat = mysqli_query($con,$insert_p_cat);

if($run_p_cat){

echo "<script>alert('New criminal Category Has been Inserted')</script>";

echo "<script>window.open('index.php?view_p_cat','_self')</script>";

}



}



?>


<?php } ?>