<?php



if(!isset($_SESSION['police_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<?php

if(isset($_GET['user_delete'])){

$delete_id = $_GET['user_delete'];

$delete_user = "delete from user where user_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_user);


if($run_delete){

echo "<script>alert('user Has Been Deleted')</script>";

echo "<script>window.open('index.php?view_user','_self')</script>";


}

}


?>




<?php } ?>