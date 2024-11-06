<?php 
session_start();
// database connect
include 'dbconn.php';

$user = $_SESSION['user'];
if ($user) {
    $sel = "select * from student where email = '$user'";
    $query = mysqli_query($conn, $sel);
    $row = mysqli_fetch_assoc($query);
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Id Card-
    <?php echo $row['name']; ?>
  </title>
  <!-- boxicoin icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!-- google icons -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- font-awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- My CSS -->
  <link rel="stylesheet" href="">
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .cardbtn{
      margin-left: 100px;
    }
    .head_2{
      margin-top: -12px;
      font-size: 15px;
    }
    .card{
      /* background-image: url(pic/13-175x168.png); */
    }

  </style>

</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6 py-5">

        <div class="head mb-4">
          <h5 class="text-center fw-bold"> <del hidden> Downloade</del> Your Identity Card!</h5>
        </div>

       
        <div class="card" style="width: 550px; margin-left: 70px;">
<!-- <div class="card-body"> -->
            <!-- card-body -->

 <!-- <form action="pdf.php" method="POST"> -->
 
 <table class="table">
  <tr class="table-light">
    <td class="text-center"><img src="pic/13-175x168.png" alt="" height="60px" width="80px"></td>
    <td colspan="3"><p class="text-center fw-bold fs-5">महामाया पालीटेक्निक आँफ इनफार्मेशन टेक्नोलोजी </p> 
  <span><p class="text-center head_2">लेगडी गूलर, जनपद -श्रावस्ती </p></span>
  </td>
  </tr>
</table>

<!-- <table  class="table table-bordered"> -->
   <tbody>

    <table class="table table-bordered" style="margin-top: -35px;"> 
    <tr>
      <td> <span class="fw-bold"> Id number : </span><span class="text-center ms-1"> <?php echo $row['id']?></span></td>
      <td colspan="3" class="text-center"><span class="fw-bold"> Session : </span><span class="text-center ms-1"> 2024-2025 </span> </td>
    </tr>
    </table>
  </tbody>

    <table class="table table-bordered" style="margin-top: -20px;">
    <tr>
      <td >
      <span class="fw-bold"> Student Name : </span><span class="text-center ms-1"> <?php echo $row['name']?> </span>
      <br> <span class="fw-bold"> Father Name : </span><span class="text-center ms-1"><?php echo $row['fname']?> </span>
      <br> <span class="fw-bold"> Mother Name : </span><span class="text-center ms-1"><?php echo $row['mname']?></span>
      <br><span class="fw-bold">Date Of Birth : </span><span class="text-center ms-1"><?php echo $row['dob']?>
    
    </td>
      <td  class="text-center"><img src="studentpic/<?php echo $row['img']; ?>" alt="profile pic" height="100px" width="150px"></td>
      
    </tr>
    </table>

    <table class="table table-bordered" style="margin-top: -25px;">
    <tr>
      <td> <span class="fw-bold"> Mobile No. : </span><span class="text-center ms-1">  <?php echo $row['phone']?></span> </td>
      <td> <span class="fw-bold"> Email :  </span><span class="text-center ms-1"><?php echo $row['email']?> </span> </td>
    </tr>
    </table>


<table class="table table-bordered" style="margin-top: -25px;">
    <tr>
      <td><span class="fw-bold"> Branch :  </span><span class="text-center ms-1"><?php echo $row['branch']?></span> </td>
      <td ><span class="fw-bold">   Year : </span><span class="text-center ms-1"><?php echo $row['semyear']?></span> </td>
    </tr>
    </table>


    <table class="table table-bordered" style="margin-top: -25px;">
    <tr>
      <td><span class="fw-bold">  District : </span><span class="text-center ms-1"><?php echo $row['city']?> </span></td>
      <td ><span class="fw-bold">  Address : </span> <span class="text-center ms-1"><?php echo $row['address']?> </span> </td>
    </tr>
    </table>

    <table>
    <tr>

      <td>
        <img src="pic/" alt="">
        <p class="text-end fw-bold me-3"> Principal signature</p></td>
    </tr>
    </table>

  
        <!-- </form> -->
  <!-- </div> -->
</div>

        <div class="card-footer">
        <div class="cardbtn mt-3">
        <button type="back" class="btn btn-danger w-25"> <a href="Dashboard.php" style="text-decoration:none; color:white;font-weight:bold;"><i class="fa-solid fa-arrow-left fa-beat"></i> Back</a></button>

        <button type="submit" class="btn btn-success w-50" name="submit" disabled> <a href="pdf.php" style="text-decoration:none; color:white;font-weight:bold;"><i class="fa-solid fa-download fa-bounce"></i> Downloade PDF</a></button>
        </div>
        </div>

       

        </div>
      <div class="col-lg-3"></div>
    </div>
  </div>





</body>

</html>