<?php



if(!isset($_SESSION['police_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['delete_criminal'])){

$delete_id = $_GET['delete_criminal'];

$delete_pro = "delete from criminal where criminal_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_pro);

if($run_delete){

echo "<script>alert('One crminal Has been deleted')</script>";

echo "<script>window.open('index.php?view_criminal','_self')</script>";

}

}

?>

<?php } ?>