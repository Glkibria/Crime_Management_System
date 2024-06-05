<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['delete_missingperson'])){

$delete_id = $_GET['delete_missingperson'];

$delete_missingperson = "delete from missingperson where Person_id='$delete_id'";

$run_missingperson = mysqli_query($con,$delete_missingperson);

if($run_missingperson){

echo "<script>alert('One missingperson Has Been Deleted')</script>";
echo "<script>window.open('index.php?view_missingperson','_self')</script>";

}

}


?>


<?php } ?>