<?php



if(!isset($_SESSION['police_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard" ></i> Dashboard / View Polices

</li>

</ol><!-- breadcrumb Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Polices

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Police Name</th>

<th>Email</th>

<th>Image</th>

<th>Country</th>

<th>Job</th>

<th>Delete</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$get_police = "select * from police";

$run_police = mysqli_query($con,$get_police);

while($row_police = mysqli_fetch_array($run_police)){

$police_id = $row_police['police_id'];

$police_name = $row_police['police_name'];

$police_email = $row_police['police_email'];

$police_image = $row_police['police_image'];

$police_country = $row_police['police_country'];

$police_job = $row_police['police_job'];





?>

<tr>

<td><?php echo $police_name; ?></td>

<td><?php echo $police_email; ?></td>

<td><img src="police_images/<?php echo $police_image; ?>" width="60" height="60" ></td>

<td><?php echo $police_country; ?></td>

<td><?php echo $police_job; ?></td>

<td>

<a href="index.php?police_delete=<?php echo $police_id; ?>" >

<i class="fa fa-trash-o" ></i> Delete

</a>

</td>


</tr>


<?php } ?>

</tbody><!-- tbody Ends -->



</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->


</div><!-- panel-body Ends -->


</div><!-- panel panel-default Ends -->


</div><!-- col-lg-12 Ends -->



</div><!-- 2 row Ends -->





<?php }  ?>