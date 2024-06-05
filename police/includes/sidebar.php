<?php


if (!isset($_SESSION['police_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {




?>

    <nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top Starts -->

        <div class="navbar-header"><!-- navbar-header Starts -->

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><!-- navbar-ex1-collapse Starts -->


                <span class="sr-only">Toggle Navigation</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>


            </button><!-- navbar-ex1-collapse Ends -->

            <a class="navbar-brand" href="index.php?dashboard">Police Panel</a>


        </div><!-- navbar-header Ends -->

        <ul class="nav navbar-right top-nav"><!-- nav navbar-right top-nav Starts -->

            <li class="dropdown"><!-- dropdown Starts -->

                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle Starts -->

                    <i class="fa fa-user"></i>

                    <?php echo $police_name; ?> <b class="caret"></b>


                </a><!-- dropdown-toggle Ends -->

                <ul class="dropdown-menu"><!-- dropdown-menu Starts -->

                    <li><!-- li Starts -->

                        <a href="index.php?police_profile=<?php echo $police_id; ?>">

                            <i class="fa fa-fw fa-user"></i> Profile


                        </a>

                    </li><!-- li Ends -->

                    <li><!-- li Starts -->

                        <a href="index.php?view_criminal">

                            <i class="fa fa-fw fa-envelope"></i> Criminal

                            <span class="badge"><?php echo $count_criminal; ?></span>


                        </a>

                    </li><!-- li Ends -->

                    <li><!-- li Starts -->

                        <a href="index.php?view_user">

                            <i class="fa fa-fw fa-gear"></i> user

                            <span class="badge"><?php echo $count_user; ?></span>


                        </a>

                    </li><!-- li Ends -->

                    <li><!-- li Starts -->

                        <a href="index.php?view_c_cat">

                            <i class="fa fa-fw fa-gear"></i> Criminal Categories

                            <span class="badge"><?php echo $count_criminal_categories; ?></span>


                        </a>

                    </li><!-- li Ends -->

                    <li class="divider"></li>

                    <li><!-- li Starts -->

                        <a href="logout.php">

                            <i class="fa fa-fw fa-power-off"> </i> Log Out

                        </a>

                    </li><!-- li Ends -->

                </ul><!-- dropdown-menu Ends -->




            </li><!-- dropdown Ends -->


        </ul><!-- nav navbar-right top-nav Ends -->

        <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

            <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

                <li><!-- li Starts -->

                    <a href="index.php?dashboard">

                        <i class="fa fa-fw fa-dashboard"></i> Dashboard

                    </a>

                </li><!-- li Ends -->

                <li><!-- criminal li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#criminal">

                        <i class="fa fa-fw fa-table"></i> Criminal

                        <i class="fa fa-fw fa-caret-down"></i>


                    </a>

                    <ul id="criminal" class="collapse">

                        <li>
                            <a href="index.php?insert_criminal"> Insert criminal </a>
                        </li>

                        <li>
                            <a href="index.php?view_criminal"> View criminal </a>
                        </li>


                    </ul>

                </li><!-- criminal li Ends -->

                

                


                <li><!-- manufacturer li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#missingperson"><!-- anchor Starts -->

                        <i class="fa fa-fw fa-briefcase"></i> Missingperson

                        <i class="fa fa-fw fa-caret-down"></i>


                    </a><!-- anchor Ends -->

                    <ul id="missingperson" class="collapse"><!-- ul collapse Starts -->

                        <li>
                            <a href="index.php?insert_missingperson"> Insert Missingperson </a>
                        </li>

                        <li>
                            <a href="index.php?view_missingperson"> View Missingperson </a>
                        </li>

                    </ul><!-- ul collapse Ends -->


                </li><!-- manufacturer li Ends -->


                <li><!-- li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#c_cat">

                        <i class="fa fa-fw fa-pencil"></i> Criminal Categories

                        <i class="fa fa-fw fa-caret-down"></i>


                    </a>

                    <ul id="c_cat" class="collapse">

                        <li>
                            <a href="index.php?insert_c_cat"> Insert Criminal Categories </a>
                        </li>

                        <li>
                            <a href="index.php?view_c_cat"> View Criminal Categories </a>
                        </li>


                    </ul>

                </li><!-- li Ends -->


                <li><!-- li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#cat">

                        <i class="fa fa-fw fa-arrows-v"></i> Categories

                        <i class="fa fa-fw fa-caret-down"></i>

                    </a>

                    <ul id="cat" class="collapse">

                        <li>
                            <a href="index.php?insert_cat"> Insert Category </a>
                        </li>

                        <li>
                            <a href="index.php?view_cats"> View Categories </a>
                        </li>


                    </ul>

                </li><!-- li Ends -->
                <li><!-- about us li Starts -->

<a href="index.php?view_comp">

    <i class="fa fa-fw fa-edit"></i> Veiw Complain

</a>

</li><!-- about us li Ends -->

<li><!-- about us li Starts -->

<a href="index.php?view_feed">

    <i class="fa fa-fw fa-edit"></i> Veiw Feedback

</a>

</li><!-- about us li Ends -->





                <li><!-- contact us li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#contact_us"><!-- anchor Starts -->

                        <i class="fa fa-fw fa-pencil"> </i> Contact Us Section

                        <i class="fa fa-fw fa-caret-down"></i>

                    </a><!-- anchor Ends -->

                    <ul id="contact_us" class="collapse">

                        <li>

                            <a href="index.php?edit_contact_us"> Edit Contact Us </a>

                        </li>

                        <li>

                            <a href="index.php?insert_enquiry"> Insert Enquiry Type </a>

                        </li>

                        <li>

                            <a href="index.php?view_enquiry"> View Enquiry Types </a>

                        </li>

                    </ul>

                </li><!-- contact us li Ends -->

               


                



                <li><!-- terms li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#terms"><!-- anchor Starts -->

                        <i class="fa fa-fw fa-table"></i> Terms

                        <i class="fa fa-fw fa-caret-down"></i>

                    </a><!-- anchor Ends -->

                    <ul id="terms" class="collapse"><!-- ul collapse Starts -->

                        <li>
                            <a href="index.php?insert_term"> Insert Terms </a>
                        </li>

                        <li>
                            <a href="index.php?view_terms"> View Terms </a>
                        </li>

                    </ul><!-- ul collapse Ends -->


                </li><!-- terms li Ends -->



                <li>

                    <a href="index.php?view_user">

                        <i class="fa fa-fw fa-edit"></i> View user

                    </a>

                </li>

                <li><!-- li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#police">

                        <i class="fa fa-fw fa-gear"></i> Police

                        <i class="fa fa-fw fa-caret-down"></i>


                    </a>

                    <ul id="police" class="collapse">

                        

                        <li>
                            <a href="index.php?view_police"> View police </a>
                        </li>

                        <li>
                            <a href="index.php?police_profile=<?php echo $police_id; ?>"> Edit police Profile </a>
                        </li>

                    </ul>

                </li><!-- li Ends -->



                <li><!-- li Starts -->

                    <a href="#" data-toggle="collapse" data-target="#admin">

                        <i class="fa fa-fw fa-gear"></i> Admin

                        <i class="fa fa-fw fa-caret-down"></i>


                    </a>

                    <ul id="admin" class="collapse">

                        

                        <li>
                            <a href="index.php?view_admin"> View Admin </a>
                        </li>

                        

                    </ul>

                </li><!-- li Ends -->

                <li><!-- li Starts -->

                    <a href="logout.php">

                        <i class="fa fa-fw fa-power-off"></i> Log Out

                    </a>

                </li><!-- li Ends -->

            </ul><!-- nav navbar-nav side-nav Ends -->

        </div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

    </nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php } ?>