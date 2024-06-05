<?php

session_start();

if (!isset($_SESSION['user_email'])) {
    echo "<script>window.open('../checkout.php', '_self')</script>";
} else {

    include("includes/db.php");
    include("../includes/header.php");
    include("functions/functions.php");
    include("includes/main.php");

    if (isset($_GET['comp_id'])) {
        $comp_id = $_GET['comp_id'];
    }
?>

<div id="content"><!-- content Starts -->
    <div class="container"><!-- container Starts -->

        <div class="col-md-3"><!-- col-md-3 Starts -->
            <?php include("includes/sidebar.php"); ?>
        </div><!-- col-md-3 Ends -->

        <div class="col-md-9"><!-- col-md-9 Starts -->
            <div class="box"><!-- box Starts -->
                <h1 align="center">Please Confirm Your Complaint</h1>

                <form action="confirm.php?update_id=<?php echo $comp_id; ?>" method="post" enctype="multipart/form-data"><!--- form Starts -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label>Complaint ID:</label>
                        <input type="text" class="form-control" name="comp_id" value="<?php echo $comp_id; ?>" readonly>
                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->
                        <label>Complaint Details:</label>
                        <textarea class="form-control" name="complaint_details" required></textarea>
                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->
                        <label>Complaint Status:</label>
                        <select name="comp_status" class="form-control"><!-- select Starts -->
                            <option>Select Status</option>
                            <option>Pending</option>
                            <option>In Progress</option>
                            <option>Resolved</option>
                        </select><!-- select Ends -->
                    </div><!-- form-group Ends -->

                    <div class="text-center"><!-- text-center Starts -->
                        <button type="submit" name="confirm_complaint" class="btn btn-primary btn-lg">
                            <i class="fa fa-user-md"></i> Confirm Complaint
                        </button>
                    </div><!-- text-center Ends -->
                </form><!--- form Ends -->

                <?php
                if (isset($_POST['confirm_complaint'])) {
                    $update_id = $_GET['update_id'];
                    $complaint_details = $_POST['complaint_details'];
                    $comp_status = $_POST['comp_status'];

                    $update_complaint = "UPDATE user_comp SET complaint='$complaint_details', comp_status='$comp_status' WHERE comp_id='$update_id'";
                    $run_update = mysqli_query($con, $update_complaint);

                    if ($run_update) {
                        echo "<script>alert('Your complaint has been updated.')</script>";
                        echo "<script>window.open('my_account.php?my_complaint', '_self')</script>";
                    }
                }
                ?>

            </div><!-- box Ends -->
        </div><!-- col-md-9 Ends -->
    </div><!-- container Ends -->
</div><!-- content Ends -->

<?php
include("includes/footer.php");
?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php } ?>
