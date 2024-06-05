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


// getcrime function Starts //
//details.php?c_id=$crime_url
function getCrime(){

global $db;

$get_criminal = "select * from criminal order by 1 DESC LIMIT 0,8";

$run_criminal = mysqli_query($db,$get_criminal);

while($row_criminal=mysqli_fetch_array($run_criminal)){

$crime_id = $row_criminal['criminal_id'];

$crime_title = $row_criminal['criminal_name'];



$crime_img1 = $row_criminal['criminal_img1'];

$crime_label = $row_criminal['criminal_label'];



$crime_cat_id = $row_criminal['criminal_cat_id'];

$get_criminal_cat = "select * from criminal_categories where criminal_cat_id='$crime_cat_id'";

$run_criminal_cat = mysqli_query($db,$get_criminal_cat);

$row_criminal_cat = mysqli_fetch_array($run_criminal_cat);

$criminal_cat_name = $row_criminal_cat['criminal_cat_title'];




$crime_url = $row_criminal['criminal_url'];



if($crime_label == ""){


}
else{

$criminal_label = "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>$crime_label</div>

<div class='label-background'> </div>

</a>

";

}


echo "

<div class='col-md-4 col-sm-6 single' >

<div class='criminal'>

<a href='$crime_url' >

<img src='admin_area/criminal_images/$crime_img1' class='img-responsive' >

</a>

<div class='text' >

<center>



<p class='btn btn-warning'> $criminal_cat_name </p>



</center>

<hr>

<h3><a href='$crime_url' >$crime_title</a></h3>



<p class='buttons' >

<a href='$crime_url' class='btn btn-default' >View Details</a>




</p>

</div>

$criminal_label


</div>

</div>

";

}

}

// getcrime function Ends //


/// getcriminal Function Starts ///

function getcriminal(){

/// getcriminal function Code Starts ///

global $db;

$aWhere = array();



/// criminal Categories Code Starts ///

if(isset($_REQUEST['criminal_cat'])&&is_array($_REQUEST['criminal_cat'])){

foreach($_REQUEST['criminal_cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'criminal_cat_id='.(int)$sVal;

}

}

}

/// criminal Categories Code Ends ///

/// Categories Code Starts ///

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

foreach($_REQUEST['cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'cat_id='.(int)$sVal;

}

}

}

/// Categories Code Ends ///

$per_page=6;

if(isset($_GET['page'])){

$page = $_GET['page'];

}else {

$page=1;

}

$start_from = ($page-1) * $per_page ;

$sLimit = " order by 1 DESC LIMIT $start_from,$per_page";

$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'').$sLimit;

$get_criminal = "select * from criminal  ".$sWhere;

$run_criminal = mysqli_query($db,$get_criminal);

while($row_criminal=mysqli_fetch_array($run_criminal)){

$crime_id = $row_criminal['criminal_id'];

$crime_title = $row_criminal['criminal_name'];



$crime_img1 = $row_criminal['criminal_img1'];

$crime_label = $row_criminal['criminal_label'];





$crime_url = $row_criminal['criminal_url'];

$crime_cat_id = $row_criminal['criminal_cat_id'];

$get_criminal_cat = "select * from criminal_categories where criminal_cat_id='$crime_cat_id'";

$run_criminal_cat = mysqli_query($db,$get_criminal_cat);

$row_criminal_cat = mysqli_fetch_array($run_criminal_cat);

$criminal_cat_name = $row_criminal_cat['criminal_cat_title'];


if($crime_label == ""){


}
else{

$criminal_label = "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>$crime_label</div>

<div class='label-background'> </div>

</a>

";

}


echo "

<div class='col-md-4 col-sm-6 center-responsive' >

<div class='criminal' >

<a href='$crime_url' >

<img src='admin_area/criminal_images/$crime_img1' class='img-responsive' >

</a>

<div class='text' >

<center>

<p class='btn btn-warning'> $criminal_cat_name </p>

</center>

<hr>

<h3><a href='$crime_url' >$crime_title</a></h3>



<p class='buttons' >

<a href='$crime_url' class='btn btn-default' >View details</a>




</p>

</div>

$criminal_label


</div>

</div>

";

}

/// getcriminal function Code Ends ///



}


/// getcriminal Function Ends ///


/// getPaginator Function Starts ///

function getPaginator(){

/// getPaginator Function Code Starts ///

$per_page = 6;

global $db;

$aWhere = array();

$aPath = '';



/// criminal Categories Code Starts ///

if(isset($_REQUEST['criminal_cat'])&&is_array($_REQUEST['criminal_cat'])){

foreach($_REQUEST['criminal_cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'criminal_cat_id='.(int)$sVal;

$aPath .= 'criminal_cat[]='.(int)$sVal.'&';

}

}

}

/// criminal Categories Code Ends ///

/// Categories Code Starts ///

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

foreach($_REQUEST['cat'] as $sKey=>$sVal){

if((int)$sVal!=0){

$aWhere[] = 'cat_id='.(int)$sVal;

$aPath .= 'cat[]='.(int)$sVal.'&';

}

}

}

/// Categories Code Ends ///

$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'');

$query = "select * from criminal ".$sWhere;

$result = mysqli_query($db,$query);

$total_records = mysqli_num_rows($result);

$total_pages = ceil($total_records / $per_page);

echo "<li><a href='list.php?page=1";

if(!empty($aPath)){ echo "&".$aPath; }

echo "' >".'First Page'."</a></li>";

for ($i=1; $i<=$total_pages; $i++){

echo "<li><a href='list.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."' >".$i."</a></li>";

};

echo "<li><a href='list.php?page=$total_pages";

if(!empty($aPath)){ echo "&".$aPath; }

echo "' >".'Last Page'."</a></li>";

/// getPaginator Function Code Ends ///

}

/// getPaginator Function Ends ///



?>
