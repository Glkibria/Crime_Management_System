<?php


if (!isset($_SESSION['police_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
   // Make sure to include your database connection file

    if (isset($_GET['feed_delete'])) {
        $delete_id = $_GET['feed_delete'];

        $delete_feed = "DELETE FROM user_feed WHERE feed_id='$delete_id'";
        $run_delete = mysqli_query($con, $delete_feed);

        if ($run_delete) {
            echo "<script>alert('feedback Has Been Deleted')</script>";
            echo "<script>window.open('index.php?view_feed','_self')</script>";
        } else {
            echo "<script>alert('Error: Could not delete the feedlaint')</script>";
        }
    }
}
?>
