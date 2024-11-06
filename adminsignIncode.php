<?php
session_start();

// database connect
include 'dbconn.php';

 $email = $_POST['email'];
 $password = $_POST['pwd'];
 $scode = $_POST['scode'];

$sel = "select * from admin where email = '$email'";
$query = mysqli_query($conn, $sel);
$data = mysqli_fetch_assoc($query);

if($data['email'] == $email) {
    if ($data['password'] == $password) {

        if($data['scode'] == $scode){
            header("location:adminpage.php");
            // echo "Secret code match";
        }else{
            echo "Secret Code Does't match";
        }
        // echo "go profile";

$_SESSION['user'] = $email;

        // header("location:adminpage.html");
    }else{
        echo "password not match";
    }
    
}else{
    echo "user not found";  
}


?>