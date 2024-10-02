
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
            <a href="#hero" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#about" class="navbar-link">About</a>
          </li>

          <li>
            <a href="#tournament" class="navbar-link">Tournament</a>
          </li>

         

          <li>
            <a href="products.php" class="navbar-link">Gears</a>
          </li>
          <li>
            <a href="user_order.php" class="navbar-link">Orders</a>
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

          

        </ul>

      </nav>

      <div class="header-actions">

        <button class="btn-sign_in">

        <div class="icon-box">
            <ion-icon name="color-wand-outline"></ion-icon>
          </div>
        <?php

          if (isset($_SESSION['username'])) {
              echo'<a href="update.php">Update Profile</a>';
          }
          else{
            echo '<a href="login.php"></a>';
          }
          ?>
          
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


