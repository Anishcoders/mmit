<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login student</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- google icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- My CSS -->
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
        </style><style>
@import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
</style>
    <style>
        body{
            background-color: rgb(255, 244, 251);
        }
        #logo {
            
            height: 90px;
            width: 100px;
        }

        .colle {
            font-size: 28px;
            font-weight: bold;
            font-family: "Libre Baskerville", serif;
        }

        #collpic {
            border-radius: 10px;
            margin-top: 10px;
            width: 700px;
            height: 450px;
        }

        .card {
            
            width: 450px;
            border-radius: 30px;
            margin-left: 70px;
        }

        .image i {
            font-size: 70px;
        }
    </style>
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-1"></div>

            <div class="col-lg-10 col-12 mt-2 mb-5">

                <div class="image" style="margin-left: 75px;">
                    <img src="pic/2718_collegeLogo.jpg" alt="college logo" id="logo">
                    <span class="colle ms-2 mt-2"> Mahamaya Polytechnic Of Information Technology, Shravasti</span>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-6">
                        <img src="https://mmitshravasti.in/wp-content/uploads/2021/12/f48.jpg" alt="" id="collpic">
                    </div>

                    <div class="col-lg-6">

                        <form action="logincode.php" method="post">
                            <div class="card border border-success">
                                <div class="image text-center mt-5">
                                    <i class="fa-solid fa-circle-user"></i>
                                </div>
                                <p class=" text-center fw-bold fs-5 mt-2"><del>!   </del> Student Login<del> !       </del></p>
                                <div class="card-body p-4">

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa-solid fa-user"></i></span>
                                        <input type="email" name="email" class="form-control"
                                            placeholder=" Enter your email / Phone Number" required/>
                                    </div>

                                    <div class="input-group mb-1">
                                        <span class="input-group-text" id="basic-addon2"><i
                                                class="fa-solid fa-lock"></i></span>
                                        <input type="password" name="pwd" class="form-control"
                                            placeholder="Enter your password" required/>
                                    </div>

                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a href="#">Forget password</a>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-success col-lg-12 col-12 mt-4">Login </button>
                                    </div>

                                    <div class="icons text-center mt-5">
                                        <span class="fw-bold">New Registration?</span> <a href="signup.php"
                                            style="text-decoration: none; font-size: 18px; font-weight: bold;">Click
                                            here</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>

            <div class="col-lg-1"></div>
        </div>
    </div>

</body>

</html>