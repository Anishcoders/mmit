<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contect List</title>
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
    <div class="container-fluid">
    <div class="row">


      <div id="users details" class="mt-5">
        <div>
          <h5 class="mb-3 fw-bold">Student Contect List</h5>
        </div>

        <div class="box">
          <div class="card text-center">
            <div class="card-header">
              <form class="d-flex" role="search">
                <input class="form-control me-2" id="inp" type="search" placeholder="Search" aria-label="Search"
                  onkeyup="Contectser()">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
            <div class="card-body justify-content-start">
              <div class="overflow-x-auto">
                <table class="table table-bordered border-primary table-striped " class="" class="tabledata">

                  <thead class="table-warning text-center">

                    <th scope="col">Sr.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Message</th>
                    <th scope="col">Date and Time</th>
                    <th scope="col" colspan="2">Action</th>

                  </thead>

                  <tbody>

                    <?php

// session_start();

// database connect
include 'dbconn.php';

$sel = "select * from contect";

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
                        <?php echo $data['email'] ?>
                      </td>
                      <td>
                        <?php echo $data['phone'] ?>
                      </td>
                     
                      <td>
                        <?php echo $data['message'] ?>
                      </td>
                     
                      <td>
                        <?php echo $data['datetime'] ?>
                      </td>

                      <td>
                        <a class="btn btn-light fw-bold" href="" style="color: green;">Accept</a>
                        <!-- delete.php?dlId=<?php echo $data['id']; ?> -->
                      </td>
                      <td>
                        <a class="btn btn-light fw-bold" href="" style="color: red;">Decline</a>
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
  function Contectser(){
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
                tr[i].style.display="none";
            }
        }
    }
    console.log(searchVal);
}

</script>
</body>
</html>