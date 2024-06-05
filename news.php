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
        <span class="nero__bold">Police </span>news
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>


<div id="content" ><!-- content Starts -->

<div class="container-fluid" ><!-- container Starts -->






<div class="col-md-12" ><!-- col-md-12 Starts -->

<div class="newss row"><!-- newss row Starts -->

<?php

// CREATE TABLE `news` (
//   `news_id` int(10) NOT NULL,
//   `news_title` varchar(255) NOT NULL,
//   `news_image` varchar(255) NOT NULL,
//   `news_desc` text NOT NULL,
//   `news_button` varchar(255) NOT NULL,
//   `news_url` varchar(255) NOT NULL
// ) 

$get_news = "select * from news";

$run_news = mysqli_query($con,$get_news);

while($row_newss = mysqli_fetch_array($run_news )){

$news_id = $row_newss['news_id'];

$news_title = $row_newss['news_title'];

$news_image = $row_newss['news_image'];

$news_desc = $row_newss['news_desc'];

$news_button = $row_newss['news_button'];

$news_url = $row_newss['news_url'];

?>

<div class="col-md-4 col-sm-6 box"><!-- col-md-4 col-sm-6 box Starts -->

<img src="admin_area/news_images/<?php echo $news_image; ?>" class="img-responsive">

<h2 align="center"> <?php echo $news_title; ?> </h2>

<p>
<?php echo $news_desc; ?>
</p>

<center>

<a href="<?php echo $news_url; ?>" class="btn btn-primary">

<?php echo $news_button; ?>

</a>

</center>

</div><!-- col-md-4 col-sm-6 box Ends -->

<?php } ?>

</div><!-- newss row Ends -->

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
