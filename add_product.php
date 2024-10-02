<?php
include('connection.php'); 
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $price = $_POST['price'];
    $name= $_POST['name'];

    // Image upload handling
    $targetDir = "uploads/"; // Directory where images will be stored
    $targetFile = $targetDir . basename($_FILES["image"]["name"]); // Path of the uploaded file

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        // Check file size
        if ($_FILES["image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
        } else {
            // Move uploaded file to specified directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                // Insert product into the database
                $sql = "INSERT INTO gears (price, image, name) VALUES ('$price', '$targetFile', '$name')";
                if (mysqli_query($conn, $sql)) {
                    echo "Product added successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "File is not an image.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/login.js"></script>
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

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
        <a href="admin.php" class="navbar-link">Home</a>
      </li>
      <li>
        <a href="products.php" class="navbar-link">Our Products</a>
      </li>
      <li>
        <a href="add_product.php" class="navbar-link">Add product</a>
      </li>
      <li>
        <a href="index.php" class="navbar-link">User HomePage</a>
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
<!-- header close-->



    <h2>Add Product</h2>
    <form method="post" enctype="multipart/form-data" id="accesspanel">
        <h1 id="litheader">Add Products</h1>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" id="email" required>
        <br>
        
        <label for="name">Name:</label>
        <input type="text" id="email" name="name" required>
        <br>

        <label for="image">Select image to upload:</label><br>
        <input type="file" name="image" id="image" required>
        <br>
        <div style="text-align: center;">
        <p class="p-container">
        <input type="submit" class="btn" value="Add product" ></p>
        </div>
    </form>
</body>
</html>
