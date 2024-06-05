<?php

session_start();


include("includes/db.php");

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<?php

$admin_session = $_SESSION['admin_email'];

$get_admin = "select * from admins  where admin_email='$admin_session'";

$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);

$admin_id = $row_admin['admin_id'];

$admin_name = $row_admin['admin_name'];

$admin_email = $row_admin['admin_email'];

$admin_image = $row_admin['admin_image'];

$admin_country = $row_admin['admin_country'];

$admin_job = $row_admin['admin_job'];

$admin_contact = $row_admin['admin_contact'];

$admin_about = $row_admin['admin_about'];


$get_criminal = "SELECT * FROM criminal";
$run_criminal = mysqli_query($con,$get_criminal);
$count_criminal = mysqli_num_rows($run_criminal);

$get_user = "SELECT * FROM user";
$run_user = mysqli_query($con,$get_user);
$count_user = mysqli_num_rows($run_user);

$get_criminal_categories = "SELECT * FROM criminal_categories";
$run_criminal_categories = mysqli_query($con,$get_criminal_categories);
$count_criminal_categories = mysqli_num_rows($run_criminal_categories);


$get_total_comp = "SELECT * FROM user_comp";
$run_total_comp = mysqli_query($con,$get_total_comp);
$count_total_comp = mysqli_num_rows($run_total_comp);


$get_pending_comp = "SELECT * FROM user_comp WHERE comp_status='pending'";
$run_pending_comp = mysqli_query($con,$get_pending_comp);
$count_pending_comp = mysqli_num_rows($run_pending_comp);

$get_completed_comp = "SELECT * FROM user_comp WHERE comp_status='Resolved'";
$run_completed_comp = mysqli_query($con,$get_completed_comp);
$count_completed_comp = mysqli_num_rows($run_completed_comp);
 

$get_In_Progress = "SELECT * FROM user_comp WHERE comp_status='In Progress'";
$run_In_Progress = mysqli_query($con,$get_In_Progress);
$count_In_Progress= mysqli_num_rows($run_In_Progress);


$get_total_feed = "SELECT * FROM user_feed";
$run_total_feed = mysqli_query($con,$get_total_feed);
$count_total_feed = mysqli_num_rows($run_total_feed);





?>


<!DOCTYPE html>
<html>

<head>

<title>Admin Panel</title>

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
<link rel="shortcut icon" href="" type="image/png">

</head>

<body>

<div id="wrapper"><!-- wrapper Starts -->

<?php include("includes/sidebar.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->

<?php

if(isset($_GET['dashboard'])){

include("dashboard.php");

}

if(isset($_GET['insert_criminal'])){

include("insert_criminal.php");

}

if(isset($_GET['view_criminal'])){

include("view_criminal.php");

}

if(isset($_GET['delete_criminal'])){

include("delete_criminal.php");

}

if(isset($_GET['edit_criminal'])){

include("edit_criminal.php");

}

if(isset($_GET['insert_c_cat'])){

include("insert_c_cat.php");

}

if(isset($_GET['view_c_cat'])){

include("view_c_cat.php");

}

if(isset($_GET['delete_c_cat'])){

include("delete_c_cat.php");

}

if(isset($_GET['edit_c_cat'])){

include("edit_c_cat.php");

}

if(isset($_GET['insert_cat'])){

include("insert_cat.php");

}

if(isset($_GET['view_cats'])){

include("view_cats.php");

}

if(isset($_GET['delete_cat'])){

include("delete_cat.php");

}

if(isset($_GET['edit_cat'])){

include("edit_cat.php");

}

if(isset($_GET['insert_slide'])){

include("insert_slide.php");

}


if(isset($_GET['view_slides'])){

include("view_slides.php");

}

if(isset($_GET['delete_slide'])){

include("delete_slide.php");

}


if(isset($_GET['edit_slide'])){

include("edit_slide.php");

}


if(isset($_GET['view_user'])){

include("view_user.php");

}

if(isset($_GET['user_delete'])){

include("user_delete.php");

}


if(isset($_GET['view_comp'])){

include("view_comp.php");

}

if(isset($_GET['view_feed'])){

    include("view_feed.php");
    
 }
    






if(isset($_GET['insert_admin'])){

include("insert_admin.php");

}

if(isset($_GET['view_admin'])){

include("view_admin.php");

}


if(isset($_GET['admin_delete'])){

include("admin_delete.php");

}



if(isset($_GET['admin_profile'])){

include("admin_profile.php");

}


if(isset($_GET['insert_police'])){

    include("insert_police.php");
    
    }
    
    if(isset($_GET['view_police'])){
    
    include("view_police.php");
    
    }
    
    
    if(isset($_GET['police_delete'])){
    
    include("police_delete.php");
    
    }
    
    
    
    


    
    
    
  
    
    
    
    if(isset($_GET['police_profile'])){
    
    include("police_profile.php");
    
    }
if(isset($_GET['insert_box'])){

include("insert_box.php");

}

if(isset($_GET['view_boxes'])){

include("view_boxes.php");

}

if(isset($_GET['delete_box'])){

include("delete_box.php");

}

if(isset($_GET['edit_box'])){

include("edit_box.php");

}

if(isset($_GET['insert_term'])){

include("insert_term.php");

}

if(isset($_GET['view_terms'])){

include("view_terms.php");

}

if(isset($_GET['delete_term'])){

include("delete_term.php");

}

if(isset($_GET['edit_term'])){

include("edit_term.php");

}

if(isset($_GET['edit_css'])){

include("edit_css.php");

}

if(isset($_GET['insert_missingperson'])){

include("insert_missingperson.php");

}

if(isset($_GET['view_missingperson'])){

include("view_missingperson.php");

}

if(isset($_GET['delete_missingperson'])){

include("delete_missingperson.php");

}

if(isset($_GET['edit_missingperson'])){

include("edit_missingperson.php");

}





if(isset($_GET['insert_icon'])){

include("insert_icon.php");

}


if(isset($_GET['view_icons'])){

include("view_icons.php");

}

if(isset($_GET['delete_icon'])){

include("delete_icon.php");

}

if(isset($_GET['edit_icon'])){

include("edit_icon.php");

}






if(isset($_GET['edit_contact_us'])){

include("edit_contact_us.php");

}

if(isset($_GET['insert_enquiry'])){

include("insert_enquiry.php");

}


if(isset($_GET['view_enquiry'])){

include("view_enquiry.php");

}

if(isset($_GET['delete_enquiry'])){

include("delete_enquiry.php");

}

if(isset($_GET['edit_enquiry'])){

include("edit_enquiry.php");

}


if(isset($_GET['edit_about_us'])){

include("edit_about_us.php");

}


if(isset($_GET['insert_station'])){

include("insert_station.php");

}

if(isset($_GET['view_station'])){

include("view_station.php");

}

if(isset($_GET['delete_station'])){

include("delete_station.php");

}

if(isset($_GET['edit_station'])){

include("edit_station.php");

}


if(isset($_GET['insert_news'])){

    include("insert_news.php");
    
    }
    
    if(isset($_GET['view_news'])){
    
    include("view_news.php");
    
    }
    
    if(isset($_GET['delete_news'])){
    
    include("delete_news.php");
    
    }
    
    if(isset($_GET['edit_news'])){
    
    include("edit_news.php");
    
    }

    if(isset($_GET['insert_stips'])){

        include("insert_stips.php");
        
        }
        
        if(isset($_GET['view_stips'])){
        
        include("view_stips.php");
        
        }
        
        if(isset($_GET['delete_stips'])){
        
        include("delete_stips.php");
        
        }
        
        if(isset($_GET['edit_stips'])){
        
        include("edit_stips.php");
        
        }

        if(isset($_GET['insert_services'])){

            include("insert_services.php");
            
            }
            
            if(isset($_GET['view_services'])){
            
            include("view_services.php");
            
            }
            
            if(isset($_GET['delete_services'])){
            
            include("delete_services.php");
            
            }
            
            if(isset($_GET['edit_services'])){
            
            include("edit_services.php");
            
            }

            if(isset($_GET['comp_delete'])){

                include("comp_delete.php");
                
                }

                if(isset($_GET['edit_complaint'])){

                    include("update_com.php");
                    
                    }
                if(isset($_GET['feed_delete'])){

                    include("feed_delete.php");
                    
                    }

                    if(isset($_GET['edit_feed'])){

                        include("update_feed.php");
                        
                        }
                

?>

</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

</div><!-- wrapper Ends -->

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>


</body>


</html>

<?php } ?>