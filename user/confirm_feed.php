<?php

session_start();

if (!isset($_SESSION['user_email'])) {
    echo "<script>window.open('../checkout.php', '_self')</script>";
} else {

    include("includes/db.php");
    include("../includes/header.php");
    include("functions/functions.php");
    include("includes/main.php");

    if (isset($_GET['feed_id'])) {
        $feed_id = $_GET['feed_id'];
    }
?>

<div id="content"><!-- content Starts -->
    <div class="container"><!-- container Starts -->

        <div class="col-md-3"><!-- col-md-3 Starts -->
            <?php include("includes/sidebar.php"); ?>
        </div><!-- col-md-3 Ends -->

        <div class="col-md-9"><!-- col-md-9 Starts -->
            <div class="box"><!-- box Starts -->
                <h1 align="center">Please Confirm Your feedback</h1>

                <form action="confirm_feed.php?update_id=<?php echo $feed_id; ?>" method="post" enctype="multipart/form-data"><!--- form Starts -->
                    <div class="form-group"><!-- form-group Starts -->
                        <label>feedback ID:</label>
                        <input type="text" class="form-control" name="feed_id" value="<?php echo $feed_id; ?>" readonly>
                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->
                        <label>feedback Details:</label>
                        <textarea class="form-control" name="feedback_details" required></textarea>
                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->
                        <label>feedback Status:</label>
                        <select name="feed_status" class="form-control"><!-- select Starts -->
                            <option>Select Status</option>
                            <option>Pending</option>
                            <option>In Progress</option>
                            <option>Resolved</option>
                        </select><!-- select Ends -->
                    </div><!-- form-group Ends -->

                    <div class="text-center"><!-- text-center Starts -->
                        <button type="submit" name="confirm_feedback" class="btn btn-primary btn-lg">
                            <i class="fa fa-user-md"></i> Confirm feedback
                        </button>
                    </div><!-- text-center Ends -->
                </form><!--- form Ends -->

                <?php
                if (isset($_POST['confirm_feedback'])) {
                    $update_id = $_GET['update_id'];
                    $feedback_details = $_POST['feedback_details'];
                    $feed_status = $_POST['feed_status'];

                    $update_feedback = "UPDATE user_feed SET feedback='$feedback_details', feed_status='$feed_status' WHERE feed_id='$update_id'";
                    $run_update = mysqli_query($con, $update_feedback);

                    if ($run_update) {
                        echo "<script>alert('Your feedback has been updated.')</script>";
                        echo "<script>window.open('my_account.php?my_feedback', '_self')</script>";
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
