<?php 
include_once('connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login- GameX</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/login.js"></script>
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
    rel="stylesheet">

<!--close header-->
</head>

<body>

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
            <a href="index.php#gears" class="navbar-link">Gears</a>
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

          <span><a href="login.php">Log-in</a></span>

        </button>

      </div>

    </div>

  </header>
<main>
  <article>
<div class="background-wrap">
    <div class="background"></div>
  </div>
  
  <form id="accesspanel" action="login_action.php" method="post">
    <h1 id="litheader">GAMEX </h1>
    <div class="inset">
      <p>
        <input type="text" name="username" id="email" placeholder="Username" required>
      </p>
      <p>
        <input type="password" name="password" id="password" placeholder="Password" required>
      </p>
      <div style="text-align: center;">
       
        </div>
        <label for="remember"><a href="register.php" >New Here? SignUp</a></label>
        <label for="remember"><a href="forgot_pass.php" >Forgot Password?</a></label>

      </div>
      <input class="loginLoginValue" type="hidden" name="service" value="login" />
    </div>
    <p class="p-container">
      <input type="submit" class="btn" value="Submit" name="btn">
    </p>
  </form>
</article>
</main>
</body>
</html>
