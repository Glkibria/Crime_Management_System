<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>
  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">Police </span>stations
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>


<div id="content" ><!-- content Starts -->

<div class="container-fluid" ><!-- container Starts -->






<div class="col-md-12" ><!-- col-md-12 Starts -->

<div class="stations row"><!-- stations row Starts -->

<?php

// CREATE TABLE `station` (
//   `station_id` int(10) NOT NULL,
//   `station_title` varchar(255) NOT NULL,
//   `station_image` varchar(255) NOT NULL,
//   `station_desc` text NOT NULL,
//   `station_button` varchar(255) NOT NULL,
//   `station_url` varchar(255) NOT NULL
// ) 

$get_station = "select * from police_station";

$run_station = mysqli_query($con,$get_station);

while($row_stations = mysqli_fetch_array($run_station )){

$station_id = $row_stations['station_id'];

$station_title = $row_stations['station_title'];

$station_image = $row_stations['station_image'];

$station_desc = $row_stations['station_desc'];

$station_button = $row_stations['station_button'];

$station_url = $row_stations['station_url'];

?>

<div class="col-md-4 col-sm-6 box"><!-- col-md-4 col-sm-6 box Starts -->

<img src="admin_area/station_images/<?php echo $station_image; ?>" class="img-responsive">

<h2 align="center"> <?php echo $station_title; ?> </h2>

<p>
<?php echo $station_desc; ?>
</p>

<center>

<a href="<?php echo $station_url; ?>" class="btn btn-primary">

<?php echo $station_button; ?>

</a>

</center>

</div><!-- col-md-4 col-sm-6 box Ends -->

<?php } ?>

</div><!-- stations row Ends -->

</div><!-- col-md-12 Ends -->



</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
