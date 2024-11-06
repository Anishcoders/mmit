<?php
session_start();
// database connect
include 'dbconn.php';

$user = $_SESSION['user'];

if(isset($_SESSION['user'])) {
    session_destroy();
    header("location:adminlogin.php");
}else{
    echo 'Error';
}
?>