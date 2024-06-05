<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

<?php


$criminal_id = @$_GET['c_id'];

$get_criminal = "select * from criminal where criminal_url='$criminal_id'";

$run_criminal = mysqli_query($con,$get_criminal);

$check_criminal = mysqli_num_rows($run_criminal);

if($check_criminal == 0){

echo "<script> window.open('index.php','_self') </script>";

}
else{



$row_criminal = mysqli_fetch_array($run_criminal);

$p_cat_id = $row_criminal['criminal_cat_id'];

$pro_id = $row_criminal['criminal_id'];

$pro_title = $row_criminal['criminal_name'];



$pro_desc = $row_criminal['criminal_desc'];

$pro_img1 = $row_criminal['criminal_img1'];

$pro_img2 = $row_criminal['criminal_img2'];

$pro_img3 = $row_criminal['criminal_img3'];

$pro_label = $row_criminal['criminal_label'];





$pro_video = $row_criminal['criminal_video'];

$status = $row_criminal['status'];

$pro_url = $row_criminal['criminal_url'];

if($pro_label == ""){


}
else{

$criminal_label = "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>$pro_label</div>

<div class='label-background'> </div>

</a>

";

}

$get_p_cat = "select * from criminal_categories where criminal_cat_id='$p_cat_id'";

$run_p_cat = mysqli_query($con,$get_p_cat);

$row_p_cat = mysqli_fetch_array($run_p_cat);

$p_cat_title = $row_p_cat['criminal_cat_title'];




?>

  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">criminal </span>View
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>

<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->





<div class="col-md-12"><!-- col-md-12 Starts -->

<div class="row" id="criminalMain"><!-- row Starts -->

<div class="col-sm-6"><!-- col-sm-6 Starts -->

<div id="mainImage"><!-- mainImage Starts -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators"><!-- carousel-indicators Starts -->

<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>

</ol><!-- carousel-indicators Ends -->

<div class="carousel-inner"><!-- carousel-inner Starts -->

<div class="item active">
<center>
<img src="admin_area/criminal_images/<?php echo $pro_img1; ?>" class="img-responsive">
</center>
</div>

<div class="item">
<center>
<img src="admin_area/criminal_images/<?php echo $pro_img2; ?>" class="img-responsive">
</center>
</div>

<div class="item">
<center>
<img src="admin_area/criminal_images/<?php echo $pro_img3; ?>" class="img-responsive">
</center>
</div>

</div><!-- carousel-inner Ends -->

<a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Starts -->

<span class="glyphicon glyphicon-chevron-left"> </span>

<span class="sr-only"> Previous </span>

</a><!-- left carousel-control Ends -->

<a class="right carousel-control" href="#myCarousel" data-slide="next"><!-- right carousel-control Starts -->

<span class="glyphicon glyphicon-chevron-right"> </span>

<span class="sr-only"> Next </span>

</a><!-- right carousel-control Ends -->

</div>

</div><!-- mainImage Ends -->

<?php echo $criminal_label; ?>

</div><!-- col-sm-6 Ends -->


<div class="col-sm-6" ><!-- col-sm-6 Starts -->

<div class="box" ><!-- box Starts -->

<h1 class="text-center" > <?php echo $pro_title; ?> </h1>


<form action="" method="post" class="form-horizontal" ><!-- form-horizontal Starts -->




</form><!-- form-horizontal Ends -->

</div><!-- box Ends -->


<div class="row" id="thumbs" ><!-- row Starts -->

<div class="col-xs-4" ><!-- col-xs-4 Starts -->

<a href="#" class="thumb" >

<img src="admin_area/criminal_images/<?php echo $pro_img1; ?>" class="img-responsive" >

</a>

</div><!-- col-xs-4 Ends -->

<div class="col-xs-4" ><!-- col-xs-4 Starts -->

<a href="#" class="thumb" >

<img src="admin_area/criminal_images/<?php echo $pro_img2; ?>" class="img-responsive" >

</a>

</div><!-- col-xs-4 Ends -->

<div class="col-xs-4" ><!-- col-xs-4 Starts -->

<a href="#" class="thumb" >

<img src="admin_area/criminal_images/<?php echo $pro_img3; ?>" class="img-responsive" >

</a>

</div><!-- col-xs-4 Ends -->


</div><!-- row Ends -->


</div><!-- col-sm-6 Ends -->


</div><!-- row Ends -->

<div class="box" id="details"><!-- box Starts -->

<a class="btn btn-info tab" style="margin-bottom:10px;" href="#description" data-toggle="tab"><!-- btn btn-primary tab Starts -->

<?php

if($status == "criminal"){

echo "criminal Description";

}


?>

</a><!-- btn btn-primary tab Ends -->



<a class="btn btn-info tab" style="margin-bottom:10px;" href="#video" data-toggle="tab"><!-- btn btn-primary tab Starts -->

Sounds and Videos

</a><!-- btn btn-primary tab Ends -->

<hr style="margin-top:0px;">

<div class="tab-content"><!-- tab-content Starts -->

<div id="description" class="tab-pane fade in active" style="margin-top:7px;" ><!-- description tab-pane fade in active Starts -->

<?php echo $pro_desc; ?>

</div><!-- description tab-pane fade in active Ends -->



<div id="video" class="tab-pane fade in" style="margin-top:7px;" ><!-- video tab-pane fade in Starts -->

<?php echo $pro_video; ?>

</div><!-- video tab-pane fade in  Ends -->


</div><!-- tab-content Ends -->

</div><!-- box Ends -->

<div id="row same-height-row"><!-- row same-height-row Starts -->

<?php

if($status == "criminal"){



?>

<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->

<div class="box same-height headline"><!-- box same-height headline Starts -->

<h3 class="text-center"> Top most wanted criminals . </h3>

</div><!-- box same-height headline Ends -->

</div><!-- col-md-3 col-sm-6 Ends -->

<?php

$get_criminal = "select * from criminal order by rand() LIMIT 0,3";

$run_criminal = mysqli_query($con,$get_criminal);

while($row_criminal = mysqli_fetch_array($run_criminal)) {

$pro_id = $row_criminal['criminal_id'];

$pro_title = $row_criminal['criminal_name'];



$pro_img1 = $row_criminal['criminal_img1'];

$pro_label = $row_criminal['criminal_label'];







$pro_url = $row_criminal['criminal_url'];





if($pro_label == ""){


}
else{

$criminal_label = "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>$pro_label</div>

<div class='label-background'> </div>

</a>

";

}


echo "

<div class='col-md-3 col-sm-6 center-responsive' >

<div class='criminal' >

<a href='$pro_url' >

<img src='admin_area/criminal_images/$pro_img1' class='img-responsive' >

</a>

<div class='text' >

<center>



</center>

<hr>

<h3><a href='$pro_url' >$pro_title</a></h3>



<p class='buttons' >

<a href='$pro_url' class='btn btn-default' >View Details</a>





</p>

</div>

$criminal_label


</div>

</div>

";


}


?>






<?php } ?>

</div><!-- row same-height-row Ends -->

</div><!-- col-md-12 Ends -->


</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php } ?>
