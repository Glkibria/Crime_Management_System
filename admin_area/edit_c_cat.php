<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['edit_c_cat'])){

$edit_criminal_cat_id = $_GET['edit_c_cat'];

$edit_criminal_cat_query = "select * from criminal_categories where criminal_cat_id='$edit_criminal_cat_id'";

$run_edit = mysqli_query($con,$edit_criminal_cat_query);

$row_edit = mysqli_fetch_array($run_edit);

$criminal_cat_id = $row_edit['criminal_cat_id'];

$criminal_cat_title = $row_edit['criminal_cat_title'];

$criminal_cat_top = $row_edit['criminal_cat_top'];

$criminal_cat_image = $row_edit['criminal_cat_image'];

$new_criminal_cat_image = $row_edit['criminal_cat_image'];

}


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard"></i> Dashboard / Edit Product Category

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Edit Product Category

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->


<div class="panel-body" ><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Product Category Title</label>

<div class="col-md-6" >

<input type="text" name="criminal_cat_title" class="form-control" value="<?php echo $criminal_cat_title; ?>" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Show as Top Product Category</label>

<div class="col-md-6" >

<input type="radio" name="criminal_cat_top" value="yes" 
<?php if($criminal_cat_top == 'no'){}else{ echo "checked='checked'"; } ?>>

<label> Yes </label>

<input type="radio" name="criminal_cat_top" value="no" 
<?php if($criminal_cat_top == 'no'){ echo "checked='checked'"; }else{} ?>>

<label> No </label>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Select Product Category Image</label>

<div class="col-md-6" >

<input type="file" name="criminal_cat_image" class="form-control" >

<br>

<img src="other_images/<?php echo $criminal_cat_image; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="update" value="Update Now" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->


</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update'])){

$criminal_cat_title = $_POST['criminal_cat_title'];

$criminal_cat_top = $_POST['criminal_cat_top'];

$criminal_cat_image = $_FILES['criminal_cat_image']['name'];

$temp_name = $_FILES['criminal_cat_image']['tmp_name'];


move_uploaded_file($temp_name,"other_images/$criminal_cat_image");

if(empty($criminal_cat_image)){

$criminal_cat_image = $new_criminal_cat_image;

}

$update_criminal_cat = "update criminal_categories set criminal_cat_title='$criminal_cat_title',criminal_cat_top='$criminal_cat_top',criminal_cat_image='$criminal_cat_image' where criminal_cat_id='$criminal_cat_id'";

$run_criminal_cat = mysqli_query($con,$update_criminal_cat);

if($run_criminal_cat){

echo "<script>alert('criminal Category has been Updated')</script>";

echo "<script>window.open('index.php?view_c_cat','_self')</script>";

}



}



?>


<?php } ?>