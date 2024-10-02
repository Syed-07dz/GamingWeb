<?php 
include_once('connection.php');
session_start();
require("contact_mail.php");
if(isset($_POST['submit'])){
  if(empty($_POST['email'])){
    $response = "All fields are required";

  }else{
    $response= sendMail($_POST['email'], "Welcome aboard!", "Thanks for subscribing to our newsletter!");
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GameX - Gaming website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery.slim.min.js"></script>
  <script src="assets/js/jquery.validate.js"></script>
  <script src="assets/js/validator.js"></script>
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

<body id="top">

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
            <a href="index.php#contact" class="navbar-link">Contact</a>
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

          <span><?php 
          if(isset($_SESSION['username'])){
            echo "WELCOME ".$_SESSION['username'];
          }
          
          else{
           echo '<a href="login.php">Log-in</a>';
          }
            ?></span>

        </button>

      </div>

    </div>

  </header>





  <main>
    <article>

   


      <div class="section-wrapper">

        <!-- 
          - #ABOUT
        -->

        <section class="about" id="about">
          <div class="container">

            <figure class="about-banner">

              <img src="./assets/images/about-img.png" alt="M shape" class="about-img">

              <img src="./assets/images/character-1.png" alt="Game character" class="character character-1">

              <img src="./assets/images/character-2.png" alt="Game character" class="character character-2">

              <img src="./assets/images/character-3.png" alt="Game character" class="character character-3">

            </figure>

            <div class="about-content">

              <p class="about-subtitle">Contact Us</p>

              <h2 class="about-title">FOR ANY <strong>QUERIES</strong> </h2>
              <br>
              <div class="container">
                  <div class="row">
                      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-xs-12 col-sm-12">
              
                          <h1>Address</h1>
                          <h4><i class="fa-solid fa-location-dot"></i> Main Campus</h4>
                          RK University, <br> Rajkot, Gujarat, India 360020
                                                  
                          <br><br>
                          <h4><i class="fa-solid fa-phone-volume"></i> Contact Details </h4>
                          email: gamex@email.com <br>
                          mob: 6201874983 <br>
                                  
                      </div>
                      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-xs-12 col-sm-12">
                          <h1>Contact Form</h1>
                          <form action="/action_page.php" id="form1">
                              <div class="form-group">
                                  <label for="fn1">Fullname:</label>
                                  <input type="text" class="form-control" id="fn1" placeholder="Enter Name" name="fn">
                                  <span id="fn_err"></span>
                              </div>
                              <div class="form-group">
                                  <label for="email">Email:</label>
                                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                  <span id="em_err"></span>
                              </div>
                              <div class="form-group">
                                  <label for="mn1">Mobile Number:</label>
                                  <input type="text" class="form-control" id="mn1" placeholder="Enter Mobile Number" name="mn">
                                  <span id="mn_err"></span>
                              </div>
                              <div class="form-group">
                                  <label for="msg1">Message:</label><br>
                                  <textarea class="form-control" name="msg" id="msg1" cols="30" rows="5"></textarea>
                                  <span id="msg_error"></span>
              
                              </div>
                              <button type="submit" class="btn btn-dark">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
              
              
              <br>
              

              <p class="about-bottom-text">
                <ion-icon name="arrow-forward-circle-outline"></ion-icon>

                <span>We will contact you as soon as we can</span>
              </p>

            </div>

          </div>
        </section>




  <!-- 
          - #NEWSLETTER
        -->

        <section class="newsletter">
          <div class="container">

            <div class="newsletter-card">

              <div class="newsletter-content">
                <figure class="newsletter-img">
                  <img src="./assets/images/newsletter-img.png" alt="Newsletter image">
                </figure>

                <h2 class="h2 newsletter-title">Subscribe to our newsletter</h2>
              </div>

              <form action="" class="newsletter-form" method="post">
                <input type="email" name="email" required placeholder="Your Email Address" class="input-field">

                <button type="submit" class="btn btn-secondary" name="submit">Subscribe</button>
                <?php 
                if(@$response == "success"){
                  ?> <script>alert("Thanks for subscribing!");</script><?php
                }
                else{
                  ?> <script>alert("Error sending email");</script><?php
                }
                ?>
              </form>

            </div>

          </div>
        </section>

      </div>

    </article>
  </main>


<?php 
include_once('footer.php');
?>

