<html>
<?php
include_once('connection.php');

session_start();
if(isset($_POST['submit'])){
    $price = $_POST['price'];
    $c_name = $_POST['c_name'];
    $c_number = $_POST['c_number'];
    $p_name = $_POST['p_name'];
    $quant = $_POST['quant'];
    $address = $_POST['address'];

    $product_id = $_POST['product_id'];

    $sql = "SELECT * FROM gears WHERE id = '$product_id'";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);

    
    
    if($quant >= 10){
        ?> <script>alert(" Max 10 units allowed ");</script> <?php
        exit;
    }
    
    $q = "INSERT INTO orders (price, c_name, c_number, p_name, address, img) VALUES('$price', '$c_name','$c_number', '$p_name', '$address', '$product_id') ";
    $run = mysqli_query($conn, $q);
    
    if($run){
        echo "order placed successfully!!";
    } else {
        echo "error";
    }
}
?>
</html>
