<?php


if(!isset($_SESSION['police_email'])){
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<div class="row"><!-- 1 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <ol class="breadcrumb"><!-- breadcrumb Starts  --->
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / View Complaints
            </li>
        </ol><!-- breadcrumb Ends  --->
    </div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->
    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <div class="panel panel-default"><!-- panel panel-default Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <h3 class="panel-title"><!-- panel-title Starts -->
                    <i class="fa fa-money fa-fw"></i> View Complaints
                </h3><!-- panel-title Ends -->
            </div><!-- panel-heading Ends -->

            <div class="panel-body"><!-- panel-body Starts -->
                <div class="table-responsive"><!-- table-responsive Starts -->
                    <table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->
                        <thead><!-- thead Starts -->
                            <tr>
                                <th>#</th>
                                <th>User ID</th>
                                <th>Complaint Date</th>
                                <th>Status</th>
                                <th>Complaint</th>
                                <th>Action</th>
                                <th>Delete</th>
                            </tr>
                        </thead><!-- thead Ends -->

                        <tbody><!-- tbody Starts -->

                        <?php

                        $i = 0;
                       // Include your database connection file

                        $get_comp = "SELECT * FROM user_comp";
                        $run_comp = mysqli_query($con, $get_comp);

                        while ($row_comp = mysqli_fetch_array($run_comp)) {
                            $comp_id = $row_comp['comp_id'];
                            $user_id = $row_comp['user_id'];
                            $comp_date = $row_comp['comp_date'];
                            $comp_status = $row_comp['comp_status'];
                            $complaint = $row_comp['complaint'];

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
                            <td><?php echo $comp_date; ?></td>
                            <td>
                            <?php 
                                  if ($comp_status == 'Pending') {
                                    $comp_status = "<b style='color:red;'>Pending</b>";
                                } else if($comp_status == 'In Progress') {
                                    $comp_status = "<b style='color:brown;'>In Progress</b>";
                                }
                                else if($comp_status == 'Resolved') {
                                    $comp_status = "<b style='color:green;'>Resolved</b>";
                                }
                                else  {
                                    $comp_status = "<b style='color:black;'>$comp_status</b>";
                                }
                                echo $comp_status;
                               
                                ?>
                            </td>
                            <td><?php echo $complaint; ?></td>
                            <td>
                                <a href="index.php?edit_complaint=<?php echo $comp_id; ?>">
                                    <i class="fa fa-bell-o"></i> Action
                                </a>
                            </td>
                            <td>
                                <a href="index.php?comp_delete=<?php echo $comp_id; ?>">
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
