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
  <title>Profile</title>
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
  <style>
    .head2 {
      background-color: #fff;
      /* height: 45px; */
    }

    #top1 {
      text-transform: uppercase;
      color: red;
      font-size: 16px;

    }

    .loader {
      background-color: #ffffff;
      background-image: url("https://urise.up.gov.in/assets_front/images/uriser-loader.gif");
      background-position: center center;
      background-repeat: no-repeat;
      height: 100%;
      left: 0px;
      position: fixed;
      top: 0px;
      width: 100%;
      z-index: 99999;
    }
  </style>
</head>

<body>
  <!-- Preloader Start Here -->
  <!-- <div class ="loader"></div> -->
  <!-- Preloader End Here -->
  <!-- nav-bar start -->
  <div class="head">
    <div class="row">
      <div class="col-lg-12">
        <nav class="navbar  bg-dark">
          <div class="container-fluid">

            <button class="navbar bar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
              aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
              <i class="fa-solid fa-bars" style="color: white;"></i>
            </button>

            <!-- <a class="navbar-brand mt-2" href="#"> 
              <p id="user_name">Hello! <span> <?php echo $row['name'];  ?></span></p>
              </a> -->

            <form class="d-flex">

              <!-- profile start -->

              <button type="button" class="btn btn-light ms-auto" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop" id="nav_btn1" style="border: none; background: none;">
                <a href="profile.php" style="text-decoration: none; color:white;"> <i
                    class="fa-solid fa-circle-user"></i></a>

              </button>

              <!-- profile end -->

              <!-- change password -->

              <button id="nav_btn2" type="button" class="btn btn-light" data-bs-toggle="modal"
                data-bs-target="#exampleModa2" style="border: none; background: none;  ">
                <a href="change.php" style="text-decoration: none; color:white;"><i class="fa-solid fa-key"></i></a>

              </button>

              <!-- change password end -->

              <!-- logout start -->
              <div class="logout">
                <button id="nav_btn2" type="button" class="btn btn-light  me-3" data-bs-toggle="modal"
                  data-bs-target="#logoutModal" style="border: none; background: none;">
                  <i class="fa-solid fa-right-to-bracket" style="color:white;"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel"
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

          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header py-4">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                <img src="studentpic/<?php echo $row['img']; ?>" alt="profile pic" id="profile_img2">
                <span>
                  <?php echo $row['name'];  ?>
                </span>
              </h5>


              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <hr>

            <div class="offcanvas-body">

              <ul class="navbar-nav justify-content-end flex-grow-1">

                <li class="nav-item">
                  <a class="nav-link active" href="#Dashboard"><i class="fa-solid fa-border-all"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="id_card.php"><i class="fa-solid fa-id-card-clip fa-flip"></i> Your Id
                    Card</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link active" href="profile_edit.php?edId=<?php echo $row['id']; ?>"><i
                      class="fa-solid fa-pen-to-square"></i> Edit Profile</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link active" href="https://result.bteexam.com/even/main/rollno.aspx"
                    target="_blanck"><i class="fa-solid fa-border-all"></i> My Result</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="setting.php"><i class="fa-solid fa-border-all"></i> Setting</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active theme-toggle-btn" onclick="toggleTheme()">
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

  <div class="head2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-11 ">
          <div class="mt-2 mb-3" id="top1">
            <span class="fw-bold me-5" id="profile1" style="color: black; font-size: 18px;"><i
                class="fa-regular fa-user" style="color: #000000;"></i> Profile : </span>
            <span class="fw-bold me-3 ms-3">
              <?php echo $row['name'];  ?>
            </span> |
            <span class="me-3 ms-1">
              <?php echo $row['email'];  ?>
            </span> |
            <span class="me-3 ms-1">
              <?php echo $row['phone'];  ?>
            </span> |
            <span class=" ms-1">
              <?php echo $row['branch'];  ?>
            </span> |
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- student information end-->

  <!-- student-data start-->
  <div class="container mt-3">
    <div class="row">
      <div class="col-lg-12 col-12 ">
        <div class="row">
          <div class="col-sm-3">
            <div class="card p-2">
              <div class="card-body profile">
                <div class="text-center">
                <form action="updatefile.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="userId" value="<?php echo $row['id'] ?>">


                  <img src="studentpic/<?php echo $row['img']; ?>" alt="profile pic"
                    style="width: 200px; height: 180px; border-radius: 50%;">
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="upload-btn-wrapper">

                      
                        <input type="file" class="form-control ms-1 mt-2" name="file"
                          id="student_profile_pic" required>
                      <button class="btn btn-success col-12 ms-1 mt-2" type="submit">Update profile picture</button>
                      </form>
                    </div>
                  </div>
                </div>
                <h4 class="mt-3 mb-3">
                  <?php echo $row['name']; ?>
                </h4>
                <h5>POLYTECHNIC DIPLOMA SECTOR</h5>
                <p>MAHAMAYA POLYTECHNIC OF INFORMATION TECHNOLOGY, SHRAVASTI</p>
              </div>

            </div>
          </div>
          
<div class="col-lg-9">
  <div class="card bg-success border-0">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Personal Information</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Educational Information</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Address Information</button>
    <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false" disabled>Disabled</button>
  </div>
</nav>
</div>
<div class="tab-content" id="nav-tabContent">

  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
    <div class="card border-0">
      <div class="container">
      <h5 class="fs-5 fw-bold mt-3 ms-2"><i class="fa fa-user profile-icon"></i> ABOUT </h5>
      <!-- edit button modal -->
      <h5 class="text-end" style="margin-top: -40px;">
        <button type="button" class="btn btn-warning w-25" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa fa-edit"></i> Edit
        </button>
      </h5>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog bg-dark">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel1">Update Profile</h1>
              <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">

            <form action="profile_editcode.php" method="post">
            <input type="hidden" name="userId" value="<?php echo $row['id']; ?>">

              <div class="row">
                <div class="col-lg-6">
                <label class="form-label">Father Name</label>
                <input type="name" name="fname" class="form-control" value="<?php echo $row['fname'];  ?>">
                </div>
                <div class="col-lg-6">
                <label class="form-label">Mother Name</label>
                <input type="name" name="mname" class="form-control" value="<?php echo $row['mname'];  ?>">
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                <label class="form-label">Date of Birth</label>
                <input type="date" name="dob" class="form-control" value="<?php echo $row['dob'];  ?>">
                </div>
                <div class="col-lg-6">
                <label class="form-label">Phone Number</label>
                <input type="name" name="phone" class="form-control" value="<?php echo $row['phone'];  ?>">
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                <label class="form-label">Semester/Year</label>
                <input type="text" name="semyear" class="form-control" value="<?php echo $row['semyear'];  ?>">
                </div>
                <div class="col-lg-6">
                <label class="form-label">Address</label>
                <input type="name" name="msg" class="form-control" value="<?php echo $row['address'];  ?>">
                </div>
              </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
  </form>

          </div>
        </div>
      </div>
<div class="table table-success table-striped">
  <div class="container">
    <div class="row mt-4">
      <div class="col-sm-6">
      <div class="row mgbt-xs-15">
              <label class="col-sm-5 form-label fw-bold">Father Name :</label>
              <div class="col-sm-7 controls">
                <?php echo $row['fname']?>
              </div>
            </div>
      </div>
      <div class="col-sm-6">
      <div class="row mgbt-xs-15">
              <label class="col-sm-5 form-label fw-bold">Mother Name :</label>
              <div class="col-sm-7 controls">
                <?php echo $row['mname']?>
              </div>
            </div>
      </div>
    </div>
    <div class="row mt-2">

          <div class="col-sm-6">
            <div class="row mgbt-xs-15">
              <label class="col-sm-5 form-label fw-bold">Date Of Birth :</label>
              <div class="col-sm-7 controls">
                <?php echo $row['dob']?>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="row mgbt-xs-15">
              <label class="col-sm-5 form-label fw-bold">Phone Number :</label>
              <div class="col-sm-7 controls">
                <?php echo $row['phone']?>
              </div>
            </div>
          </div>

        </div>
        <div class="row mt-2">

<div class="col-sm-6">
  <div class="row mgbt-xs-15">
    <label class="col-sm-5 form-label fw-bold">Email ID :</label>
    <div class="col-sm-7 controls">
      <?php echo $row['email']?>
    </div>
  </div>
</div>

<div class="col-sm-6">
  <div class="row mgbt-xs-15">
    <label class="col-sm-5 form-label fw-bold">Category :</label>
    <div class="col-sm-7 controls">
      <?php echo $row['category']?>
    </div>
  </div>
</div>

</div>

  </div>
</div>
      </div>
    </div>
  </div>

  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
    <div class="card border-0">
      <div class="container">
        <div class="table table-success table-striped">
<div class="container">
  <div class="row mt-4">
  <div class="col-sm-6">
            <div class="row mgbt-xs-15">
              <label class="col-sm-5 form-label fw-bold">Enrollment Number :</label>
              <div class="col-sm-7 controls">
                <?php echo $row['enroll']?>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="row mgbt-xs-15">
              <label class="col-sm-5 form-label fw-bold">Semester/Year :</label>
              <div class="col-sm-7 controls">
                <?php echo $row['semyear']?>
              </div>
            </div>
          </div>
  </div>
  <div class="row mt-2">

<div class="col-sm-6">
  <div class="row mgbt-xs-15">
    <label class="col-sm-5 form-label fw-bold">Organization :</label>
    <div class="col-sm-7 controls">
    Polytechnic Diploma Sectors
    </div>
  </div>
</div>

<div class="col-sm-6">
  <div class="row mgbt-xs-15">
    <label class="col-sm-5 form-label fw-bold">Institute :   </label>
    <div class="col-sm-7 controls">
    MAHAMAYA POLYTECHNIC OF INFORMATION TECHNOLOGY, SHRAVASTI

    </div>
  </div>
</div>

</div>
<div class="row mt-2">

          <div class="col-sm-6">
            <div class="row mgbt-xs-15">
              <label class="col-sm-5 form-label fw-bold">Trade name :</label>
              <div class="col-sm-7 controls">
                <?php echo $row['branch']?>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-15">
              <label class="col-sm-5 form-label fw-bold">Roll number :</label>
              <div class="col-sm-7 controls">
                <!-- <?php echo $row['']?> -->
              </div>
            </div>
          </div>

        </div>
</div>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">

<div class="card border-0">
  <div class="container">
  <div class="table table-success table-striped">
<div class="container">
      <div class="mt-4">
        <div class="row">

          <div class="col-sm-6">
            <div class="row mgbt-xs-15">
              <label class="col-sm-5 form-label fw-bold">State :</label>
              <div class="col-sm-7 controls">
                <?php echo $row['state']?>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="row mgbt-xs-15">
              <label class="col-sm-5 form-label fw-bold">City :</label>
              <div class="col-sm-7 controls">
                <?php echo $row['city']?>
              </div>
            </div>
          </div>

        </div>

        <div class="row mt-2">

          <div class="col-sm-6">
            <div class="row mgbt-xs-15">
              <label class="col-sm-5 form-label fw-bold">Address :</label>
              <div class="col-sm-7 controls">
              <?php echo $row['address']?>
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
  <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">...</div>
</div>

  </div>
  
  </div>
  </div>
  </div>
  </div>


  <!-- student-data end -->

  <!-- MY js -->
  <script>
    function toggleTheme() {
      document.body.classList.toggle('dark-theme')
    }

    //     window.addEventListener("load", () => {
    //     const loader = document.querySelector(".loader");

    //     loader.classList.add("loader--hidden");

    //     loader.addEventListener("transitionend", () => {
    //     document.body.removeChild(loader); 
    //   });
    //     });
  </script>


</body>

</html>