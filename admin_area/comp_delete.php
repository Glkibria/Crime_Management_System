<?php


if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
   // Make sure to include your database connection file

    if (isset($_GET['comp_delete'])) {
        $delete_id = $_GET['comp_delete'];

        $delete_comp = "DELETE FROM user_comp WHERE comp_id='$delete_id'";
        $run_delete = mysqli_query($con, $delete_comp);

        if ($run_delete) {
            echo "<script>alert('Complaint Has Been Deleted')</script>";
            echo "<script>window.open('index.php?view_comp','_self')</script>";
        } else {
            echo "<script>alert('Error: Could not delete the complaint')</script>";
        }
    }
}
?>
