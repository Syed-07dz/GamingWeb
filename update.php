<?php 
include_once('connection.php');
session_start();
$id=$_SESSION['username'];
$q= "SELECT * FROM users WHERE username = '$id'";

$data = mysqli_query($conn, $q);
$total = mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile- GameX</title>
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

          <span><?php
          if (isset($_SESSION['username'])) {
            echo "WELCOME " . $_SESSION['username'];
          } else {
            echo '<a href="login.php">Log-in</a>';
          }
          ?></span>

        </button>

      </div>

    </div>

  </header>
<main>
  <article>
<div class="background-wrap">
    <div class="background"></div>
  </div>
  
  <form id="accesspanel" action="update.php" method="post">
    <h1 id="litheader">GAMEX </h1>
    <div class="inset">
        
      <p>
        <input type="text" name="username" id="email" value="<?php echo $result['username'] ?>">
      </p>
      <p>
        <input type="password" name="password" id="password" value="<?php echo $result['password'] ?>">
      </p>
      <div style="text-align: center;">
       
        </div>
        <label for="remember"><a href="forgot_pass.php" >Forgot password?</a></label>
        <label for="remember"><a href="register.php" >New Here? SignUp</a></label>
      </div>
    </div>
    <p class="p-container">
      <input type="submit" class="btn" value="update" name="btn">
    </p>
  </form>
</article>
</main>
</body>
</html>

<?php

if(isset($_POST['btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "UPDATE users set username = '$username', password ='$password' WHERE username='$id'";

    if(mysqli_query($conn, $sql)){
        echo"<script> alert('record Updated') </script>";
    }
    else{
        echo "error while updating record";
    }

}

?>
