<?php

if(!isset($_SESSION['police_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['police_delete'])){

$delete_id = $_GET['police_delete'];

$delete_police = "delete from police where admin_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_police);

if($run_delete){

echo "<script>alert('One police Has Been Deleted')</script>";

echo "<script>window.open('index.php?view_police','_self')</script>";

}


}


?>

<?php } ?>