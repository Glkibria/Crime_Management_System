<?php

if (!isset($_SESSION['police_email'])) {

  echo "<script>window.open('login.php','_self')</script>";
} else {

?>
  <!DOCTYPE html>

  <html>

  <head>

    <name> Insert criminal </name>


    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
      tinymce.init({
        selector: '#criminal_desc,#criminal_features'
      });
    </script>

  </head>

  <body>

    <div class="row"><!-- row Starts -->

      <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <ol class="breadcrumb"><!-- breadcrumb Starts -->

          <li class="active">

            <i class="fa fa-dashboard"> </i> Dashboard / Insert criminal

          </li>

        </ol><!-- breadcrumb Ends -->

      </div><!-- col-lg-12 Ends -->

    </div><!-- row Ends -->


    <div class="row"><!-- 2 row Starts -->

      <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <div class="panel panel-default"><!-- panel panel-default Starts -->

          <div class="panel-heading"><!-- panel-heading Starts -->

            <h3 class="panel-name">

              <i class="fa fa-money fa-fw"></i> Insert Criminal

            </h3>

          </div><!-- panel-heading Ends -->

          <div class="panel-body"><!-- panel-body Starts -->

            <form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

              <div class="form-group"><!-- form-group Starts -->

                <label class="col-md-3 control-label"> Criminal name </label>

                <div class="col-md-6">

                  <input type="text" name="criminal_name" class="form-control" required>

                </div>

              </div><!-- form-group Ends -->


              <div class="form-group"><!-- form-group Starts -->

                <label class="col-md-3 control-label"> Criminal Url </label>

                <div class="col-md-6">

                  <input type="text" name="criminal_url" class="form-control" required>

                  <br>

                  <p style="font-size:15px; font-weight:bold;">



                  </p>

                </div>

              </div><!-- form-group Ends -->


              


              <div class="form-group"><!-- form-group Starts -->

                <label class="col-md-3 control-label"> Criminal Category </label>

                <div class="col-md-6">

                  <select name="criminal_cat" class="form-control">

                    <option> Select a criminal Category </option>


                    <?php

                    $get_p_cats = "select * from criminal_categories";

                    $run_p_cats = mysqli_query($con, $get_p_cats);

                    while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

                      $p_cat_id = $row_p_cats['criminal_cat_id'];

                      $p_cat_name = $row_p_cats['criminal_cat_title'];

                      echo "<option value='$p_cat_id' >$p_cat_name</option>";
                    }


                    ?>


                  </select>

                </div>

              </div><!-- form-group Ends -->

              <div class="form-group"><!-- form-group Starts -->

                <label class="col-md-3 control-label"> Category </label>

                <div class="col-md-6">


                  <select name="cat" class="form-control">

                    <option> Select a Category </option>

                    <?php

                    $get_cat = "select * from categories ";

                    $run_cat = mysqli_query($con, $get_cat);

                    while ($row_cat = mysqli_fetch_array($run_cat)) {

                      $cat_id = $row_cat['cat_id'];

                      $cat_name = $row_cat['cat_title'];

                      echo "<option value='$cat_id'>$cat_name</option>";
                    }

                    ?>


                  </select>

                </div>

              </div><!-- form-group Ends -->

              <div class="form-group"><!-- form-group Starts -->

                <label class="col-md-3 control-label"> Criminal Image 1 </label>

                <div class="col-md-6">

                  <input type="file" name="criminal_img1" class="form-control" required>

                </div>

              </div><!-- form-group Ends -->

              <div class="form-group"><!-- form-group Starts -->

                <label class="col-md-3 control-label"> Criminal Image 2 </label>

                <div class="col-md-6">

                  <input type="file" name="criminal_img2" class="form-control" required>

                </div>

              </div><!-- form-group Ends -->

              <div class="form-group"><!-- form-group Starts -->

                <label class="col-md-3 control-label"> Criminal Image 3 </label>

                <div class="col-md-6">

                  <input type="file" name="criminal_img3" class="form-control" required>

                </div>

              </div><!-- form-group Ends -->

              

              <div class="form-group"><!-- form-group Starts -->

                <label class="col-md-3 control-label"> Criminal Keywords </label>

                <div class="col-md-6">

                  <input type="text" name="criminal_keywords" class="form-control" required>

                </div>

              </div><!-- form-group Ends -->

              <div class="form-group"><!-- form-group Starts -->

                <label class="col-md-3 control-label"> Criminal Tabs </label>

                <div class="col-md-6">

                  <ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

                    <li class="active">

                      <a data-toggle="tab" href="#description"> Criminal Description </a>

                  

                  </ul><!-- nav nav-tabs Ends -->

                  <div class="tab-content"><!-- tab-content Starts -->

                    <div id="description" class="tab-pane fade in active"><!-- description tab-pane fade in active Starts -->

                      <br>

                      <textarea name="criminal_desc" class="form-control" rows="15" id="criminal_desc">


</textarea>

                    </div><!-- description tab-pane fade in active Ends -->


                    <div id="features" class="tab-pane fade in"><!-- features tab-pane fade in Starts -->

                      <br>

                     


</textarea>

                    </div><!-- features tab-pane fade in Ends -->


                    <div id="video" class="tab-pane fade in"><!-- video tab-pane fade in Starts -->

                      <br>

                      <textarea name="criminal_video" class="form-control" rows="15">


</textarea>

                    </div><!-- video tab-pane fade in Ends -->


                  </div><!-- tab-content Ends -->

                </div>

              </div><!-- form-group Ends -->

              <div class="form-group"><!-- form-group Starts -->

                <label class="col-md-3 control-label"> Criminal Label </label>

                <div class="col-md-6">

                  <input type="text" name="criminal_label" class="form-control" required>

                </div>

              </div><!-- form-group Ends -->

              <div class="form-group"><!-- form-group Starts -->

                <label class="col-md-3 control-label"></label>

                <div class="col-md-6">

                  <input type="submit" name="submit" value="Insert criminal" class="btn btn-primary form-control">

                </div>

              </div><!-- form-group Ends -->

            </form><!-- form-horizontal Ends -->

          </div><!-- panel-body Ends -->

        </div><!-- panel panel-default Ends -->

      </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->




  </body>

  </html>

  <?php

  if (isset($_POST['submit'])) {

    $criminal_name = $_POST['criminal_name'];
    $criminal_cat = $_POST['criminal_cat'];
    $cat = $_POST['cat'];
   
    
    $criminal_desc = $_POST['criminal_desc'];
    $criminal_keywords = $_POST['criminal_keywords'];

    

    $criminal_label = $_POST['criminal_label'];

    $criminal_url = $_POST['criminal_url'];



    $criminal_video = $_POST['criminal_video'];

    $status = "criminal";

    $criminal_img1 = $_FILES['criminal_img1']['name'];
    $criminal_img2 = $_FILES['criminal_img2']['name'];
    $criminal_img3 = $_FILES['criminal_img3']['name'];

    $temp_name1 = $_FILES['criminal_img1']['tmp_name'];
    $temp_name2 = $_FILES['criminal_img2']['tmp_name'];
    $temp_name3 = $_FILES['criminal_img3']['tmp_name'];

    move_uploaded_file($temp_name1, "criminal_images/$criminal_img1");
    move_uploaded_file($temp_name2, "criminal_images/$criminal_img2");
    move_uploaded_file($temp_name3, "criminal_images/$criminal_img3");

    $insert_criminal = "insert into criminal (criminal_cat_id,cat_id,date,criminal_name,criminal_url,criminal_img1,criminal_img2,criminal_img3,criminal_desc,criminal_video,criminal_keywords,criminal_label,status) values ('$criminal_cat','$cat',NOW(),'$criminal_name','$criminal_url','$criminal_img1','$criminal_img2','$criminal_img3','$criminal_desc','$criminal_video','$criminal_keywords','$criminal_label','$status')";

    $run_criminal = mysqli_query($con, $insert_criminal);

    if ($run_criminal) {

      echo "<script>alert('criminal has been inserted successfully')</script>";

      echo "<script>window.open('index.php?view_criminal','_self')</script>";
    }
  }

  ?>

<?php } ?>