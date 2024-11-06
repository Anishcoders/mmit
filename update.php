<?php 
session_start();
$user = $_SESSION['user'];
// database connect
include 'dbconn.php';

$old_pwd = $_POST['oldpwd'];
// echo $old_pwd;
$n_pwd = $_POST['npwd'];
// echo '-' . $n_pwd;
$c_pwd = $_POST['cpwd'];
// echo '-' . $c_pwd;

$sel = "select * from student where email = '$user'";
$query = mysqli_query($conn, $sel);
$row = mysqli_fetch_assoc($query);

if($row['password'] == $old_pwd){

    if($n_pwd == $c_pwd){
        $up = "update student set password='$n_pwd' where email = '$user'";
        if(mysqli_query($conn, $up)){
            // session_destroy();
            header("location:login.php");
        }else{
            echo "password not update";
        }
       
    }else{
        echo "new & confirm password do not match";
    }
   
}
else{
    echo "password not  match";
}
