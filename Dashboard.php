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
  <!-- boxicoin icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Home</title>
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
  <link rel="stylesheet" href="dashboard.css">
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
<!-- nav-bar start -->
  <div class="head">
    <div class="row">
      <div class="col-lg-12">
<nav class="navbar  bg-dark">
      <div class="container-fluid">

        <button class="navbar bar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" >
         <i class="fa-solid fa-bars" style="color: white;"></i>
        </button>

             <!-- <a class="navbar-brand mt-2" href="#"> 
              <p id="user_name">Hello! <span> <?php echo $row['name'];  ?></span></p>
              </a> -->

    <form class="d-flex">

                <!-- profile start -->
              
            <button type="button" class="btn btn-light ms-auto" data-bs-toggle="modal"
              data-bs-target="#staticBackdrop" id="nav_btn1" style="border: none; background: none;">
              <a href="profile.php" style="text-decoration: none; color:white;"> <i class="fa-solid fa-circle-user"></i></a>
             
            </button>
            
            <!-- profile end -->

            <!-- change password -->
           
            <button id="nav_btn2" type="button" class="btn btn-light" data-bs-toggle="modal"
                data-bs-target="#exampleModa2" style="border: none; background: none;  ">
                <a href="change.php" style="text-decoration: none; color:white;"><i class="fa-solid fa-key" ></i></a>
                
              </button>

            <!-- change password end -->
           
            <!-- logout start -->
            <div class="logout">
              <button id="nav_btn2" type="button" class="btn btn-light  me-3" data-bs-toggle="modal"
                data-bs-target="#exampleModal" style="border: none; background: none;">
                <i class="fa-solid fa-right-to-bracket" style="color:white;"></i>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Logout</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div> -->
                    <div class="modal-body">
                      <p> You have been logged out. </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success" id="logout_btn">
                        <a href="logout.php">OK</a>
                      </button>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <!-- logout end -->
           

           
</div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header py-4">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
        <img src="studentpic/<?php echo $row['img']; ?>" alt="profile pic" id="profile_img2">
                        <span class="ms-2"> <?php echo $row['name'];  ?></span></h5>
                       

        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <!-- <hr> -->

      <div class="offcanvas-body">

        <ul class="navbar-nav p-2">

          <li class="nav-item">
            <a class="nav-link active" href="Dashboard.php"><i class="fa-solid fa-border-all"></i> Dashboard</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="id_card.php"><i class="fa-solid fa-id-card-clip fa-flip"></i> Your Id Card</a> 
          </li>
          <!-- <li class="nav-item">
          <a class="nav-link" href="profile_edit.php?edId=<?php echo $row['id']; ?>"><i class="fa-solid fa-pen-to-square"></i> Edit Profile</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="https://result.bteexam.com/even/main/rollno.aspx" target="_blanck"><i class="fa-solid fa-border-all"></i> My Result</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="setting.php"><i class="fa-solid fa-border-all"></i> Setting</a>
          </li>
          <li class="nav-item">
             <a class="nav-link theme-toggle-btn" onclick="toggleTheme()">
             <span> <i class='bx bx-moon moon'></i><i class='bx bx-sun sun'></i> Change Themes </span> </a>
          </li>
          
        </ul>

      </div>
    </div>

    </form> 
     </div>
</nav>
      </div>
    </div>
  </div>

<!-- nav-bar end -->
 
<!-- student information -->

<div class="head1">
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-11 ">
     <div class="mt-2 mb-2" id="top">  
       <span class="fw-bold"><?php echo $row['name'];  ?></span> /
       <span class=""><?php echo $row['enroll'];  ?></span> /
       <span class=" "><?php echo $row['branch'];  ?></span>
     </div>
    </div>
  </div>
</div>
</div>
<!-- student information end-->

<!-- student attendence -->

<div class="container">
  <div class="row">
    <div class="col-lg-12 mt-3 col-sm-4 col-12">

     <div class="container-fluid">  
       <div class="row">

        <div class="col-lg-4 col-sm-4 col-12">
          <div class="card" id="top-card">
            <div class="row px-3">
    <div class="col-md-4 col-4">
      <div class="item-icon">
      <img src="pic/back-to-school.png" class="img-fluid mt-2 ms-2 p-3" alt="..." style="height: 100px; border-radius: 50%; background: light;">
      </div>
    </div>
    <div class="col-md-8 col-8">
      <div class="card-body">
        <p class="card-title text-end text-body-secondary text-">Total Subject</p>
        <h5 class="item-number text-end">
          <span class="counter">0</span> 
        </h5>
        <p class="card-text text-end text-primary"><small class="text-body-secondary">
          <a href="" style="text-decoration:none; font-size: 14px;">View All</a>
        </small></p>
      </div>
    </div>
  </div>
           
          </div>
        </div>


        <div class="col-lg-4">
          <div class="card" id="top-card">
            <div class="row g-0 px-3">
    <div class="col-md-4 col-4">
    <div class="item-icon">
      <img src="pic/note.png" class="img-fluid mt-2 ms-2 p-3" alt="..." style="height: 100px; border-radius: 50%; background: light;">
      </div>
    </div>
    <div class="col-md-8 col-8">
      <div class="card-body">
        <p class="card-title text-end text-body-secondary"> Today's Attendance</p>
        <h5 class="item-number text-end">
          <span class="counter">0</span> 
        </h5>
        <p class="card-text text-end"><small class="text-body-secondary">
          <a href="" style="text-decoration:none; font-size: 14px;">View Your Attendence</a>
        </small></p>
      </div>
    </div>
  </div>
           
          </div>
        </div>


        <div class="col-lg-4">
          <div class="card" id="top-card">
            <div class="row g-0 px-3">
    <div class="col-md-4 col-4">
    <div class="item-icon">
      <img src="pic/book.png" class="img-fluid mt-2 ms-2 p-3" alt="..." style="height: 100px; border-radius: 50%; background: light;">
      </div>
    </div>
    <div class="col-md-8 col-8">
      <div class="card-body">
        <p class="card-title text-end text-body-secondary">Content Repository</p>
        <h5 class="item-number text-end">
          <span class="counter">0</span> 
        </h5>
        <p class=" text-end"><small class="text-body-secondary">
          <a href="" style="text-decoration:none; font-size: 14px;">View</a>
        </small></p>
      </div>
    </div>
  </div>
           
          </div>
        </div>


        
        
       </div>
     </div>
    </div>
  </div>
</div>

<!-- student attendence  end-->




            
 

  <!-- MY js -->
  <script>
    function toggleTheme() {
      document.body.classList.toggle('dark-theme')
    }
  </script>

</body>

</html>
