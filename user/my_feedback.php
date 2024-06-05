<?php

 // Include your database connection file

if (!isset($_SESSION['user_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
?>

<center><!-- center Starts -->

<h1>My Feedbacks</h1>

<p class="lead"> Your Feedbacks in one place.</p>

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
    <th>Feedback Date</th>
    <th>Status</th>
    <th>Feedback</th>
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

$get_feed = "SELECT * FROM user_feed WHERE user_id='$user_id'";
$run_feed = mysqli_query($con, $get_feed);

$i = 0;

while ($row_feed = mysqli_fetch_array($run_feed)) {
    $feed_id = $row_feed['feed_id'];
    $feed_date = substr($row_feed['feed_date'], 0, 11);
    $feed_status = $row_feed['feed_status'];
    $Feedback = $row_feed['feedback'];

    $i++;

    if ($feed_status == 'Pending') {
        $feed_status = "<b style='color:red;'>Pending</b>";
    } else if($feed_status == 'In Progress') {
        $feed_status = "<b style='color:brown;'>In Progress</b>";
    }
    else if($feed_status == 'Resolved') {
        $feed_status = "<b style='color:green;'>Resolved</b>";
    }

?>

<tr><!-- tr Starts -->

    <th><?php echo $i; ?></th>
    <td><?php echo $feed_date; ?></td>
    <td><?php echo $feed_status; ?></td>
    <td><?php echo $Feedback; ?></td>
    <td>
        <a href="confirm_feed.php?feed_id=<?php echo $feed_id; ?>" target="_blank" class="btn btn-success btn-xs">Confirm If Respons</a>
    </td>

</tr><!-- tr Ends -->

<?php } ?>

</tbody><!--- tbody Ends --->

</table><!-- table table-bordered table-hover Ends -->

</div><!-- table-responsive Ends -->

<?php } ?>
