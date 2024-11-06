<?php 
session_start();
// database connect
include 'dbconn.php';

$user = $_SESSION['user'];
if ($user) {
    $sel = "select * from admin where email = '$user'";
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
  <title>Admin Collage</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!-- google icons -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
  </style>
  <!-- font-awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- My CSS -->
  <link rel="stylesheet" href=".css">

</head>

<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Hello Admin! <?php echo $row['name']?></a>
    <div class="main-buttom me-3">
      <button class="btn btn-success">
      <i class="fa-solid fa-user"></i>
      </button>
      <button class="btn btn-success">
      <i class="fa-solid fa-key"></i>
      </button>
      <button id="nav_btn" type="button" class="btn btn-success  me-3" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <i class="fa-solid fa-right-to-bracket"></i>
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    
                    <div class="modal-body">
                      <p> You have been logged out. </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success" id="logout_btn">
                        <a href="adminlogout.php" style="color:white; font-weight:bold; text-decoration:none;">OK</a>
                      </button>
                    </div>

                  </div>
                </div>
              </div>
    </div>
  </div>
</nav>






<div class="container-fluid">
    <div class="row">


      <div id="users details" class="mt-5">
        <div>
          <h5 class="mb-3">Register Student / Students Details</h5>
        </div>

        <div class="box">
          <div class="card text-center">
            <div class="card-header">
              <form class="d-flex" role="search">
                <input class="form-control me-2" id="inp" type="search" placeholder="Search" aria-label="Search"
                  onkeyup="dataser()">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
            <div class="card-body justify-content-start">
              <div class="overflow-x-auto">
                <table class="table table-bordered border-primary table-striped " class="" class="tabledata">

                  <thead class="table-warning text-center">

                    <th scope="col">Sr.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Father Name</th>
                    <th scope="col">Mother Name</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Mobile no.</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Category</th>
                    <th scope="col">Enrollment No.</th>
                    <th scope="col">Semester/Year</th>
                    <th scope="col">Branch</th>
                    <th scope="col">State</th>
                    <th scope="col">City</th>
                    <th scope="col">Addresss</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Student Img.</th>
                    <th scope="col" colspan="2">Action</th>

                  </thead>

                  <tbody>

                    <?php

// session_start();

// database connect
include 'dbconn.php';

$sel = "select * from student";

$query = mysqli_query($conn, $sel);
// $data = mysqli_fetch_array($query,MYSQLI_NUM);
// $data = mysqli_fetch_array($query,MYSQLI_BOTH);
// $data = mysqli_fetch_array($query,MYSQLI_ASSOC);
$sr = 1;
while ($data = mysqli_fetch_array($query, MYSQLI_ASSOC)){
//   echo "<pre>";
//   print_r($data);
//   echo "</pr>";

?>
                    <tr>
                      <td>
                        <?php echo $sr++; ?>
                      </td>
                      <td>
                        <?php echo $data['name'] ?>
                      </td>
                      <td>
                        <?php echo $data['fname'] ?>
                      </td>
                      <td>
                        <?php echo $data['mname'] ?>
                      </td>
                      <td>
                        <?php echo $data['dob'] ?>
                      </td>
                      <td>
                        <?php echo $data['phone'] ?>
                      </td>
                      <td>
                        <?php echo $data['email'] ?>
                      </td>
                      <td>
                        <?php echo $data['password'] ?>
                      </td>
                      <td>
                        <?php echo $data['category'] ?>
                      </td>
                      <td>
                        <?php echo $data['enroll'] ?>
                      </td>
                      <td>
                        <?php echo $data['semyear'] ?>
                      </td>
                      <td>
                        <?php echo $data['branch'] ?>
                      </td>
                      <td>
                        <?php echo $data['state'] ?>
                      </td>
                      <td>
                        <?php echo $data['city'] ?>
                      </td>
                      <td>
                        <?php echo $data['address'] ?>
                      </td>
                      <td>
                        <?php echo $data['date'] ?>
                      </td>
                      <td>
                        <?php echo $data['time'] ?>
                      </td>
                      <td>
                        <img src="studentpic/<?php echo $data['img']; ?>" alt="" width="100" height="80px">
                      </td>

                      <td>
                        <a class="btn btn-primary" href=""><i class="fa-solid fa-trash fa-shake"></i></a>
                        <!-- delete.php?dlId=<?php echo $data['id']; ?> -->
                      </td>
                      <td>
                        <a class="btn btn-primary" href=""> <i class="fa-solid fa-pen-to-square"></i></a>
                        <!-- updateuser.php?edId=<?php echo $data['id']; ?> -->
                      </td>
                    </tr>

                    <?php
}
?>

                  </tbody>
                </table>
              </div>


            </div>



            <div class="card-footer text-body-secondary">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>




  <!-- Search -->
<script>
  function dataser(){
    let searchVal = document.getElementById("inp").value.toUpperCase();
    let table = document.getElementsByTagName("table");
    let tr = document.getElementsByTagName("tr");

    for(let i=0; i<tr.length; i++){
        
        let td = tr[i].getElementsByTagName("td")[1];
        if(td){
            let text = td.innerText;
            if(text.toUpperCase().indexOf(searchVal) >-1){
                tr[i].style.display=""
            }else{
                tr[i].style.display="none"
            }
        }
    }
    console.log(searchVal);
}

</script>


<button class="btn btn-warning mt-4 ms-4">
  <a href="sconectlist.php" style="color:black; font-weight:bold; text-decoration:none;">Contect List</a>
</button>
  
</body>

</html>