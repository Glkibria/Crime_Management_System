<?php


if (!isset($_SESSION['police_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {


?>


    <div class="row"><!-- 1 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <ol class="breadcrumb"><!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"></i> Dashboard / Insert missingPerson

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 1 row Ends -->


    <div class="row"><!-- 2 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <div class="panel panel-default"><!-- panel panel-default Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <h3 class="panel-title"><!-- panel-title Starts -->

                        <i class="fa fa-money fa-fw"> </i> Insert missingPerson

                    </h3><!-- panel-title Ends -->

                </div><!-- panel-heading Ends -->

                <div class="panel-body"><!-- panel-body Starts -->

                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Missing Person Name </label>

                            <div class="col-md-6">

                                <input type="text" name="missingPerson_name" class="form-control">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Persons gender </label>

                            <div class="col-md-6">

                                <input type="radio" name="missingPerson_gender" value="male">

                                <label> Male </label>

                                <input type="radio" name="missingPerson_gender$missingPerson_gender" value="female">

                                <label> Female</label>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Missing Person contact </label>

                            <div class="col-md-6">

                                <input type="text" name="missingPerson_contact" class="form-control">

                            </div>

                        </div><!-- form-group Ends -->
                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> MissingPerson address</label>

                            <div class="col-md-6">

                                <input type="text" name="missingPerson_address" class="form-control">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Select Missing Person Image </label>

                            <div class="col-md-6">

                                <input type="file" name="missingPerson_image" class="form-control">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"> </label>

                            <div class="col-md-6">

                                <input type="submit" name="submit" class="form-control btn btn-primary" value=" Insert missingPerson ">

                            </div>

                        </div><!-- form-group Ends -->

                    </form><!-- form-horizontal Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->

    <?php

    if (isset($_POST['submit'])) {

        $missingPerson_name = $_POST['missingPerson_name'];

        $missingPerson_gender = $_POST['missingPerson_gender'];

        $missingPerson_contact = $_POST['missingPerson_contact'];

        $missingPerson_address = $_POST['missingPerson_address'];

        $missingPerson_image = $_FILES['missingPerson_image']['name'];

        $tmp_name = $_FILES['missingPerson_image']['tmp_name'];

        move_uploaded_file($tmp_name, "other_images/$missingPerson_image");

        $insert_missingPerson = "insert into missingperson (Person_name,Person_gender,Contact_Person,Contact_address,Person_image) values ('$missingPerson_name','$missingPerson_gender','$missingPerson_contact','$missingPerson_address','$missingPerson_image')";

        $run_missingPerson = mysqli_query($con, $insert_missingPerson);

        if ($run_missingPerson) {

            echo "<script>alert('New missingPerson Has Been Inserted')</script>";

            echo "<script>window.open('index.php?view_missingperson','_self')</script>";
        }
    }

    ?>

<?php } ?>