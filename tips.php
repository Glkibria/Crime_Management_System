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
        <span class="nero__bold">Police </span>safety tips
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>


<div id="content" ><!-- content Starts -->

<div class="container-fluid" ><!-- container Starts -->






<div class="col-md-12" ><!-- col-md-12 Starts -->

<div class="safety_tipss row"><!-- safety_tipss row Starts -->

<?php

// CREATE TABLE `safety_tips` (
//   `safety_tips_id` int(10) NOT NULL,
//   `safety_tips_title` varchar(255) NOT NULL,
//   `safety_tips_image` varchar(255) NOT NULL,
//   `safety_tips_desc` text NOT NULL,
//   `safety_tips_button` varchar(255) NOT NULL,
//   `safety_tips_url` varchar(255) NOT NULL
// ) 

$get_safety_tips = "select * from safety_tips";

$run_safety_tips = mysqli_query($con,$get_safety_tips);

while($row_safety_tipss = mysqli_fetch_array($run_safety_tips )){

$safety_tips_id = $row_safety_tipss['safety_tips_id'];

$safety_tips_title = $row_safety_tipss['safety_tips_title'];

$safety_tips_image = $row_safety_tipss['safety_tips_image'];

$safety_tips_desc = $row_safety_tipss['safety_tips_desc'];

$safety_tips_button = $row_safety_tipss['safety_tips_button'];

$safety_tips_url = $row_safety_tipss['safety_tips_url'];

?>

<div class="col-md-4 col-sm-6 box"><!-- col-md-4 col-sm-6 box Starts -->

<img src="admin_area/safety_tips_images/<?php echo $safety_tips_image; ?>" class="img-responsive">

<h2 align="center"> <?php echo $safety_tips_title; ?> </h2>

<p>
<?php echo $safety_tips_desc; ?>
</p>

<center>

<a href="<?php echo $safety_tips_url; ?>" class="btn btn-primary">

<?php echo $safety_tips_button; ?>

</a>

</center>

</div><!-- col-md-4 col-sm-6 box Ends -->

<?php } ?>

</div><!-- safety_tipss row Ends -->

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
