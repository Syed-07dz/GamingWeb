<?php
include ('connection.php');
session_start();
$username = $_SESSION['username'];
$query = "SELECT * FROM orders where c_name = '$username'";
$data = mysqli_query($conn, $query);
?>

<head>
    
    <link rel="stylesheet" href="./assets/css/style.css">
     <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
    rel="stylesheet">

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: coral;
        }
    </style>
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



<?php
// Check if any records are returned
$total = mysqli_num_rows($data);

if ($total != 0) {
    ?>
<section class="about" id="about">
<div class="container">

<figure class="about-banner">

  <img src="./assets/images/about-img.png" alt="M shape" class="about-img">

  <img src="./assets/images/character-1.png" alt="Game character" class="character character-1">

  <img src="./assets/images/character-2.png" alt="Game character" class="character character-2">

  <img src="./assets/images/character-3.png" alt="Game character" class="character character-3">

</figure>

    <div class=about-content>
    

     <h2 align="center" class="about-title">Your Orders</h2>
     <table align="center" border="1" cellspacing="7" width="100%">
        <tr>
            <th width="8%"><p class="about-text">Username</p></th>
            <th width="25%"><p class="about-text">card no.</p></th>
            <th width="10%"><p class="about-text">product name</p></th>
            <th><p class="about-text">address</p></th>
            <th><p class="about-text">prod -img</p></th>
        </tr>
        <?php
        // Fetch and display each record in the table
        while ($result = mysqli_fetch_assoc($data)) {
            ?>
            <tr>
                <td><p class="about-text"><?php echo $result['c_name']; ?></p></td>
                <td><p class="about-text"><?php echo $result['c_number']; ?></p></td>
                <td><p class="about-text"><?php echo $result['p_name']; ?></p></td>
                <td><p class="about-text"><?php echo $result['address']; ?></p></td>
                <td><img src="<?php echo $result['img']; ?>" alt="Product Image" width="100"></td>
            </tr>
            <?php
        }
        ?>
    </table>
    </div>
</section>
</body>
    <?php
} else {
    echo "No records found";
}
?>
<script>
    function checkdelete() {
        return confirm('Are you sure to delete this record!');
    }
</script>

<?php 
include_once('footer.php');
?>