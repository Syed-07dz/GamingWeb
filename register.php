<?php
include_once('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp- GameX</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/login.js"></script>
    
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
    rel="stylesheet">
   
   
    
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> 
      </script> 
    <script src= 
"https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"> 
      </script> 
    <script src= 
"https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"> 
      </script> 

<style>
    label.error{
        display: block;
        color: red;
        font-size: 14px;
    }
</style>


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
<div class="background-wrap">
    <div class="background"></div>
  </div>
  
  <form id="accesspanel" action="register.php" method="post">
    <h1 id="litheader">Register to GAMEX </h1>
    <div class="inset">
      <p>
        <label for="email"></label>
        <input type="text" name="email" id="email" placeholder="Email address" >
        
      </p>
      <p>
        <label for="username"></label>
        <input type="text" name="username" id="email" placeholder="Username" >
        
      </p>
      <p>
        <label for="password"></label>
        <input type="password" name="password" id="password" placeholder="password" >
        
      </p>
      
      <div style="text-align: center;">
       
      <input class="loginLoginValue" type="hidden" name="service" value="login" />
    </div>
    <p class="p-container">
      <input type="submit" class="btn" value="Submit" name="submit">
    </p>
  </form>
</article>
</main>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $em = $_POST['email'];
    $name = $_POST['username'];
    $password= $_POST['password'];

    $q= "INSERT INTO users (email, username, password) values ('$em', '$name', '$password')";

    if ($conn->query($q) === TRUE) {
        echo "<script> alert('New record created successfully') </script>";
      } else {
        echo "Error: " . $q . "<br>" . $conn->error;
      }
      
      $conn->close();
}
?>
