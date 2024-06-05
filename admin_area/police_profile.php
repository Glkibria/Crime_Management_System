<?php

 // Ensure the session is started

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php', '_self')</script>";
    exit();
} else {
?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Dashboard / Search Police Id and Name
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Search Police Id and Name
                </h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Police Id</label>
                        <div class="col-md-6">
                            <input type="text" name="police_id" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Police Name</label>
                        <div class="col-md-6">
                            <input type="text" name="police_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input type="submit" name="submit" value="Search" class="btn btn-primary form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

if (isset($_POST['submit'])) {
     // Ensure you include your database connection script

    $police_id = $_POST['police_id'];
    $police_name = $_POST['police_name'];

    // Using prepared statements to avoid SQL injection
    $stmt = $con->prepare("SELECT * FROM police WHERE police_id=? OR police_name=?");
    $stmt->bind_param("ss", $police_id, $police_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row_police = $result->fetch_assoc();
        $police_id = $row_police['police_id'];
        $police_name = $row_police['police_name'];
        $police_station = $row_police['police_station'];
        $police_email = $row_police['police_email'];
        $police_pass = $row_police['police_pass'];
        $new_police_image = $row_police['police_image'];
        $police_image = $row_police['police_image'];
       
        $police_country = $row_police['police_country'];
        $police_job = $row_police['police_job'];
        $police_contact = $row_police['police_contact'];
        $police_about = $row_police['police_about'];
?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Edit Profile
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Edit Profile
                </h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                        <label class="col-md-3 control-label">Police ID: </label>
                        <div class="col-md-6">
                            <input type="text" name="police_id" class="form-control" required value="<?php echo $police_id; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Police Name: </label>
                        <div class="col-md-6">
                            <input type="text" name="police_name" class="form-control" required value="<?php echo $police_name; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Police Station</label>
                        <div class="col-md-6">
                            <select name="station_name" class="form-control">
                                <option>Select a Police Station</option>
                                <?php
                                $get_p_station = "SELECT * FROM police_station";
                                $run_p_station = mysqli_query($con, $get_p_station);
                                while ($row_p_station = mysqli_fetch_array($run_p_station)) {
                                    $p_station_id = $row_p_station['station_id'];
                                    $station_name = $row_p_station['station_title'];
                                    echo "<option value='$station_name'>$station_name</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Police Email: </label>
                        <div class="col-md-6">
                            <input type="text" name="police_email" class="form-control" required value="<?php echo $police_email; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Police Password: </label>
                        <div class="col-md-6">
                            <input type="text" name="police_pass" class="form-control" required value="<?php echo $police_pass; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Police Country: </label>
                        <div class="col-md-6">
                            <input type="text" name="police_country" class="form-control" required value="<?php echo $police_country; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Police Job: </label>
                        <div class="col-md-6">
                            <input type="text" name="police_job" class="form-control" required value="<?php echo $police_job; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Police Contact: </label>
                        <div class="col-md-6">
                            <input type="text" name="police_contact" class="form-control" required value="<?php echo $police_contact; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Police About: </label>
                        <div class="col-md-6">
                            <textarea name="police_about" class="form-control" rows="3"><?php echo $police_about; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Police Image: </label>
                        <div class="col-md-6">
                            <input type="file" name="police_images" class="form-control">
                            <br>
                            <img src="police_images/<?php echo $police_image; ?>" width="70" height="70">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input type="submit" name="update" value="Update Police" class="btn btn-primary form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    } else {
        echo "<script>alert('No one found')</script>";
        echo "<script>window.open('index.php?view_police', '_self')</script>";
    }
}
?>

<?php
    if (isset($_POST['update'])) {
        // Ensure you include your database connection script
        $police_id = $_POST['police_id'];
        $police_name = $_POST['police_name'];
        $police_email = $_POST['police_email'];
        $police_pass = $_POST['police_pass'];
        $station_name = $_POST['station_name'];
        $police_country = $_POST['police_country'];
        $police_job = $_POST['police_job'];
        $police_contact = $_POST['police_contact'];
        $police_about = $_POST['police_about'];
        
        $police_image = $_FILES['police_images']['name'];
        $temp_police_image = $_FILES['police_images']['tmp_name'];

        move_uploaded_file($temp_police_image, "police_images/$police_image");

      if(empty($police_image)){

        $police_image =$new_police_image;
        
        }
        // Using prepared statements to avoid SQL injection
        $stmt = $con->prepare("UPDATE police SET police_name=?, police_station=?, police_email=?, police_pass=?, police_image=?, police_contact=?, police_country=?, police_job=?, police_about=? WHERE police_id=?");
        $stmt->bind_param("sssssssssi", $police_name, $station_name, $police_email, $police_pass, $police_image, $police_contact, $police_country, $police_job, $police_about, $police_id);
        $run_police = $stmt->execute();

        if ($run_police) {
           
            echo "<script>alert('Police Has Been Updated successfully')</script>";
            echo "<script>window.open('index.php?view_police', '_self')</script>";
        }
    }
?>

<?php }   ?> 
