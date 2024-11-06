<?php
session_start();

$userId = $_POST['userId'];
// echo $userId;

$fname = $_POST['fname'];
// echo $fname;
$mname = $_POST['mname'];
// echo $mname;
$dob = $_POST['dob'];
// echo $dob;
$phone = $_POST['phone'];
// echo $phone;
$semyear = $_POST['semyear'];
// echo $semyear;
$address = $_POST['msg'];
// echo $address;

// database connect
include 'dbconn.php';


$sel = "select * from student where id='$userId'";
$query = mysqli_query($conn, $sel);
$row = mysqli_fetch_assoc($query);
// print_r($row);

$up = "update student set fname='$fname', mname='$mname', dob='$dob', phone='$phone', semyear='$semyear', address='$address' where id = '$userId'";
if (mysqli_query($conn, $up)){

    header("location:profile.php");
    // echo "Profile Update success";
}else{
    echo "file not update";
}

?>
