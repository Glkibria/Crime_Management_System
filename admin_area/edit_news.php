<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
  
<?php

if(isset($_GET['edit_news'])){

$edit_id = $_GET['edit_news'];

$get_news = "select * from news where news_id='$edit_id'";

$run_news = mysqli_query($con,$get_news);

$row_news = mysqli_fetch_array($run_news);

$news_id = $row_news['news_id'];

$news_title = $row_news['news_title'];

$news_image = $row_news['news_image'];

$news_desc = $row_news['news_desc'];

$news_button = $row_news['news_button'];

$news_url = $row_news['news_url'];

$new_s_image = $row_news['news_image'];


}

?>  

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts --> 

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard" ></i> Dashboard / Edit news

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit news

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> news Title : </label>

<div class="col-md-6">

<input type="text" name="news_title" class="form-control" value="<?php echo $news_title; ?>">

</div>

</div><!-- form-group Ends -->



<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> news Image : </label>

<div class="col-md-6">

<input type="file" name="news_image" class="form-control">

<br>

<img src="news_images/<?php echo $news_image; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> news Description : </label>

<div class="col-md-6">

<textarea name="news_desc" class="form-control" rows="10" cols="19">

<?php echo $news_desc; ?>

</textarea>

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> news Button : </label>

<div class="col-md-6">

<input type="text" name="news_button" class="form-control" value="<?php echo $news_button; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> news Url : </label>

<div class="col-md-6">

<input type="url" name="news_url" class="form-control" value="<?php echo $news_url; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="update" value="Update news" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update'])){

$news_title = $_POST['news_title'];

$news_desc = $_POST['news_desc'];

$news_button = $_POST['news_button'];

$news_url = $_POST['news_url'];

$news_image = $_FILES['news_image']['name'];

$tmp_image = $_FILES['news_image']['tmp_name'];

if(empty($news_image)){

$news_image = $new_s_image;

}

move_uploaded_file($tmp_image,"news_images/$news_image");

$update_news = "update news set news_title='$news_title',news_image='$news_image',news_desc='$news_desc',news_button='$news_button',news_url='$news_url' where news_id='$news_id'";

$run_news = mysqli_query($con,$update_news);

if($run_news){

echo "<script>alert('One news Column Has Been Updated')</script>";

echo "<script>window.open('index.php?view_news','_self')</script>";

}

}

?>

<?php } ?>