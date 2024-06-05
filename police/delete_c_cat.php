<?php



if(!isset($_SESSION['police_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['delete_c_cat'])){

$delete_c_cat_id = $_GET['delete_c_cat'];

$delete_c_cat = "delete from criminal_categories where criminal_cat_id='$delete_c_cat_id'";

$run_delete = mysqli_query($con,$delete_c_cat);

if($run_delete){

echo "<script>alert('One criminal Category Has been Deleted')</script>";

echo "<script>window.open('index.php?view_c_cats','_self')</script>";

}

}



?>



<?php } ?>