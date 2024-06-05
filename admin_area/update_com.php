<?php

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
} else {

    if(isset($_GET['edit_complaint'])){
        $edit_id = $_GET['edit_complaint'];
        $get_comp = "SELECT * FROM user_comp WHERE comp_id='$edit_id'";
        $run_comp = mysqli_query($con, $get_comp);
        $row_comp = mysqli_fetch_array($run_comp);

        $comp_id = $row_comp['comp_id'];
        $user_id = $row_comp['user_id'];
        $complaint = $row_comp['complaint'];
        $comp_status = $row_comp['comp_status'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin - Update Complaint</title>
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
                    <h1 align="center">Update Complaint</h1>

                    <form action="" method="post" enctype="multipart/form-data"><!--- form Starts -->
                        <div class="form-group"><!-- form-group Starts -->
                            <label>Complaint ID:</label>
                            <input type="text" class="form-control" name="comp_id" value="<?php echo $comp_id; ?>" readonly>
                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->
                            <label>Complaint Details:</label>
                            <textarea class="form-control" name="complaint_details" required><?php echo $complaint; ?></textarea>
                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->
                            <label>Complaint Status:</label>
                            <select name="comp_status" class="form-control"><!-- select Starts -->
                                <option value="Pending" <?php if($comp_status == 'Pending') echo 'selected'; ?>>Pending</option>
                                <option value="In Progress" <?php if($comp_status == 'In Progress') echo 'selected'; ?>>In Progress</option>
                                <option value="Resolved" <?php if($comp_status == 'Resolved') echo 'selected'; ?>>Resolved</option>
                            </select><!-- select Ends -->
                        </div><!-- form-group Ends -->

                        <div class="text-center"><!-- text-center Starts -->
                            <button type="submit" name="update_complaint" class="btn btn-primary btn-lg">
                                <i class="fa fa-user-md"></i> Update Complaint
                            </button>
                        </div><!-- text-center Ends -->
                    </form><!--- form Ends -->

                    <?php
                    if (isset($_POST['update_complaint'])) {
                      
                        $complaint_details = $_POST['complaint_details'];
                        $comp_status = $_POST['comp_status'];

                        $update_complaint = "UPDATE user_comp SET complaint='$complaint_details', comp_status='$comp_status' WHERE comp_id='$comp_id'";
                        $run_update = mysqli_query($con, $update_complaint);

                        if ($run_update) {
                            echo "<script>alert('Complaint has been updated successfully.')</script>";
                            echo "<script>window.open('index.php?view_comp', '_self')</script>";
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
