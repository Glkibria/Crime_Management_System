<?php


if (!isset($_SESSION['police_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
    include("includes/db.php");

    if (isset($_GET['edit_criminal'])) {
        $edit_id = $_GET['edit_criminal'];
        $get_p = "SELECT * FROM criminal WHERE criminal_id='$edit_id'";
        $run_edit = mysqli_query($con, $get_p);
        $row_edit = mysqli_fetch_array($run_edit);

        $c_id = $row_edit['criminal_id'];
        $c_name = $row_edit['criminal_name'];
        $c_cat = $row_edit['criminal_cat_id'];
        $cat = $row_edit['cat_id'];
        $c_image1 = $row_edit['criminal_img1'];
        $c_image2 = $row_edit['criminal_img2'];
        $c_image3 = $row_edit['criminal_img3'];
        $new_c_image1 = $row_edit['criminal_img1'];
        $new_c_image2 = $row_edit['criminal_img2'];
        $new_c_image3 = $row_edit['criminal_img3'];
        $c_desc = $row_edit['criminal_desc'];
        $c_keywords = $row_edit['criminal_keywords'];
        $c_label = $row_edit['criminal_label'];
        $c_url = $row_edit['criminal_url'];
        $c_video = $row_edit['criminal_video'];
        $c_features = isset($row_edit['criminal_features']) ? $row_edit['criminal_features'] : '';
        
        $get_c_cat = "SELECT * FROM criminal_categories WHERE criminal_cat_id='$c_cat'";
        $run_c_cat = mysqli_query($con, $get_c_cat);
        $row_c_cat = mysqli_fetch_array($run_c_cat);
        $c_cat_name = $row_c_cat['criminal_cat_title'];

        $get_cat = "SELECT * FROM categories WHERE cat_id='$cat'";
        $run_cat = mysqli_query($con, $get_cat);
        $row_cat = mysqli_fetch_array($run_cat);
        $cat_name = $row_cat['cat_title'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Criminal</title>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#criminal_desc, #criminal_features'
        });
    </script>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Edit Criminal
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Edit Criminal
                    </h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Criminal Name</label>
                            <div class="col-md-6">
                                <input type="text" name="criminal_name" class="form-control" required value="<?php echo htmlspecialchars($c_name); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Criminal URL</label>
                            <div class="col-md-6">
                                <input type="text" name="criminal_url" class="form-control" required value="<?php echo htmlspecialchars($c_url); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Criminal Category</label>
                            <div class="col-md-6">
                                <select name="criminal_cat" class="form-control">
                                    <option value="<?php echo $c_cat; ?>"> <?php echo htmlspecialchars($c_cat_name); ?> </option>
                                    <?php
                                    $get_c_cats = "SELECT * FROM criminal_categories";
                                    $run_c_cats = mysqli_query($con, $get_c_cats);
                                    while ($row_c_cats = mysqli_fetch_array($run_c_cats)) {
                                        $c_cat_id = $row_c_cats['criminal_cat_id'];
                                        $c_cat_name = $row_c_cats['criminal_cat_title'];
                                        echo "<option value='$c_cat_id'>".htmlspecialchars($c_cat_name)."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Category</label>
                            <div class="col-md-6">
                                <select name="cat" class="form-control">
                                    <option value="<?php echo $cat; ?>"> <?php echo htmlspecialchars($cat_name); ?> </option>
                                    <?php
                                    $get_cat = "SELECT * FROM categories";
                                    $run_cat = mysqli_query($con, $get_cat);
                                    while ($row_cat = mysqli_fetch_array($run_cat)) {
                                        $cat_id = $row_cat['cat_id'];
                                        $cat_name = $row_cat['cat_title'];
                                        echo "<option value='$cat_id'>".htmlspecialchars($cat_name)."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Criminal Image 1</label>
                            <div class="col-md-6">
                                <input type="file" name="criminal_img1" class="form-control">
                                <br><img src="criminal_images/<?php echo htmlspecialchars($c_image1); ?>" width="70" height="70">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Criminal Image 2</label>
                            <div class="col-md-6">
                                <input type="file" name="criminal_img2" class="form-control">
                                <br><img src="criminal_images/<?php echo htmlspecialchars($c_image2); ?>" width="70" height="70">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Criminal Image 3</label>
                            <div class="col-md-6">
                                <input type="file" name="criminal_img3" class="form-control">
                                <br><img src="criminal_images/<?php echo htmlspecialchars($c_image3); ?>" width="70" height="70">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Criminal Keywords</label>
                            <div class="col-md-6">
                                <input type="text" name="criminal_keywords" class="form-control" required value="<?php echo htmlspecialchars($c_keywords); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Criminal Tabs</label>
                            <div class="col-md-6">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#description">Criminal Description</a></li>
                                    <li><a data-toggle="tab" href="#features">Criminal Features</a></li>
                                    <li><a data-toggle="tab" href="#video">Sounds And Videos</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="description" class="tab-pane fade in active">
                                        <br>
                                        <textarea name="criminal_desc" class="form-control" rows="15" id="criminal_desc"><?php echo htmlspecialchars($c_desc); ?></textarea>
                                    </div>
                                    <div id="features" class="tab-pane fade in">
                                        <br>
                                        <textarea name="criminal_features" class="form-control" rows="15" id="criminal_features"><?php echo htmlspecialchars($c_features); ?></textarea>
                                    </div>
                                    <div id="video" class="tab-pane fade in">
                                        <br>
                                        <textarea name="criminal_video" class="form-control" rows="15"><?php echo htmlspecialchars($c_video); ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Criminal Label</label>
                            <div class="col-md-6">
                                <input type="text" name="criminal_label" class="form-control" required value="<?php echo htmlspecialchars($c_label); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-6">
                                <input type="submit" name="update" value="Update Criminal" class="btn btn-primary form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    if (isset($_POST['update'])) {
        $criminal_name = mysqli_real_escape_string($con, $_POST['criminal_name']);
        $criminal_cat = mysqli_real_escape_string($con, $_POST['criminal_cat']);
        $cat = mysqli_real_escape_string($con, $_POST['cat']);
        $criminal_desc = mysqli_real_escape_string($con, $_POST['criminal_desc']);
        $criminal_keywords = mysqli_real_escape_string($con, $_POST['criminal_keywords']);
        $criminal_label = mysqli_real_escape_string($con, $_POST['criminal_label']);
        $criminal_url = mysqli_real_escape_string($con, $_POST['criminal_url']);
        $criminal_features = mysqli_real_escape_string($con, $_POST['criminal_features']);
        $criminal_video = mysqli_real_escape_string($con, $_POST['criminal_video']);
        $status = "criminal";

        $criminal_img1 = $_FILES['criminal_img1']['name'];
        $criminal_img2 = $_FILES['criminal_img2']['name'];
        $criminal_img3 = $_FILES['criminal_img3']['name'];

        $tmp_name1 = $_FILES['criminal_img1']['tmp_name'];
        $tmp_name2 = $_FILES['criminal_img2']['tmp_name'];
        $tmp_name3 = $_FILES['criminal_img3']['tmp_name'];

        if (empty($criminal_img1)) {
            $criminal_img1 = $new_c_image1;
        }

        if (empty($criminal_img2)) {
            $criminal_img2 = $new_c_image2;
        }

        if (empty($criminal_img3)) {
            $criminal_img3 = $new_c_image3;
        }

        move_uploaded_file($tmp_name1, "criminal_images/$criminal_img1");
        move_uploaded_file($tmp_name2, "criminal_images/$criminal_img2");
        move_uploaded_file($tmp_name3, "criminal_images/$criminal_img3");

        $update_criminal = "UPDATE criminal SET 
            criminal_cat_id='$criminal_cat',
            cat_id='$cat',
            date=NOW(),
            criminal_name='$criminal_name',
            criminal_url='$criminal_url',
            criminal_img1='$criminal_img1',
            criminal_img2='$criminal_img2',
            criminal_img3='$criminal_img3',
            criminal_desc='$criminal_desc',
            criminal_video='$criminal_video',
            criminal_keywords='$criminal_keywords',
            criminal_label='$criminal_label',
            status='$status' 
            WHERE criminal_id='$c_id'";

        $run_criminal = mysqli_query($con, $update_criminal);

        if ($run_criminal) {
            echo "<script>alert('Criminal has been updated successfully');</script>";
            echo "<script>window.open('index.php?view_criminal','_self');</script>";
        }
    }

?>
<?php } ?>
