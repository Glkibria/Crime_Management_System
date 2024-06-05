<?php


if(!isset($_SESSION['police_email'])){
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts  --->
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / View feedback
            </li>
        </ol><!-- breadcrumb Ends  --->
    </div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <div class="panel panel-default"><!-- panel panel-default Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <h3 class="panel-title"><!-- panel-title Starts -->
                    <i class="fa fa-money fa-fw"></i> View feedback
                </h3><!-- panel-title Ends -->
            </div><!-- panel-heading Ends -->

            <div class="panel-body"><!-- panel-body Starts -->
                <div class="table-responsive"><!-- table-responsive Starts -->
                    <table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->
                        <thead><!-- thead Starts -->
                            <tr>
                                <th>#</th>
                                <th>User ID</th>
                                <th>Feedback Date</th>
                                <th>Status</th>
                                <th>Feedback</th>
                                <th>Action</th>
                                <th>Delete</th>
                            </tr>
                        </thead><!-- thead Ends -->

                        <tbody><!-- tbody Starts -->

                        <?php

                        $i = 0;
                       // Include your database connection file

                        $get_feed = "SELECT * FROM user_feed";
                        $run_feed = mysqli_query($con, $get_feed);

                        while ($row_feed = mysqli_fetch_array($run_feed)) {
                            $feed_id = $row_feed['feed_id'];
                            $user_id = $row_feed['user_id'];
                            $feed_date = $row_feed['feed_date'];
                            $feed_status = $row_feed['feed_status'];
                            $feedlaint = $row_feed['feedback'];

                            $i++;
                        ?>

                        <tr>
                            <td><?php echo $i; ?></td>
                            <td>
                                <?php 
                                $get_user = "SELECT user_email FROM user WHERE user_id='$user_id'";
                                $run_user = mysqli_query($con, $get_user);
                                $row_user = mysqli_fetch_array($run_user);
                                $user_email = $row_user['user_email'];
                                echo $user_email;
                                ?>
                            </td>
                            <td><?php echo $feed_date; ?></td>
                            <td>
                            <?php 
                                  if ($feed_status == 'Pending') {
                                    $feed_status = "<b style='color:red;'>Pending</b>";
                                } else if($feed_status == 'In Progress') {
                                    $feed_status = "<b style='color:brown;'>In Progress</b>";
                                }
                                else if($feed_status == 'Resolved') {
                                    $feed_status = "<b style='color:green;'>Resolved</b>";
                                }
                                else  {
                                    $feed_status = "<b style='color:black;'>$feed_status</b>";
                                }
                                echo $feed_status;
                               
                                ?>
                            </td>
                            <td><?php echo $feedlaint; ?></td>
                            <td>
                                <a href="index.php?edit_feed=<?php echo $feed_id; ?>">
                                    <i class="fa fa-bell-o"></i> Action
                                </a>
                            </td>
                            <td>
                                <a href="index.php?feed_delete=<?php echo $feed_id; ?>">
                                    <i class="fa fa-trash-o"></i> Delete
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

<?php } ?>
