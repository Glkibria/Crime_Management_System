
<center><!-- center Starts -->

<h1>My Complain</h1>

<p class="lead"> Your Complain one place.</p>

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
            <h2>Submit a Complaint</h2>
          </center>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
         
          <div class="form-group">
            <label>Complaint Date</label>
            <input type="date" class="form-control" name="comp_date" required>
          </div>
          <div class="form-group">
            <label>Complaint Status</label>
            <input type="text" class="form-control" name="comp_status" required>
          </div>
          <div class="form-group">
            <label>Complaint</label>
            <textarea class="form-control" name="complaint" rows="5" required></textarea>
          </div>
          <div class="text-center">
            <button type="submit" name="submit_complaint" class="btn btn-primary">
              <i class="fa fa-user-md"></i> Submit Complaint
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>

<?php



if(isset($_POST['submit_complaint'])){
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_session = $_SESSION['user_email'];

$get_user = "select * from user where user_email='$user_session'";

$run_user = mysqli_query($con,$get_user);

$row_user = mysqli_fetch_array($run_user);

$user_id = $row_user['user_id'];
$comp_date = $_POST['comp_date'];
$comp_status = $_POST['comp_status'];
$complaint = $_POST['complaint'];

// Insert complaint into database
$sql = "INSERT INTO `user_comp` (`user_id`, `comp_date`, `comp_status`, `complaint`) VALUES ('$user_id', '$comp_date', '$comp_status', '$complaint')";

if ($con->query($sql) === TRUE) {
    
    echo "<script>alert('Your Complaint submitted successfully')</script>";
    echo "<script>window.open('my_account.php?my_complain','_self')</script>";
} 

}
?>
