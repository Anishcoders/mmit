<?php

$name = $_POST['name'];
// echo '-' . $name;
$fname = $_POST['fname'];
// echo '-' . $fname;
$mname = $_POST['mname'];
// echo '-' . $mname;
$dob = $_POST['dob'];
// echo '-' . $dob;
$phone = $_POST['phoneno'];
// echo '-' . $phone;
$email = $_POST['email'];
// echo '-' . $email;
$password = $_POST['pwd'];
// echo '-' . $password;
$category = $_POST['category'];
// echo '-' . $category;
$enrollment = $_POST['enrollno'];
// echo '-' . $enrollment;
$year = $_POST['year'];
// echo '-' . $year;
$branch = $_POST['branch'];
// echo '-' . $branch;
$fileName = $_FILES['file']['name'];
// echo '-' . $fileName;
$fileTmpName = $_FILES['file']['tmp_name'];
// echo '-' . $fileTmpName;
$state = $_POST['state'];
// echo '-' . $state;
$city = $_POST['city'];
// echo '-' . $city;
$address = $_POST['msg'];
// echo '-' . $address;


// database connect
include 'dbconn.php';

$path = 'studentpic/';

if($conn){
    // echo 'success';
}else{
    echo 'not Connect in Database';
}

//sql commend

$ins = "insert into student (name, fname, mname, dob, phone, email, password, category, enroll, semyear, branch, img, state, city, address) values  ('$name', '$fname', '$mname', '$dob', '$phone', '$email', '$password', '$category', '$enrollment', '$year', '$branch', '$fileName', '$state', '$city', '$address')";


if(mysqli_query($conn, $ins))
    {
    //   $_SESSION['status'] = "data Save Successfully";
    //   $_SESSION['status_code'] = "success";
    move_uploaded_file($fileTmpName, $path.$fileName);
       header("location:login.php");
        // echo 'data save';
    }
    else{
        // $_SESSION['status'] = "data not Save.";
        // $_SESSION['status_code'] = "error";
        header("location: signup.php");
                // echo 'data not save';
    }

?>
