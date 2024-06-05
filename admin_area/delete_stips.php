<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['delete_stips'])){

$delete_id = $_GET['delete_stips'];

$delete_stips = "delete from safety_tips where safety_tips_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_stips);

if($run_delete){

echo "<script>alert('One stips column Has Been Deleted')</script>";

echo "<script>window.open('index.php?view_stips','_self')</script>";

}


}

?>


<?php } ?>