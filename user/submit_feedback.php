
<center><!-- center Starts -->

<h1>My feedlain</h1>

<p class="lead"> Your feedlain one place.</p>

<p class="text-muted" >

If you have any questions, please feel free to <a href="../contact.php" > contact us,</a> our user service center is working for you 24/7.


</p>


</center><!-- center Ends -->


<div id="content">
  <div class="container">
    <div class="col-md-8">
      <div class="box">
        <div class="box-header">
          <center>
            <h2>Submit a feedback</h2>
          </center>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
         
          <div class="form-group">
            <label>feedback Date</label>
            <input type="date" class="form-control" name="feed_date" required>
          </div>
          <div class="form-group">
            <label>feedback Status</label>
            <input type="text" class="form-control" name="feed_status" required>
          </div>
          <div class="form-group">
            <label>feedback</label>
            <textarea class="form-control" name="feedback" rows="5" required></textarea>
          </div>
          <div class="text-center">
            <button type="submit" name="submit_feedback" class="btn btn-primary">
              <i class="fa fa-user-md"></i> Submit feedback
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>

<?php


if(isset($_POST['submit_feedback'])){

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_session = $_SESSION['user_email'];

$get_user = "select * from user where user_email='$user_session'";

$run_user = mysqli_query($con,$get_user);

$row_user = mysqli_fetch_array($run_user);

$user_id = $row_user['user_id'];
$feed_date = $_POST['feed_date'];
$feed_status = $_POST['feed_status'];
$feedback = $_POST['feedback'];

// Insert feedback into database
$sql = "INSERT INTO `user_feed` (`user_id`, `feed_date`, `feed_status`, `feedback`) VALUES ('$user_id', '$feed_date', '$feed_status', '$feedback')";

if ($con->query($sql) === TRUE) {
    
    echo "<script>alert('Your feedback submitted successfully')</script>";
    echo "<script>window.open('my_account.php?my_feedback','_self')</script>";
} 
}

?>
