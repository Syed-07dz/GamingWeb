<?php
include('connection.php');
$id= $_GET['em'];
$query = "DELETE FROM users WHERE email = '$id' ";
$data= mysqli_query($conn, $query);
if($data){
    echo "Account Deleted";
} 
else{
    echo "Error in deletion";
}

?>