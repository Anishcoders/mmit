<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change password</title>
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
  <link rel="stylesheet" href="css/dashboard.css">
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="containe-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card py-3" style="margin-top:100px;">
            <div class="modal-header">
        <h1 class="modal-title fs-5 ms-3" id="staticBackdropLabel"> Change Your Password <i class="fa-solid fa-arrow-right fa-beat"></i></h1>
        </div>
        <div class="modal-body p-5">
                      <form action="update.php" method="post">

                        <div class="input-group mb-3">
                          <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                          <input type="text" name="oldpwd" class="form-control" placeholder="Enter your old password"
                            required />
                        </div>

                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                          <input type="text" name="npwd" class="form-control" placeholder="Enter your new password"
                            required />
                        </div>

                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                          <input type="text" name="cpwd" class="form-control" placeholder="Enter your conform password"
                            required />
                        </div>


                        <div class="modal-footer mt-5">
                          <!-- <button type="button" class="btn btn-secondary me-4"> 
                          <a href="Dashboard.php"> Back</a> </button> -->
                          <button type="submit" class="btn btn-primary"> Update Password </button>
                        </div>

           </form>
                   </div>
                   </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>