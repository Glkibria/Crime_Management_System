<?php


if(!isset($_SESSION['police_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['edit_missingperson'])){

$edit_missingperson = $_GET['edit_missingperson'];

$get_missingperson = "select * from missingpersons where missingperson_id='$edit_missingperson'";

$run_missingperson = mysqli_query($con,$get_missingperson);

$row_missingperson = mysqli_fetch_array($run_missingperson);

$m_id = $row_missingperson['missingperson_id'];

$m_title = $row_missingperson['missingperson_title'];

$m_top = $row_missingperson['missingperson_top'];

$m_image = $row_missingperson['missingperson_image'];

$new_m_image = $row_missingperson['missingperson_image'];


}


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / Edit missingperson

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"> </i> Edit missingperson

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> missingperson Name </label>

<div class="col-md-6">

<input type="text" name="missingperson_name" class="form-control" value="<?php echo $m_title; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Show as Top missingpersons </label>

<div class="col-md-6">

<input type="radio" name="missingperson_top" value="yes" 
<?php if($m_top == 'no'){}else{ echo "checked='checked'"; } ?> >

<label> Yes </label>

<input type="radio" name="missingperson_top" value="no" 
<?php if($m_top == 'no'){ echo "checked='checked'"; }else{} ?> >

<label> No </label>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Select missingperson Image </label>

<div class="col-md-6">

<input type="file" name="missingperson_image" class="form-control" >

<br>

<img src="other_images/<?php echo $m_image; ?>" width="70" height="70">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="update" class="form-control btn btn-primary" value=" Update missingperson " >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update'])){

$missingperson_name = $_POST['missingperson_name'];

$missingperson_top = $_POST['missingperson_top'];

$missingperson_image = $_FILES['missingperson_image']['name'];

$tmp_name = $_FILES['missingperson_image']['tmp_name'];

move_uploaded_file($tmp_name,"other_images/$missingperson_image");

if(empty($missingperson_image)){

$missingperson_image = $new_m_image;

}

$update_missingperson = "update missingpersons set missingperson_title='$missingperson_name',missingperson_top='$missingperson_top',missingperson_image='$missingperson_image' where missingperson_id='$m_id'";

$run_missingperson = mysqli_query($con,$update_missingperson);

if($run_missingperson){

echo "<script>alert('missingperson Has Been Updated')</script>";

echo "<script>window.open('index.php?view_missingperson','_self')</script>";

}

}

?>

<?php } ?>