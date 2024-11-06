<?php
session_start();
// database connect
include 'dbconn.php';

 $email = $_POST['email'];
 $password = $_POST['pwd'];

$sel = "select * from student where email = '$email'";
$query = mysqli_query($conn, $sel);
$data = mysqli_fetch_assoc($query);

if($data['email'] == $email) {
    if ($data['password'] == $password) {
        // echo "go profile";

$_SESSION['user'] = $email;

        header("location:Dashboard.php");
    }else{
        echo "password not match";
    }
    
}else{
    echo "user not found";  
}


?>