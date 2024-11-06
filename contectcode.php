<?php
$name = $_POST['name'];
// echo $name;
$email = $_POST['email'];
// echo $email;
$phone = $_POST['phone'];
// echo $phone;
$message = $_POST['msg'];
// echo $message;


//connect mysql
include 'dbconn.php';

if($conn){
  echo  'Connect Successfull';
}else{
    echo 'Not Connect Database';
}


//data insert
$ins = "insert into contect (name, email, phone, message) values('$name','$email', '$phone','$message')";

$result = mysqli_query($conn, $ins);

if($result){
    header("location:mmit.html");
    echo 'Data Save Successfull!';   
}else{
    echo 'Data Not Save !';
}
?>