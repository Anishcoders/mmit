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
    <title>Setting</title>
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

<!-- Button trigger modal -->
<button type="button" class="btn btn-danger w-50 mt-5 ms-5" data-bs-toggle="modal" data-bs-target="#deleteacco">
  Delete Account
</button>

<!-- Modal -->
<div class="modal fade" id="deleteacco" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Account</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body">
        <div class="text-center" style="margin-left: 150px;">
          <div class="border "style="width: 90px; height: 90px; background:red; border-radius: 50%;">
          <i class="fa-solid fa-exclamation fa-beat mt-4" style="color: black; font-size:35px;"></i>
          </div>
        </div>
        <div class="confirm">
          <h5 class="secondery text-center mt-3">
            Are you sure your account has been delete.
          </h5>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success w-25">
        <a href="delete_acc.php?dlid=<?php echo $row['id']; ?>" style="color: white; text-decoration: none; ">OK</a>
        </button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
