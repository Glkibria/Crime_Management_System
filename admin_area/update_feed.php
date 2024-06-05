<?php

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
} else {

    if(isset($_GET['edit_feed'])){
        $edit_id = $_GET['edit_feed'];
        $get_feed = "SELECT * FROM user_feed WHERE feed_id='$edit_id'";
        $run_feed = mysqli_query($con, $get_feed);
        $row_feed = mysqli_fetch_array($run_feed);

        $feed_id = $row_feed['feed_id'];
        $user_id = $row_feed['user_id'];
        $feedback = $row_feed['feedback'];
        $feed_status = $row_feed['feed_status'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Update feedback</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div id="content"><!-- content Starts -->
        <div class="container"><!-- container Starts -->
            <div class="col-md-3"><!-- col-md-3 Starts -->
                <?php include("includes/sidebar.php"); ?>
            </div><!-- col-md-3 Ends -->

            <div class="col-md-6"><!-- col-md-9 Starts -->
                <div class="box"><!-- box Starts -->
                    <h1 align="center">Update feedback</h1>

                    <form action="" method="post" enctype="multipart/form-data"><!--- form Starts -->
                        <div class="form-group"><!-- form-group Starts -->
                            <label>feedback ID:</label>
                            <input type="text" class="form-control" name="feed_id" value="<?php echo $feed_id; ?>" readonly>
                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->
                            <label>feedback Details:</label>
                            <textarea class="form-control" name="feedback_details" required><?php echo $feedback; ?></textarea>
                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->
                            <label>feedback Status:</label>
                            <select name="feed_status" class="form-control"><!-- select Starts -->
                                <option value="Pending" <?php if($feed_status == 'Pending') echo 'selected'; ?>>Pending</option>
                                <option value="In Progress" <?php if($feed_status == 'In Progress') echo 'selected'; ?>>In Progress</option>
                                <option value="Resolved" <?php if($feed_status == 'Resolved') echo 'selected'; ?>>Resolved</option>
                            </select><!-- select Ends -->
                        </div><!-- form-group Ends -->

                        <div class="text-center"><!-- text-center Starts -->
                            <button type="submit" name="update_feedback" class="btn btn-primary btn-lg">
                                <i class="fa fa-user-md"></i> Update feedback
                            </button>
                        </div><!-- text-center Ends -->
                    </form><!--- form Ends -->

                    <?php
                    if (isset($_POST['update_feedback'])) {
                      
                        $feedback_details = $_POST['feedback_details'];
                        $feed_status = $_POST['feed_status'];

                        $update_feedback = "UPDATE user_feed SET feedback='$feedback_details', feed_status='$feed_status' WHERE feed_id='$feed_id'";
                        $run_update = mysqli_query($con, $update_feedback);

                        if ($run_update) {
                            echo "<script>alert('feedback has been updated successfully.')</script>";
                            echo "<script>window.open('index.php?view_feed', '_self')</script>";
                        }
                    }
                    ?>

                </div><!-- box Ends -->
            </div><!-- col-md-9 Ends -->
        </div><!-- container Ends -->
    </div><!-- content Ends -->
</body>
</html>
<?php } ?>
