<?php 
include_once('connection.php');

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
  }

?>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GameX - Gaming website</title>
    <!-- 
    - favicon link
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <!-- custom css -->
  <link rel="stylesheet" href="assets/css/payment.css">
 

</head>
<?php

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $sql = "SELECT * FROM gears where id = '$product_id'";
    $result = mysqli_query($conn, $sql);    
    while ($row = mysqli_fetch_assoc($result)) {

    ?>

    
<div class="mainscreen">
    <!-- <img src="https://image.freepik.com/free-vector/purple-background-with-neon-frame_52683-34124.jpg"  class="bgimg " alt="">--> 
      <div class="card">
        <div class="leftside">
          <img
            src="<?php echo $row['image']; ?>"
            class="product"
            alt="<?php echo $row['name']; ?>"
            
          />
        </div>
        <div class="rightside">
          <form action="payment_action.php" method= "post">
            <h1>CheckOut</h1>
            <h2>Payment Information</h2>
            <p>Product Price</p>
            $<input type="text" class="inputbox" name="price" value="<?php echo $row['price']; ?>" readonly required />
            <p>Product Name</p>
            <input type="text" class="inputbox" name="p_name" value="<?php echo $row['name']; ?>" readonly required />
            <p>Quantity</p>
            <input type="number" class="inputbox" name="quant" id="card_number" required value="1" />
            <p>Address</p>
            <input type="text" class="inputbox" name="address" id="card_number" required />
            <p>Cardholder Name</p>
            <input type="text" class="inputbox" name="c_name" value="<?php echo $_SESSION['username']; ?>" readonly required />
            <p>Card Number</p>
            <input type="number" class="inputbox" name="c_number" id="card_number" required />

        <div class="expcvv">

            <p class="expcvv_text">Expiry</p>
            <input type="date" class="inputbox" name="exp_date" id="exp_date" required />

            <p class="expcvv_text2">CVV</p>
            <input type="password" class="inputbox" name="cvv" id="cvv" required />
        </div>
        <input type="hidden" name="product_id" value="<?php echo $row['image']; ?>">

            <p></p>
            <button type="submit" class="button" name="submit">CheckOut</button>
          </form>
        </div>
      </div>
    </div>
  




<?php
    }
   
}
?>
