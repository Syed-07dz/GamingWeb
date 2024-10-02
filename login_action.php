<?php
include ('connection.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$sql = "select * from users where username = '$username' and password = '$password'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    $user_type = $row['type'];

    if ($user_type == "admin") {
        $_SESSION['username'] = $username;
        header("Location: admin.php");
    } else {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }
} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
}
?>