<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['delete_news'])){

$delete_id = $_GET['delete_news'];

$delete_news = "delete from news where news_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_news);

if($run_delete){

echo "<script>alert('One news column Has Been Deleted')</script>";

echo "<script>window.open('index.php?view_news','_self')</script>";

}


}

?>


<?php } ?>