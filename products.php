<?php 
include_once('connection.php');
session_start();
$sql = "SELECT * FROM gears";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GameX - Gaming website</title>

  <!-- 
    - favicon link
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
    rel="stylesheet">
</head>


<body>
    
  <!-- 
    - #HEADER
  -->

  <header class="header">

<!-- 
  - overlay
-->
<div class="overlay" data-overlay></div>

<div class="container">

  <a href="#" class="logo">
    <img src="./assets/images/logo.svg" alt="GameX logo">
  </a>

  <button class="nav-open-btn" data-nav-open-btn>
    <ion-icon name="menu-outline"></ion-icon>
  </button>

  <nav class="navbar" data-nav>

    <div class="navbar-top">

      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" alt="GameX logo">
      </a>

      <button class="nav-close-btn" data-nav-close-btn>
        <ion-icon name="close-outline"></ion-icon>
      </button>

    </div>

    <ul class="navbar-list">

      <li>
        <a href="index.php#hero" class="navbar-link">Home</a>
      </li>

      <li>
        <a href="index.php#about" class="navbar-link">About</a>
      </li>

      <li>
        <a href="index.php#tournament" class="navbar-link">Tournament</a>
      </li>

      <li>
        <a href="index.php#team" class="navbar-link">Team</a>
      </li>

      <li>
        <a href="products.php" class="navbar-link">Gears</a>
      </li>

      <li>
        <a href="contact.php" class="navbar-link">Contact</a>
      </li>

    </ul>

    <ul class="nav-social-list">

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-twitter"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-instagram"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-github"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-youtube"></ion-icon>
        </a>
      </li>

    </ul>

  </nav>

  <div class="header-actions">

    <button class="search">
      <ion-icon name="search-outline"></ion-icon>
    </button>

    <button class="btn-sign_in">

      <div class="icon-box">
        <ion-icon name="log-in-outline"></ion-icon>
      </div>

      <span>
      <?php 
          if(isset($_SESSION['username'])){
            echo "<p>Welcome, ".$_SESSION['username']."<p>";
          }
          
          else{
           echo '<a href="login.php">Log-in</a>';
          }
            ?>
      </span>

    </button>

  </div>

</div>

</header>


    <main>
        <article>
            <div class="section-wrapper">
        <!-- 
          - #GEARS
        -->
      
        <section class="gears" id="gears">
          <div class="container">

            <h2 class="h2 section-title">check our gears</h2>

            <ul class="gears-list">
            
              <?php
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <li>
                <div class="gears-card">

                  <div class="card-banner">

                    <a href="#">
                      <img src="<?php echo $row['image'] ?>" alt="Error">
                    </a>

                    <button class="share">
                      <ion-icon name="share-social"></ion-icon>
                    </button>

                    <div class="card-time-wrapper">
                      <ion-icon name="time-outline"></ion-icon>

                      <span>In 4 days</span>
                    </div>

                  </div>

                  <div class="card-content">
                    
                    <div class="card-title-wrapper">

                      <h3 class="h3 card-title"><?php echo $row['name'] ?></h3>

                      <p class="card-subtitle">e-sports</p>

                    </div>

                    <div class="card-prize">$<?php echo $row['price'] ?></div>

                  </div>
                  
                  <div class="card-actions">

                    <button class="btn btn-primary">
                      <ion-icon name="add-outline"></ion-icon>

                      <span><a href="payment.php?product_id=<?php echo $row['id']; ?>">Buy Now</a></span>
                    </button>
                   
                    <button class="btn card-btn">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                  </div>

                </div>
              </li>
              <?php 
            }
              ?>

            </ul>

          </div>
        </section>
        </div>
        </article>
    </main>




<?php

include_once('footer.php');
?>