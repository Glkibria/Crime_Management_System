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

<i class="fa fa-dashboard" ></i> Dashboard / Insert news

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends --> 

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Insert news

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> News Title : </label>

<div class="col-md-6">

<input type="text" name="news_title" class="form-control">

</div>

</div><!-- form-group Ends -->



<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> News Image : </label>

<div class="col-md-6">

<input type="file" name="news_image" class="form-control">

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> News Description : </label>

<div class="col-md-6">

<textarea name="news_desc" class="form-control" rows="10" cols="19">



</textarea>

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> news Button : </label>

<div class="col-md-6">

<input type="text" name="news_button" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> news Url : </label>

<div class="col-md-6">

<input type="url" name="news_url" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="submit" value="Insert news" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->


</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$news_title = $_POST['news_title'];

$news_desc = $_POST['news_desc'];

$news_button = $_POST['news_button'];

$news_url = $_POST['news_url'];

$news_image = $_FILES['news_image']['name'];

$tmp_image = $_FILES['news_image']['tmp_name'];

$sel_news = "select * from news";

$run_news = mysqli_query($con,$sel_news);

$count = mysqli_num_rows($run_news);

if($count == 3){

echo "<script>alert('You Have already Inserted 3 news columns')</script>";

}
else{

move_uploaded_file($tmp_image,"news_images/$news_image");

$insert_news = "insert into news (news_title,news_image,news_desc,news_button,news_url) values ('$news_title','$news_image','$news_desc','$news_button','$news_url')";

$run_news = mysqli_query($con,$insert_news);

if($run_news){

echo "<script>alert('New news Column Has Been Inserted')</script>";

echo "<script>window.open('index.php?view_news','_self')</script>";

}

}

}

?>

<?php } ?>