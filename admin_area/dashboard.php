<?php



if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {




?>

    <div class="row"><!-- 1 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <!-- <h1 class="page-header">Dashboard</h1> -->

            <ol class="breadcrumb"><!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 1 row Ends -->


    <div class="row"><!-- 2 row Starts -->

        <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

            <div class="panel panel-primary"><!-- panel panel-primary Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <div class="row"><!-- panel-heading row Starts -->

                        <div class="col-xs-3"><!-- col-xs-3 Starts -->

                            <i class="fa fa-tasks fa-5x"> </i>

                        </div><!-- col-xs-3 Ends -->

                        <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                            <div class="huge"> <?php echo $count_criminal; ?> </div>

                            <div>criminal</div>

                        </div><!-- col-xs-9 text-right Ends -->

                    </div><!-- panel-heading row Ends -->

                </div><!-- panel-heading Ends -->

                <a href="index.php?view_criminal">

                    <div class="panel-footer"><!-- panel-footer Starts -->

                        <span class="pull-left"> View Details </span>

                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                        <div class="clearfix"></div>

                    </div><!-- panel-footer Ends -->

                </a>

            </div><!-- panel panel-primary Ends -->

        </div><!-- col-lg-3 col-md-6 Ends -->


        <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

            <div class="panel panel-green"><!-- panel panel-green Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <div class="row"><!-- panel-heading row Starts -->

                        <div class="col-xs-3"><!-- col-xs-3 Starts -->

                            <i class="fa fa-comments fa-5x"> </i>

                        </div><!-- col-xs-3 Ends -->

                        <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                            <div class="huge"> <?php echo $count_user; ?> </div>

                            <div>User</div>

                        </div><!-- col-xs-9 text-right Ends -->

                    </div><!-- panel-heading row Ends -->

                </div><!-- panel-heading Ends -->

                <a href="index.php?view_user">

                    <div class="panel-footer"><!-- panel-footer Starts -->

                        <span class="pull-left"> View Details </span>

                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                        <div class="clearfix"></div>

                    </div><!-- panel-footer Ends -->

                </a>

            </div><!-- panel panel-green Ends -->

        </div><!-- col-lg-3 col-md-6 Ends -->


        <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

            <div class="panel panel-yellow"><!-- panel panel-yellow Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <div class="row"><!-- panel-heading row Starts -->

                        <div class="col-xs-3"><!-- col-xs-3 Starts -->

                            <i class="fa fa-pencil fa-5x"> </i>

                        </div><!-- col-xs-3 Ends -->

                        <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                            <div class="huge"> <?php echo $count_criminal_categories; ?> </div>

                            <div>criminal Categories</div>

                        </div><!-- col-xs-9 text-right Ends -->

                    </div><!-- panel-heading row Ends -->

                </div><!-- panel-heading Ends -->

                <a href="index.php?view_p_cats">

                    <div class="panel-footer"><!-- panel-footer Starts -->

                        <span class="pull-left"> View Details </span>

                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                        <div class="clearfix"></div>

                    </div><!-- panel-footer Ends -->

                </a>

            </div><!-- panel panel-yellow Ends -->

        </div><!-- col-lg-3 col-md-6 Ends -->


        <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

            <div class="panel panel-red"><!-- panel panel-red Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <div class="row"><!-- panel-heading row Starts -->

                        <div class="col-xs-3"><!-- col-xs-3 Starts -->

                            <i class="fa fa-support fa-5x"> </i>

                        </div><!-- col-xs-3 Ends -->

                        <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                            <div class="huge"> <?php echo $count_total_comp; ?> </div>

                            <div>Complain</div>

                        </div><!-- col-xs-9 text-right Ends -->

                    </div><!-- panel-heading row Ends -->

                </div><!-- panel-heading Ends -->

                <a href="index.php?view_comp">

                    <div class="panel-footer"><!-- panel-footer Starts -->

                        <span class="pull-left"> View Details </span>

                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                        <div class="clearfix"></div>

                    </div><!-- panel-footer Ends -->

                </a>

            </div><!-- panel panel-red Ends -->

        </div><!-- col-lg-3 col-md-6 Ends -->



    </div><!-- 2 row Ends -->







    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-warning"><!-- panel panel-red Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <div class="row"><!-- panel-heading row Starts -->

                    <div class="col-xs-3"><!-- col-xs-3 Starts -->

                        <i class="fa fa-spinner fa-5x"> </i>

                    </div><!-- col-xs-3 Ends -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                        <div class="huge"> <?php echo $count_pending_comp ?> </div>

                        <div>Pending Complain</div>

                    </div><!-- col-xs-9 text-right Ends -->

                </div><!-- panel-heading row Ends -->

            </div><!-- panel-heading Ends -->

            <a href="index.php?view_comp">

                <div class="panel-footer"><!-- panel-footer Starts -->

                    <span class="pull-left"> View Details </span>

                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Ends -->

            </a>

        </div><!-- panel panel-red Ends -->

    </div><!-- col-lg-3 col-md-6 Ends -->



    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-success"><!-- panel panel-red Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <div class="row"><!-- panel-heading row Starts -->

                    <div class="col-xs-3"><!-- col-xs-3 Starts -->

                        <i class="fa fa-check fa-5x"> </i>

                    </div><!-- col-xs-3 Ends -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                        <div class="huge"> <?php echo $count_completed_comp ?> </div>

                        <div>Completed Complain</div>

                    </div><!-- col-xs-9 text-right Ends -->

                </div><!-- panel-heading row Ends -->

            </div><!-- panel-heading Ends -->

            <a href="index.php?view_comp">

                <div class="panel-footer"><!-- panel-footer Starts -->

                    <span class="pull-left"> View Details </span>

                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Ends -->

            </a>

        </div><!-- panel panel-red Ends -->

    </div><!-- col-lg-3 col-md-6 Ends -->

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-info"><!-- panel panel-red Starts -->

    <div class="panel-heading"><!-- panel-heading Starts -->

        <div class="row"><!-- panel-heading row Starts -->

            <div class="col-xs-3"><!-- col-xs-3 Starts -->

                <i class="fa fa-calendar fa-5x"> </i>

            </div><!-- col-xs-3 Ends -->

            <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                <div class="huge"> <?php echo $count_In_Progress ?> </div>

                <div>In Progress Complain</div>

            </div><!-- col-xs-9 text-right Ends -->

        </div><!-- panel-heading row Ends -->

    </div><!-- panel-heading Ends -->

    <a href="index.php?view_comp">

        <div class="panel-footer"><!-- panel-footer Starts -->

            <span class="pull-left"> View Details </span>

            <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

            <div class="clearfix"></div>

        </div><!-- panel-footer Ends -->

    </a>

</div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->

    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-danger"><!-- panel panel-red Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <div class="row"><!-- panel-heading row Starts -->

                    <div class="col-xs-3"><!-- col-xs-3 Starts -->

                        <i class="fa fa-comments-o fa-5x"> </i>

                    </div><!-- col-xs-3 Ends -->

                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                        <div class="huge"> <?php echo $count_total_feed; ?> </div>

                        <div>Total Feedback</div>

                    </div><!-- col-xs-9 text-right Ends -->

                </div><!-- panel-heading row Ends -->

            </div><!-- panel-heading Ends -->

            <a href="index.php?view_feed">

                <div class="panel-footer"><!-- panel-footer Starts -->

                    <span class="pull-left"> View Details </span>

                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                    <div class="clearfix"></div>

                </div><!-- panel-footer Ends -->

            </a>

        </div><!-- panel panel-red Ends -->

    </div><!-- col-lg-3 col-md-6 Ends -->






    <div class="row"><!-- 3 row Starts -->

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
                                if ($comp_status == 'Resolved') {
                                    echo '<div style="color:green;">Resolved</div>';
                                } else if( $comp_status == 'Pending' ) {
                                    echo '<div style="color:red;">Pending</div>';
                                }
                                else if($comp_status == 'In Progress'){

                                    echo '<div style="color:brown;">In Progress</div>';
                                }
                                else{
                                    echo $comp_status;
                                }
                                   
                                ?>
                            </td>
                            <td><?php echo $complaint; ?></td>
                           
                        </tr>

                        <?php } ?>

                        </tbody><!-- tbody Ends -->
                    </table><!-- table table-bordered table-hover table-striped Ends -->
                </div><!-- table-responsive Ends -->
                <div class="text-right"><!-- text-right Starts -->

                        <a href="index.php?view_comp">

                            View All Complain <i class="fa fa-arrow-circle-right"></i>

                        </a>

                    </div><!-- text-right Ends -->

            </div><!-- panel-body Ends -->
        </div><!-- panel panel-default Ends -->
    </div><!-- col-lg-12 Ends -->


    <div class="col-lg-12"><!-- col-lg-12 Starts -->
        <div class="panel panel-default"><!-- panel panel-default Starts -->
            <div class="panel-heading"><!-- panel-heading Starts -->
                <h3 class="panel-title"><!-- panel-title Starts -->
                    <i class="fa fa-money fa-fw"></i> View feedlaints
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
                            $feedback= $row_feed['feedback'];

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
                                if ($feed_status == 'Resolved') {
                                    echo '<div style="color:green;">Resolved</div>';
                                } else if( $feed_status == 'Pending' ) {
                                    echo '<div style="color:red;">Pending</div>';
                                }
                                else if($feed_status == 'In Progress'){

                                    echo '<div style="color:brown;">In Progress</div>';
                                }
                                else{
                                    echo $feed_status;
                                }
                                   
                                ?>
                            </td>
                            <td><?php echo $feedback; ?></td>
                            

                        <?php } ?>

                        </tbody><!-- tbody Ends -->
                    </table><!-- table table-bordered table-hover table-striped Ends -->
                </div><!-- table-responsive Ends -->
                <div class="text-right"><!-- text-right Starts -->

                        <a href="index.php?view_feed">

                            View All Feedback <i class="fa fa-arrow-circle-right"></i>

                        </a>

                    </div><!-- text-right Ends -->

            </div><!-- panel-body Ends -->
        </div><!-- panel panel-default Ends -->
    </div><!-- col-lg-12 Ends -->

     

    </div> <!-- 3 row Ends -->

    <?php } ?>