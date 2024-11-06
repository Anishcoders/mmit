<?php
// echo "ok";
$userId = $_REQUEST['dlid'];
// echo $userId;

// database connect
include 'dbconn.php';

$sel = "select * from student where id='$userId'";
$query = mysqli_query($conn, $sel);
$data = mysqli_fetch_assoc($query);
// print_r($data);

$file = $data['img'];

$filePath = "studentpic/" . $file;
// echo $filePath;

$del = "delete from student where id = '$userId'";

if(mysqli_query($conn, $del)){
    echo 'Data Delete';
    unlink($filePath);
    header("location:signup.php");
}else{
    echo 'Data Not Deleted';
}


?>