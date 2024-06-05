</head>
<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="my_account.php?my_complain">
          <?php
          if(!isset($_SESSION['user_email'])){
          echo "Welcome :Guest"; 
         } 
          else
          { 
              echo "Welcome : " . $_SESSION['user_email'] . "";
            }
?>
          </a>
        </div>

        
        
        
        <ul class="login">

          <li class="login__item">
          <?php
          if(!isset($_SESSION['user_email'])){
            echo '<a href="../user_register.php" class="login__link">Register</a>';
          } 
            else
            { 
                echo '<a href="my_account.php?my_orders" class="login__link">My Account</a>';
            }   
?>  
          </li>


          <li class="login__item">
          <?php
          if(!isset($_SESSION['user_email'])){
            echo '<a href="../checkout.php" class="login__link">Sign In</a>';
          } 
            else
            { 
                echo '<a href="../logout.php" class="login__link">Log out</a>';
            }   
?>  
            
          </li>
        </ul>
      
      
      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="../index.php">
            <img class="logo__img" src="images/logo.jpg" alt="" width="150" height="">
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

          <li class="categories__item">
              <a class="categories__link" href="../list.php">
              Criminal list
               
              </a>
              </li>

            <li class="categories__item">
              <a class="categories__link" href="../About.php">
              About 
               
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="../Serve.php">
                Service
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="../police_station.php">
                Police Station
              </a>
            </li>
            <li class="categories__item">
              <a class="categories__link" href="../news.php">
                Local News
              </a>
            </li>
            <li class="categories__item">
              <a class="categories__link" href="../tips.php">
                Safety Tips
              </a>
            </li>

          <li class="categories__item">
              <a class="categories__link" href="#">
                My Account
                
              </a>
              

            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>