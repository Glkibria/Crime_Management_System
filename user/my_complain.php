<?php

 // Include your database connection file

if (!isset($_SESSION['user_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
?>

<center><!-- center Starts -->

<h1>My Complaints</h1>

<p class="lead"> Your complaints in one place.</p>

<p class="text-muted">
If you have any questions, please feel free to <a href="../contact.php">contact us,</a> our user service center is working for you 24/7.
</p>

</center><!-- center Ends -->

<hr>

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover"><!-- table table-bordered table-hover Starts -->

<thead><!-- thead Starts -->

<tr>
    <th>#</th>
    <th>Complaint Date</th>
    <th>Status</th>
    <th>Complaint</th>
    <th>Action</th>
</tr>

</thead><!-- thead Ends -->

<tbody><!--- tbody Starts --->

<?php
$user_session = $_SESSION['user_email'];

$get_user = "SELECT * FROM user WHERE user_email='$user_session'";
$run_user = mysqli_query($con, $get_user);
$row_user = mysqli_fetch_array($run_user);
$user_id = $row_user['user_id'];

$get_comp = "SELECT * FROM user_comp WHERE user_id='$user_id'";
$run_comp = mysqli_query($con, $get_comp);

$i = 0;

while ($row_comp = mysqli_fetch_array($run_comp)) {
    $comp_id = $row_comp['comp_id'];
    $comp_date = substr($row_comp['comp_date'], 0, 11);
    $comp_status = $row_comp['comp_status'];
    $complaint = $row_comp['complaint'];

    $i++;

    if ($comp_status == 'Pending') {
        $comp_status = "<b style='color:red;'>Pending</b>";
    } else if($comp_status == 'In Progress') {
        $comp_status = "<b style='color:brown;'>In Progress</b>";
    }
    else if($comp_status == 'Resolved') {
        $comp_status = "<b style='color:green;'>Resolved</b>";
    }
    else{
        $comp_status = "<b style='color:black;'>$comp_status</b>";
    }

?>

<tr><!-- tr Starts -->

    <th><?php echo $i; ?></th>
    <td><?php echo $comp_date; ?></td>
    <td><?php echo $comp_status; ?></td>
    <td><?php echo $complaint; ?></td>
    <td>
        <a href="confirm.php?comp_id=<?php echo $comp_id; ?>" target="_blank" class="btn btn-success btn-xs">Confirm If Respons</a>
    </td>

</tr><!-- tr Ends -->

<?php } ?>

</tbody><!--- tbody Ends --->

</table><!-- table table-bordered table-hover Ends -->

</div><!-- table-responsive Ends -->

<?php } ?>
