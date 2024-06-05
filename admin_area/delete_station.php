<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['delete_station'])){

$delete_id = $_GET['delete_station'];

$delete_station = "delete from Police_station where station_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_station);

if($run_delete){

echo "<script>alert('One station column Has Been Deleted')</script>";

echo "<script>window.open('index.php?view_station','_self')</script>";

}


}

?>


<?php } ?>