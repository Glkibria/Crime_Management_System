<?php

$db = mysqli_connect("localhost","root","","criminal_db");

/// IP address code starts /////
function getRealUserIp(){
    switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }
 }
/// IP address code Ends /////




function getcrime(){

global $db;

$get_criminal = "select * from criminal order by 1 DESC LIMIT 0,8";

$run_criminal = mysqli_query($db,$get_criminal);

while($row_criminal=mysqli_fetch_array($run_criminal)){

$crime_id = $row_criminal['criminal_id'];

$crime_title = $row_criminal['criminal_name'];



$crime_img1 = $row_criminal['criminal_img1'];

echo "

<div class='col-md-4 col-sm-6 single' >

<div class='criminal' >

<a href='details.php?crime_id=$crime_id' >

<img src='admin_area/criminal_images/$crime_img1' class='img-responsive' >

</a>

<div class='text' >

<h3><a href='details.php?crime_id=$crime_id' >$crime_title</a></h3>



<p class='buttons' >

<a href='details.php?crime_id=$crime_id' class='btn btn-default' >View details</a>

<a href='details.php?crime_id=$crime_id' class='btn btn-primary'>

<i class='fa fa-shopping-cart'></i> Add to cart

</a>


</p>

</div>


</div>

</div>

";




}


}


?>
