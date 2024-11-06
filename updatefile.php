<?php
session_start();

$userId = $_POST['userId'];
// echo $userId;
$fileName = $_FILES['file']['name'];
// echo '-' . $fileName;
$fileTmpName = $_FILES['file']['tmp_name'];
// echo '-' . $fileTmpName;

// database connect
include 'dbconn.php';

$sel = "select * from student where id='$userId'";
$query = mysqli_query($conn, $sel);
$row = mysqli_fetch_assoc($query);
// print_r($row);

$oldFile = $row['img'];

$oldFilePath = "studentpic/" . $oldFile;
// echo $oldFilePath;

$path = 'studentpic/';

$up = "update student set img='$fileName' where id = '$userId'";
if (mysqli_query($conn, $up)){
    unlink($oldFilePath);
    move_uploaded_file($fileTmpName, $path . $fileName);
    header("location:profile.php");
}else{
    echo "file not update";
}

?>