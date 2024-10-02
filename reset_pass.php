<?php 
include_once('connection.php');
require("contact_mail.php");

// Check if the form was submitted
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    
    // Check if the email exists in the database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    
    if($total == 1) {
        $result = mysqli_fetch_assoc($data);
        $username = $result['username'];
        $password = $result['password'];
        $msg = "Your login credentials for Gamex are as follows: username: '$username', Password: '$password'";
        
        // Send email with login credentials
        $response = sendMail($email, "Reset Password", $msg);
        
        // Output response
        echo $response;
    } else {
        echo "Account not found";
    }
}
?>
