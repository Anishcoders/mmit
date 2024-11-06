<?php

$org = $_POST['organigation'];
// echo '-' . $org;
$name = $_POST['name'];
// echo $name;
$email = $_POST['email'];
// echo $email;
$password = $_POST['pwd'];
// echo $password;
$scode = $_POST['scode'];
// echo $scode;

// database connect
include 'dbconn.php';

if($conn){
    // echo 'success';
}else{
    echo 'not Connect in Database';
}


$ins = "insert into admin (org, name, email, password, scode) values('$org', '$name', '$email', '$password', '$scode')";


if(mysqli_query($conn, $ins))
    {
       header("location:adminlogin.php");
        // echo 'data save';
    }
    else{
        
        // header("location: signup.php");
                echo 'data not save';
    }
?>