<?php



if(!isset($_SESSION['police_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / View missingperson

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> View missingperson

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts --->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>Missingperson</th>
<th>Gender</th>
<th>Contact</th>
<th>Address</th>
<th>Delete</th>
<th>Edit</th>

</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_missingperson = "select * from missingperson";

$run_missingperson = mysqli_query($con,$get_missingperson);

while($row_missingperson = mysqli_fetch_array($run_missingperson)){

$missingperson_id = $row_missingperson['Person_id'];

$missingperson_title = $row_missingperson['Person_name'];
$missingperson_gender = $row_missingperson['Person_gender'];
$missingperson_contact = $row_missingperson['Contact_Person'];
$missingperson_address = $row_missingperson['Contact_address'];

$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $missingperson_title; ?></td>
<td><?php echo $missingperson_gender; ?></td>
<td><?php echo $missingperson_contact; ?></td>
<td><?php echo $missingperson_address; ?></td>

<td>

<a href="index.php?delete_missingperson=<?php echo $missingperson_id; ?>">

<i class="fa fa-trash-o"></i> Delete

</a>

</td>

<td>

<a href="index.php?edit_missingperson=<?php echo $missingperson_id; ?>">

<i class="fa fa-pencil"></i> Edit

</a>

</td>

</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends --->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php } ?>